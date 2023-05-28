const express = require('express');
const mysql = require('mysql');

// Create MySQL connection pool
const pool = mysql.createPool({
  connectionLimit: 10, // Adjust the limit as per your requirements
  host: '65.109.122.227',
  user: 'kdtoyikw_example',
  password: 'close777@A',
  database: 'kdtoyikw_example'
});

const app = express();

// Define a route to fetch and print data from MySQL
app.get('/data', (req, res) => {
  const query = 'SELECT * FROM user';

  pool.getConnection((err, connection) => {
    if (err) {
      console.error('Error getting MySQL connection from pool:', err);
      res.status(500).send('Error fetching data from MySQL');
      return;
    }

    connection.query(query, (err, results) => {
      connection.release(); // Release the connection back to the pool

      if (err) {
        console.error('Error executing MySQL query:', err);
        res.status(500).send('Error fetching data from MySQL');
        return;
      }

      // Print the data
      console.log(results);

      // Send the data as JSON response
      res.json(results);
    });
  });
});

// Start the server
const port = 3000;
app.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});
