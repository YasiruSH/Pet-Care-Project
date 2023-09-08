<?php
include('database/connection.php');

// Sanitize input
$id = mysqli_real_escape_string($con, $_POST['update']);
$pqty = mysqli_real_escape_string($con, $_POST['quantity']);
$pprice = mysqli_real_escape_string($con, $_POST['price']);

$query = "UPDATE shop SET quantity='$pqty', price='$pprice' WHERE pid='$id'";

if (mysqli_query($con, $query)) {
    mysqli_close($con);
    echo '<script>alert("Update successful!");';
    echo 'window.location.href = "shop.php";</script>';
} else {
    mysqli_close($con);
    echo '<script>alert("Update failed.");';
    echo 'window.location.href = "shop.php";</script>';
}
?>
