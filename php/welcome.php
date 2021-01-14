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
      }
      else {
        x.className = "topnav";
      }
    }
    </script>
</head>
<style>
  .button{
    margin-left: 42%;
    margin-bottom: 20%;
    margin-top: 5%;
    border-radius: 6px;
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    background-color: grey;
  }

  .button:hover{
    color: red;
    background-color: black;
    transition: 800ms;
    transform: scale(1.2);
  }
</style>


<body style="background-color: rgb(221, 221, 221);">
  <div class="container">
    <div class="row">
      <div class="col-2"><a href="../PocetnaStrana/PocetnaStrana.html"><img src="../Onama/pngwing.com.png" class="logo"></a></div>
      <div class="col-5"><a href="../PocetnaStrana/PocetnaStrana.html"><img src="../Onama/Untitled.png" class="centralimg"></a></div>
      <div class="col-5"><a href="../Register/Register.html"><img src="../Onama/register.png" class="register"></a></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="hr1"></div>
      </div>
    </div>

    <div class="topnav" id="myTopnav">
      <a href="../PocetnaStrana/PocetnaStrana.html">Ponuda bicikala</a>
      <a href="../Oprema/Oprema.html">Ponuda opreme i delova</a>
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

    <h2 style="padding-top: 20%; padding-left: 24%;">DOBRO DOSLI NA SAJT ROLLABIKE!</h2>
    <a href="/korpa/pregled-korpe.php?id='.$row['id'].'"><button class="button">Pregled Vase korpe</button></a>

  </div>

  <div class="row">
    <div style="padding: 0;" class="col-md-12">
      <div class="footer">
        <a href="PocetnaStrana.html"><img src="../Onama/pngwing.com.png" class="logo"></a>
        <p>__RollABike__</p>
      </div>
    </div>
  </div>
</body>

</html>