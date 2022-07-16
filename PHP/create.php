<?php
require_once("bootst.php") ;
require_once("db_connect.php");
$id="";
$name="";
$img="";
$price="";
$des="";
$sqlq="";

if(isset($_POST['add'])){
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

    $sql = "INSERT INTO `biglibrary`( `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
     ('$title','$image','$code','$des','$type','$fname','$lname','$puplish','$address','$date') ";
    $res=mysqli_query($conn,$sql);
    
    header('Location: http://localhost/cr10/PHP/create.php');
}
if(isset($_POST['del'])){
    $id2=$_POST['id'];
 
    $sql="DELETE FROM `biglibrary` WHERE id=$id2";
    $res=mysqli_query($conn,$sql);

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
<h1 class="text-danger  text-center mb-4 mt-4">Create DB</h1>

<div class="col-3 bg-dark ">
<form action="create.php" method="POST"  class= "text-light ">
<div >
<label for="formGroupExampleInput" class="form-label ms-2">id</label>
<input type="text" class="form-control w-75 ms-2" name="id" id="formGroupExampleInput" >
</div> 
<div >
<label for="formGroupExampleInput" class="form-label ms-2">title</label>
<input type="text" class="form-control w-75 ms-2" name="title" id="formGroupExampleInput" >
</div>
<div >
<label for="formFile" class="form-label ms-2">image</label>
<input class="form-control w-75 ms-2"name="image" type="file" id="formFile">
</div>
<div >
<label for="formGroupExampleInput" class="form-label w-25 ms-2">ISBN_code</label>
<input type="text" class="form-control w-75 ms-2"name="code" id="formGroupExampleInput" >
</div>
<div >
<button type="submit" name="add" class="btn btn-primary ms-2 mt-5" >add</button>
<button type="submit" name="update" class="btn btn-warning ms-2 mt-5" >update</button>
<button type="submit" name="del" class="btn btn-danger ms-2 mt-5" >delete</button>
<a href='index.php' class='btn btn-success ms-2 mt-5 '>data in table</a>
</div>

</div>


<div class="col-3 bg-dark  text-light">

<div >
<label for="exampleFormControlTextarea1" class="form-label w-75">short_description</label>
<textarea class="form-control w-75  " name="description" id="exampleFormControlTextarea1" rows="1"></textarea>
</div>

<div >
<label for="formGroupExampleInput" class="form-label w-75">type</label>
<input type="text" class="form-control w-75 " name="type" id="formGroupExampleInput" >
</div>
<div >
<label for="formGroupExampleInput" class="form-label w-75">author_first_name</label>
<input type="text" class="form-control w-75 " name="fname" id="formGroupExampleInput" >
</div>
</div>


<div class="col-3 bg-dark  text-light">
<div >
<label for="formGroupExampleInput" class="form-label ">author_last_name</label>
<input type="text" class="form-control  " name="lname" id="formGroupExampleInput" >
</div>
<div >
<label for="formGroupExampleInput" class="form-label w-75">publisher_name</label>
<input type="text" class="form-control  " name="publisher" id="formGroupExampleInput" >
</div>
<div >
<label for="formGroupExampleInput" class="form-label w-75">publisher_address</label>
<input type="text" class="form-control " name="address" id="formGroupExampleInput" >
</div>
</div>

<div class="col-3 bg-dark  text-light">


<div >
<label for="formGroupExampleInput" class="form-label w-75 ms-2">publish_date</label>
<input type="text" class="form-control w-75 ms-2"  name="date" id="formGroupExampleInput" >
</div>



</div>









</div>

</form>   </div> </div>  
</body>
</html>


