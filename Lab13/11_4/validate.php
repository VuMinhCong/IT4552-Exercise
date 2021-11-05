<html>
    <head>
        <title>Login</title>
    </head>
    <body>
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
            $name = $_POST['name'];
            $pass = $_POST['pass'];

            $SQLcmd = "Select * from $table_name where UserName='$name' and Pass='$pass';";

            mysqli_select_db($connect,$mydb);
            $query = mysqli_query($connect,$SQLcmd);
            if ($query) {
                $result = mysqli_fetch_array($query);
                if(is_null($result)){
                    print '<font size="5" color="red" >Error</font>';
                }

                else{

                    print '<font size="5" color="blue" >Welcome</font>';

                }
            } else {

                die("Failed SQLcmd=$SQLcmd");
            }

            mysqli_close($connect);
        }
        ?>
    </body>
</html>

