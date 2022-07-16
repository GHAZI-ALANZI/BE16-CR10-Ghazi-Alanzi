<?php
require_once "db_connect.php";
require_once("bootst.php") ;

$id = $_GET["id"];
$sql = "SELECT * FROM biglibrary WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["update"])) {
    $id=$_POST['id'];
    $title=$_POST['title'];
    $image=$_POST['image'];
    $code=$_POST['code'];
    $des=$_POST['description'];
    $type=$_POST['type'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $puplish=$_POST['publisher'];
    $address=$_POST['address'];
    $date=$_POST['date'];


    $sql = "UPDATE `biglibrary` SET `id`='$id',`title`='$title',`image`='$image',`ISBN_code`='$code',`short_description`='$des',`type`='$type',`author_first_name`='$fname',`author_last_name`='$lname',`publisher_name`='$puplish',`publisher_address`='$address',`publish_date`=' $date' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "User has been updated";
       
    } else {
        echo "Error!!!!!";
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
</head>

<body>
<div class="row h-100 bg-dark">
<h1 class="text-danger  text-center mb-4 mt-4">update DB</h1>

<div class="col-3 bg-dark ">
<form  method="POST"  class= "text-light ">
<div >
<label for="formGroupExampleInput" class="form-label ms-2">id</label>
<input type="text" class="form-control w-75 ms-2" name="id" id="formGroupExampleInput"  value="<?php echo $row["id"] ?>">
</div> 
<div >
<label for="formGroupExampleInput" class="form-label ms-2">title</label>
<input type="text" class="form-control w-75 ms-2" name="title" id="formGroupExampleInput"value="<?php echo $row["title"] ?>">
</div>
<div >
<label for="formFile" class="form-label ms-2">image</label>
<input class="form-control w-75 ms-2"name="image" type="file" id="formFile">
</div>
<div >
<label for="formGroupExampleInput" class="form-label w-25 ms-2">ISBN_code</label>
<input type="text" class="form-control w-75 ms-2"name="code" id="formGroupExampleInput" value="<?php echo $row["ISBN_code"] ?>">
</div>
<div >

<button type="submit" name="update" class="btn btn-warning ms-2 mt-5" >update</button>
<a  href="index.php" class="btn btn-success ms-2 mt-5" > home</a>
</div>

</div>


<div class="col-3 bg-dark  text-light">

<div >
<label for="exampleFormControlTextarea1" class="form-label w-75">short_description</label>
<textarea class="form-control w-75  " name="description" id="exampleFormControlTextarea1"value="<?php echo $row["short_description"] ?>" rows="1"></textarea>
</div>

<div >
<label for="formGroupExampleInput" class="form-label w-75">type</label>
<input type="text" class="form-control w-75 " name="type" id="formGroupExampleInput" value="<?php echo $row["type"] ?>">
</div>
<div >
<label for="formGroupExampleInput" class="form-label w-75">author_first_name</label>
<input type="text" class="form-control w-75 " name="fname" id="formGroupExampleInput" value="<?php echo $row["author_first_name"] ?>" >
</div>
</div>


<div class="col-3 bg-dark  text-light">
<div >
<label for="formGroupExampleInput" class="form-label ">author_last_name</label>
<input type="text" class="form-control  " name="lname" id="formGroupExampleInput" value="<?php echo $row["author_last_name"] ?>">
</div>
<div >
<label for="formGroupExampleInput" class="form-label w-75">publisher_name</label>
<input type="text" class="form-control  " name="publisher" id="formGroupExampleInput" value="<?php echo $row["publisher_name"] ?>">
</div>
<div >
<label for="formGroupExampleInput" class="form-label w-75">publisher_address</label>
<input type="text" class="form-control " name="address" id="formGroupExampleInput" value="<?php echo $row["publisher_address"] ?>">
</div>
</div>

<div class="col-3 bg-dark  text-light">


<div >
<label for="formGroupExampleInput" class="form-label w-75 ms-2">publish_date</label>
<input type="text" class="form-control w-75 ms-2"  name="date" id="formGroupExampleInput" value="<?php echo $row["publish_date"] ?>">
</div>



</div>









</div>

</form>   </div> </div>  

</body>

</html>