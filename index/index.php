<?php
$json = file_get_contents("http://80.211.145.93/theater/");
$data = json_decode($json);
?>

<!DOCTYPE html>

<html>

<head>
    <title>50 nuances de film</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="simplegrid.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset='utf-8'/>
    <link rel="shortcut icon" href="imgonglet.png">
</head>

<body>
<header>

</header>

<main>
    <div class="grid grid-pad" style="padding: 0;">
        <div class="col-1-6">
            <div class="content">
                <img src="imgonglet.png" alt="Photo du groupe" width="450px"/>
            </div>
        </div>
        <div class="col-8-12" align="center">
            <div class="content">
                <div id="block" align="center">
                    <p>Bienvenue au cinéma</p>
                    <p>
                        <?php echo $data->{'name'};?>
                    </p>

                        <div class="button">
                            <button type="submit" name="button">Liste des séances</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-2-12">
            <div class="content">
                <img src="logo-iteracode.jpg" alt="Iteracode" width="250px"/>
            </div>
        </div>
    </div>

</main>

<footer>

</footer>

</body>

</html>