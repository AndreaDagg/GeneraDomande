<?php

session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 7;
$dbInformSec = array("Obiettivi Information Security", "Proprieta' sistema informatico sicuro", "Common Attacks", "A cosa serve la crittografia");
$dbAttack = array("Tipi di Attacchi", "Attacchi Passivi", "Attacchi Attivi", "Reply, Modifica ed Injection", "Spoofing / Impersonation Attack (IP Spoofing)", "Flooding Attack", "Session Hijaction", "Panoramica ARP", "Arp Poisoning / Spoofing", "MAC Flooding(Dos)", "Contromisure ArpSpoofing", "Contromisure MacFlooding", "Funzionalita' IP Protocol", "Ip Attack", "Ip Spoofing", "IP Sniffing", "Valenza Attacchi", "Dos Attack", "Ip Fragmantation Attack", "Firma di un pacchetto", "Funzionalita' TCP", "SYN Flooding", "TCP/IP spoofing (S.N.)", "Contromisure Tcp/Ip Spoofing", "TCP Session Hijaking", "IP Tracebar", "Differenza MITM & Spoofing Attack", "Sistema sicuro contro MITM", "Come accede ad una reta l'avversasrio?","Differenza Tcp/Ip spoofing & Tcp/Ip Hijaking");
$dbIntroCritt = array("Cosa vorrei dal mio schema?", "Incondizionatamente sicuro", "Cosa si usa per garantire CONFIDENZIALITA'", "Con cosa cifriamo un messaggio?", "CORRECTNESS di un messaggio", "KERCKHOFF'S Principle", "Cosa studiamo dell'avversario?", "Comportamento Passivo Avversario", "Comportamento Attivo Avversario", "CHOSEN-PLAINTEXT ATTACK", "CHOSEN CIPERTEXT ATTACK", "KNOW PLAINTEXT ATTACK", "CIPER ONLY ATTACK", "Attacco a forza bruta", "Sicurezza/Crittografia Computazionale","Quando uso crittografia simmetrica e quando asimmetrica","Cifratura ibrida");
$dbCifrari = array("A cosa serve un Cifrario?", "Cifrario di sostituzione", "Shift cipher & breaking", "sobstitution cipher", "pholyalphabetic substitution cipher & breaking", "OTP", "Perfect secret Enc. OTP", "Dimostrazione OTP e' sicuro", "Limitazioni OTP", "Perche' non si usa nella pratica OTP", "PRG & F. One Way", "Determinismo & non determinismo", "Perché OTP Computazionale non è sicuro contro attacchi attivi", "Come implementiamo otp nella realta'", "P.R.F", "Cpa Sec", "Mesaggi variabili CPA Sec", "P.R.P", "tabella xOR e proprieta'", "Schema crittografico completo", "Feistel Networks","PRP Feistel Networks","Cosa permette la Modalita' di operazione","Quali modalita' di operazioni sono parallelizzabili","Come cifro blocchi di lunghezza arbitraria","DES","Decryption DES","Decryption Modalita'","Schedulazione della Key","Iterazione DES","Attacchi DES","Varianti DES","Quali modalita' non utilizzano F^-1","Principio della Rete di Feistel","Provare che la decifratura DES e' possibile con le key invertite");
$dbH_M_K = array("Proprieta' Hash Function", "Breaking Hash Function","Lista funzioni Hash","cosa garantisce HASH","cosa garantisce MAC","MAC","Cifrare e autenticare un messaggio","Sicurezza MAC e Attacchi","Costruzione MAC","Proprietà MAC","Coem ci si scambia le KEY Simmetrica","Diffie Hellman","MITM DIFFIE HELLMAN","Cosa manca a Diffie Hellman","Log Discreto, Generatore & Fattorizzazione","Qual e' lo socopo di un Atta.Mac","CBC-MAC & HMAC","Come garantisco autenticità con Diffie Hellman","Come prevengo MITM in Diffie Hellman");
$dbIP_I_P = array("Cosa deve garantire Ipsec", "Protocolli IPSec","IkE","AH","ESP","IKe","IPS Architecture","cosa garantisce AH", "cosa garantisce ESP", "Transport/Tunnel Mode","Fase1 IKE", "Fase 2 IKE", "PublicKey","relazione Public Key Secret Key","Cosa genera un KGen Key.Asimmetrica","Math dietro RSA","Calcolare la dec di RSA","Zn & Zn^* R.S.A","Passi R.S.A","Perche' Oscar non puo' risalire a fi(n)?","La fattorizzazione e' l'unico modo per rompere R.S.A","Digital Signatures","Sender Autentication & Non Repudiation","Chosen - message Attack / No Message Attack e come evitarlo","R.S.A Signature","Da cosa è data la segretezza delle chiavi di sessione nell'IKE");
$dbCertificate_T_S = array("Certificati digitali","x.509","REvocare un certificato","Tls dove si trova","Tls Handshake","Pre master key","A cosa servono gli Hello Message");
$dbIDS = array("Cosa sono gli IDS","Quali componenti ha in IDS","Di che tipo possono essere gli IDS", "Quale modailita' puo' utilizzare un IDS","Dove si trova un IDS NetworkBased","Cosa usa un IDS HostBased");

/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbInformSec;
            break;
        case 1:
            $dbCo = $dbAttack;
            break;
        case 2:
            $dbCo = $dbIntroCritt;
            break;
        case 3:
            $dbCo = $dbCifrari;
            break;
        case 4:
            $dbCo = $dbH_M_K;
            break;
        case 5:
            $dbCo = $dbIP_I_P;
            break;
        case 6:
            $dbCo = $dbCertificate_T_S;
            break;
        case 7:
            $dbCo = $dbIDS;
            break;

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainSicurezza.php');
