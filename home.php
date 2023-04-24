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
    <title> User Home page</title>
    <style>
  body{
   
    background-color: white;
   }
  
  .loginForm{ width: 400px;
  min-height: 300px;
  max-height: 400px;
  background: #fff;
  border-radius: 5px;
  box-shadow:0 0 5px rgba(0,0,0,0.5);
  padding:40px 30px;
 
  text-align:center;
  

  
 }


 .boxOne{ width:100%;
  min-height:1000px;
  background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/Nine-Arches-Bridge.jpg) ;
  background-position:center;
  background-size: cover;
 background-repeat: no-repeat;}
  


.contact_us{width: 400px;
    min-height: 300px;
    height: 390px;
    background: #fff;
    border-radius: 5px;
    box-shadow:0 0 5px rgba(0,0,0,0.5);
    padding:40px 30px;
    position:absolute;
   
   
 
    justify-content: center;
    align-items: center; }


    .grid-container {
  display: grid;
  grid-template-columns: auto auto  auto  ;
  grid-gap:  60px;
 
  padding: 20px  20px  20px  20px;
  position: absolute;
  top: 1460px;
  left:40px;
  right:50px;
}

.grid-container > div {
  
  text-align: center;
  font-size: 16px;
}

.grid-container :hover div  {
        transform: scale(1.01);
        /* box-shadow: 0 0 2px rgba(0, 0, 0, 0.5); */
    }

    h1{color: white;
         position: absolute;
         left: 5%;}
         
    
footer{position: absolute;
  top:5100px;}

</style>

</head>
<body>

<div class="topnav">
<a class= "logout" href="logout.php">Logout</a>
  
  <a href="profile.php">Profile</a>  
  <a href="packages.php">Pakages</a>
  <a href="food.php">Food </a>
  <a href="accomodations.php">Accomodations</a>
  <a href="transport.php">Transport</a>
   <a href="home.php">Home</a>
</div>




<?php echo "<h1>Welcome " . $_SESSION['un'] . "</h1>"; ?>



<div class="boxOne">

<div class="main_topic">Dream Tour Sri Lanka</div>
<p class="sub_topic">Live your dream with us....</p>

</div>

<div class="card_3" >
  
  
    <p >Vist The Wonder of Asia</p>
  </div>
</div>
<div>

<div class="grid-container">
<div>
  
  <div class="card_5" style="width:420px; height: 400px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/The_nine_arch.jpg) ;">
    
    
  Enjoy the ride....
  <a href="transport.php" class="btn btn-primary">Go to Transport</a>
    </div>
  </div>
  <div>
    
  <div class="card_5" style="width:420px; height: 400px; background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)) ,url(travelimages/rice-6303121_1280.jpg) ;">
    
    
  Eat in Sri Lanka....
  <a href="food.php" class="btn btn-primary">Go to Food</a>
    </div>
  </div>
  <div>
    
  <div class="card_5" style="width:420px; height: 400px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/amaya-hills-1.jpg) ;">
    
    
  Stay In Sri Lanka...
  <a href="accomodations.php" class="btn btn-primary">Go to Accomodations</a>
    </div>
  </div>
 
<div>
  
<div class="card_1" style="width:420px; height: 600px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/friends.jpg) ;">
  
    <p >Endless Happiness....</p>
   
  </div>
</div>
<div>
  
<div class="card_1" style="width:420px; height: 600px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/rafting-679718_1280.jpg) ;">
  
  
    <p >Endless Joy....</p>
  </div>
</div>
<div>
  
<div class="card_2" style="width:420px; height: 400px; ">
  
    Make Memories That Last a Lifetime....
  
  </div>
</div>


<div>
  <div class="card_2" style="width:420px; height: 400px;">
  
      <p >Relax your soul....</p>
    </div>
  </div>



<div>
  <div class="card_1" style="width:420px; height: 500px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/bubbles-5671365_1280.jpg) ;">
    
    
      <p >With the warmth of sun rays....</p>
    </div>
  </div>


<div>
  <div class="card_1" style="width:420px; height: 700px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/surfing_9e91780558_b.jpg) ;">
    
    
      <p >Among the curves of waves....</p>
    </div>
  </div>

  



<div>
  <div class="card_1" style="width:420px; height: 700px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/Memuree.jpg) ;">
    
    
      <p >Admire nature....</p>
    </div>
  </div>
  


<div>
  
<div class="card_1" style="width:420px; height: 600px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/Birds-Sri-Lanka-Animals-2558073.jpg) ;">
  
  
    See the beauty....
  </div>
</div>



<div>
  
<div class="card_2" style="width:420px; height: 500px;">
  
   Feel the freedom in paradise...
  </div>
</div>



<div>
  
<div class="card_2" style="width:420px; height: 150px;">
  
  
  </div>
</div>
<div>
  
<div class="card_4" style="width:420px; height:  150px;">
  
  Travel Sri Lanka with Dream Tour Sri Lanka to gain best ever experiences for a amazing price range.
  </div>
</div>
<div>
  
<div class="card_2" style="width:420px; height:  150px;">
  
  
  </div>
</div>

<div>
   
  </div>

<div>
  
<div class="card_5" style="width:420px; height: 400px; background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/reserve.jpg) ;">
  
  
Reserve your dream package just in few steps.
<a href="packages.php" class="btn btn-primary">Go to Packages</a>
  </div>
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








    
  <footer><div class="container_F">
  <div class="row">
    <div class="col" style="text-align: justify;">

      <ul class="list-unstyled">
            <li>
          ABOUT US
            </li>
          
            <li>
             Dream Tour Sri Lanka is one of the biggest travel planning cooparation in Sri Lanka.
             We have provided the best experiences for our customers for more than two decades. 
             Come live your dream with our trustworthy service with full insuarance policies.
            </li>
                     </ul>
    </div>
    <div class="col">
          
    </div>
    <div class="col">
      CONTACT
      <ul class="list-unstyled">
            <li>
              Address : No.211,Main road,Kandy,Sri Lanka
            </li>
            <li>
              Tel : +9481-1234567
            </li>
            <li>
              Mobile : +9471-0987656
            </li>
            <li>
             Email : Dreamtourlk@gmail.com
            </li>
            <li>
            <a href="#!">Contact Us</a>
            </li>
          </ul>
    </div>
  </div>
  
</div></footer>
<div class="f_copyright ">© 2022 Copyright: DreamTourSriLanka.lk
    </div>
        
   

</body>
</html>