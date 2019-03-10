//Ponder09 server.js
const express = require('express');
const app = express();
const port = process.env.PORT || 5000;

app.set("views", "views");
app.set("view engine", "ejs");

app.use(express.static("public"));

app.get("/confirm", function(request, response) {
	console.log("Playing game...");

	const weight = request.query.weight;
	const type = request.query.type;

	const params = {
		weight: weight,
		type: type
	};

	response.render("confirm", param);
});

app.get('/', function(request, response) {
	response.send('Hello World');
});

app.listen(port, function() {
	console.log('listening on port 4000');
});