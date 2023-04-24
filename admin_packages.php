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
          </Style>
    <title>Manage packages</title>
</head>
<body>


<div class="topnav">
<a class= "logout" href="adminLogin.php">Logout</a>
<a href="reserved_pkg.php">Pakage Reservations</a>
<a href="admin_packages.php">Manage Pakages</a>
<a href="cntact_msg.php">Messages</a>
  <a href="packages.php"> Package display</a>
 </div>
 
<div class="pakg_add">
<p  style="font-size: 2rem; font-weight: 600;">Manage packages</p>
    


<form method="post" enctype="multipart/form-data">                                                              <!--whenever we need to send data from browser to server, html tag we should use is "form" .this is compulsory to send the data-->
        <table class="table table-striped">
            <tr> 
                <td>Package name</td> <td><input type="text" name ="txtName" required
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
                <td>Period of time</td>  <td><input type="text" name ="txtPeriod"  
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["pPeriod"][$r].'"';
                }
                ?>></td>
            </tr>
      
            <tr> 
                <td>Location</td>  <td><input type="text" name ="txtLocation" required
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["pLocation"][$r].'"';
                }
                ?>> </td>
            </tr>
       
            <tr> 
                <td>Cost</td> <td><input type="int" name ="txtCost" required
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["pCost"][$r].'"';
                }
                ?>></td>
            </tr>
        
            <tr> 
                <td>Accomodations</td>         <td><input type="text" name ="txtPlace" required
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["pPlace"][$r].'"';
                }
                ?>> </td>
            </tr>
       
            <tr> 
                <td>Providings</td> <td><input type="text" name ="txtProvide" 
                <?php
                if(isset($_POST["btnEdit"]))
                {
                $r=$_POST["btnEdit"];
                echo'value="'.$_POST["pProvide"][$r].'"';
                }
                ?>> </td>
            </tr>



            <tr>
                    <td>Description</td> <td><textarea name="txtDescrip" col="10" rows="5" required>
                    <?php
                     if(isset($_POST["btnEdit"]))
                     {
                         $r =$_POST["btnEdit"];
                         echo $_POST["pDescrip"][$r];
                     }
                    ?>
                    </textarea></td> 
                </tr>

                <tr>
            <td>Picture</td><td><input type="file" name="txtimage" >
            <?php
                     if(isset($_POST["btnEdit"]))
                     {
                         $r =$_POST["btnEdit"];
                       
                     }
                    ?>
            
                       </td>
        </tr> 
           
            <tr>
                <td></td> <td>
               
                    <input type="submit" name="btnSave" value="Add Package">
                    <input type="submit" name="btnUpdate" value="Update Package">
                  
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
                    $query ="INSERT INTO  `packages`( `package`, `period`, `place`, `cost`, `what_to_do`, `providing`, `description`,`Picture` ) 
                    VALUES (?,?,?,?,?,?,?,?)";
                    $st = $conn->prepare($query);
                    $st->bindValue(1,$_POST["txtName"],PDO::PARAM_STR);                   
                    $st->bindValue(2,$_POST["txtPeriod"],PDO::PARAM_STR);
                    $st->bindValue(3,$_POST["txtLocation"],PDO::PARAM_STR);
                    $st->bindValue(4,$_POST["txtCost"],PDO::PARAM_STR);
                    $st->bindValue(5,$_POST["txtPlace"],PDO::PARAM_STR);
                    $st->bindValue(6,$_POST["txtProvide"],PDO::PARAM_STR);
                    $st->bindValue(7,$_POST["txtDescrip"],PDO::PARAM_STR);
                    $st->bindValue(8," ",PDO::PARAM_STR);
                    $st->execute();
                    $id=$conn->lastInsertId(); 
                    $fname = $_FILES["txtimage"]['name'];
                    $info  = new SplFileInfo($fname);
                    $newName= './places_images/'.$id.'.'.$info->getExtension();
                    move_uploaded_file($_FILES["txtimage"]['tmp_name'],$newName) ;
                    $query ="UPDATE `packages` SET `Picture`= ? WHERE `ID`= ?"; 
                    $st = $conn->prepare($query);
                    $st->bindValue(1,$newName,PDO::PARAM_STR);
                    $st->bindValue(2,$id,PDO::PARAM_INT);
                    $st->execute();
                    
                    echo '<script> alert("  Package Added Sucessfully");</script>';


    } catch (PDOException $th) {
       echo $th->getMessage();                                               
    }
}
else if(isset($_POST['btnUpdate'])) 
{
    try {

        $imageid= $_POST["txtID"];
         $fname = $_FILES["txtimage"]['name'];
        $info  = new SplFileInfo($fname);
        $newName= './places_images/'.$imageid.'.'.$info->getExtension();
        move_uploaded_file($_FILES["txtimage"]['tmp_name'],$newName) ;

        $conn=new PDO($db,$un,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $query="UPDATE `packages` SET `package`=?,`period`=?,`place`=?,`cost`=?,`what_to_do`=?,`providing`=?,`description`=?, `Picture`=?
       WHERE `id`=?";                                                         
       $st=$conn->prepare($query);
       $st->bindValue(1,$_POST["txtName"],PDO::PARAM_STR);                     
       $st->bindValue(2,$_POST["txtPeriod"],PDO::PARAM_STR);
       $st->bindValue(3,$_POST["txtLocation"],PDO::PARAM_STR);
       $st->bindValue(4,$_POST["txtCost"],PDO::PARAM_STR);
       $st->bindValue(5,$_POST["txtPlace"],PDO::PARAM_STR);
       $st->bindValue(6,$_POST["txtProvide"],PDO::PARAM_STR);
       $st->bindValue(7,$_POST["txtDescrip"],PDO::PARAM_STR);
       $st->bindValue(8,$newName,PDO::PARAM_STR);
       $st->bindValue(9,$_POST["txtID"],PDO::PARAM_INT);
       
      $st->execute();                                                          // point where database is gonna run the query
      echo '<script> alert("  Package Updated Sucessfully");</script>';



    } catch (PDOException $th) {
       echo $th->getMessage();
    }
}
else if(isset($_POST['btnDelete'])) 
{
    try {
        $conn=new PDO($db,$un,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $query="Delete from `packages`
       WHERE `id`=?";
       $st=$conn->prepare($query);
      ;
       $st->bindValue(1,$_POST["btnDelete"],PDO::PARAM_INT);
      $st->execute();
      echo '<script> alert(" Package deleted Sucessfully");</script>'; 


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
<p  style="font-size: 2rem; font-weight: 600;">Packages</p>
<form method="post" enctype="multipart/form-data "> 
<div class="search">
    <input type="text" class="inputBig" placeholder="Enter Package Name to search" name="txtSearch">
    <input type="submit" name="btnSearch" value="Search">
</div>
<div class="search2">
    <input type="text" class="inputBig" placeholder="Enter Package ID to search" name="txtSearch2">
    <input type="submit" name="btnSearch2" value="Search2">
</div>
<?php

    try {
        $conn=new PDO($db,$un,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query="SELECT  `id`, `package`, `period`, `place`, `cost`, `what_to_do`, `providing`, `description`,`Picture` FROM `packages`";                                                  //when writing a select query write down the columns that are necessary to acess data

         if(isset($_POST["btnSearch"]))                                     
         {$query= $query."where package like'%".$_POST["txtSearch"]."%'";}    

         if(isset($_POST["btnSearch2"]))                                     
         {$query= $query."where id like'%".$_POST["txtSearch2"]."%'";} 
                                                                           
         
        $result=$conn->query($query);
        
     
echo '<table class="table table-striped">';
echo'<tr> <th> ID </th> <th>Package</th> <th> Period</th> <th>Place</th> <th> Cost</th> <th>Accomodations</th>  <th>Providing</th> <th>Description</th><th>Picture</th>
<th>Edit</th> <th> Delete</th></tr>';
$i=0;
foreach($result as $row)//for each column we add rows(below)

{echo'<tr>';
    echo '<td> <input type="hidden" 
    name="pId[]" value="'. $row[0].'">
    '. $row[0].'</td>';
echo'<td><input type="hidden" name="pName[]" value="'. $row[1].'">'. $row[1].'</td>';
echo'<td><input type="hidden" name="pPeriod[]" value="'. $row[2].'">'. $row[2].'</td>';
echo'<td><input type="hidden" name="pLocation[]" value="'. $row[3].'">'. $row[3].'</td>';
echo'<td><input type="hidden" name="pCost[]" value="'. $row[4].'">'. $row[4].'</td>';
echo'<td><input type="hidden" name="pPlace[]" value="'. $row[5].'">'. $row[5].'</td>';
echo'<td><input type="hidden" name="pProvide[]" value="'. $row[6].'">'. $row[6].'</td>';
echo'<td><input type="hidden" name="pDescrip[]" value="'. $row[7].'">'. $row[7].'</td>';
echo'<td><img src="'.$row[8].'" width="120px" height="120px"></td>';
echo'<td><button name="btnEdit" type="submit" value="'.$i.'" >Edit</button></td>';
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