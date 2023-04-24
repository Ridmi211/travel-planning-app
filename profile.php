<?php include("config2.php"); 
require("loginCheck.php");                                                            
 

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>  body{
    width:100%;
    min-height:100vh;
    background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/elephants1.jpeg);
    background-position:center;
    background-size: cover;
    display:flex;
     
    background-repeat: no-repeat;
   }
  </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="DreamTourCss.css ">
</head>

<title>User Profile</title>
<body>

<div class="topnav">
<a href="profile.php">Profile</a>  
  <a href="packages.php">Pakages</a>
  <a href="food.php">Food </a>
  <a href="accomodations.php">Accomodations</a>
  <a href="transport.php">Transport</a>
    <a href="homenew.php">Home</a>
</div>
<div style="margin: 50px auto 50px auto;">

<?php

try{
    $uname = $_SESSION["userID"];
    $conn = new PDO($db,$un,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query =" SELECT `id`, `Name`, `Phone.no`, `E-mail`, `username`, `password` FROM `users`
             WHERE `id`=$uname";   

   $result=$conn->query($query);
echo '<form method="post">';
    
    $i=0;

   foreach($result as $row)
       { echo'  <div style =position:absolute;top:100px;left:10%;>'; echo'<div> ';
       
        echo'<div class="loginForm" style="width:550px;height:550px;text-align:left">';
        echo' <p class="login-text" style="font-size: 2rem; font-weight: 800;">User Profile</p>';
        echo'<div class="card-body">';
        echo' <p class="card-text"> '.'Registered ID:'.' '.' <input type="hidden" name="txtId[]" value="'. $row[0].'"> '. $row[0].'</td>';
         echo' <p class="card-text">'.'Full name :'.' '.' <input type="hidden" name="txtName[]" value="'. $row[1].'">'. $row[1].'</td>';
           echo' <p class="card-text">'.'Phone number :'.' '.' <input type="hidden" name="txtphn[]" value="'. $row[2].'">'. $row[2].'</td>';
           echo' <p class="card-text">'.'Email :'.' '.' <input type="hidden" name="txtEM[]" value="'. $row[3].'">'. $row[3].'</td>';
           echo' <p class="card-text">'.'Username :'.' '.' <input type="hidden" name="txtUN[]" value="'. $row[4].'">'. $row[4].'</td>';
           echo' <p class="card-text">'.'Password :'.' '.' <input type="hidden" name="txtPW[]" value="'. $row[5].'">'. $row[5].'</td>';
           echo '<br>';
           echo '<br>';
       echo '<input type="submit" class="btn btn-primary form-btn" value="Edit" name="btnEdit">';
       echo'</form>';
   }
   if(isset($_POST["btnEdit"])){

  echo'  <div class="loginForm" style =position:absolute;top:10px;left:600px;>';
  echo'<form method="post">';
 
  echo' <p class="login-text" style="font-size: 2rem; font-weight: 800;">Update profile</p>';

 echo'<div class="mb-3">Name';
echo'<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ';
echo'name="txtName" require  value="' . $row[1] . '"></div>';

echo'<div class="mb-3">Phone number';
echo'<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ';
echo'name="txtPhn" require value="' . $row[2] . '"></div>';

echo'<div class="mb-3">Email';
echo'<input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="email" ';
echo'name="txtEM" require  value="' . $row[3] . '"></div>';

echo'<div class="mb-3">Username';
echo'<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" ';
echo'name="txtUN" require  value="' . $row[4] . '"></div>';
   
echo'<div class="mb-3">Password';
echo'<label for="exampleInputEmail1" class="form-label"></label>';
echo'<input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="password" ';
echo'name="txtPW" require  value="' . $row[5] . '"></div>';
  
        echo '<input type="submit" class="btn btn-primary form-btn" value="Update" name="btnUpdate">';
       
    }
}
    catch ( PDOException $th) {
       echo $th->getMessage();
     
    }
    
    ?>
    <?php
    
    if(isset($_POST['btnUpdate'])) 
{
    try {
     

        $conn=new PDO($db,$un,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $query=" UPDATE `users` SET `Name`=?,`Phone.no`=?,`E-mail`=?,`username`=?,`password`=?
       WHERE `id`=$uname";  
                                                       
       $st=$conn->prepare($query);
       $st->bindValue(1,$_POST["txtName"],PDO::PARAM_STR);                    
       $st->bindValue(2,$_POST["txtPhn"],PDO::PARAM_STR);
       $st->bindValue(3,$_POST["txtEM"],PDO::PARAM_STR);
       $st->bindValue(4,$_POST["txtUN"],PDO::PARAM_STR);
       $st->bindValue(5,$_POST["txtPW"],PDO::PARAM_STR);
       
       
      $st->execute();                                                          // point where database is gonna run the query
      echo '<script> alert("  Package Updated Sucessfully! Refresh the page to see updated content");</script>';


    } catch (PDOException $th) {
       echo $th->getMessage();
    }
}


?>
</div>
<?php

?>
</body>
</html>