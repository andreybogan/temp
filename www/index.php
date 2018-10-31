<?php

require 'ConvertPdfToImg.php';
?>

<html>

<body>

<form action="/" enctype="multipart/form-data" method="post">

    <input id="templateDoc" name="fileName" type="file">

    <input type="submit" name="submit">

</form>

<a href="converted-0.jpg" download="">Загрузить</a>

</body>

</html>