<?php $render('header'); ?>
<section>
    <div class="container contanier-fluid">
        <h1 class="text-center my-5">Edição de Clientes</h1>
        <form action="<?= $base; ?>/client-update/<?= $clientes['id_clients']; ?>" method="POST">

            <div class="form-group">
                <label for="client_name">Nome:</label>
                <input type="text" name="client_name" class="form-control" aria-describedby="client_name" value="<?= $clientes['client_name']; ?>">
            </div>

            <div class="form-group">
                <label for="phone_client">Telefone:</label>
                <input type="text" name="phone_client" class="form-control" aria-describedby="phone_client" onkeyup="phoneMask(this)" value="<?= $clientes['phone']; ?>">
            </div>

            <div class="form-group">
                <label for="client_document">CPF:</label>
                <input type="text" name="client_document" class="form-control" aria-describedby="client_document" onkeypress="mascara(this,cpfMask)" value="<?= $clientes['document']; ?>">
            </div>

            <div class="form-group">
                <label for="client_birthDate">Data de Nascimento:</label>
                <input type="text" name="client_birthDate" class="form-control" aria-describedby="client_birthDate" onkeypress="mascaraData(this)" value="<?= $clientes['birth_date']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Editar Cadastro</button>
        </form>
    </div>
</section>
