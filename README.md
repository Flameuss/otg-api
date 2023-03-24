<p align="center"> :computer: <strong>Em Desenvolvimento ...</strong> 🚧</p>
<p align="center"> 
   <img src="https://img.shields.io/badge/version-0.0.1-red.svg" />
  
  <a href="https://github.com/Flameuss">
    <img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" target="_blank" />
  </a>
 
 <a href="https://github.com/Flameuss">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-blue.svg" target="_blank" />
  </a>
</p>
<br>

## Índice

- [Índice](#índice)
- [Adendo](#adendo)
- [Sobre o projeto](#sobre-o-projeto)
- [Como Executar](#como-executar)


<br>

<a id="sobre-o-projeto"></a>

## Sobre o projeto
<br>

:memo: Essa Api usa como base o framework [SlimFramework](https://www.slimframework.com/) na versão <b>3</b> e a biblioteca pré pronta do [Slim-Skeleton](https://github.com/slimphp/Slim-Skeleton) para deixar algumas configurações pré feitas.

Esta api está configurada somente para leitura utilizando o método GET para retornar um JSON que contem um objeto lista de link ou objeto de link especifico referente a uma imagem.
<br>

<a id="adendo"></a>

## Adendo

<br>
Esta API tem configurado middleware de autenticação por token para deixar a api mais segura, que no caso esta desabilitado, para habilitar so necessita descomentar o trecho de código  comentado em `src\middleware.php` em caso de dúvidas acesse a [documentação](https://www.slimframework.com/docs/v3/concepts/middleware.html) sobre Middleware.

Caso Habilite o acesso a api somente com token você pode criar  o mesmo pela própria api,
para isso essa api conta com a biblioteca [tuupola/slim-jwt-auth](https://github.com/tuupola/slim-jwt-auth) para criação de tokens devera ser adicionado uma <br>secretkey</br> em `src\settings.php` num campo similar ao demonstrado abaixo:<br>

```php
'secretKey'=>'insira qualquer valor como secretkey'

```
apos ter a secretkey configurada basta criar uma tabela no banco de dados com o nome <b>usuarios</b> e os campos <b>id, nome, email, senha</b><br>
você poderá preencher esses campos ou criar uma requisição na própria api para isso, assim cada usuário poderá ter um token de acesso.
Para gerar o token basta acessar via postman ou insomnia pelo caminho usando método POST:<br> `http://localhost/otg-api/public/api/token` <br>
E em body selecionar:<br>  
* x-www-form-urlencoded<br> 

Para poder criar um formulário com os campos e mail e senha, assim que colocar o email e senha que conta na tabela <b>usuarios</b> basta dar envio dessa requisição para retornará um token de acesso a api.  

Para o funcionamento correto desta api ja conta com o CORS Habilitado, em caso de dúvidas acesse a [documentação](https://www.slimframework.com/docs/v3/cookbook/enable-cors.html) sobre CORS.

A Api usa o mesmo Eloquent que existe no framework Laravel o [Illuminate Database](https://github.com/illuminate/database) na versão 10.3, para fazer a connexão com o seu banco de dados acesse `src\settings.php` e coloque as informações no campo parecido com o de baixo:<br>
```php
	// DB settings
	'db'=> [
			'driver' => 'mysql',
			'host' => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => 'password',
			'charset' => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix' => '',
	],
``` 
 Em caso de dúvidas acesse a [documentação](https://laravel.com/docs/10.x/eloquent-resources#main-content).

 


<a id="executar"></a>

## Como Executar<br>

Para executar esta aplicação como desenvolvimento, use o seguinte comando abaixo:

	cd [my-app-name]
	php composer.phar start

Execute este comando caso queira usar no ambiente de teste.

	php composer.phar test


