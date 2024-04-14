# Sobre o projeto
Olá! Esse projeto consiste em uma API construída em Laravel 11, usando a estrutura modular de projeto.

Para a melhor organização da modularização, usei a biblioteca <b>laravel-modules</b>, que facilita a criação de modules de forma rápida e organizada. A documentação da biblioteca pode ser encontrada [aqui.](https://laravelmodules.com/)

Também utilizei a biblioteca Laravel Passport para a segurança do projeto.

## Instruções 

### Antes de tudo: faça uma cópia do arquivo .env.example e o renomeie para .env, colocando as informações do seu banco de dados nas variáveis. É necessário, também, a instalação de:
* PHP 8.2 ou maior
* Composer


Para clonar o repositório, abra um prompt de comando no diretório desejado e dê o seguinte comando:
```bash
git clone https://github.com/joao-aglio/laravel-modular-crud.git
```

Dentro do diretório clonado, instale as dependências com o seguinte comando:
```bash
composer i 
```

Após instalar as dependências, precisamos instalar o Passport e fazer as migrations pro banco de dados.

Primeiro, vamos criar uma nova chave para a nossa aplicação funcionar, usando o seguinte comando:
```bash
php artisan key:generate
```

Em seguida, as migrations das modules:
```bash
php artisan module:migrate User Product
```
O comando acima irá realizar as migrations das modules User e Product.

Agora, vamos instalar o Passport. Dê o seguinte comando:
```bash
php artisan passport:install --no-interaction
```
<b>Pronto!</b> O projeto está configurado. O último passo, agora, é inserir o usuário padrão no banco de dados, para que seja possível autenticar com todas as rotas da aplicação. Dê o seguinte comando:

```bash
php artisan module:seed User
```
As credenciais desse usuário estão em Modules/User/database/seeders/UserDatabaseSeeder.php. Mas também estarão na collection do Postman.

Feito isso, o projeto já está pronto para ser utilizado. Rode usando o seguinte comando (por padrão, ele vai ser servido na porta 8000):
```bash
php artisan serve
```

