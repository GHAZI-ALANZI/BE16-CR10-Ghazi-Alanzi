<?php
require_once "db_connect.php";
require_once("bootst.php") ;

$id = $_GET["id"];
$sql = "SELECT * FROM `biglibrary`  where id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.cont {
  height:100vh;
  width:100vw;
  background-image: url("https://img.wallpapersafari.com/desktop/1920/1080/54/28/k2J6SB.jpg");
  background-size: cover;
}


</style>
</head>

<body>
   
<div class="cont  ">
     
  <div class="row  ">
  <h1 class="text-light  text-center p-4"> Details</h1>

    <div class="col-12 ">
		<table class="table table-image">
		  <thead>
		    <tr class="bg-dark text-light">

          <th scope='col'>id</th>
          <th scope='col'>title</th>
		      <th scope='col'>ISBN_code</th>
		      <th scope='col'>short_description</th>
		      <th scope='col'>author_first_name</th>
		      <th scope='col'>author_last_name</th>
		      <th scope='col'>status </th>
		   
		    </tr>
		  </thead>
      <?php 
       $id=$_GET['id'];
$sql = "SELECT * FROM `biglibrary`  where id=$id";
$result = mysqli_query($conn, $sql);
$table ="";
$row = mysqli_fetch_assoc($result);


     echo $table="
     
     <form  method='GET' class='text-light'>

     <tbody>
      <tr class='text-light'>
      <th scope='col'>".$row['id']."</th>
        <th scope='col'>".$row['title']."</th>
        <th scope='col'>".$row['ISBN_code']."</th>
        <th scope='col'>".$row['short_description']."</th>
        <th scope='col'>".$row['author_first_name']."</th>
        <th scope='col'>".$row['author_last_name']."</th>
        <th scope='col'>".$row['status']."</th>
</th>

      <a href='index.php' class='btn btn-success mb-3 ms-1'>back home</a>
      
      </form>";
  

  

?>
</tbody>
	
		</table>   
    </div>
    </div>
</body>

</html>