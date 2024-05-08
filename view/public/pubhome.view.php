
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ("../view/cdn/cssBS.php"); ?>
    <link rel="stylesheet" href="css/colours.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
<body>
    <?php
        if (isset($errorMessage)) {
            ?>
            <p class="h2"><?=$errorMessage?></p>
            <?php
        }
        ?>
        <p class="h1">HI</p>

<?php include ("inc/footer.public.php"); ?>
<?php include ("../view/cdn/jsBS.php") ?>
<script src="js/script.js"></script>
</body>
</html>