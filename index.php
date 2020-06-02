<?php
session_start();
if (isset($_SESSION['email'])) {
include_once('./config/database.php');
$sql = mysqli_connect("$sql_details[host]","$sql_details[user]","$sql_details[pass]","$sql_details[db]");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome <?php echo $_SESSION['firstname'];?></title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
<div id="loader">
        <div id="status">&nbsp;</div>
</div>


<div class="contaner-profile">
<?php
$email = $_SESSION['email'];
$query = "SELECT * FROM `tb_user` WHERE `email` = '$email'";
$result = mysqli_query($sql,$query);
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
?>
<h2 style="text-transform: capitalize;" class="login-main-heading">Wellcome back <?php echo $row['1']." ".$row['2'];?></h2>
<div class="profile-picture">
<img src="./img/profile/<?php echo $row['6'];?>" alt="" srcset="">
<h2 style="text-transform: capitalize;"><?php echo $row['1']." ".$row['2'];?></h2>
</div>

<div class="profile-detail">

<div class="spacing">
<label for="firstname">First Name :</label> <b><?php echo $row['1'];?></b>
</div></div>

<div class="spacing">
<label for="lastname">Last Name :</label> <b><?php echo $row['2'];?></b>
</div>

<div class="spacing">
<label for="lastname">Email :</label> <b><?php echo $row['3'];?></b>
</div>

<div class="spacing">
<label for="lastname">Phone :</label> <b><?php echo $row['4'];?></b>
</div>

<div class="spacing">
<a href="./modal/logout.php?logout"><input type="button" class="btn" value="Log out"></a>
</div>



<?php
}}
?>
</div>
<script src="./js/app.js"></script>
</body>
</html>
<?php
}
else{
    ?>
<script>
window.location.assign('./login');
</script>
    <?php
}
?>