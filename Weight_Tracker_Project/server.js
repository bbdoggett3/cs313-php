var express = require("express");
var app = express();

const { Pool } = require("pg");

const connectionString = process.env.DATABASE_URL || "postgres://weighttrackeruser:weightloss@localhost:5432/weighttracker"
const pool = new Pool({connectionString: connectionString}); 

app.set("port", (process.env.PORT || 5000));

app.get("/getPerson", getPerson) 

app.listen(app.get("port"), function() {
	console.log("Now listening for connections on port: ", app.get("port"));
});

function getPerson(req, res) {
	console.log("Getting person information.");

	 var id = req.query.id;
	 console.log("Retrieving person with id: ", id);

	 getPersonFromDb(id, function(error, result) {
	 	if (error || result == null || result.length != 1) {
	 		res.status(500).json({success:false, data: error});
	 	} else {
	 		res.json(result[0]);
	 	}

	 	console.log("Back from the getPersonFromDb function with result:", result);
	 	res.json(result);
	 });

}


function getPersonFromDb(id, callback) {
	console.log("getPersonFromDb called with id: ", id);

	var sql = "SELECT id, first, last, startWeight, goalWeight FROM personid WHERE id = $l::int,";
	var params = [id];

	pool.query(sql, params, function(err, result) {
		if (err) {
			console.log("An error with the DB happened");
			console.log(err);
			callback(err, null);
		}

		console.log("Found the DB results: " + JSON.stringify(result.rows));

		callback(null, result.rows);
	});
}
