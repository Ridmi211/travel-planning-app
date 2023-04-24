<?php include("config2.php");                                                             //whenever we need to acess a database we need to supply some detatils.for that we use a special file called config.php to keep those values 
require("loginCheck.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="DreamTourCss.css ">
    <style>

body{
    width:100%;
    min-height:100vh;
    background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/elephants1.jpeg);
    background-position:center;
    background-size: cover;
    display:flex;
   
    background-repeat: no-repeat;
   }
   .contact_us{width: 400px;
    min-height: 500px;
    height: 590px;
    
    background: #fff;
    border-radius: 5px;
    box-shadow:0 0 5px rgba(0,0,0,0.5);
    padding:40px 30px;
    position:absolute;
    left: 35%;
    top: 10%;
  }

    </style>
  <title>Reservations</title>
</head>
<body>

<div class="topnav">

   
  <a href="packages.php">Pakages</a>

  <a href="homenew.php">Home</a>
</div>


<div class="col">
    <div class="contact_us">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Reserve Package</p>
    


<form method="post" enctype="multipart/form-data">                                                             
        <table class="table table-striped">
            <tr> 
                <td>Full name</td> <td><input type="text" name ="txtName" required 
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["rName"][$r].'"';
                }
                ?>
                > 



                <?php
                     if(isset($_POST["btnEdit"]))
                     {
                         $r =$_POST["btnEdit"];
                         echo '<input type="hidden" 
                         name="txtID" value="'. $_POST["rId"][$r].'">';
                        
                     }
                    ?>
                    </td>
            </tr>

         

            <tr> 
            <td>Email</td><td><input type="email" name ="txtEmail"   
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["rEmail"][$r].'"';
                }
                ?>></td>
            </tr>
      
             <tr> 
             <td>Phone number</td><td><input type="number" name ="txtNumber"   
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["rNumber"][$r].'"';
                }
                ?>></td>
            </tr>

          
            <tr>
                    <td>Package</td> <td> <select  name="txtPackage" >
                   <?php  try {
        $conn=new PDO($db,$un,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query="SELECT  `id`, `package` FROM `packages`";
        $result=$conn->query($query);
                foreach($result as $r)
                {
                    echo '<option value="'.$r[0].'">'.$r[1].'</option>';
                }
                
                }
                    catch(PDOException $ex)
                    {
                        echo $ex->getMessage();
                    }
                    ?>

                    </select>


                    <tr> 
                    <td>Date of visitation</td><td><input type="date" name ="txtDate" 
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["rDate"][$r].'"';
                }
                ?>></td>
            </tr>

            <tr> 
            <td>Number of people</td><td><input type="number" name ="txtPeople"   
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["rPeople"][$r].'"';
                }
                ?>></td>
            </tr>

            <tr> 
            <td>Country</td><td><input type="text" name ="txtCountry"  
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["rcountry"][$r].'"';
                }
                ?>></td>
            </tr>

             
                <td></td>  <td>
               
                   
                    <button type="submit" class="btn btn-success" name="btnSave">Reserve</button>
                   
                  
                </td>
            </tr>
              
       
        </table>
</form>
        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(isset($_POST['btnSave']))
            {
                try 
                {
                    $conn = new PDO($db,$un,$password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $query ="INSERT INTO `reservations`( `Username`, `Name`, `Email`, `Phone number`, `Package`, `Visit_date`, `No_people`, `Country`)  
                    VALUES (?,?,?,?,?,?,?,?)";
                    $st = $conn->prepare($query);
                    $st->bindValue(1, $_SESSION['un'],PDO::PARAM_STR);                   
                    $st->bindValue(2,$_POST["txtName"],PDO::PARAM_STR);
                    $st->bindValue(3,$_POST["txtEmail"],PDO::PARAM_STR);
                    $st->bindValue(4,$_POST["txtNumber"],PDO::PARAM_INT);
                    $st->bindValue(5,$_POST["txtPackage"],PDO::PARAM_STR);
                    $st->bindValue(6,$_POST["txtDate"],PDO::PARAM_STR);
                    $st->bindValue(7,$_POST["txtPeople"],PDO::PARAM_INT);
                    $st->bindValue(8,$_POST["txtCountry"],PDO::PARAM_STR);
                  
                    
                    $st->execute();
                   
                    echo "<script>alert('Package reservation sent successfully.')</script>";

 
                    
                } catch (PDOException $th) {
                   echo $th->getMessage();
                
                }
            }
            
            
            
            }
        
        
    
    
    ?></div>
  </div>
    </div>
    

    </body>
</html>