<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            text-align: left;
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
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $STUDENTS = [
                [
                    'NAME' => 'Alice',
                    'PROGRAM' => 'BIP',
                    'Age' => 21
                ],
                [
                    'NAME' => 'Bob',
                    'PROGRAM' => 'BIS',
                    'Age' => 20
                ],
                [
                    'NAME' => 'Raju',
                    'PROGRAM' => 'BIT',
                    'Age' => 22
                ]
            ];

            foreach ($STUDENTS as $student) {
                echo "<tr>";
                echo "<td>" . $student['NAME'] . "</td>";
                echo "<td>" . $student['PROGRAM'] . "</td>";
                echo "<td>" . $student['Age'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
