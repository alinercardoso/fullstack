create database fullstack
default character set utf8
default collate utf8_general_ci;

use fullstack;

create table produtos(
idprod int not null auto_increment,
categoria enum('geladeira', 'fogao', 'lavaroupas', 'lavaloucas', 'microondas') not null,
descricao varchar(500) not null,
imagem varchar(500) not null,
preco decimal(8,2) not null,
preco_final decimal(8,2) not null,
primary key(idprod)
);

create table pedidos(
idpedido int not null auto_increment,
nome_cliente varchar (300) not null,
email varchar(250) not null,
end_rua varchar(300) not null,
end_num int not null,
end_bairro varchar(100),
end_cep int(8) not null,
end_cidade varchar(100) not null,
end_estado varchar(50) not null,
telefone int not null,
nome_prod varchar(500) not null,
valor_unit float not null, 
valor_total float not null,
quantidade int not null,
primary key (idpedido)
);

insert into produtos (categoria, descricao, imagem, preco, preco_final) 
values
('geladeira', 'Geladeira Side By Side Philco Frost Free Eco Inverter 489 Litros',"Images/Eletros/Geladeiras/Geladeira Side By Side Philco Frost Free Eco Inverter 489 Litros PRF504I Inox-220v.jpg", 5499.00,4999.00),
('geladeira','Geladeira Consul Frost Free CRM39AB Duplex com Prateleiras Altura','./Images/Eletros/Geladeiras/Refrigerador Consul Frost Free CRM39AB Duplex com Prateleiras Altura Flex Branca – 340L.jpg',2349.00,1999.00),
('geladeira','Geladeira Brastemp Frost Free Duplex 375 litros cor Inox','./Images/Eletros/Geladeiras/Frost Free Duplex 375 litros cor Inox com Espaço Adapt • 110V.jpg',3479.00,2649.00),
('fogao','Fogão Consul 4 Bocas CFO4NAR com Acendimento Automático - Inox','./Images/Eletros/Fogoes/Fogão Consul 4 Bocas CFO4NAR com Acendimento Automático - Inox.jpg',1250.00,949.90),
('fogao','Fogão 6 Bocas Consul CFS6 NAR Inox - Acendimento Automático','./Images/Eletros/Fogoes/Fogão 6 Bocas Consul CFS6 NAR Inox - Acendimento Automático.jpg',1799.00,1349.00),
('microondas','Microondas Philco Pmo21e 21l Prata - 127v','./Images/Eletros/Microondas/Micro-ondas Philco Pmo21e 21l Prata - 127v.jpg',449.90,399.90),
('microondas','Microondas Electrolux de bancada Branco 34L (MEO44) - 220V','./Images/Eletros/Microondas/Micro-ondas Electrolux de bancada Branco com Função Tira Odor e Manter Aquecido 34L (MEO44) - 220V.jpg',719.00,629.90),
('lavaroupas','Lavadora de roupas Front Load Premium Care 11kg (LFE11) - 220V','/Images/Eletros/Lavadoras/Lavadora Front Load Premium Care 11kg (LFE11) - 220V.jpg',4219.00,2879.00),
('lavaroupas','Lavadora de Roupas Electrolux LES09 Essential com Diluição Inteligente 8,5kg','./Images/Eletros/Lavadoras/Lavadora de Roupas Electrolux LES09 Essential com Diluição Inteligente 8,5kg - Branca.jpg',1849.00,1169.00),
('lavaroupas','Lavadora de roupas Samsung com Motor Digital Inverter Branca – 11Kg','./Images/Eletros/Lavadoras/Lavadora Samsung com Motor Digital Inverter Branca – 11Kg.jpg',3980.00,2925.00),
('lavaloucas','Lava Louças Inox 14 Serviços (LV14X) - 127V','./Images/Eletros/Lava louças/Lava-Louças Inox 14 Serviços (LV14X) - 127V.jpg',4799.00,3989.00),
('lavaloucas','Lava Louças Inox 10 Serviços (LV10X) - 220V','./Images/Eletros/Lava louças/Lava Louças Inox 10 Serviços (LV10X) - 220V.jpg',3999.00,3466.00);

insert into pedidos (nome_cliente, email, end_rua, end_num, end_bairro, end_cep, end_cidade, end_estado, telefone, nome_prod, valor_unit, valor_total, quantidade)
values
('Aline Cardoso', 'aline.rcardoso@poli.ufrj.br', 'Rua Valparaíso', 81, 'Tijuca', 20261130, 'Rio de Janeiro', 'RJ', 996025572,'Fogão Consul 4 Bocas CFO4NAR com Acendimento Automático - Inox', 949.00, 1898.00, 2),
('João da Silva', 'joao@gmail.com', 'Rua Aguiar', 20, 'Tijuca', 20261130, 'Rio de Janeiro', 'RJ', 123456789,'Lavadora de roupas Samsung com Motor Digital Inverter Branca – 11Kg', 2925.00, 2925.00, 1),
('Bruna de Solza', 'brunasilva@gmail.com', 'Av. São Francisco Xavier', 39, 'Tijuca', 20550010, 'Rio de Janeiro', 'RJ', 987456321,'Lava Louças Inox 10 Serviços (LV10X) - 220V', 3466.00, 17330.00, 5),
('Lorena Pires', 'lorenapires@gmail.com', 'Rua Valparaíso', 81, 'Tijuca', 20261130, 'Rio de Janeiro', 'RJ', 996025572,'Fogão Consul 4 Bocas CFO4NAR com Acendimento Automático - Inox', 949.00, 949.00, 1),
('Aline Cardoso', 'aline.rcardoso@poli.ufrj.br', 'Rua Valparaíso', 81, 'Tijuca', 20261130, 'Rio de Janeiro', 'RJ', 996025572,'Fogão Consul 4 Bocas CFO4NAR com Acendimento Automático - Inox', 949.00, 1898.00, 2),
('João da Silva', 'joao@gmail.com', 'Rua Aguiar', 20, 'Tijuca', 20261130, 'Rio de Janeiro', 'RJ', 123456789,'Lavadora de roupas Samsung com Motor Digital Inverter Branca – 11Kg', 2925.00, 2925.00, 1),
('Bruna de Solza', 'brunasilva@gmail.com', 'Av. São Francisco Xavier', 39, 'Tijuca', 20550010, 'Rio de Janeiro', 'RJ', 987456321,'Lava Louças Inox 10 Serviços (LV10X) - 220V', 3466.00, 17330.00, 5),
('Lorena Pires', 'lorenapires@gmail.com', 'Rua Valparaíso', 81, 'Tijuca', 20261130, 'Rio de Janeiro', 'RJ', 996025572,'Fogão Consul 4 Bocas CFO4NAR com Acendimento Automático - Inox', 949.00, 949.00, 1);
;

