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
        
        <h1>Nossas Lojas</h1>
        <hr>
            <section class="lojas">
                <div class="enderecos">
                    <img onclick="abrirmaparj()" src="./Images/Mapas Lojas/Rio.PNG" alt="mapa do Rio de Janeiro" width="60%">
                    <h4>RIO DE JANEIRO</h4>
                    <p>Avenida Presidente vargas, 5000</p>
                    <p>10 &ordm;andar</p>
                    <p>Centro</p>
                    <p>(21) 1111-1111</p>
                </div>
    
                <div class="enderecos">
                    <img onclick="abrirmapasp()" src="Images/Mapas Lojas/SP.PNG" alt="Mapa de São Paulo" width="60%">
                    <h4>SÃO PAULO</h4>
                    <p>Avenida Paulista, 5000</p>
                    <p>10 &ordm;andar</p>
                    <p>Centro</p>
                    <p>(21) 1111-1111</p>
                </div>
    
                <div class="enderecos">
                    <img onclick="abrirmapabh()" src="./Images/Mapas Lojas/BH.PNG" alt="Mapa de Belo Horizonte" width="60%">
                    <h4>BELO HORIZONTE</h4>
                    <p>Avenida Presidente vargas, 5000</p>
                    <p>10 &ordm;andar</p>
                    <p>Centro</p>
                    <p>(21) 1111-1111</p>
                </div>
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






        