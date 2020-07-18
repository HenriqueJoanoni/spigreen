<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/images/tshirt.svg" width="31" height="31" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/bootstrap.css">
    <title>Spigreen Store</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">
    <a href="<?= $base; ?>" class="navbar-brand">
        <img src="<?= $base; ?>/assets/images/tshirt.svg" alt="logo lojinha" width="150" height="30">
    </a>
    <h5> Spigreen Store</h5>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav mr-5">
            <li class="nav-item">
                <a class="nav-link" href="<?= $base; ?>/clients-insert">Cadastrar Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $base; ?>/products-insert">Cadastrar Produtos</a></a>
            </li>
        </ul>
    </div>
</nav>
<script type="text/javascript" src="<?= $base; ?>/assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?= $base; ?>/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= $base; ?>/assets/js/app.js"></script>
</body>
</html>
