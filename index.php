<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html"Studentenportaal>
<head>
    <title>Inleverpagina Studenten</title>
    <link rel="stylesheet" media="all" href="/public.css" />
</head>
<body>



<?php include ('public_header.php'); ?>


<p>
    <div id="main">
    <h1>Inleveren voor studenten</h1>
    <form action="inleveren.php" method="post" enctype="multipart/form-data">
     Studiejaar:<br>
    <input type="radio" name="studiejaar" value="2016-2017" required> 2016-2017<br>
    <input type="radio" name="studiejaar" value="2017-2018" required> 2017-2018<br>
    <input type="radio" name="studiejaar" value="2018-2019" required> 2018-2019<br>
    <br>
    Studierichting:<br>
    <input type="radio" name="studierichting" value="business" required> Business<br>
    <input type="radio" name="studierichting" value="software_engineering" required> Software Engineering<br>
    <input type="radio" name="studierichting" value="itsm" required> IT Service Management<br>
    <br>
    Productnaam:<br>
    <input type="text" name="productnaam" required><br>
    <br>
    Bedrijfsnaam:<br>
    <input type="text" name="bedrijfsnaam" required><br>
    <br>
    Soort opdracht:<br>
    <input type="radio" name="soort_opdracht" value="stage" required> Stage opdracht <br>
    <input type="radio" name="soort_opdracht" value="afstudeer" required> Afstudeer opdracht <br>
    <br>
    Selecteer de opdracht: <input type="file" name="InleverenOpdracht" required id="InleverenOpdracht"><br>
    <br>
    Geef een samenvatting van het gemaakte werk en het bedrijf waar je de opdracht hebt gemaakt.<br>
    <textarea rows="10" cols="75" name="samenvatting" required> </textarea> <br>
    <br>
        <input type="submit" class="button_inleveren" value="Inleveren">

</form>
</div>

<?php
$target_dir = "uploads";
$target_file = $target_dir . basename(($_FILES['InleverenOpdracht']["name"]));
$uploadOk = 1;
$fileFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if the file already exists
if (file_exists($target_file)) {
    echo "Bestand bestaat al";
    $uploadOk = 0;
} else {
    $uploadOk= 1;
}
?>


</p>

<?php include ('public_footer.php'); ?>
</body>
</html>