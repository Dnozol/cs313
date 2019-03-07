const express = require("express");
const app = express();

const port = process.env.PORT || 5000; // set it to the port number in the environment unless it is undefined, then use 5000

app.use(express.static("public"));

app.listen(port, function() {
	console.log(`Listening on port: ${port}`);
});