<?php $render('header'); ?>
<section>
    <div class="container contanier-fluid">
        <h1 class="text-center my-5">Cadastro de Produtos</h1>
        <form action="<?= $base; ?>/products-update/<?= $products['id_product']; ?>" method="POST">

            <?php if (!empty($flash)): ?>
                <div id="error_message" class="alert-danger"><?= $flash; ?></div>
            <?php endif; ?>

            <div class="form-group">
                <label for="product_name">Nome do Produto:</label>
                <input type="text" name="product_name" class="form-control" aria-describedby="product_name" value="<?= $products['product_name']; ?>">
            </div>

            <div class="form-group">
                <label for="product_price">Preço:</label>
                <input type="text" name="product_price" class="form-control" aria-describedby="product_price" value="<?= $products['product_price']; ?>">
            </div>

            <div class="form-group">
                <label for="product_description">Descrição:</label>
                <input type="text" name="product_description" class="form-control" aria-describedby="product_description" value="<?= $products['product_description']; ?>">
            </div>

            <div class="form-group">
                <label for="product_quantity">Quantidade:</label>
                <input type="text" name="product_quantity" class="form-control" aria-describedby="product_quantity" value="<?= $products['product_quantity']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</section>
