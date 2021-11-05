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

    $SQLcmd = "INSERT INTO $table_name(UserName,Pass,DisplayName,Email,PhoneNumber)
            VALUES  ('trangntt','12345','Nguyễn Trang','trangntt@gmail.com','0988393044'),
                    ('duongnhn','54321','Nam Dương','duongnhn@gmail.com','0983949494');";

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
