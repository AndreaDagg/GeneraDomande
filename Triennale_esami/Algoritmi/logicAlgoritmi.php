<?php
session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 7;
$dbStruttureDati = array("");
$dbGrafi = array("Definizione di Grafo", "Grafo orientato e non orientato", "grafo completo, connesso e componenti", "Rappresentazione di un grafo in memoria", "Grado di un grafo", "Grado di un vertice", "Cammino in un grafo", "Complessità di un grafo e dei veritici InDegree OutDegree", "Grafo sparso e denso", "Grafo Bipartito","cammino e lunghezza del cammino di un grafo","cardinalita' e comlessita' di un grafo","grafo denso, sparso e cosa ci dicono","grafo pesato e multigrafo","processo ricerca in un grafo","BFS cammino minimo","DFS e BFS struttura dati unsata","Cicli di un grafo e DAG","Orginamento Topologico");
$dbAlberi = array("Proprieta' di un albero","Radice Foglia e grado di un nodo","profondita', livello e altezza di un albero","Albero binario - pieno","Numero di foglie di un albero altezza e nodi interni albero k-ario","Rappresentazioen albero binairio in array","Visite degli alberi e proprieta'","Heap, Proprieta' costo delle operazioni I,R,C","Algorimto cancellazioen heap","Altezza Heap DIM","BST, proprieta'","Costo operazioni BST perche'","Inserimento BST Canc BST, Ricerca BST","Ricerca Min Max BST","Come si chiamano i nodi con lo stesso padre?","Cos'e' uyna path? e qual e' la lunghezza di path","Altezza albero con un nodo e senza questo?","Se esiste una path (a,b) come si chiama a per b e viceversa? e cosa e' a per b?","Definizione ricorsiva di albero","componenti di un nodi di un BST","Proprieta RB-T","a cosa servono e quanto costano le rotazioni?");
$dbComplAnal = array("");
$dbOrdinamento = array("");
$dbProgDin = array("divide et impera e DP","ZAINO & come ricostruire la soluzione & Alg-C","LCS & risoctruzione soluzione & Alg-C","Memoization","Prog Dinamica");
$dbPNpNpC = array("");
$dbGreedy = array("Greedy","Scheduling Intervalli senza peso","Problema del resto","Zaino Frazionario");

/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbStruttureDati;
            break;
        case 1:
            $dbCo = $dbGrafi;
            break;
        case 2:
            $dbCo = $dbAlberi;
            break;
        case 3:
            $dbCo = $dbComplAnal;
            break;
        case 4:
            $dbCo = $dbOrdinamento;
            break;
        case 5:
            $dbCo = $dbProgDin;
            break;
        case 6:
            $dbCo = $dbPNpNpC;
            break;
        case 7:
            $dbCo = $dbGreedy;
            break;

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainMIL.php');
