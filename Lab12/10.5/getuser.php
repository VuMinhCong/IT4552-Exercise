<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;

        }

        table,
        td,
        th {
            border: 2px solid #a2a832;
            ;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #a2a832;
        }
        
        td{
            background-color: #e3e3e3;
        }
    </style>
</head>

<body>

    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost:3306', 'root', '', 'lab10_webprog');
    if (!$con) {
        echo ("Error description: ");
    }


    $sql = "SELECT * FROM people WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {

        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "<td>" . $row['Job'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>