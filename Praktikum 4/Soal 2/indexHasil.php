<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Puji Mei Indriana Sihombing">
    <title>Hasil</title>
</head>
<body>
<table style="background-color: Chartreuse" border="1" align="center" cellspacing="0" cellpadding="0">
            <tr>
                <td colspan="3" align="center">Kalkulator</td>
            </tr>
            <tr>
                <td Bgcolor="green">Angka pertama</td>
                <td Bgcolor="white" align="center">
                    <?php
                        echo ("". $_POST["textAngka1"]."");
                    ?>
                </td>
            </tr>
            <tr>
                <td Bgcolor="green">Angka kedua</td>
                <td Bgcolor="white" width="95" align="center">
                    <?php
                        echo ("" . $_POST["textAngka2"]. "");
                    ?>
                </td>  
            </tr>
            <tr>
                <td Bgcolor="green">Operator</td>
                <td Bgcolor="white" align="center">
                    <?php
                        echo ("" . $_POST["textOperator"]. "");
                    ?>
                </td>  
            </tr>
            <?php
            if (isset($_POST["Submit"])) {
                if ($_POST["textOperator"] == '+') {
                    $hasil = $_POST["textAngka1"] + $_POST["textAngka2"];
                }
                if ($_POST["textOperator"] == '-') {
                    $hasil = $_POST["textAngka1"] - $_POST["textAngka2"];
                }
                if ($_POST["textOperator"] == '*') {
                    $hasil = $_POST["textAngka1"] * $_POST["textAngka2"];
                }
                if ($_POST["textOperator"] == '/') {
                     $hasil = $_POST["textAngka1"] / $_POST["textAngka2"];
                }
                if ($_POST["textOperator"] == '%') {
                    $hasil = $_POST["textAngka1"] % $_POST["textAngka2"];
                }
            }
            ?>
            <tr>
                <td colspan="3" align="center">
                    <?php
                    echo "Hasil = $hasil";
                    ?>
                </td>
            </tr>
        </table>
</body>
</html>