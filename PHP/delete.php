<?php
require_once("bootst.php") ;
require_once("db_connect.php");

$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $sql = "DELETE FROM biglibrary WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/fa383714fa.js" crossorigin="anonymous"></script>
    <style>
i {
  font-size:15em;
}


</style>

</head>

<body>
    <div class="text-center alert alert-danger">
    <h3>Are you sure you want to delete this item from  your DB</h3>
    <i class="fa-solid fa-triangle-exclamation"></i>
    <i class="fa-solid fa-exclamation"></i>
    <i class="fa-solid fa-exclamation"></i>
    <i class="fa-solid fa-exclamation"></i>
    
    <form method="POST">
        <button type="submit" class="btn btn-danger" name="submit" >delete</button>
        <a href="index.php"class="btn btn-success">back home</a>

    </form>
    </div>
</body>

</html>