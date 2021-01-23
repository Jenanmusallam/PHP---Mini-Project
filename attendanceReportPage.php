<?php include 'array.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP</title>
</head>
<style>
body{
 background-color: #6f949a;
}
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
<a class="navbar-brand mr-5" href="index.php">Navbar Jenan </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
       <?php
                function menuList($name,$link) {
                echo  ' <li class="nav-item active mr-2 "><a class="nav-link text-info" href='.$link.'>'.$name.'<span class="sr-only">(current)</span></a> </li>';
                }
                $name = array("Home", "Attendance Report Page", "Dashboard page", "Academy Gallery");
                $link=array("index.php","attendanceReportPage.php","dashboardPage.php","academyGallery.php");
                array_map("menuList", $name,$link);
            ?>
    </ul>
  </div>
</nav>

<div class="container">
<h1 class="text-center text-light p-5">Attendance Report Page</h1>
<div class="container">
<table class="table">
  <thead>
    <tr class="table-light">
      <th scope="col">Student Name</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Hours Work</th>
    </tr>
  </thead>
  <tbody>

  <?php

 for($i=0;$i<count($dataStudent);$i++){ 
   
   for($j=0;$j<count($dataStudent[$i]['attendance']);$j++){
      $name=array($dataStudent[$i]['name']);
      $check_in=array($dataStudent[$i]['attendance'][$j]['check_in']);
      $check_out=array($dataStudent[$i]['attendance'][$j]['check_out']);
   //hour diff
      $chechIn=$dataStudent[$i]['attendance'][$j]['check_in'];
      $chechOut=$dataStudent[$i]['attendance'][$j]['check_out'];
      $hourdiff = round((strtotime($chechOut) - strtotime($chechIn))/3600, 1);


      if($hourdiff>=8)
      { 
         echo '<tr class="table-success">';
         foreach($name  as $k  => $v){
           echo '<th scope="row">'.$v.'</th>';
            }  
         foreach($check_in as $k  => $v){
            echo '<td  scope="row">'.$v.'</td>';
          }
         foreach($check_out as $k  => $v){
           echo '<td  scope="row">'.$v.'</td>';
         }
           echo '<td  scope="row">'.$hourdiff.' hours </td>';
          echo '</tr>';
      }
      elseif($hourdiff<8){
         echo '<tr class="table-danger">';
        foreach($name  as $k  => $v){
         echo '<th scope="row">'.$v.'</th>';
        }  
        foreach($check_in as $k  => $v){
         echo '<td  scope="row">'.$v.'</td>';
        }
        foreach($check_out as $k  => $v){
         echo '<td  scope="row">'.$v.'</td>';
        }
             echo '<td  scope="row">'.$hourdiff.' hours </td>';
         echo '</tr>';
      }
    }
  }
  ?>
  </tbody>
</table>
</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>