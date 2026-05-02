<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>My Simple PHP Website</title>";

echo "<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* light blue background */
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #ff9800; /* orange highlight */
            color: black;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p, ul {
            margin: 20px;
            font-size: 18px;
        }
      </style>";

echo "</head>";
echo "<body>";

echo "<nav>
        <a href='home.php'>Home</a>
        <a href='about.php'>About</a>
        <a href='contact.php'>Contact</a>
      </nav>";
?>