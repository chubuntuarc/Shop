<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shop | Sección de muestra</title>
    <!-- JQueryy -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include("super-nav.php"); ?>
    <?php include("search-nav.php"); ?>
    <div class="row">
        <div class="container">
            <h5 style="color:#8d6e63;">Sección muestra</h5>
        </div>
    </div>
    <?php include("section-catalog.php"); ?>
    <?php include("index-extra.php"); ?>
    <?php include("footer.php"); ?>

    <?php include("side-nav.php"); ?>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    <script type="text/javascript">
    $(".button-collapse").sideNav();
    </script>

</body>
</html>
