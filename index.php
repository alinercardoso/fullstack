<!DOCTYPE php>
<php lang="pt-br">

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
            <h1>
                Seja bem vindo(a)!
            </h1>
      
            <p>Aqui em nossa loja, <i>programadores tem desconto</i> nos produtos para sua casa!</p>

            <br>

            <h2>PROMOÇÕES IMPERDÍVEIS!</h2>

            <br><br><br>
            
            <section class="produto">
        
                <div class="produto_destaque">
                    <img src="Images/Eletros/Geladeiras/Geladeira Side By Side Philco Frost Free Eco Inverter 489 Litros PRF504I Inox-220v.jpg" width="210px" >
                    <hr>
                    <p class="descricao">Geladeira Side By Side Philco Frost Free Eco Inverter</p>
                    <p class="descricao"><strike>R$ 5.499,00</strike></p>
                    <p class="preco">R$ 4.999,00</p>
                </div>
                
                <div class="produto_destaque">
                    <img src="./Images/Eletros/Lavadoras/Lavadora Front Load Premium Care 11kg (LFE11) - 220V.jpg" width="210px">
                    <hr>
                    <p class="descricao">Lavadora Front Load Premium Care 11kg (LFE11) - 220V</p> 
                    <p class="descricao"><strike>R$ 4.219,00</strike></p>
                    <p class="preco">R$ 2.879,00</p>
                </div>
                    
                <div class="produto_destaque">
                    <img src="./Images/Eletros/Lava louças/Lava-Louças Inox 14 Serviços (LV14X) - 127V.jpg" width="210px">
                    <hr>
                    <p class="descricao">Lava-Louças Inox 14 Serviços (LV14X) - 127V</p> 
                    <p class="descricao"><strike>R$ 4.799,00</strike></p>
                    <p class="preco">R$ 3.989,00</p>
                </div>
            </section>

        </main>>

        <br><br><br> 

        <footer id="rodape">
            <p>Formas de Pagamento</p>
            <img width="25%" src="Images/forma-de-pagamento.png" alt="Formas de Pagamento">
            <p>&copy;Full Stack Eletro</p>
        </footer>
      
    </body>

</php> 