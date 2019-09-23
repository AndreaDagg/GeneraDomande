<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"
    <meta charset="UTF-8">
    <title>Generatore</title>

</head>
<body>
<div id="title" class="container">
    <h1 id="h1Title"> Genera domande Analisi 1 </h1>
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
    <form action="logic.php" id="genrator">
        <button id="btnGenDom" type="submit" class="btn btn-primary btn-lg btn-block">Genera Domanda</button>
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
    <form action="logic.php" method="get">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-primary" name="arg" value="0">Limiti
                    </button>
                </div>
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-secondary" name="arg" value="1">
                        Successioni
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-success" name="arg" value="2">Derivate
                    </button>
                </div>
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-danger" name="arg" value="3">Derivate II
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-warning" name="arg" value="4">Serie
                    </button>
                </div>
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-info" name="arg" value="5">Integrali
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="btnARG" type="submit" class="btn btn-outline-primary" name="arg" value="6">Eq.
                        Differenziali
                    </button>
                </div>
            </div>
        </div>
    </form>
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

