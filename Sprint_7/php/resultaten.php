<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='../css/index.css'>'
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12" style="height:100px;">
        <?php

        include("navbar.php");
        ?>
      </div>
    </div>


    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td,
      th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>
</head>

<body class="eenFoto2">




  <div class="row">
    <div class="col-lg-3" style="height:500px;">
      <table style="width:20%; margin-left:10%;">
        <tr style="height:50px;">
          <th style="text-align:center;">
            <h3>Fase</h3>
          </th>

        </tr>
        <tr style="height:50px;">
          <td> <button type="button" class="btn btn-info"
              style="background-color:gray; border-color: white; width:200px; " data-toggle="collapse"
              data-target="#demo100">Oriënterende fase</button>
            <div id="demo100" class="collapse">
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo1">Sprint 1</button>
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo2">Sprint 2</button>
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo3">Sprint 3</button>
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo4">Sprint 4</button>
            </div>
          </td>

        </tr>
        <tr style="height:50px;">
          <td> <button type="button" class="btn btn-info"
              style="background-color:gray; border-color: white; width:200px; " data-toggle="collapse"
              data-target="#demo200">Beginner fase</button>
            <div id="demo200" class="collapse">
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo5">Sprint 5</button>
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo6">Sprint 6</button>
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo7">Sprint 7</button>
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo8">Sprint 8</button>
              <button type="button" class="btn btn-info"
                style="background-color:lightgray; border-color: white; width:200px; " data-toggle="collapse"
                data-target="#demo9">Sprint 9</button>
            </div>
          </td>
        </tr>



      </table>
    </div>

    <div class="col-lg-8" style="height:500px;">
      <div id="demo1" class="collapse">
        <h2>Sprint 1:</h2>
        <img style="width:100%;" src="../img/resultaten1.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>


      <div id="demo2" class="collapse">
        <h2>Sprint 2:</h2>
        <img style="width:100%;" src="../img/resultaten2.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>

      <div id="demo3" class="collapse">
        <h2>Sprint 3:</h2>
        <img style="width:100%;" src="../img/resultaten3.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>

      <div id="demo4" class="collapse">
        <h2>Sprint 4:</h2>
        <img style="width:100%;" src="../img/resultaten4.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>

      <div id="demo5" class="collapse">
        <h2>Sprint 5:</h2>
        <img style="width:100%;" src="../img/resultaten5.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>

      <div id="demo6" class="collapse">
        <h2>Sprint 6:</h2>
        <img style="width:100%;" src="../img/resultaten6.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>

      <div id="demo7" class="collapse">
        <h2>Sprint 7:</h2>
        <img style="width:100%;" src="../img/resultaten7.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>

      <div id="demo8" class="collapse">
        <h2>Sprint 8:</h2>
        <img style="width:100%;" src="../img/resultaten8.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>

      <div id="demo9" class="collapse">
        <h2>Sprint 9:</h2>
        <img style="width:100%;" src="../img/resultaten9.png">
        <h3>Gemiddelde: Voldoende</h3>
      </div>

    </div>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</body>

</html>