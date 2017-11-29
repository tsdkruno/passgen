<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"></link>
    </head>

    <body>
        <h1>
            Password generator
        </h1>

        <form action="passgen.php" method="post">
            <input type="text" name="broj_znakova"> broj znakova<br>
            <input type="checkbox" name="mala_slova"> mala slova<br>
            <input type="checkbox" name="brojevi"> brojevi<br>
            <input type="checkbox" name="posebni"> posebni znakovi<br>
            <input type="submit" value="Generiraj!">
        </form>
    </body>
</html>
