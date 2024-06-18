const express =require("express");
const database=require("mysql")
const excel=require("xlsx");
const app =express();
const port=3000;
app.use(express.json());
app.use(
    express.urlencoded({
        extended:true,
    })
);
const db= database.createConnection({
    host:"localhost",
    user:"root",
    password:'',
    database:"bravos"
})
let data=excel.readFile('./Sombreros.xlsx');
let worksheet =data.Sheets[data.SheetNames[1]];
let range=excel.utils.decode_range(worksheet["!ref"])
for (let row = range.s.r + 1; row <= range.e.r; row++) {
    let datacol = [];
    for (let col = range.s.c; col <= range.e.c; col++) {
        let cell = worksheet[excel.utils.encode_cell({ r: row, c: col })];
        datacol.push(cell ? cell.v : -1);
    }
    console.log(datacol);
    let sql = "INSERT INTO `tejidos` (`Tipo de sombrero`, `Color`, `Nombre`, `Medidas`, `Calidad`, `Precio`, `Unidad`,`link`) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
 // let sql = "INSERT INTO `botín` (`Material`, `Forma`, `Color`,`Unidad`,`link`) VALUES (?, ?, ?, ?, ?)";
  //  let sql ="INSERT INTO `texana` (`Tipo de sombrero`, `Color`, `Tamaño`, `Calidad`, `Precio`, `Unidad`) VALUES (?, ?, ?, ?, ?, ?)"
  db.query(sql, datacol, (err, results, fields) => {
        if (err) {
            return console.error(err.message);
        }
        console.log("User ID:" + results.insertId);
    });
}
db.end();
//FlipFlop32&