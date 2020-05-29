<?php session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{} ?>

<?php $query=mysqli_query($con,"select `id`, `name`, `price` FROM `items` WHERE `id`='".$_GET['id']."'");
if(isset($_POST['id']))
{
    
    // connect to mysql
   // $connect = mysqli_connect("localhost", "id13048954_root", "admin123","id13048954_products");
    
    // mysql search query
   // $query = "SELECT `id`, `name`, `price` FROM `items` WHERE `id` = $id LIMIT 1";
    
    //$result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
if($query)
{
      while ($row = mysqli_fetch_array($query))
      {
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
      }  
} 
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $id = "";
            $name = "";
            $price = "";
    }
    
    
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $id = "";
    $name = "";
    $price = "";
}



?>
