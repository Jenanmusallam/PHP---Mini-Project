<?php include 'array.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP</title>
      <style>
body{
 background-color: #455c60;
}
</style>
</head>
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
<h1 class="text-center text-light p-5">Dashboard page</h1>
 <?php
 $count = count($dataStudent);
 echo "<br> <h3 class='text-center text-info'>The Total Number of Students : ".$count."</h3> <br>";
?>
<div class="container-fluid">
  <div class="row">
<table class="table">
  <thead>
    <tr class="table-light">
    <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Project Completed</th>
      <th scope="col">Project Completed</th>
    </tr>
  </thead>
  <tbody>
  
<?php 
 for($i=0;$i<count($dataStudent);$i++){
 $id=array($dataStudent[$i]['id']);
 $name=array($dataStudent[$i]['name']);
 echo '<tr class="table-info">';
foreach($id  as $k  => $v){
   echo '<th scope="row">'.($v+1).'</th>';
}
foreach($name  as $k  => $v){
  echo '<th scope="row">'.$v.'</th>';
}  
 for($j=0;$j<count($dataStudent[$i]['projects']);$j++){
 if($dataStudent[$i]['projects'][$j]['is_compleated']=='yes'|| $dataStudent[$i]['projects'][$j]['is_compleated']=='yes')
 {  $project=array($dataStudent[$i]['projects'][$j]['project_name']);
     foreach($project as $k  => $v){
     echo '<td  scope="row">'.$v.'</td>';
     }
    }
else{
  echo '<td  scope="row"> Not Completed </td>';
}
}
echo '</tr>';

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