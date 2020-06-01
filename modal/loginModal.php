<?php
include_once('../config/database.php');
$sql = mysqli_connect("$sql_details[host]","$sql_details[user]","$sql_details[pass]","$sql_details[db]");
session_start();

if (isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
        $pass = md5($pass);
        $query = "SELECT * FROM  `tb_user` WHERE `email`='$email' and `password`='$pass'";
        $result = mysqli_query($sql,$query);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_array($result)) {
                $email = $row['3'];
                $_SESSION['email'] = $email;
                $firstName = $row['1'];
                $_SESSION['firstname']= $firstName;
                if ($_SESSION['email']) {
                    ?>
                    <script>
                    window.location.assign('../index.php');
                    </script>
                    <?php
                }
            }
        }
        else{
            ?>
            <script>
            window.location.assign('../login.php?field');
            </script>
            <?php   

        }
    
}
else{
    ?>
    <script>
    window.location.assign('../login.php?field');
    </script>
    <?php
}
?>