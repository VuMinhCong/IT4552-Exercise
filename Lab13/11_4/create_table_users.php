<?php
$server = 'localhost:3308';

$user = 'root';

$pass = '123';

$mydb = 'lab11';

$table_name = 'Users';

$connect = mysqli_connect($server, $user, $pass);

if (!$connect) {

    die("Cannot connect to $server using $user");
} else {

    $SQLcmd = "CREATE TABLE IF NOT EXISTS $table_name(

            UserName varchar(50),"
            . "Pass varchar(30) NOT NULL,"
            . "DisplayName varchar(100) CHARACTER SET UTF8 NOT NULL,"
            . "Email varchar(50) NOT NULL,"
            . "PhoneNumber varchar(10));";

    mysqli_select_db($connect,$mydb);
    if (mysqli_query($connect,$SQLcmd)) {

        print '<font size="4" color="blue" >Created Table';

        print "<i>$table_name</i> in database<i>$mydb</i><br></font>";

        print "<br>SQLcmd=$SQLcmd";
    } else {

        die("Table Create Creation Failed SQLcmd=$SQLcmd");
    }

    mysqli_close($connect);
}
?>
