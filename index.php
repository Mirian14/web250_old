<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mirian Carvalho's Makeup Carmelia |WEB 250</title>
    <link rel="stylesheet" type="text/css" href="styles/default.css">
</head>

<body>
    <?php
        include_once("header.php");
    ?>

    <main>
        <?php
            $Page = $_GET['p'];
            if ($Page == '') 
                $Page = 'home.php';
            include($Page);
        ?>
    </main>

<?php 
    include_once('footer.php');
?>
</body>

</html>