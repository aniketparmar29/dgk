const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');

// ...

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Create MySQL connection pool
const pool = mysql.createPool({
  connectionLimit: 10, // Adjust the limit as per your requirements
  host: '65.109.122.227',
  user: 'kdtoyikw_example',
  password: 'close777@A',
  database: 'kdtoyikw_example'
});

app.post('/signup', (req, res) => {
  const { em_mo, username, password } = req.body;
  const defaultRole = 'user'; // Set the default role here

  // Check if the email or mobile already exists in the database
  pool.query(
    'SELECT * FROM user WHERE em_mo = ?',
    [em_mo],
    (error, results) => {
      if (error) {
        console.error(error);
        return res.status(500).json({ error: 'Internal server error' });
      }

      if (results.length > 0) {
        return res.status(409).json({ error: 'Email or mobile already exists' });
      }

      // Hash the password
      bcrypt.hash(password, 10, (hashError, hashedPassword) => {
        if (hashError) {
          console.error(hashError);
          return res.status(500).json({ error: 'Internal server error' });
        }

        // Save the user to the database with the default role
        pool.query(
          'INSERT INTO user (em_mo, username, password, role) VALUES (?, ?, ?, ?)',
          [em_mo, username, hashedPassword, defaultRole],
          (insertError, insertResults) => {
            if (insertError) {
              console.error(insertError);
              return res.status(500).json({ error: 'Internal server error' });
            }

            // Generate JWT token
            const token = jwt.sign({ userId: insertResults.insertId }, 'your_secret_key');

            // Set the token as a cookie
            res.cookie('token', token, { httpOnly: true });

            return res.status(201).json({ token });
          }
        );
      });
    }
  );
});

// Start the server
const port = 3000;
app.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});
