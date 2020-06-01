<?php
session_start();
if (isset($_SESSION['email'])) {
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
    <h1>wellcome</h1>
</body>
</html>
<?php
}
else{
    ?>
<script>
window.location.assign('./login.php');
</script>
    <?php
}
?>