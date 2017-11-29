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

        <?php
        
        function generiraj($broj_znakova, $is_mali, $is_brojevi, $is_posebni_znakovi) {
            $znakovi = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
            $mala_slova = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
            $brojevi = array('0','1','2','3','4','5','6','7','8','9');
            $posebni = array('!','?','.',',');

            $lozinka = '';

            $svi_znakovi = $znakovi;
            if ($is_mali) $svi_znakovi = array_merge($svi_znakovi, $mala_slova);
            if ($is_brojevi) $svi_znakovi = array_merge($svi_znakovi, $brojevi);
            if ($is_posebni_znakovi) $svi_znakovi = array_merge($svi_znakovi, $posebni);

            for ($i = 0; $i < $broj_znakova; $i++) {
                $lozinka .= $svi_znakovi[rand(0, count($svi_znakovi)-1)];
            }
            return $lozinka;
        }

        for ($i = 0; $i < 10; $i++) {
            echo(generiraj($_POST['broj_znakova'], isset($_POST['mala_slova']), isset($_POST['brojevi']), isset($_POST['posebni'])));
            echo('<br>');
        }

        ?>
    </body>
</html>
