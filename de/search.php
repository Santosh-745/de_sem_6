
<?php

include 'config.php'

if(isset($_POST["query"]))
{
    $output = '<ul class="list-unstyled">';
    // $query = ""
    $iab_data = $conn->prepare("SELECT * FROM categories WHERE Category LIKE '%".$_POST["query"]."%' ");
    // $iab_data->bindParam(1, $category);
    $iab_data->execute();
    if($iab_data->rowCount()>0){
        while ($rowdata = $iab_data->fetch(PDO::FETCH_ASSOC)) {
                    $output .= '<li>'.$rowdata["Category"].'</li>';
        }
    }
    else{
        $output .= '<li>Result Not found</li>';
    }
    $output .='</ul>';
    echo $output;

    ?>