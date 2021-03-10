<?php

include "config.php"

?>





<html>
    <head>
        <title>ADD REMOVE</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
    </head>
		
	
	<script>
	$(document).ready(function() {
    var html = '<tr><td><input class="form-control" type="text" name="step[]" required=""></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="Remove"></td></tr>';
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
	
	
   $("#add").click(function(e){ //on add input button click
        e.preventDefault();

        if(x < max_fields){ //max input box allowed
            //console.log('Step :- '+x);
		     //text box increment
            $("#table_field").append(html); //add input box
            x++; 
	  }
    });
   
    $("#table_field").on("click","#remove", function(e){ //user click on remove text
       
		e.preventDefault(); 
		$(this).closest('tr').remove(); 
		x--;
    })
});
	
    </script>
    <style>
        .text{
            height: 20vh;
            width: 20vw;
            margin: 25px;
        }
        #btn{
           color: red;
           background-color: black;
           position: absolute;
           left: 23%;
           top: 17%;
           border:solid red;
           text-decoration: none;
           text-transform: uppercase;
           height: 7vh;
           width: 9vw;
           font-size: 20px;
           font-family: 'Castoro', serif;
           
        }
    </style>
	<body>
     <!-- <div class="input_fields_wrap">
         <div><textarea  type="textbox"class="text" name="mytext[]"  id="text" cols="30" rows="10"></textarea></div><br>
    
        <button  class="add_field_button" id="btn" type="button" class="btn btn-dark">Add BOX</button>

	
     </div> -->
    <div class="container">
            <form class="insert-form" id="insert_form" method="post" action="">
            <hr>
            <h1 class="text-center"> Please Enter your Steps within max 10 feilds</h1>
            <hr>
            <div class="input_fields">
                <table class="table table-bordered" id="table_field">
                <tr>
                    <th>Steps</th>
                    <th>Add or Remove</th>
                </tr>
                <tr>
                    <td><input class="form-control" type="text" name="step[]" required=""></td>
                    <td><input class="btn btn-warning" type="button" name="add" id="add" value="Add"></td>
                </tr>
                </table>
                <center>
                <input class="btn btn-success" type="button" name="save" id="save" value="Save Data">
                </center>
            </div>
            </form>
    </div>
    <?php
        if (isset($_POST['save'])){
            $step = $_POST['step'];
            foreach ($step as $key => $value){
                $query = "INSERT INTO home_data(Step_1) VALUES ('".$value."')";                
            }
        }
    ?>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
</body>
</html>