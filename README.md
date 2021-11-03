
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h2 align="center">
Login Usando Laravel UI
</h2>

## 1 - Instalação
###  Configurar Composer e clonar o projeto 

Antes de clonar verifique se o Laravel e o composer e o node.js estão instalados, senão:

- Instalação do Laravel: https://laravel.com/docs/8.x/installation  
- Baixar composer e instalar na pasta do php: https://getcomposer.org/Composer-Setup.exe  
- Instalação do node.js: https://nodejs.org/en/

Para clonar o projeto sempre dentro da pasta htdocs no xampp, ou www no caso do wamp (se preferir).
Criar um arquivo .env na raiz do projeto de acordo com o .env.example (só copiar o conteudo do arquivo).

Abrir o cmd dentro do projeto para baixar/atualizar as dependências do projeto e gerar sua 'key'

Executar:

	composer update
	php artisan key:generate

### 2 - Instalar dependências do node.js
A biblioteca do composer [laravel/ui](https://github.com/laravel/ui) usa algumas dependências no front-end para gerar os arquivos dos estilos das páginas. Para Instalar, basta rodar o comandos abaixo:

	npm install
Se a instalação for bem sucedida, rode o seguinte comando:

	npm run dev
		
Os arquivos serão gerados e estarão prontos para serem utilizados.

### 3 - Configurar o banco de dados e rodar os Migrations
Acesse seu banco de dados (use o phpMyAdmin, MySQL Workbench, Linha de comando, etc...) e crie um banco de dados
vazio com o nome que você quiser .

Vá até seu arquivo .env. Debaixo da linha com o texto "DB_CONNECTION=mysql", configure essas linhas de acordo com seu banco de dados
Exemplo:

	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=meubanco
	DB_USERNAME=root
	DB_PASSWORD=

Após isso, rode o comando:

    php artisan migrate


A partir desse ponto, você já deve ter o projeto configurado e já pode iniciar o  desenvolvimento usando o seguinte comando:

    php artisan serve
