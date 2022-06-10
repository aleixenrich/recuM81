<?php

//dos variables que optindran el valor dels camps dentrada del login del nostre text html

$nom = $_POST[""];
$pass = $_POST[""];

//conexió a la base de dades (localhost base de dades user contrasenya)

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "nom de la base de dades";
$tipus = "";
//SELECT

$sql = "SELECT Usuaris.correu,Usuaris.contrasenya,Tipus.Tipus FROM Usuari INNER JOIN Tipus ON Usuaris.tipus_id=".$tipus." WHERE Usuaris.correu=' ".$mailEntra."'";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//resultat SELECT a la base de dades

$result = $conn->query($sql);


// num_rows ia va per defecte dins de la variable num_rows

?>
