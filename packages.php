<?php include("config2.php");                                                             

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="DreamTourCss.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

<style>
    body{
    width:1000px;
    min-height:1000px;
    background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)) ,url(travelimages/Sri_Lanka_light_tower.jpg) ;
    background-position:center;
    background-size: cover;
 
   background-repeat: no-repeat;
   }
  
         
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto   ;
  grid-gap: 40px;
 
  padding: 20px 20px 40px 20px;
  position: absolute;
  top: 1050px;
  left:1%;
  right:50px;
}

.grid-container > div {
  
  text-align: center;
  font-size: 16px;
}

.grid-container :hover div  {
        transform: scale(1.01);
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
    }
    #pkg_table{position: absolute;
      top: 850px;
      width: 90%;
       padding: 10px 10px 10px 10px;
    left: 5%;
    border-radius: 4px;
    
    
  }
 


  
   
     .form-control{width: 100%;
     height: 60px;
     background-color: white}
</style>
<title>Packages</title>
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


<main>



<div class="main_topic">Reserve your package  </div>
<p class="sub_topic">Live your dream....</p>
<div id="pkg_table">

<form method="post" enctype="multipart/form-data "> 
<div class="search">
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" 
name="txtSearch" require placeholder="Enter Package Name to search"><button type="submit" class="btn btn-success"name="btnSearch" >Search</button>
</div></div>
<?php

    try {
        $conn=new PDO($db,$un,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query="SELECT  `id`, `package`, `period`, `place`, `cost`, `what_to_do`, `providing`, `description`,`Picture` FROM `packages`";                                                  //when writing a select query write down the columns that are necessary to acess data

         if(isset($_POST["btnSearch"]))                                    
         {$query= $query."where package like'%".$_POST["txtSearch"]."%'";} 
                                                                                          
         
        $result=$conn->query($query);
      

       echo '<div class="grid-container">';
       $i=0;
       foreach($result as $row)
       {
        echo'<div> ';
       
        echo'<div class="card" style="width:450px;">';
       
        echo'<img src="'.$row[8].'" width="450px" height="300px" alt="image">';
        echo'<div class="card-body">';
        echo'<h5 class="card-title">'.'<input type="hidden" name="pName[]" value="'. $row[1].'">'. $row[1].'</h5>';
        echo' <p class="card-text">'.'<input type="hidden" name="pProvide[]" value="'. $row[3].'">'. $row[3]. '</p>';
      
        echo' <p class="card-text">'.'<input type="hidden" name="pPeriod[]" value="'. $row[2].'">'. $row[2].'</p>';
        echo' <p class="card-text">'.'LKR'.' '.' <input type="hidden" name="pLocation[]" value="'. $row[4].'">'. $row[4].'</p>';
        echo' <p class="card-text">'.'<input type="hidden" name="pCost[]" value="'. $row[5].'">'. $row[5].'</p>';
        echo' <p class="card-text">'.'<input type="hidden" name="pPlace[]" value="'. $row[6].'">'. $row[6]. '</p>';
        
        echo' <p class="card-text">'.'<input type="hidden" name="pDescrip[]" value="'. $row[7].'">'. $row[7]. '</p>';

        echo '<a href="Reservations.php" class="btn btn-primary">'.'Book now'.'</a>';
        echo'</div>';
     
        echo'</div>';
       
        echo'</div>';
        $i++;
      }
        echo'</div>';

        
   
} catch ( PDOException $th) {
    echo $th->getMessage();
  
}
?> 
   

<div class="f_copyright ">© 2022 Copyright: DreamTourSriLanka.lk
    </div>
    
    
   

</body>
</html>