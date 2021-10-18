<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Puji Mei Indriana Sihombing">
    <title>Input Berhasil</title>
</head>
<body>
    <fieldset>
        <font align="center" size="2">
            <?php
                echo ("<hr>");
                echo ("<h2>Form input berhasil diterima</h2>");
                echo ("<p>Nama saya adalah " . $_POST["textNama"]. 
                ".<br>Email saya yaitu " . $_POST["textEmail"]. 
                ".<br>No hp saya adalah " . $_POST["textPhone"].
                ".<br>Hobby saya yaitu " . $_POST["textHobby"].
                ".<br>Deskripsi saya adalah " . $_POST["Desc"].".</p>");
                echo ("<hr>");
            ?>
        </font>
    </fieldset>
</body>
</html>