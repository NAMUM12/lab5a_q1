<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Define the multiplication function
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'No' => $i,
                'Multiplier' => $multiplier,
                'Answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Call the function with multiplier 2
    $multiplier = 2;
    $tableData = multiplication($multiplier);
    ?>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the results and generate table rows
            foreach ($tableData as $row) {
                echo "<tr>";
                echo "<td>" . $row['No'] . "</td>";
                echo "<td>" . $row['Multiplier'] . "</td>";
                echo "<td>" . $row['Answer'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
