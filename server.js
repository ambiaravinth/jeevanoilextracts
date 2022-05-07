var module = require('./connection');
var url = require('url');
var querystring = require('querystring');
var http = require('http');

http.createServer(function (request, response) {
    var data1 = '';
    if (request.url === '/favicon.ico') {   
        response.writeHead(200, { 'Content-Type': 'image/x-icon' });
        response.end();
    }
    else {
        request.on('data', function (chunk) {
            data1 += chunk;
            console.log(data1);
        });

        request.on('end', function () {
            //value from html forms
            var username = querystring.parse(data1)["username"];
            console.log(username);
            var email = querystring.parse(data1)["useremail"];
            console.log(email);
            var password = querystring.parse(data1)["userpassword"];
            console.log(password);

            //request types
            if (request.url === '/login') {
                module.userlogin(username, password, response);
            }
            else if (request.url === '/save') {
                module.userregister(username, password, email, response);
            }
            else {
                console.log("Invalid url ");
            }
        });
    }
}).listen(3001);
console.log("Server started.......");