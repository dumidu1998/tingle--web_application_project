<html>
  <head>
    <title>Tingle-Women's</title>
    <link rel="stylesheet" type="text/CSS" href="../css/catstyle.css">
  </head>
<body>
<?php 
  require_once('connect.php');
  session_start();
  include('navbar.php');
  include('sidenavbar.php');
?>
  <center><h1>Women's Clothing</h1></center>
  <div class="content">  
    <?php           
    $path='../images/';
    $ex='.jpg';
    $sql="SELECT * FROM item where iCategory=2 AND iSubcategory=3";
    $result=$connection->query($sql); 
    $count=0;
    while($row=$result->fetch_assoc()){
      if($count%4==0){
        echo "<div class='row'>";
      }
      $id=(string)$row['itemId'];
      $name=$row['iName'];
      $cat="asd";
      $count++;
      $button="<a href='item.php?id=".$id."'><button value='ddfa' class='buynowbutton'>Buy Now</button></a>";
      //echo $name;
      echo "<div class='column'><div class='item'><h3>".$name."</h3>
      <p><img class='itemimg' src='".$path.$id.$ex."'></p><p>".$button."</p></div></div>";          
      //echo "$count";
      if($count%4==0){
        echo "</div>";
      }
    }
  ?>        
  </div>
  </body>
</html>