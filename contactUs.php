<?php include("config2.php");                                                            

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
    background-position:center;
    background-size: cover;
    display:flex;
    justify-content: center;
    align-items: center;   
    background-repeat: no-repeat;
   }
   
 
.contact_us{width: 400px;
   
    height: 400px;
    background: #fff;
    border-radius: 5px;
    box-shadow:0 0 5px rgba(0,0,0,0.5);
    padding:40px 30px;
    position:absolute;
    top:30%;
    left: 36%;
    justify-content: center;
    align-items: center; }

 

</style>

</head>
<body>

<div class="topnav">

  <a href="homenew.php">Home</a>
</div>

    <div>
    <div class="col">
    <div class="contact_us">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Contact Us</p>
    


<form method="post" enctype="multipart/form-data">                                                             
        <table class="table table-striped">
            <tr> 
                <td>Name</td> <td><input type="text" name ="txtName" required
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["pName"][$r].'"';
                }
                ?>
                > 
                <?php
                     if(isset($_POST["btnEdit"]))
                     {
                         $r =$_POST["btnEdit"];
                         echo '<input type="hidden" 
                         name="txtID" value="'. $_POST["pId"][$r].'">';
                        
                     }
                    ?>
                    </td>
            </tr>
        

            <tr> 
                <td>Email</td>  <td><input type="email" name ="txtPeriod"  
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["pPeriod"][$r].'"';
                }
                ?>></td>
            </tr>
      
           

            <tr>
                    <td>Message</td> <td><textarea name="txtDescrip" col="14" rows="5" required>
                    <?php
                     if(isset($_POST["btnEdit"]))
                     {
                         $r =$_POST["btnEdit"];
                         echo $_POST["pDescrip"][$r];
                     }
                    ?>
                    </textarea></td> 
                </tr>

             
                <td></td>  <td>
               
                   
                    <button type="submit" class="btn btn-success" name="btnSave">Send</button>
                   
                  
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
                    $query ="INSERT INTO `contact`(`Name`, `Email`, `Message`) 
                    VALUES (?,?,?)";
                    $st = $conn->prepare($query);
                    $st->bindValue(1,$_POST["txtName"],PDO::PARAM_STR);                   
                    $st->bindValue(2,$_POST["txtPeriod"],PDO::PARAM_STR);
                    $st->bindValue(3,$_POST["txtDescrip"],PDO::PARAM_STR);
                    
                    $st->execute();
                   
                    echo "<script>alert('Message sent successfully.')</script>";

                    
                    
                } catch (PDOException $th) {
                   echo $th->getMessage();
                
                }
            }
            
                        
            }
        
           
    
    ?></div>
  </div>
    </div>
    
   

  </div>


 
  
</div></footer>
<div class="f_copyright ">© 2022 Copyright: DreamTourSriLanka.lk
    </div>
        
   

</body>
</html>