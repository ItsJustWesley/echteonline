<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html"Docentenpagina>
<head>
    <title>Docenten pagina</title>
    <link rel="stylesheet" media="all" href="/public.css" />
</head>
<body>

<?php include ('C:\Users\wesle\Documents\School\Kwartiel 2.1\Project Online\Online\globe_bank\public_header.php'); ?>


<p>
<div id="main">
    <?php echo $_POST["studiejaar"];?> <br>
    <?php echo $_POST["studierichting"];?> <br>
    <?php echo $_POST["productnaam"];?> <br>
    <?php echo $_POST["bedrijfsnaam"];?> <br>
    <?php echo $_POST["soort_opdracht"];?> <br>
    <?php echo $_POST["samenvatting"];?> <br>
    </div>
</p>

<?php include ('C:\Users\wesle\Documents\School\Kwartiel 2.1\Project Online\Online\globe_bank\public_footer.php'); ?>

</body>
</html>
