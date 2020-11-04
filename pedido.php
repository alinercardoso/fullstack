<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fullstack";

//criando a conexão

$conn = mysqli_connect($servername, $username, $password, $database);

//testando a conexão

if(!$conn){
    die("A conexão ao DB falhou: ". mysqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <title>Full stack Eletro</title> 
        <link rel="stylesheet" type="text/CSS" href="./CSS/Estilo.css">
        <script src="./js/funcoes.js"></script>


    </head>

    <body>

    <!--Menu-->
    <?php
        include('menu.html');
    ?>

        <main>
            <h1>Pedidos</h1>
            <hr>
            <section id="formulario_pedido">
                <h2>Dados do Pedido</h2>

                <form method = "post" action ="">  
                    <h4>Cliente</h4> 

                    <label>Nome:</label>
                    <input type="text" name = "nome_cliente" style="width:600px;">
                        
                    <label>Email</label>
                    <input type="email" name = "email" style="width:600px;">

                    <label>Telefone</label>
                    <input type="tel" name = "telefone">

                    <h4>Endereço de Entrega</h4>

                    <label>Rua</label>
                    <input type="text" name = "end_rua"> 

                    <label>N°</label>
                    <input type="text" name = "end_num">

                    <label>Bairro</label>
                    <input type="text" name = "end_bairro">

                    <label>CEP</label>
                    <input type="text" name = "end_cep">

                    <label>Cidade</label>
                    <input type="text" name = "end_cidade">

                    <label>Estado</label>
                    <input type="text" name = "end_estado">

                    <h4> Produtos </h4>

                    <label>Descrição</label>
                    <input type = "text" name="nome_prod">

                    <label>Valor</label>
                    <input type= "int" name="valor_unit">

                    <label>Quantidade</label>
                    <input type= "number" name="quantidade">

                    <label>Valor Total</label>
                    <input type= "int" name="valor_total">

                    <br>
                    <input onclick="confirmarenvio()" name = "submit" type="submit" value="Enviar Pedido">

                                                         
                </form>
            </section>

        </main> 
        
        <br><br><br>

        <footer id="rodape">
            <p>Formas de Pagamento</p>
            <img width="25%" src="Images/forma-de-pagamento.png" alt="Formas de Pagamento">
            <p>&copy;Full Stack Eletro</p>
            
        </footer>
    
    </body>
</html>

