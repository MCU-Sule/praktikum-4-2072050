<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Puji Mei Incriana Sihombing 2072050">
    <title>Chess Board</title>
</head>
<body>
    <table border="1" cellspacing="1" cellpadding="1" width="200" height="200">
        <?php for ($row = 1; $row <= $_POST["textUkuran"]; $row++) : ?>
            <tr> 
                <?php for ($col = 1; $col <= $_POST["textUkuran"]; $col++) : ?>
                    <?php if ( ($row + $col) % 2 == 1) { ?>
                        <td bgcolor="white"></td>
                    <?php } else if( ($row + $col) % 2 == 0) { ?>
                        <td bgcolor="black"></td>
                    <?php } ?>    
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>