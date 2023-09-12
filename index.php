<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
echo "<table>";
for ($i = 1; $i < 6; $i++) {
    echo "<tr>" . " <td>" . "$i" . " </td>" . " <td>" . "<img src='./images/img_$i.jpg' alt=''>" . " </td>" . "</tr>";
}
echo "</table>";
?>
</body>
</html>