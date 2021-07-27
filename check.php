<?php
session_start();
include './connect.php';
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<body>
    <?php
    $id = $_SESSION['id'];

    $query = "SELECT * FROM `seeker_details` WHERE id='$id'";
    $res = $conn->query($query);
    if ($res->num_rows > 0) {
    ?>
        <script>
            location.replace("./profile/index.php");
        </script>
    <?php } else {
    ?>
        <script>
            location.replace("./seeker_preferences.php");
        </script>
    <?php } ?>


    ?>
</body>

</html>