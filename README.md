



# Projeto GolFarma

![Preview-Screens](https://github.com/LaercioSR/desafioGolFarma/blob/master/public/imagens/telas.png)


## Sobre o Projeto

O projeto é um desafio da [GolFarma](https://golfarma.com.br/). Consiste num site web e numa api para um CRUD de médicos.

## Começando

### Pré-Requisitos

Para rodar o projeto é preciso ter instalado o laravel, que pode ser encontrado [aqui](https://laravel.com/docs/6.x).

Já para o banco de dados será necessário ter o MySQL Server instalado. Você pode encontrar [aqui](https://dev.mysql.com/downloads/mysql/).

### Instalando

**Clonando o repositório**

```
$ git clone https://github.com/LaercioSR/desafioGolFarma

$ cd desafioGolFarm
```

**Instalando dependências**

```
$ composer update
```

**Configurando o banco de dados**

Primeiramente é necessário gerar uma chave, para isso é só usar o comando:

```
$ php artisan key:generate
```

Depois você deve criar um database MySQL local para o projeto.

Caso ache necessário, você deve modificar o usuário, a senha e o nome do database no arquivo [.env](https://github.com/LaercioSR/desafioGolFarma/blob/master/.env), por padrão está root, root, laerciorios, respectivamente.

Rode os comandos abaixo para criar as tabelas e cadastrar as especialidades já pré-definidas:

```
$ php artisan migrate

$ php artisan db:seed
```

### Executando

Com as dependências instaladas e banco de dados configurado corretamente, agora você pode executar o sistema:

```
$ php artisan serve
```
