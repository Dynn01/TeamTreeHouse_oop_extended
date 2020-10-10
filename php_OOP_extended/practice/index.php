<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php $txt ="<p><h2>tags yg boleh di tampikan</p>";
    $str=strip_tags($txt,'<h2>');
    echo $str; ?>

</body>
</html>