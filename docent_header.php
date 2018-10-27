<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="public.css" />
</head>
<body>

<header>
    <h1>
        <img src="pictures/SaxionLogo.png" width="190" height="80" alt="" />
    </h1>
    <form action="index.php">
        <div class="logout">
            Welkom <?php echo $_POST["gebruikersnaam"];?><br>
            <br>
            <input type="submit" name="uitloggen" value="Uitloggen" class="button_inloggen">
        </div>
    </form>
</header>



