<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test site</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/map.js"></script>
</head>
<body>
    <?php 
        include('core/map.php'); 
        render_map(create_map(30, 40));

        render_neighbors(4,4);
    ?>
</body>
</html>