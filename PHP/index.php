
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
<?php require_once("bootst.php") ;
require_once("db_connect.php");
$sql = "SELECT * from biglibrary";
$result = mysqli_query($conn, $sql);
$table = "";


?>







   
<div class="container-fluid ">
  <table class="table">
    
  </table>

  <div class="row  ">
  <h1 class="text-dark text-center p-4"> Big Library web application </h1>
  <a href="create.php"><button class="btn btn-danger mb-2">create new data</button></a>

    <div class="col ">
		<table class="table table-md table table-sm">
		  <thead>
		    <tr class=" text-light bg-dark ">

          <th scope='col '>id</th>
          <th scope='col'>title</th>
		      <th scope='col'>image</th>
		      <th scope='col'>ISBN_code</th>
		      <th scope='col'>short_description</th>
		      <th scope='col'>type</th>
		   
		    </tr>
		  </thead>
      <?php 
$sql = "SELECT * FROM `biglibrary` ";
$result = mysqli_query($conn, $sql);
$table ="";

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    
    
  if(isset($_POST['puplish'])){
    $puplish=$row['publisher_name'];
 
    $sql="SELECT * FROM `biglibrary` WHERE publisher_name='$puplish' ";
    $res=mysqli_query($conn,$sql);


    

}

     echo $table="
     
     <form action='index.php' method='POST' class= 'text-light  '>

     <tbody >
      <tr class='bg-info text-light '>
      <th scope='col'>".$row['id']."</th>
        <th scope='col'>".$row['title']."</th>
        <th scope='col'><img src='../pic/{$row['image']}'  width='25%' height='25%'></th>
        <th scope='col'>".$row['ISBN_code']."</th>
        <th scope='col'>".$row['short_description']."</th>
        <th scope='col'>".$row['type']."</th>
        
        <th scope='col '>
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














    
    

