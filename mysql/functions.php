<?php include "db.php"; ?>

<?php


function showAlldata()
{
    global $connection;
    $querry = "SELECT * FROM users";
    $result = mysqli_query($connection, $querry);

    if (!$result) {
        die('quary faild' . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo "<option value='$id'>$id</option>";
    }
}
