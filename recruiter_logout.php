<?php
session_start();
unset($_SESSION['recruiter_id']);
include './Register/gconfig.php';
unset($_SESSION['recruiter_id']);
$gClient->revokeToken();
?>
<script>
    location.replace("./Register/recruiterLogin.php");
</script>
<?php
exit();
