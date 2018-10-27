<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html"Docentenpagina>
<head>
    <title>Docenten pagina</title>
    <link rel="stylesheet" media="all" href="/public.css" />
</head>
<body>

<?php include ('docent_header.php'); ?>
	<br>

<div id="main">

<table>
<tr>
<th> ID </th>
<th> Studierichting </th>
<th> Studiejaar </th>
<th> Opdracht naam </th>
<th> Soort opdracht </th>
<th> Beschrijving opdracht </th>
<th> Organisatie naam </th>
</tr>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "online";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn-> connect_error){
	die ("connection failded:". $conn-> connect_error);
}

 $sql = "SELECT * FROM opdrachten";
 $result = $conn-> query($sql);
 
 if($result-> num_rows > 0){
	 while ($row = $result-> fetch_assoc()){
		 echo "<tr><td>" . $row["Opdracht_ID"] ."</td><td>" . $row["Studierichting"] . "</td><td>" . $row["Studiejaar"] . "</td><td>" . $row["Opdracht_naam"] . "</td><td>" . $row["Soort_opdracht"] . "</td><td>" . $row["Beschrijving_opdracht"] . "</td><td>" . $row["Organisatie_naam"] . "</td></tr>";
	 }
	 echo"</table>";
 }
 else{
	 echo "0 result";
 }
 $conn-> close();
?>


</table>
</div>

<br>

    
    
    
<?php include ('public_footer.php');?>



     


</body>
</html>
