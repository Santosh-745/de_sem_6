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

    <title>Hello, world!</title>
  </head>
  <style>

    *{
      color: black;
    }
    .t{
     height: auto;
     width: auto;
     text-align: center;
     font-weight: bold;
     font-size: 25px;
      
    }
    
    .t2{
     height: auto;
     width: auto;
     text-align: center;
      
    }
    
	body{
		font-family: 'Castoro', serif;
		background-color:rgb(192, 200, 211);
  }
     
 
	.navb a{
		color: white;
	}
  .bt{
    background-color:  rgb(90, 88, 88);
    color: white;
  }
  #tb{
    width:98vw;
    margin: 20px;
    padding: 20px;
  }
    
  </style>
  <body>
    <div class="navb">
    <nav class="navbar navbar-expand-lg bg-dark ">
     
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">catagory</a>
                <a class="nav-link" href="#">about</a>
                
            </div>
        </div>
    </nav>
    </div><br><br>
    <table id="tb" class="table table-bordered" style="border: solid white;"> 
        
          <tr class="tr">
            <!-- <th scope="col">ID</th> -->
            <th class="t" scope="col">Image</th>
            <th class="t" scope="col">Title</th>
            <th class="t" scope="col">Answered By</th>
            <th class="t" scope="col">Solution</th>
          </tr>
        
        <tbody>
  <?php
        $category = $_GET['category'];
        // echo $category;
        // $query = "SELECT * FROM home_data where title='.$category.'";
        // $result = $connect->query($query);
        $iab_data = $conn->prepare("SELECT * FROM home_data where title=? ");
                                        $iab_data->bindParam(1, $category);
                                        $iab_data->execute();
        $temp = 1;
        while ($rowdata = $iab_data->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
            <!-- <td><?php  $temp++?></td> -->
            <td class="t2">mark</td>
            <td class="t2"><?php echo $rowdata['title']?></td>
            <td class="t2"><?php echo $rowdata['Answered_by']?></td>
            <td class="t2"><a href="stap.php?id=<?php echo $rowdata['id']?>" ><button  class="bt" >Click Here</button></a></td>
          </tr>
        
        <?php  }
        ?>
        
          
        
        </tbody>
      </table>
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