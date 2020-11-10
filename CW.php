<!DOCTYPE html>
<html>
<head>
  <title> gamme-des voitures</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="monsite/css/auto.css">
</head>
<body>
   <header>
    <div id="entet">
       <h2 style="text-align: center; font-size:xx-large;"> Prét pour la route !</h2>
    <h1 style="text-align: center; font-size: xx-large;"> Location des voiture en Algerie vous accompagne </h1>
         <nav class="menu">
         
          
  <div class="container">
        <button class="btn "><a href="monsite/index.html"> ACCUEIL </a></button>
        <button class="btn "><a href="http://localhost/login.php"> CLIENT </a></button>
        <button class="btn "><a href="http://localhost/automobile.php"> AUTOMOBILE </a></button>
        <button class="btn"><a href="monsite/agence.html"> AGENCE </a></button>
        <button class="btn"><a href="monsite/contact.html"> CONTACT </a></button>
    </div>

       <img src="monsite/css/voitur.jpg" width="1260px" height="400 px">
      
    </div>
   </header>
     <div id="content">
      <div class="leftbox">
         <h2 style="text-align: center;">  Notre gamme de location de voiture</h2>
          <table border="3"
           cellpadding="1"
           cellspacing="1">
            <tr>
              <th> 
                 <img src="monsite/css/CLIO4.jpg" width="90%" height="200px">
                    <p style="font-size: 25px"> Catégorie A: </p>
                            <p> MARQUE:CLIO 4</p>
                             <font size="5">
        à partir de 
        <span>" 4500 DZD " par jour</span>
         
       </font>
     </p>
      <div class="icon-box-btn text-center">
      <ul class="clearfix">
        <font size="5">
         <p> 2018 Automatique Essence</p>
            
        </font>
            <li class="btnr" style="font-size: 25px"><a href="reserver.php"> Reserver</a></li>
              </th>
              </ul>
<?php
include 'database.php';
                 global $db ;
                 $sql="SELECT Disponiblite FROM reservation";
$result = $conn->query($sql);
/*if ($result==1) {

 echo "Reserved";
}
else{
  echo "Disponible";
}*/
if ($result->num_rows > 0) {
  // output data of each row

    echo "Disponiblite: " . $row["Disponiblitep"] ;
  }
 else {
  echo "0 results";
}
$conn->close();

 ?>
                <th> <img src="monsite/css/kia.jpg" width="90%" height="200px">
                    <p style="font-size: 25px"> Catégorie A :</p>
                          <p> MARQUE:KIA PICANTO</p>
                          
                          <font size="5">
        à partir de 
        <span> " 4500 DZD "par jour</span>
         
       </font>
     </p>
     <div class="icon-box-btn text-center">
      <ul class="clearfix">
        <font size="5">
         <p> 2018 Automatique Essence</p>
            
        </font>
            <li class="btnr" style="font-size: 25px"><a href="reserver.php"> Reserver</a></li>
      </ul>


      <?php
include 'database.php';
                 global $db ;
                 $sql="SELECT Disponiblite FROM reservation";
$result = $conn->query($sql);
/*if ($result==1) {

 echo "Reserved";
}
else{
  echo "Disponible";
}*/
if ($result ==1) {
  // output data of each row
   
    echo "Disponiblite: " .['Disponiblite'] ;
  }
 else {
  echo "0 results";
}
$conn->close();

 ?>
                </th>
                <th>
                  <img src="monsite/css/DACIA  SANDERO.jpg" width="90%" height="200px">
                     <p style="font-size: 25px"> Catégorie A : </p>
                           <p style="font-size: 15px"> MARQUE:DACIA SANDERO</p>
                           
                           <font size="5">
        à partir de 
        <span>"4500 DZD " par jour</span>
         
       </font>
     </p>
     <div class="icon-box-btn text-center">
      <ul class="clearfix">
        <font size="5">
           <p> 2018/ Automatique/ Essence</p>
            
          
        </font>
            <form method="POST" action="reserver.php">
            <input type="submit" name="Reserver" id="Reserver" value="Reserver">
            </form>
</ul>
<?php
if (isset($_post[Reserver])) {
$sql="SELECT Idvoit FROM voiture where Idvoit=3"
 
}
      
?>

                </th>
                     
            </tr>
             <tr>
              <th>
                <img src="monsite/css/ibiza seat.jpg" width="90%" height="200px">
               
                  <p style="font-size: 25px"> Catégorie B: </p>  
                          <p style="font-size: 15px"> MARQUE:IBIZA SEAT</p>
                          <p style="font-size: 15px"> COULEUR: ORANGE</p>
                            <font size="5">
           "à partir de "
          <span>5900 DZD "par jour</span>
          </font>
          </p>
          <div class="icon-box-btn text-center">
          <ul class="clearfix">
          <font size="5">
            <p >2016 / Manuelle / Essence</p> 
         
          </font>
           <li class="btnr" style="font-size: 25px"><a href=" reservation.html"> Reserver</a></li>
           </ul>
              </th>
              <th>
                 <img src="monsite/css/citroenc5.jpg" width="90%" height="200px">
                 <p style="font-size: 25px"> catégorie B:</p>
                          <p style="font-size: 15px"> MARQUE:CITROEN C5</p>
                          <p style="font-size: 15px"> COULEUR: GRIS</p>
                           <font size="5">
        "à partir de "
        <span>5900 DZD "par jour</span>
         
       </font>
     </p>
     <div class="icon-box-btn text-center">
      <ul class="clearfix">
        <font size="5">
            <p >2016/ Manuelle/ Essence</p> 
         
        </font>
              <li class="btnr" style="font-size: 25px"><a href="reservation.html"> Reserver</a></li>
      </ul>
              </th>
              <th>
                <img src="monsite/css/SYMBOL.jpg" width="90%" height="200px">
                    <p style="font-size: 25px"> Catégorie B : </p>
                            <p style="font-size: 15px"> MARQUE:SYMBOL</p>
                            <p style="font-size: 15px"> COULEUR: BLANC</p>
                             <font size="5">
        "à partir de "
        <span>5900 DZD "par jour</span>
         
       </font>
     </p>
     <div class="icon-box-btn text-center">
      <ul class="clearfix">
        <font size="5">
         
               <p >2016/ Manuelle / Essence</p> 
                
            
            
         
        </font>
             <li class="btnr" style="font-size: 25px"><a href="reservation.html"> Reserver</a></li>
      </ul>
       
              </th>
             </tr>
             <tr>
              <th>
                 <img src="monsite/css/audi a3.jpg" width="90%" height="200px">
                   <p style="font-size: 25px"> Catégorie C : </p>
                           <p style="font-size: 15px"> MARQUE:AUDI A3</p>
                           <p style="font-size: 15px"> COULEUR: ROUGE</p>
                            <font size="5">
        "à partir de "
        <span>14000 DZD "par jour</span>
         
       </font>
     </p>
     <div class="icon-box-btn text-center">
      <ul class="clearfix">
        <font size="5">
                  <p > 2018 /  Automatique / Diesel</p>
                   
               
        </font>
            <li class="btnr" style="font-size: 25px"><a href="reservation.html"> Reserver</a></li>
      </ul>
              </th>
              <th>
                <img src="monsite/css/Volkswagen.jpg" width="90%" height="200px">
                   <p style="font-size: 25px"> Catégorie C: </p>
                           <p style="font-size: 15px"> MARQUE:VOLKSWAGEN PASSAT CC</p>
                           <p> COULEUR: NOIR</p>
                            <font size="5">
        "à partir de "
        <span>14000 DZD "par jour</span>
         
       </font>
     </p>
     <div class="icon-box-btn text-center">
      <ul class="clearfix">
        <font size="5">
         
               <p > 2018/ Automatique/ Diesel </p>
                 
         
        </font>
              <li class="btnr" style="font-size: 25px"><a href="reservation.html"> Reserver</a></li>
      </ul>
       
              </th>
              <th>
                <img src="monsite/css/R4S.jpg" width="80%" height="188px">
                  <p style="font-size: 25px"> Catégorie D : </p>
                           <p style="font-size: 15px"> MARQUE: RENAULT R4</p>
                           <p style="font-size: 15px"> COULEUR: ROUGE</p>
                            <font size="5">
        "à partir de "
        <span>3000 DZD "par jour</span>
         
       </font>
     </p>
     <div class="icon-box-btn text-center">
      <ul class="clearfix">
        <font size="5">
          <p> 2010 / Manuelle / Essence</p>
          
        </font>
              <li class="btnr" style="font-size: 25px"><a href="reservation.html"> Reserver</a></li>
      </ul>

              </th>
             </tr>
            
            
          </table>
              

        
      </div>
      
     </div>
     <div id="footer">

                              
                                   <p style="text-align: center;">Contactez le service clientèle de Gol . Nos conseillers sont à votre disposition pour toute information nécessaire : 
                                  <br>
                                  <strong> 000435413166 </strong>
                                     <p style="text-align: center;"> Si vous souhaitez contacter notre agence en particulier, nous vous invitons à consultez l'adresse : </p>
                                          <p style="text-align: center;"> Bordj Bou Arreridj,Ras EL Oued</p>
                                                </br>
                                            </div>
         
</body>
</html>
