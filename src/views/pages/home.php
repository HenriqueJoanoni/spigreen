<?php $render('header'); ?>
<section>
    <div class="container container-fluid">
        <h1 class="text-center my-5">Listagem de Clientes e Produtos</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID Cliente</th>
                <th scope="col">Nome Cliente</th>
                <th scope="col">Telefone</th>
                <th scope="col">CPF Cliente</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $client['id_clients']; ?></td>
                    <td><?= $client['client_name']; ?></td>
                    <td><?= $client['phone']; ?></td>
                    <td><?= $client['document']; ?></td>
                    <td><?= $client['birth_date']; ?></td>
                    <td>
                        <a href="<?= $base; ?>/client-update/client_id=<?= $client['id_clients']; ?>" class="btn btn-primary">Editar</a>
                        <a href="<?= $base; ?>/client-delete/<?= $client['id_clients']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID Produto</th>
                <th scope="col">Nome Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id_product']; ?></td>
                    <td><?= $product['product_name']; ?></td>
                    <td>R$ <?= str_replace('.',',',$product['price']); ?></td>
                    <td><?= $product['description']; ?></td>
                    <td><?= $product['quantity']; ?></td>
                    <td>
                        <a href="<?= $base; ?>/products-update/product_id=<?= $product['id_product']; ?>" class="btn btn-primary">Editar</a>
                        <a href="<?= $base; ?>/products-delete/<?= $product['id_product']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>