<?php
session_start();
if(!isset($_POST['searching'])){
    header("Location: index.php");
}
else{

    include 'connect.php';
 if($_POST['ptype']=='flat')
 {
    header("Location: display_flat.php");
 }
 if($_POST['ptype']=='hostel')
 {
    header("Location: hostel_display.php");
 }
 if($_POST['ptype']=='shop')
 {
    header("Location: shop_display.php");
 }
 if($_POST['ptype']=='PG')
 {
    header("Location: shop_display.php");
 }
}
