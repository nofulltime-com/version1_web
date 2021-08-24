<?php
session_start();
include './Register/gconfig2.php';
unset($_SESSION['id']);
$gClient->revokeToken();
//Destroy entire session data.
session_destroy();
?>
<script>
    location.replace("./Register/studentLogin.php");
</script>
<?php
exit();
