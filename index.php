<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html"Studentenportaal
<head>
    <title>Studentenportaal</title>
    <link rel="stylesheet" media="all" href="/public.css" />
</head>
<body>

<?php include ('C:\Users\wesle\Documents\School\Kwartiel 2.1\Project Online\Online\globe_bank\public_header.php'); ?>


<h1>Inleveren voor studenten</h1>
<p>
    <div>
    <form action="/index.php">
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
    Selecteer de opdracht: <input type="file" name="opdracht" required><br>
    <br>
    Geef een samenvatting van het gemaakte werk en het bedrijf waar je de opdracht hebt gemaakt.<br>
    <textarea rows="10" cols="50" name="samenvatting" required> </textarea> <br>
    <br>
        <input type="submit" value="Inleveren"

</form>
</div>


</p>

</body>
</html>