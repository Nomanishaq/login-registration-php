<?php
if (isset($_REQUEST['logout'])) {
    session_start();
    session_unset();
    session_destroy();
?>
<script>
window.location.assign('../login');
</script>
<?php
}
?>