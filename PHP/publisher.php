
<?php require_once("bootst.php") ;
require_once("db_connect.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>



</style>

</head>
<body>

   
<div class="cont  ">
  <div class="row  ">
  <h1 class="text-dark text-center p-4"> Big Library web application</h1>
  <a href="create.php"><button class="btn btn-danger mb-2">create new data</button></a>

    <div class="col-12 ">
		<table class=" table table-md  table-sm">
		  <thead>
		    <tr class="bg-dark text-light  ">

          <th scope='col '>id</th>
          <th scope='col'>title</th>
		      <th scope='col'>image</th>
		      <th scope='col'>ISBN_code</th>
		      <th scope='col'>short_description</th>
		      <th scope='col'>type</th>
		      <th scope='col'>author_first_name</th>
		      <th scope='col'>author_last_name</th>
		      <th scope='col'>publisher_name</th>
		      <th scope='col'>publisher_address</th>
		      <th scope='col'>publish_date</th>
		    </tr>
		  </thead>
      <?php 
      $puplish=$_GET['publisher_name'];
      $sql = "SELECT * FROM `biglibrary`WHERE publisher_name='$puplish' ";
     $result = mysqli_query($conn, $sql);
     $table ="";

    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
    
    

     echo $table="
     
     <form  method='GET' class= 'text-light '>

     <tbody>
      <tr class='bg-info text-light '>
      <th scope='col'>".$row['id']."</th>
        <th scope='col'>".$row['title']."</th>
        <th scope='col'><img src='../pic/{$row['image']}'   width='60%' height='60%'></th>
        <th scope='col'>".$row['ISBN_code']."</th>
        <th scope='col'>".$row['short_description']."</th>
        <th scope='col'>".$row['type']."</th>
        <th scope='col'>".$row['author_first_name']."</th>
        <th scope='col'>".$row['author_last_name']."</th>
        <th scope='col'><a href='publisher.php?publisher_name={$row["publisher_name"]}' name='puplish'>".$row['publisher_name']."</a> </th>
        <th scope='col'>".$row['publisher_address']."</th>
        <th scope='col'>".$row['publish_date']."</th>
        <th scope='col'>
        <a href='delete.php?id={$row["id"]}' class='btn btn-danger mb-2'>delete</a><br>
        <a href='update.php?id={$row["id"]}' class='btn btn-primary mb-2'>update</a><br>
        <a href='details.php?id={$row["id"]}' class='btn btn-success  '>show details</a>


        </th>
        

      </tr></form>";
  }
  }else{
     echo $table= "<tr '><td colspan='12'><h3 class='text-center'>No Data Available </h3></td></tr>";
  }

?>
</tbody>
	
		</table>   
    </div>
    </div>



   

  
</body>
</html>

