const express = require("express")
const mysql = require("mysql")
const app = express();
// bagian koneksi database
const conn = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'sipti_app'
});
//inisial database untuk terkoneksi atau tidaknya
conn.connect((err)=> {
    if (err) throw err
    console.log("database terkoneksi")
    app.get("/",  (req, res)=> {
        res.send("ok open")
    })
})
app.listen(800, ()=> {
    console.log("server ready")
});
export default { conn }