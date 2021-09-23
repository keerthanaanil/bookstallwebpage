<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Book sale</title>
    <style type="text/css">
      .main{
    background-color:seagreen;
    border-style: solid;
    text-align: center;
    }
    </style>
    </head>
    <body>
      <div class="main">

      <h1>HAN BOOK STALL WELCOMES YOU</h1>
<b>NAME : </b> <?php echo $_POST["name"]; ?><br>
<b>AGE : </b> <?php echo $_POST["age"]; ?><br>
<b>GENDER : </b> <?php echo $_POST["gender"]; ?><br>
<b>CONTACT : </b> <?php echo $_POST["mob"]; ?><br>

<b>E-MAIL : </b> <?php echo $_POST["email"]; ?><br>
<hr>
<b>BOOK NAME : </b> <?php echo $_POST["bname"]; ?><br>
<b>AUTHOR NAME : </b> <?php echo $_POST["aname"]; ?><br>
<b>PRICE : </b> <?php echo $_POST["price"]; ?>
<?php
if(isset($_POST["lang"])){
  $lang = $_POST['lang'];
  if($lang=="Malayalam"){
    echo "<br><b>LANGUAGE : </b>Malayalam";
  }
  elseif($lang=="English"){
    echo "<br><b>LANGUAGE : </b>English";
  }
  elseif($lang=="Hindi"){
    echo "<br><b>LANGUAGE : </b>Hindi";
  }
  elseif($lang=="Tamil"){
    echo "<br><b>LANGUAGE : </b>Tamil";
  }
  elseif($lang=="Kannada"){
    echo "<br><b>LANGUAGE : </b>Kannada";
  }
  elseif($lang=="Others"){
    echo "<br><b>LANGUAGE : </b>Others";
  }
}
   ?><br>
<b>DATE : </b> <?php echo $_POST["date"]; ?><br>
<b>BOOK CATEGORY : </b> <?php echo $_POST["cat"]; ?><br>

<h5>Thank You</h5>
<h6>Visit again</h6>



    
    </div>
 <footer class="footer">
    <div>
      <h3></h3><h6><em>have a nice day !</em></h6>
    </div> 
  </footer>
    </body>
    </html>
