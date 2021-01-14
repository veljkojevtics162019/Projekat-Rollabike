
<?php
include("../php/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content=" width=device-width" , initial-scale=1.0">
  <title>Roll a bike - bicikli i oprema po najboljim cenama!</title>
  <link rel="stylesheet" href="PocetnaStrana.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.css">
  <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      }
      else {
        x.className = "topnav";
      }
    }


  </script>

</head>

<style>
  .button {
    float: right;
    border-radius: 4px;
    background-color: rgb(55, 51, 95);
    color: rgb(255, 255, 255);
    width: 150px;
    height: 30px;
    margin-top: 10px;
  }

  .button:hover {
    background-color: rgb(248, 78, 78);
    color: rgb(0, 0, 0);
    transition: 500ms;
  }

  .p2 {
    float: left;
    margin-top: 10px;
    font-size: 21px;
    font-weight: 700;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }

  .slike {
    background-color: rgb(139, 139, 139);
    transition: transform .2s;
    width: 100%;
    height: auto;
  }

  .slike:hover {
    transform: scale(1.04);
  }
</style>

<body style="background-color: rgb(201, 201, 201);">
  <div class="container">
    <div class="row">
      <div class="col-2"><a href="PocetnaStrana.php"><img src="pngwing.com.png" class="logo"></a></div>
      <div class="col-5"><a href="PocetnaStrana.php"><img src="Untitled.png" class="centralimg"></a></div>
      <div class="col-5"><a href="../Register/Register.html"><img src="register.png" class="register"></a></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="hr1"></div>
      </div>
    </div>

    <div class="topnav" id="myTopnav">
      <a href="PocetnaStrana.php">Ponuda bicikala</a>
      <a href="../Oprema/Oprema.php">Ponuda opreme i delova</a>
      <a href="../Onama/Onama.html">O nama</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="hr2"></div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="row">

      <?php

        $sql = "SELECT * FROM proizvodi where kategorija = 1";
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);

        while($row = mysqli_fetch_assoc($result)) {
         
          echo '<div class="col-lg-4 p-4">
          <div class="row"><img src="'.$row['Slika'].'" class="slike"></div>
          <div class="row">
            <div class="col-lg-12">
              <h4><b>'.$row['Naziv'].'</b></h4>
            </div>
          </div>
          <div class="row">
            <div class="hr2"></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="p2">'.$row['Cena'].'rsd</p><a href="/korpa/dodaj-u-korpu.php?id='.$row['id'].'"><button class="button">Dodaj u korpu</button></a>
            </div>
          </div>
        </div>';
        }
       
        ?>

      </div>
    </div>


  </div>

  </div>
  <div class="row">
    <div style="padding: 0;" class="col-md-12">
      <div class="footer">
        <a href="PocetnaStrana.php"><img src="pngwing.com.png" class="logo"></a>
        <p>__RollABike__</p>
      </div>
    </div>
  </div>
</body>

</html>