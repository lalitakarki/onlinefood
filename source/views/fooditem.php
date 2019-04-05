<?php
require("header.php")
?>
<!DOCTYPE html>
<html>

<head>
  <title>Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link href="../../assets/css/bootstrap-glyphicons.css" rel="stylesheet">
  <script src="../../assets/js/jQuery.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <style>

    .img-thimbnail {
      background-color: grey;
      /* justify-content: center; */
      padding: 20px;
    }

    .img-resize {
      max-width: 60%;
      max-height: 60%;
      margin-bottom: 20px;
      margin-left: 60px;
    }

    .btn-menu {
      margin-bottom: 10px;
    }

    .menu-div{
      margin-top:10%;
    }
    body{
          background-color: #b76161;
    }
    .lead{color: #060606
    }
    .table {
        color: #06060;
  </style>
</head>
<body>
 <div class="container text-center bg-yellow">
    <h1><i><b>STOCK MANAGEMENT</b></i></h1><br>
    <h2><b>To know stock availability</b></h2>
    <div class="row text-center slideanim slide menu-div">
      <div class="col-sm-4">
        <div class="thumbnail img-thimbnail">
          <img src="food1.jpg" class="img-responsive img-resize" alt="food1">
          <div class="btn-group btn-group-lg">
          <!--<button type="" button" class="btn btn-primary btn-menu">NON VEGETARIAN</button>-->
          <a href="./table.php" class="btn btn-info" role="button">VEGETARIAN</a>
          </div>
          <p class="lead"><b>momo,pizza,chowmin,burger...etc</b></p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail img-thimbnail">
          <img src="food2.jpg" class="img-responsive img-resize" alt="food2">

          <div class="btn-group btn-group-lg">
            <!--<button type="" button" class="btn btn-primary btn-menu">NON VEGETARIAN</button>-->
           <a href="table1.php" class="btn btn-info" role="button">NON VEGETARIAN</a>
          </div>

          <p class="lead"><b>chicken,mutton,chicken chowmin...etc</b></p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail img-thimbnail">
          <img src="food3.jpg" class="img-responsive img-resize" alt="food2">
          <div class="center">
            <div class="btn-group btn-group-lg">
              <!--<button type="button" class="btn btn-primary btn-menu">BEVERAGES</button>-->
              <a href="#" class="btn btn-info" role="button">BEVERAGES</a>
            </div>
            <p class="lead" ><b>cold drink,ice cream,sHakes...etc</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
>