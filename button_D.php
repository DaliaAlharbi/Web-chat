<?php
$conn = new mysqli('localhost','root','','db_button');


if(isset($_POST['fo'])){
    $my_query = "INSERT INTO T_button (Forward) VALUES ('F')";
    $result = mysqli_query($conn, $my_query);
        echo "F";}
   
if(isset($_POST['ba'])){
    $my_query = "INSERT INTO T_button (Backwared) VALUES ('B')";
    $result = mysqli_query($conn, $my_query);
        echo "B";}

if(isset($_POST['ri'])){
    $my_query = "INSERT INTO T_button (Right_b) VALUES ('R')";
    $result = mysqli_query($conn, $my_query);
        echo "R";}
    
if(isset($_POST['le'])){
    $my_query = "INSERT INTO T_button (Left_b) VALUES ('L')";
    $result = mysqli_query($conn, $my_query);
        echo "L";}

if(isset($_POST['st'])){
        $my_query = "INSERT INTO T_button (Stop_b) VALUES ('S')";
        $result = mysqli_query($conn, $my_query);
            echo "S";

}
?>