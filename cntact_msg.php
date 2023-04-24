<?php include("config2.php");                                                             
require("admiLoginCheck.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="DreamTourCss.css ">
    <style>
  body{
    width:100%;
    min-height:100vh;
    background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/elephants1.jpeg);
    background-repeat: no-repeat; 
  background-attachment:fixed;
    background-size: cover;
    display:flex;
    justify-content:space-between;
   
   }
   .pkg_table{position:absolute;
      left: 5%;
    top: 100px;
    width: 90%;
     }
          </Style>
    <title>contact requests</title>
</head>
<body>


<div class="topnav">
<a class= "logout" href="adminLogin.php">Logout</a>
<a href="reserved_pkg.php">Pakage Reservations</a>
<a href="admin_packages.php">Manage Pakages</a>
<a href="cntact_msg.php">Messages</a>
  <a href="home.php">User Home</a>
 </div>


        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {

if(isset($_POST['btnDelete'])) 
{
    try {
        $conn=new PDO($db,$un,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $query="Delete from `contact`
       WHERE `ID`=?";
       $st=$conn->prepare($query);
      ;
       $st->bindValue(1,$_POST["btnDelete"],PDO::PARAM_INT);
      $st->execute();
      echo '<script> alert(" Message deleted Sucessfully");</script>'; 


    } catch (PDOException $th) {
       echo $th->getMessage();
    }
}
}
?>
</aside>
</div>
<main>

<div class="pkg_table">
<p  style="font-size: 2rem; font-weight: 600;">Contact requests</p>
<form method="post" enctype="multipart/form-data "> 
<div class="search">
    <input type="text" class="inputBig" placeholder="Enter Package Name to search" name="txtSearch">
    <input type="submit" name="btnSearch" value="Search">
</div>
<?php

try {
  $conn=new PDO($db,$un,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $query="SELECT `ID`, `Name`, `Email`, `Message` FROM `contact`";                                             

   if(isset($_POST["btnSearch"]))                                    
   {$query= $query."where Name like'%".$_POST["txtSearch"]."%'";}    
                                                                    
   
  $result=$conn->query($query);
        
     
echo '<table class="table table-striped">';
echo'<tr>  <th> ID </th> <th>Name</th> <th> Email</th> <th>Message</th><th> Delete</th></tr>';
$i=0;
foreach($result as $row)

{echo'<tr>';
    echo '<td> <input type="hidden" 
    name="pId[]" value="'. $row[0].'">
    '. $row[0].'</td>';

echo'<td><input type="hidden" name="pName[]" value="'. $row[1].'">'. $row[1].'</td>';
echo'<td><input type="hidden" name="pPeriod[]" value="'. $row[2].'">'. $row[2].'</td>';
echo'<td><input type="hidden" name="pDescrip[]" value="'. $row[3].'">'. $row[3].'</td>';
echo'<td><button name="btnDelete" type="submit" value="'. $row[0].'">Delete</button></td>'; 
echo'</tr>'; 
$i++;
}

echo'</table>';

} catch ( PDOException $th) {
    echo $th->getMessage();
  
}
?> 
</form>
</div>
</main>
<?php
if(isset($_POST["btnEdit"]))
{
$r=$_POST["btnEdit"];
}
elseif(isset($_POST["btnDelete"]))
{
$r=$_POST["btnDelete"];
}
?>

</body>
</html>