<?php
include("config2.php ");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="DreamTourCss.css ">
    <style>
  body{
    width:100%;
    min-height:100vh;
    background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/elephants1.jpeg);
    background-position:center;
    background-size: cover;
    display:flex;
    justify-content: center;
    align-items: center;   
   }
          </Style>

    <title>Admin Login</title>
</head>
<body>


<div class="loginForm">
<form method="post">
<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin Login</p>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" 
    name="txtUN" require placeholder="Enter Username"></div>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="txtPW" require placeholder="Enter Password">
  </div>
  <div id="btnLog">
  <button type="submit" class="btn btn-primary" name="btnSubmit" value="Sign In">Login</button>
  </div>
</form>
</div>



<?php 
if(isset($_POST["btnSubmit"]))
{
    try {
        $conn=new PDO($db,$un,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query="SELECT `username` FROM `admin_login` 
        WHERE  `password`=? and `username`=?";
         
         $st=$conn->prepare($query);
         $st->bindValue(1,$_POST["txtPW"],PDO::PARAM_STR);
         $st->bindValue(2,$_POST["txtUN"],PDO::PARAM_STR);
         $st->execute();
        $result=$st->fetch();
        if($result[0]== $_POST["txtUN"])
      {
       $_SESSION["un"] =$result[0];  
    
       header("location:admin_packages.php");
      }
      else
      {echo '<script> alert("Incorret user name or a password");</script>';}
    }
        catch(Exception $e)
        {echo'<script> alert( '. $e->getMessage().')</script>';}
}
    ?> 
        
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</html>

