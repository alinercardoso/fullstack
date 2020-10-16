function exibir_categoria (categoria){  //Funçao para a construção de um filtro para os produtos

    let elementos = document.getElementsByClassName('box_produto'); //seleciona elementos pela classe
    console.log(elementos);     //exibe os elementos no console
    
    for (var i=0; i<elementos.length; i++){ //Estrutura de repetição vai encontrar e agrupar os elementos de mesmo id ao clicado
            console.log(elementos[i].id);
        if (categoria == elementos[i].id)
        elementos[i].style= "display: inline block";  // Compara a categoria com o id do elemento e deixa os selecionados visíveis
        
        else
        elementos[i].style="display:none"       // Altera o estilo dos produtos das outras categorias deixando-os invisíveis    
    }
}

let exibir_todos = () => {      //Função para reexibir todos os produtos novamente

    let elementos = document.getElementsByClassName('box_produto');

    for (var i=0; i<elementos.length; i++){
        elementos[i].style= "display:inline block"; //Altera o estilo dos produtos deixando todos visíveis novamente
        }

};

function destaque(imagem){      //Função que aumenta tamanho da imagem quando clicada.
    if(imagem.width==210)
        imagem.width=400;
    else
        imagem.width=210;
}

function dica(){
    alert("Clique para filtrar os produtos!");
}

function abrirmapasp(){
    window.open("https://www.google.com/maps/place/Av.+Paulista,+S%C3%A3o+Paulo+-+SP/@-23.5613462,-46.6586759,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce59c8da0aa315:0xd59f9431f2c9776a!8m2!3d-23.5613462!4d-46.6564872");      
}

 function abrirmaparj(){
    window.open("https://www.google.com/search?q=av+presidente+vargas+5000&rlz=1C1CHBD_pt-PTBR923BR923&oq=av&aqs=chrome.1.69i57j69i59l3j35i39j69i61l2j69i60.4555j0j4&sourceid=chrome&ie=UTF-8");
 }

 function abrirmapabh(){
    window.open("https://www.google.com/maps/place/Av.+Portugal+-+Itapo%C3%A3,+Belo+Horizonte+-+MG,+31710-400/@-19.8444923,-43.9575554,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0xa690cacacf2c33:0x5b35795e3ad23997!2sBelo+Horizonte,+MG!3b1!8m2!3d-19.9166813!4d-43.9344931!3m4!1s0xa690122a351b6b:0x4f4966670e60227e!8m2!3d-19.8444507!4d-43.9553687");
 }

 function confirmarenvio(){
    confirm("Confirmar e Enviar")
    alert("Obrigadx por nos contactar, responderemos em breve!")
 }

    
   