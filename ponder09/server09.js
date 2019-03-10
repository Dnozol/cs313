//Ponder09 server.js
const express = require('express');
const app = express();
const port = 5000;

app.set("views", "views");
app.set("view engine", "ejs");

app.use(express.static("public"));

app.get("/confirm", function(request, response) {
	console.log("Confirmation Page...");

	const weight = request.query.weight;
	const type = request.query.type;

	const params = {
		weight: weight,
		type: type
	};

	response.render("confirm", params);
});

app.get('/', function(request, response) {
	response.send('Hello World');
});

app.listen(port, function() {
	console.log('listening on port 4000');
});