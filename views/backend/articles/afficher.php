      
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        <title>article</title>
	</head>
	<body>

    <?php
include '../../../header.php';
?>
        <h1>Article</h1>
		<?php
		$mysqli = new mysqli("localhost", "root", "", "blogart23");
		$mysqli->set_charset("utf8");


            
        
		$requete = "SELECT * FROM article";
		$resultat = $mysqli->query($requete);
		// while ($ligne = $resultat->fetch_assoc()) {
		// 	echo $ligne['numArt'] . ' '.$ligne['dtCreArt'] . ' ' . $ligne['libTitrArt'] . ' ' . $ligne['libChapoArt'] . ' ' . $ligne['libAccrochArt'] . ' ' . $ligne['parag1Art'] .' ' . $ligne['libSsTitr1Art'] .' ' . $ligne['parag2Art'] .' ' . $ligne['libSsTitr2Art'] .' ' . $ligne['parag3Art'] .' ' . $ligne['libConclArt'] .' ' . $ligne['urlPhotArt'] .' ' . $ligne['numThem'] . '<br>';
		// print_r($ligne);
        // }
        // ?>
         <div class="tt"> 
        <?php
            $article = sql_select('article', 'dtCreArt,libTitrArt,libChapoArt,libAccroArt,parag1Art,libSsTitr1Art,parag2Art,libSsTitr2Art,parag3Art,libConclArt,urlPhotArt,numThem');
            var_dump($article);
        foreach ($article as $articles) {
        ?>
    <div class="wrapper">
    <?php
    echo $articles['dtCreArt'] . '<br>' . $articles['libTitrArt'] . '<br>' . $articles['libChapoArt']. '<br>' . $articles['libAccroArt']. '<br>' . $articles['parag1Art']. '<br>' . $articles['libSsTitr1Art']. '<br>' . $articles['parag2Art']. '<br>' . $articles['libSsTitr2Art']. '<br>' . $articles['parag3Art']. '<br>' . $articles['libConclArt']. '<br>' . $articles['urlPhotArt']. '<br>' . $articles['numThem'];
    
    ?>
    </div>
    <!-- <?php
// }

// 		$mysqli->close();



// $conn = mysqli_connect("localhost", "root", "", "blogart23");

// // Check connection
// if ($conn === false) {
//     die("ERROR: Could not connect. "
//         . mysqli_connect_error());
// }

// // Taking all 5 values from the form data(input)
// $libTitrArt = $_REQUEST['libTitrArt'];
// $libChapoArt = $_REQUEST['libChapoArt'];
// $libAccrochArt = $_REQUEST['libAccrochArt'];
// $parag1Art = $_REQUEST['parag1Art'];
// $libSsTitr1Art = $_REQUEST['libSsTitr1Art'];
// $parag2Art = $_REQUEST['parag2Art'];
// $libSsTitr2Art = $_REQUEST['libSsTitr2Art'];
// $parag3Art = $_REQUEST['parag3Art'];
// $libConclArt = $_REQUEST['libConclArt'];
// $urlPhotArt = $_REQUEST['urlPhotArt'];
// $numThem = $_REQUEST['numThem'];

// // Performing insert query execution
// // here our table name is college
// $sql = "INSERT INTO artcile  VALUES ('ARTICLE','libTitrArt,libChapoArt,libAccrochArt,parag1Art,libSsTitr1Art,parag2Art,libSsTitr2Art,parag3Art,libConclArt,urlPhotArt,numThem',
// '$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$urlPhotArt','$numThem')";

// if (mysqli_query($conn, $sql)) {
//     echo "<h3>data stored in a database successfully."
//         . " Please browse your localhost php my admin"
//         . " to view the updated data</h3>";

//     echo nl2br("\n$libTitrArt\n "
//         . "$libChapoArt\n $libAccrochArt" "$parag1Art\n "$libSsTitr1Art\n"$parag2Art\n "$libSsTitr2Art\n"$parag3Art\n "$libSsTitr3Art\n"$libConclArt\n "$urlPhotArt\n $numThem);
// } else {
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($conn);
// }

// // Close connection
// mysqli_close($conn);


// ?>
<a href="index.php">Revenir à la page</a>
		?> -->
	</body> 
</html>