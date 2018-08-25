<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

</head>
<body>
<script >alert("Silahkan Masukan Orang yang hadir lalu tekan enter");</script>
<form  method="post">
    <table>
        <tr>
            <td>
            <p>Masukan Orang yang hadir:</p>
            </td>
            <td>
            <input type="number"  name="total"   value="1">
            </td>
        </tr>
    </table>
    
 



</form>
<?php
error_reporting(0);
$joko = $_POST["total"];
function jabat($joko) {
    $jabatan = ($joko * ($joko - 1)) / 2;
    echo "Jumlah Jabat Tangan Yang Terjadi " . $jabatan;
};

jabat($joko);

?>
</body>
</html>