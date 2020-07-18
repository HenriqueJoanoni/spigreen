<?php $render('header'); ?>
<section>
    <div class="container contanier-fluid">
        <h1 class="text-center my-5">Cadastro de Clientes</h1>
        <form action="<?= $base; ?>/clients-insert" method="POST">

            <div class="form-group">
                <label for="client_name">Nome:</label>
                <input type="text" name="client_name" class="form-control" aria-describedby="client_name" autofocus>
            </div>

            <div class="form-group">
                <label for="phone_client">Telefone:</label>
                <input type="text" name="phone_client" class="form-control" aria-describedby="phone_client" onkeyup="phoneMask(this)">
            </div>

            <div class="form-group">
                <label for="client_document">CPF:</label>
                <input type="text" name="client_document" class="form-control" aria-describedby="client_document" onkeypress="mascara(this,cpfMask)">
            </div>

            <div class="form-group">
                <label for="client_birthDate">Data de Nascimento:</label>
                <input type="text" name="client_birthDate" class="form-control" aria-describedby="client_birthDate" onkeypress="mascaraData(this)">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</section>
