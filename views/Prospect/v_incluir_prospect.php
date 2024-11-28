
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Prospect</title>
        <link rel="stylesheet" type="text/css" href="../../libs/bootstrap/css/bootstrap.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container">
            <form class="form-singin" action="../../controllers/Prospect/c_incluir_prospect.php" method="POST">
            <div>
                <h5 class="form-signin-heading">Cadastro de Prospect</h5>
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input name="nome" id="nome" type="text" placeholder="Digite seu nome" autofocus class="form-control" required/>
                <label for="email">E-mail:</label>
                <input name="email" id="email" type="text" placeholder="Digite seu email" class="form-control" required/>
                <label for="celular">Celular:</label>
                <input name="celular" id="celular" type="text" placeholder="Digite seu celular" class="form-control" required/>
                <label for="facebook">facebook:</label>
                <input name="facebook" id="facebook" type="text" placeholder="Digite seu facebook" class="form-control" required/>
                <label for="whatsapp">whatsapp:</label>
                <input name="whatsapp" id="whatsapp" type="text" placeholder="Digite seu whatsapp" class="form-control" required/>
            </div>
            <button name = "Cadastrar" type="submit" class="btn btn-success">Cadastrar</button>
            <a href="../../index.php" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
        <p class="text-center text-danger">
            <?php
               if(isset($_SESSION['prospectSalvo'])){
                    echo $_SESSION['prospectSalvo'];
                    unset($_SESSION['prospectSalvo']);
               }else if(isset($_SESSION['erroProspectNovo'])){
                    echo $_SESSION['erroProspectNovo'];
                    unset($_SESSION['erroProspectNovo']);
               }
            ?>
        </p>
    </body>
</html>
