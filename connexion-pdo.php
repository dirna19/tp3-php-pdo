<?php
$hostnom = 'host=btssio.dedyn.io';
$usernom = 'SAFSAFN';
$password = '17122007';
$bdd = 'SAFSAFN_BLIBLIO2';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>