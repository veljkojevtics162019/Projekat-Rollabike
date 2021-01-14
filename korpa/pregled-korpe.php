<?php
include("../php/config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width" , initial-scale=1.0">
    <title>Roll a bike - bicikli i oprema po najboljim cenama!</title>
    <link rel="stylesheet" href="../Onama/Onama.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</head>
<style>
    .slike {
        width: 100%;
    }

    .slike:hover {
        transform: scale(1.5);
        transition: 1000ms;
    }
</style>

<body style="background-color: rgb(221, 221, 221);">
    <div class="container" style="min-height: 600px;">
        <div class="row">
            <div class="col-2"><a href="../PocetnaStrana/PocetnaStrana.php"><img src="../Onama/pngwing.com.png" class="logo"></a></div>
            <div class="col-5"><a href="../PocetnaStrana/PocetnaStrana.php"><img src="../Onama/Untitled.png" class="centralimg"></a></div>
            <div class="col-5"><a href="../Register/Register.html"><img src="../Register/register.png" class="register"></a></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="hr1"></div>
            </div>
        </div>

        <div class="topnav" id="myTopnav">
            <a href="../PocetnaStrana/PocetnaStrana.php">Ponuda bicikala</a>
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
        <h3>Vasa korpa:<br></h3>
        <?php

        if (isset($_SESSION['cart'])) {
            $ids = implode(',', $_SESSION['cart']);
            $sqlBicikli = "SELECT * FROM proizvodi where id in($ids)";

            $result = mysqli_query($con, $sqlBicikli);
            $count = mysqli_num_rows($result);

            $sumvalues = mysqli_query($con, "SELECT SUM('Cena') FROM proizvodi where id in($ids)");
            $row = mysqli_fetch_assoc($sumvalues);

            while ($row = mysqli_fetch_assoc($result)) {

                echo '<div class="display: flex;"><div class="col-md-2">
                  <div class="row"><img src="' . $row['Slika'] . '" class="slike"></div>
                  <div class="row">
                    <div class="col-md-12">
                      <h6><br>' . $row['Naziv'] . '</h6>
                    </div>
                  </div>
                  <div class="row">
                    <div class="hr2"></div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="p2">' . $row['Cena'] . 'rsd</p>
                    </div>
                  </div>
                  </div>
                </div>';

            }
        } else {
        ?>

            <h4>Korpa je prazna.</4>
            <?php

        }

            ?>
    </div>

    <div class="row">
        <div style="padding: 0;" class="col-md-12">
            <div class="footer">
                <a href="../PocetnaStrana/PocetnaStrana.php"><img src="../Onama/pngwing.com.png" class="logo"></a>
                <p>__RollABike__</p>
            </div>
        </div>
    </div>
</body>

</html>