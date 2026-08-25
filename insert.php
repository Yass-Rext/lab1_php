<?php
$a=$_POST['Ine'];
$b=$_POST['Pnom'];
$c=$_POST['Nom'];
$d=$_POST['Age'];
$e=$_POST['Genre'];
$f=$_POST['Campus'];
$g=$_POST['Speci'];



              

$connex = new mysqli("localhost","root","","inscription");
//$connexDist = new mysqli("192.168.1.22","root","","bACKUP_bdpromo4");

if ($connex -> connect_errno) {
  echo "Echec de connexion à la BD: ".$connex -> connect_error;
  exit();
}

$requete="insert INTO etudiant VALUES('$a','$b','$c','$d','$e','$f','$g')";

if ($connex->query($requete) === TRUE) {
  echo "Bonne insertion";
} else {
  echo "Erreur d'insertion: " . $sql . "<br>" . $connex->error;
}

$connex->close();

?>
<SCRIPT LANGUAGE="JavaScript">
      alert('Vous êtes maintenant inscrit officiellement.\n Essayez de vous connecter pour pouvoir faire des propositions  \n mais le compte ne sera actif qu après vérification de toutes vos informations personnelles!!!');
</SCRIPT>



<html>
<title>Recapitulatif</title>
<head>Resume</head>
<body> 
<FORM method="POST" action ="Recuperation_Exo1.php">
<center><h1>Bonjour bienvenue</h1></center>
<table aligne="center" width="495" height="338">
<tr><td><h3>RESUME</h3></td></tr>
<tr><td>
</br>
</br>
</br>
<?php
echo$a;
?>
</br>
<?php
echo$b;
?>
</br>
<?php
echo$c;
?>
</br>
<?php
echo$d;
?>
</br>
<?php
echo$e;
?>
</br>
<?php
echo$f;
?>
</br>
<?php
echo$g;
?>
</br>



</table>
</tr></td>
</FORM>
</body>
</html>