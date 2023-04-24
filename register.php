
<?php include("config2.php");                                                             
session_start(); 

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
    justify-content: center;
    align-items: center;   
   
   }
          </Style>
    <title>Register</title>
</head>
<body>

<!--  how to confirm the password-->

<div class="loginForm">
<form method="post">
<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    name="txtName" require placeholder="Enter full name"></div>


    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    name="txtPhn" require placeholder="Enter phone number"></div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="email" 
    name="txtEM" require placeholder="Enter email"></div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" 
    name="txtUN" require placeholder="Enter Username"></div>

    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="password" 
    name="txtPW" require placeholder="Enter password"></div>

    
   
  <div id="btnLog">
  <button type="submit" class="btn btn-primary" name="btnSubmit" value="Sign In">Registar</button>
  </div>
  <p class="login-register-text">Have an account? <a href="userLogin.php">Login Here</a>.</p>
</form>
</div>


<?php if($_SERVER["REQUEST_METHOD"]==  "POST") 
{
if(isset($_POST['btnSubmit']))                                                     
{                                                                                
    try {
        $conn=new PDO($db,$un,$password);                                       
       $query="INSERT INTO `users`( `Name`, `Phone.no`, `E-mail`, `username`, `password`)
       VALUES (?,?,?,?,?)";                                                
                                                                                 
      $st=$conn->prepare($query);
       $st->bindValue(1,$_POST["txtName"],PDO::PARAM_STR);                    
       $st->bindValue(2,$_POST["txtPhn"],PDO::PARAM_STR);
       $st->bindValue(3,$_POST["txtEM"],PDO::PARAM_STR);
       $st->bindValue(4,$_POST["txtUN"],PDO::PARAM_STR);
       $st->bindValue(5,$_POST["txtPW"],PDO::PARAM_STR);
     
      $st->execute();                                                         
      echo "<script>alert('Wow! User Registration Completed.')</script>";


    } catch (PDOException $th) {
       echo $th->getMessage();                                             
    }
}


}
?>





</body>
</html>