<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Puji Mei Indriana Sihombing">
    <title>Soal 2 Form Input Kalkulator</title>
</head>
<body>
    <form action="indexHasil.php" method="POST" target="_blank">
        <table style="background-color: red" border="1" align="center" cellspacing="0" cellpadding="0">
            <tr>
                <td colspan="4" align="center">Kalkulator</td>
            </tr>
            <tr>
                <td Bgcolor="tomato">Angka pertama</td>
                <td><input type="text" name="textAngka1" id="textAngka1"></td>
            </tr>
            <tr>
                <td Bgcolor="tomato">Angka kedua</td>
                <td><input type="text" name="textAngka2" id="textAngka2"></td>  
            </tr>
            <tr>
                <td Bgcolor="tomato">Operator</td>
                <td><input type="text" name="textOperator" id="textOperator"></td>  
            </tr>
            <tr>
                <td colspan="4" align="center">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" name="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>