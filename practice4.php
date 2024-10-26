<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Multiplication Table</title>
    <style>
        /* Add some basic styling for the table */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input number from the form
        $number = intval($_POST["number"]);
        
        echo "<h2>Multiplication Table for $number</h2>";
        echo "<table>";
        
        // Create table headers
        echo "<tr><th></th>";
        for ($col = 1; $col <= $number; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";
        
        // Generate the table rows
        for ($row = 1; $row <= $number; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= $number; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>
</body>
</html>
