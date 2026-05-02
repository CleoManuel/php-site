<?php
include "header.php";

echo "<h1>Welcome to My Simple PHP Website</h1>";

echo "<p>This is the home page. No database is used in this project.</p>";

echo "<p>Today is " . date("l, F d, Y") . ".</p>";

echo "<ul>
        <li>Pure PHP with echo only</li>
        <li>No variables stored</li>
        <li>No database connection</li>
      </ul>";

echo "</body></html>";
?>