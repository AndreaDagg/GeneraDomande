<?php
session_start();

if (!isset($_SESSION['NumIndex']) || $_SESSION['NumIndex'] == 0) {
    header("Location: noteAlgoritmi.php");
} else {
    $List = $_SESSION['NumIndex'];
    //annulla il valore dell'array nella sessione
    $_SESSION['NumIndex'] = 0;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styleAlgoritmi.css"
    <meta charset="UTF-8">
    <link rel="icon" href="../img/16.png" type="image/jpg"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Generatore</title>

</head>
<body>
<div id="title" class="container">
    <h2 id="h1Title"> Genera domande Algoritmi</h2>
</div>
<div class="container" id="box">
    <?php if (isset($_SESSION['result'])) { ?>
        <div class="alert alert-light" role="article" id="alert">
            <p id="boxText">
                <?php
                Print_r($_SESSION['result']);
                ?>
            </p>
        </div>
    <?php } else { ?>
        <div class="alert alert-light" role="article" id="alert">
        </div>
    <?php } ?>
    <form action="logicAlgoritmi.php" id="genrator">
        <button id="btnGenDom" type="submit" class="btn btn-dark btn-lg btn-block"><h2
                    style="font-family: 'Comic Sans MS'; ">Genera Domanda</h2></button>
    </form>
</div>
<!--<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Inserisci il nuovo argomento</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="Inserisci... ">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>-->
<div id="argF">
    <form action="logicAlgoritmi.php" method="get">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-primary" name="arg" value="0"><h4>
                            Strutture dati</h4>
                    </button>
                </div>
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-secondary" name="arg" value="1">
                        <h4> Grafi </h4>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-secondary" name="arg" value="2"><h4>
                            Alberi </h4>
                    </button>
                </div>

                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-primary" name="arg" value="3"><h4>
                            Complessita' & Analisi </h4>
                    </button>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-primary" name="arg" value="4"><h4>
                            Ordinamento </h4>
                    </button>
                </div>
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-secondary" name="arg" value="5"><h4>
                            Programmazione Dinamica </h4>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-secondary" name="arg" value="6"><h4>
                            Classe P & NP </h4>
                    </button>
                </div>
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-primary" name="arg" value="7"><h4>
                            Greedy </h4>
                    </button>
                </div>
            </div>

        </div>
    </form>

    <!--   COLLAPSE NOTE  -->

    <?php
    foreach ($List as $Arg => $Name) {
        ?>
        <div class="card" style="background-color: #343A40; color: lightgrey; margin-top: 1vh">
            <div class="card-header">
                <h2 class="mb-0">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-dark btn-lg btn-block" type="button" role="button" data-toggle="collapse"
                                aria-expanded="false"
                                data-target="#<?php print_r($Arg); ?>"
                        ><h3 style="font-family: 'Comic Sans MS';"><?php print_r($Arg); ?> </h3>
                        </button>
                    </div>
                </h2>
            </div>
            <div id="<?php print_r($Arg); ?>" class="collapse ">
                <div class="card-body">
                </div>
                <?php
                foreach ($Name

                as $value){ ?> <p> <?php print_r($value . "\n"); ?>
                <p> <?php } ?>
            </div>
        </div>
        <?php
    }
    ?>


    <div class="d-flex justify-content-center">
        <form id="close" action="https://www.google.it">
            <div class="col">
                <button id="btnARG" type="submit" class="btn btn-outline-success" value="ciao">
                    <i class="material-icons">
                        <h1>search</h1>
                    </i>
                    <p> Ricerca Google</p>
                </button>
            </div>
        </form>
        <form id="close" action="../../index.php">
            <div class="col">
                <button id="btnSe" type="submit" class="btn btn-outline-danger">
                    <i class="material-icons">
                        <h1>close</h1>
                    </i>
                    <p>Home</p>
                </button>
            </div>
        </form>
    </div>
</div>
<div id="endCard">
    <div class="d-flex justify-content-center" id="endCardText">
        <i class="material-icons">
            <h5 style="margin-right: 17px;color: lightgrey">share</h5>
        </i>
        <a href="https://github.com/AndreaDagg/GeneraDomandeAnalisi1.git" class="card-text"><h5
                    style=" font-family: 'Comic Sans MS'; color: lightgrey"> GitHub </h5></a>
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

