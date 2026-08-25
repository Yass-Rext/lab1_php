<?php
$connex = new mysqli("localhost", "root", "", "inscription");

if ($connex->connect_error) {
    die("Échec de connexion : " . $connex->connect_error);
}

$requete = "SELECT * FROM etudiant";
$resultat = $connex->query($requete);

if (!$resultat) {
    die("Erreur dans la requête SQL : " . $connex->error);
}
?>

<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>

    <h1 align="center">Liste des étudiants inscrits</h1>

    <?php if ($resultat->num_rows > 0): ?>
        <table border="1" align="center">
            <tr>
                <th>INE</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Âge</th>
                <th>Genre</th>
                <th>Campus</th>
                <th>Spécialité</th>
            </tr>
            <?php while ($ligne = $resultat->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $ligne['INE']; ?></td>
                    <td><?php echo $ligne['Prenom']; ?></td>
                    <td><?php echo $ligne['Nom']; ?></td>
                    <td><?php echo $ligne['Age']; ?></td>
                    <td><?php echo $ligne['Genre']; ?></td>
                    <td><?php echo $ligne['Campus']; ?></td>
                    <td><?php echo $ligne['Specialite']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <h2 align="center">Aucun étudiant inscrit pour le moment.</h2>
    <?php endif; ?>

</body>
</html>

<?php
$connex->close();
?>
