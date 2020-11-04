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

if (isset($_POST['nome_cliente']) && isset($_POST['cliente_email']) && isset($_POST['telefone']) && isset($_POST['end_rua']) && isset($_POST['end_num'])&& isset($_POST['end_bairro']) && isset($_POST['end_cep'])&& isset($_POST['end_cidade'])&& isset($_POST['end_estado']) && isset($_POST['nome_prod'])&& isset($_POST['valor_unit'])&& isset($_POST['quantidade']) && isset($_POST['valor_total'])){
     
    $nome_cliente = $_POST['nome_cliente'];
    $cliente_email = $_POST['cliente_email'];
    $end_rua = $_POST['end_rua'];
    $end_num = $_POST['end_num'];
    $end_bairro = $_POST['end_bairro'];
    $end_cep = $_POST['end_cep'];
    $end_cidade = $_POST['end_cidade'];
    $end_estado = $_POST['end_estado'];
    $telefone = $_POST['telefone'];
    $nome_prod = $_POST['nome_prod'];
    $valor_unit = $_POST['valor_unit'];
    $valor_total = $_POST['valor_total'];
    $quantidade = $_POST['quantidade'];

    $sql = "insert into pedido (nome_cliente, cliente_email, end_rua, end_num, end_bairro, end_cep, end_cidade, end_estado, telefone, nome_prod, valor_unit, valor_total, quantidade)
    values ('$nome_cliente', '$cliente_email', '$end_rua', '$end_num', '$end_bairro', '$end_cep', '$end_cidade', '$end_estado', '$telefone', '$nome_prod','$valor_unit', '$valor_total', '$quantidade')";
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
                    <input type="text" name = "nome_cliente" style="width:60%;">
                    <br><br>
                    <label>Email</label>
                    <input type="email" name = "cliente_email" style="width:60%;">
                    <br><br>
                    <label>Telefone</label>
                    <input type="tel" name = "telefone" style="width:30%;">
                    <br><br>
                    <h4>Endereço de Entrega</h4>
                    <br><br><br>
                    <label>Rua</label>
                    <input type="text" name = "end_rua" style="width:60%;"> 

                    <label>N°</label>
                    <input type="text" name = "end_num" style="width:30%;">
                    <br><br>
                    <label>Bairro</label>
                    <input type="text" name = "end_bairro" style="width:40%;">
                    <br><br>
                    <label>CEP</label>
                    <input type="text" name = "end_cep" style="width:40%;">
                    <br><br>
                    <label>Cidade</label>
                    <input type="text" name = "end_cidade" style="width:40%;">
                    <br><br>
                    <label>Estado</label>
                    <input type="text" name = "end_estado"style="width:40%;">
                    <br><br><br><br>
                    <h4> Produtos </h4>

                    <label>Descrição</label>
                    <input type = "text" name="nome_prod"style="width:80%;">
                    <br><br>
                    <label>Valor</label>
                    <input type= "int" name="valor_unit"style="width:25%;">
                    
                    <label>Quantidade</label>
                    <input type= "number" name="quantidade"style="width:25%;">
                    
                    <label>Valor Total</label>
                    <input type= "int" name="valor_total"style="width:25%;">
                    <br><br><br><br><br>
                    <br>
                    <input name = "submit" type="submit" value="Enviar Pedido">

                                                         
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

