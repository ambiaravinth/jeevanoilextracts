//get mysql driver
const mysql = require('mysql2');

//connect to the database
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'jeevan'
});

//insert into a database
exports.userregister = function(username, password, email, response){
  connection.query('INSERT INTO users VALUES(?,?,?,?) ', ["",username,email,password], (err, res) => {
    if(err) throw err;
    console.log(res);
  });
} 

//get data from the database
exports.userlogin = function(username, password, response){
  connection.query('SELECT * FROM users where username=? and password=?',[username,password], (err,rows) => {
    if(err) throw err;
    console.log(rows);
  });
}



