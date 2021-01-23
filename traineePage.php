<?php include 'array.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  <!-- Using Icon Laibrary(font awesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA=="
    crossorigin="anonymous" />

    <title>PHP</title>
    <style>

    @import "https://fonts.googleapis.com/css?family=Open+Sans:300,400";
  .firstinfo {
  display: flex;
  justify-content: center;
  align-items: center;
}

html {
  height: 100%;
}

body {
  font-family: 'Open Sans', sans-serif;
  width: 100%;
  min-height: 100%;

  background: #98c3c9;
  
  font-size: 16px;
  overflow: hidden;
}

*, *:before, *:after {
  box-sizing: border-box;
}

.content {
  position: relative;
  animation: animatop 0.9s cubic-bezier(0.425, 1.14, 0.47, 1.125) forwards;
}

.card {
  width: 500px;
  min-height: 100px;
  padding: 20px;
  border-radius: 3px;
  background-color: white;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
  position: relative;
  overflow: hidden;
      margin: auto;
}
.card:after {
  content: '';
  display: block;
 width: 196px;
    height: 308px;
  background: cadetblue;
  position: absolute;
  animation: rotatemagic 0.75s cubic-bezier(0.425, 1.04, 0.47, 1.105) 1s both;
}
.firstinfo {
  flex-direction: row;
  z-index: 2;
  position: relative;
}
.firstinfo img {
  border-radius: 50%;
  width: 120px;
  height: 120px;
}
.firstinfo .profileinfo {
  padding: 0px 20px;
}
.firstinfo .profileinfo h1 {
  font-size: 1.8em;
}
.firstinfo .profileinfo h4 {
  font-size: 1.2em;
  color: #009688;
  font-style: italic;
}


.soctal{
    justify-content: center;
    display: flex;
}
.fab {
    color: rgb(117, 117, 146);
       font-size: 1.8rem;
    margin: 0 0.5rem;
    padding-top: 5.2px;
}
.fab:hover{
     color: #009688;
}
@keyframes animatop {
  0% {
    opacity: 0;
    bottom: -500px;
  }
  100% {
    opacity: 1;
    bottom: 0px;
  }
}
@keyframes animainfos {
  0% {
    bottom: 10px;
  }
  100% {
    bottom: -42px;
  }
}
@keyframes rotatemagic {
  0% {
    opacity: 0;
    transform: rotate(0deg);
    top: -24px;
    left: -253px;
  }
  100% {
    transform: rotate(-30deg);
    top: -24px;
    left: -78px;
  }
}

    </style>
</head>
<body>

<div >

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
<h1 class="text-center text-light p-5">Trainees Page</h1>

<?php 
$id = $_GET['id'];
echo '<div class="content">';
echo '  <div class="card">';
echo '    <div class="firstinfo">';
echo '    <img src="'.$dataStudent[$id]['image'].'"/>';
echo '      <div class="profileinfo">';
echo '        <h1>'.$dataStudent[$id]['name'].'</h1>'; 
echo '<h5>'.$dataStudent[$id]['birthday'].'</h5>';

 for($j=0;$j<count($dataStudent[$id]['projects']);$j++){
 if($dataStudent[$id]['projects'][$j]['is_compleated']=='yes'|| $dataStudent[$id]['projects'][$j]['is_compleated']=='yes')
 {  
   $project=array($dataStudent[$id]['projects'][$j]['project_name']);
     foreach($project as $k  => $v){
     echo '<h4> Project Finish : '.$v.'</h4>';
     }
    }
else{
  echo '<h4></h4>';
}
 }
echo ' <div class="soctal">';
 echo ' <a href="'.$dataStudent[$id]['linkedin'].'" target="_blank"><i class="fab fa-linkedin"></i></a>';
 echo '<a href="'.$dataStudent[$id]['github account'].'" target="_blank"><i class="fab fa-github"></i></a>';
 echo '</div>';
echo '      </div>';
echo '    </div>';
echo '  </div>';
echo '</div>';
?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>