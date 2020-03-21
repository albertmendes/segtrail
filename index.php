<?php
    $g = $_GET['id'];

    if(empty($g)) {
        include('include_full.php');
    }
    else {
        include('include_tours.php');
    }
?>
