<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shop | Producto de muestra</title>
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
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col s12 m5">
                <img style="border-radius:10px;box-shadow:grey 3px 3px 3px;width:100%;" src="https://images-na.ssl-images-amazon.com/images/I/519ZiKaTnHL.jpg" alt="">
            </div>
            <div class="col s12 m7">
                <h5 style="color:#8d6e63;">Producto muestra</h5>
                <p style="color:#757575;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <h5 style="color:#8d6e63;">$500.20</h5>
                <p style="color:#757575;">
                    Color:
                    <input class="with-gap" name="group3" type="radio" id="test5" />
                    <label for="test5">Blanco</label>
                    <input class="with-gap" name="group3" type="radio" id="test5"  />
                    <label for="test5">Negro</label>
                    <input class="with-gap" name="group3" type="radio" id="test5" checked />
                    <label for="test5">Azul</label>
                </p>
                <p style="color:#757575;">
                    Talla:
                    <input class="with-gap" name="group2" type="radio" id="test6" checked/>
                    <label for="test6">S</label>
                    <input class="with-gap" name="group2" type="radio" id="test6" />
                    <label for="test6">M</label>
                    <input class="with-gap" name="group2" type="radio" id="test6" />
                    <label for="test6">G</label>
                    <input class="with-gap" name="group2" type="radio" id="test6" />
                    <label for="test6">XL</label>
                </p>
                <p style="color:#757575;">Cantidad</p>
                <form action="#">
                    <p class="range-field">
                        <input type="range" id="test5" min="0" max="20" value="1" />
                    </p>
                </form>
                <p style="color:#8d6e63;font-size:15px;">Total: $500.30</p>
                <button class="btn waves-effect waves-light brown lighten-1" type="submit" name="action">Comprar
                </button>
            </div>
        </div>
    </div>
    <hr>
    <?php include("index-extra.php"); ?>
    <?php include("footer.php"); ?>

    <?php include("side-nav.php"); ?>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    <script type="text/javascript">
    $(".button-collapse").sideNav();
    </script>

</body>
</html>
