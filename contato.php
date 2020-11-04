<?php   //conexão
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
            <h1>Contato</h1>
            <hr>

            <section id="contato">
                <div class="contatos">
                    <img src="./Images/email-icone.png" alt="icone email" width="40px" >
                    <p>contato@fullstack.com.br</p>
                </div>
                    
                <div class="contatos">
                    <img src="./Images/WhatsApp-icone.png" alt="icone whatsapp" width="40px">
                    <p>(21)99999-9999</p>
                </div>

                <div class="contatos">
                    <img src="./Images/telefone-icone.png" alt="icone telefone" width="40px">
                    <p>(21)0800 000 0000</p>

                </div>
            </section>

            <section id="formulario">
                <h2>Fale Conosco</h2>
                <form method = "post" action ="">                                            
                    <h4>Nome:</h4>
                    <input type="text" name = "nome" style="width:600px;">
                        
                    <h4>Mensagem</h4>
                    <textarea name = "msg" style="width:600px;"></textarea>
                    <br>
                    <input onclick="confirmarenvio()" name = "submit" type="submit" value="Enviar">

                    
                                     
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

