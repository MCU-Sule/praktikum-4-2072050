<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Puji Mei Indriana Sihombing 2072050">
    <title>Soal 1 Form Input</title>
</head>
<body>
    <form action="indexHasil.php" method="POST" target="_blank"><br>
        <fieldset>
            <h3 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Input</h3>
            <p align="center">
                Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" name="textNama" id="textNama"><br><br>
                Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" name="textEmail" id="textEmail"><br><br>
                Phone number&nbsp;&nbsp;:&nbsp;<input type="text" name="textPhone" id="textPhone"><br><br>
                &nbsp;Hobby&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" name="textHobby" id="textHobby"><br>
            </p>
            <table align="center">
                <tr>
                    <td>Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                    <td><textarea name="Desc" id="Desc" cols="21" rows="6"></textarea><br></td>
                </tr>
            </table>
            <p align="center">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" name="btnSend">
                <input type="reset" value="Reset">
            </p>
        </fieldset>

    </form>
</body>
</html>