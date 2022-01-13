<?php
if (isset($_GET['anno'])) {
    echo "isset";
   if ($_GET['anno'] == 2016){
       header("Location: mainChoice.html");
   } else {
       header("Location: mainChoiceMagistrale.html");
   }
} else {
    echo "Scegli un opzione";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylemain.css">
    <link rel="icon" href="img/16.png" type="image/jpg"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Generatore</title>
</head>
<body>

<section>
    <div class="container  justify-content-center" id="buttonCont">
        <form action="firstChoice.php" method="get">
            <button id="L" type="submit" class="btn btn-secondary" name="anno" value="2020">Magistrale</button>
            <button id="R" type="submit" class="btn btn-secondary" name="anno" value="2016">Triennale</button>
        </form>
    </div>
</section>

<style>
    #buttonCont{
        min-height: 48vh; /*Il footer è alto 22 con padding 30 quindi 100 -52*/

    }
    #R{
        font-size: x-large;
        position: relative;
        margin-top: 24vh;
        height: 20vh;
        width: fit-content;
        min-width: 50vh;
        float: right;
    }
    #L {
        font-size: x-large;
        position: relative;
        margin-top: 24vh;
        height: 20vh;
        width: fit-content;
        min-width: 50vh;

    }

</style>

<div id="endCard">
    <div class="d-flex justify-content-center" id="endCardText">
        <i class="material-icons">
            <h5 style="margin-right: 17px;color: lightgrey">share</h5>
        </i>
        <a href="https://github.com/AndreaDagg/GeneraDomandeAnalisi1.git" class="card-text"><h5
                    style=" font-family: 'Comic Sans MS'; color: lightgrey"> GitHub </h5></a>
    </div>
    <div class="d-flex justify-content-center" id="endVersion">
        <p> V. 2.0.0 </p>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
