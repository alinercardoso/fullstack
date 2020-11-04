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

            <h1>Produtos</h1>
            <hr>

            <section id="categorias">
                <h3 onmousemove="dica()" >Categorias</h3>

                <ul>
                    <li onclick="exibir_todos()">Todos</li>
                    <li onclick="exibir_categoria('geladeira')">Geladeiras(3)</li>
                    <li onclick="exibir_categoria('fogao')">Fogões(2)</li>
                    <li onclick="exibir_categoria('microondas')">Microondas(2</li>
                    <li onclick="exibir_categoria('lavaroupas')">Lavadora de roupa(3)</li>
                    <li onclick="exibir_categoria('lavaloucas')">Lava-louças(2)</li>
                </ul>

            </section>
        
            <section class="Produto">
            <?php
                $sql = "select * from produtos";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0){
                    while($rows=$result->fetch_assoc()){     //Retorna os dados da linha já armazenando na variável $row e Move o ponteiro para a linha seguinte.
                        
                   
            ?>
                <div class="box_produto" id="<?php echo $rows ["categoria"]; ?>">
                    <img src="<?php echo $rows ["imagem"]; ?>" onclick="destaque(this)"width="210px">
                    <hr>
                    <p class="descricao"><?php echo $rows ["descricao"]; ?></p>
                    <p class="descricao"><strike><?php echo $rows ["preco"]; ?></strike></p>
                    <p class="preco"><?php echo $rows ["preco_final"]; ?></p>  
                </div>

            <?php
                    }  
                }
                else{
                    echo "Nenhum produto cadastrado";
                }
                        
            ?>      
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

        