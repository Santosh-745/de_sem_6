<?php


include 'config.php'

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <title>Hello, world!</title>
</head>
<style>
    ul {
        background-color: #eee;
        cursor: pointer;
    }

    li {
        padding: 12px;
    }

    body {
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('image/2.jfif');
        background-size: cover;
        font-family: 'Castoro', serif;
    }

    .navb {
        position: absolute;
        left: 30%;
        top: 30%;




    }

    .navb input {
        background-color: rgb(192, 187, 187);
        opacity: 0.8;

    }

    body {
        background-color: grey;
    }

    .container {

        height: auto;
        width: 100vw;
        position: absolute;
        top: 50%;
        left: 10%;

    }

    #btn {
        color: white;
        background-color: black;
        z-index: -2;
        background: linear-gradient(235deg, rgb(228, 163, 163), #060c21, rgb(155, 183, 190));
        border-color: white;
        border-radius: 15px;


    }


    .navbar {
        display: flex;
        background-color: none;
        float: right;
        color: white;

    }

    .navbar a {
        color: white;

    }

    .navbar a:hover {
        color: red;

    }

    .card {
        width: 10vw;
        float: left;
        margin: 22px;
        border: none;
        height: 33vh;
        width: 10vw;
        background-color: transparent;
        text-align: center;
    }
    #searchbox{
        border: solid rgb(245, 169, 216) 2px;
    }


    .ml5 {
  position: relative;
  font-weight: 300;
  font-size: 4.5em;
  color: #402d2d;
}

.ml5 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
  line-height: 1em;
}

.ml5 .line {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  height: 3px;
  width: 100%;
  background-color: #402d2d;
  transform-origin: 0.5 0;
}

.ml5 .ampersand {
  font-family: Baskerville, serif;
  font-style: italic;
  font-weight: 400;
  width: 1em;
  margin-right: -0.1em;
  margin-left: -0.1em;
}

.ml5 .letters {
  display: inline-block;
  opacity: 0;
}
#an{
    position: absolute;
    top: 10%;
    left: 32%;
}
   
</style>

<body>
    <div class="navbar">
        <nav id="nav" class="navbar navbar-expand-lg  ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#" style="color: rgb(9, 204, 51);;">HOME <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">CATAGORY</a>
                    <a class="nav-link" href="#">ABOUT</a>

                </div>
            </div>
        </nav>


    </div>
    <!-- -------------------------------------------------------- -->

    <h1 id="an" class="ml5">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters letters-left">VERTUAL </span>
    
    <span class="letters letters-right">GUIDE</span>
    <span class="line line2"></span>
  </span>
</h1>

    <!-- ------------------------------------------------------- -->

    <div>
        <form class="navb" class="form-inline my-4 my-lg-5">
            <input id="searchbox" class="form-control mr-sm-2" type="text" placeholder="Search Aynthing You Want..." aria-label="Search" style="width: 80vh; height:10vh; border-radius: 20px;"><br>
            <div id="searchlist"></div>
            <button id="btn" class="btn btn-danger my-2 my-sm-0" type="submit" style="position: absolute; left: 40%;top: 90% ; width:8vw; height:6vh;">Search</button>

        </form>
    </div>
    <div class="container">


        <?php


        // $query = "SELECT * FROM categories ORDER BY id asc";
        // $runquery = mysqli_query($connect, $query);
        // $num = mysqli_num_rows($runquery);

        // if ($num > 0) {
        //     while ($rowdata = mysqli_fetch_array($runquery)) {

        $iab_data = $conn->prepare("SELECT * FROM categories ORDER BY id asc");
        // $iab_data->bindParam(1, $category);
        $iab_data->execute();
        while ($rowdata = $iab_data->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="container-fluid">


                <div class="card">


                    <h4><a href="list.php?category=<?php echo $rowdata['Category'] ?>" style="color: white;">
                            <img src="<?php echo $rowdata['image'] ?>" class="card-img-top" id="image" style=" margin:26px; ;height:13vh; width:6vw;border-radius:50px;">
                            <?php echo $rowdata['Category'] ?>
                        </a></h4>

                </div>

            </div>
        <?php

        }
        ?>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
</body>
</html>


