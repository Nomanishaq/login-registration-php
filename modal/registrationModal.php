<?php
include_once('../config/database.php');
$sql = mysqli_connect("$sql_details[host]","$sql_details[user]","$sql_details[pass]","$sql_details[db]");
if (isset($_REQUEST['register'])) {
    $firstName = $_REQUEST['firstname'];
    $lastName = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];
    $password = md5($password);
    $img_name = $_FILES['img']['name'];
    $img_temp_name = $_FILES['img']['tmp_name'];
    $img_size = $_FILES['img']['size'];
    $img_type = $_FILES['img']['type'];
    $target_dir = '.././img/profile/';
    $img_name = rand().$img_name;
    $target_dir = $target_dir.$img_name;
    
    if ($img_type == 'image/gif'|| $img_type == 'image/jpeg' || $img_type == 'image/png' || $img_type == 'image/jpg') {
        move_uploaded_file($_FILES['img']['tmp_name'],$target_dir);
        $query = "INSERT INTO `tb_user`(`first-name`, `last-name`, `email`, `phone`, `password`, `img-name`, `img-path`) VALUES ('$firstName','$lastName','$email','$phone','$password','$img_name','$target_dir')";
    mysqli_query($sql,$query);
    
    ?>
<script>
window.location.assign('../login');
</script>
    <?php
    }
    else{
    ?>
    <script>
    window.location.assign('../registration?field');
    </script>
        <?php
    }
}
else{
    ?>
<script>
window.location.assign('../login');
</script>
    <?php
}
?>