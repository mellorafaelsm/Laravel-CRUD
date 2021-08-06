Tutorial de configuração do framework Laravel versão 6.x
Esse tutorial apresenta o processo de instalação e configuração do framework laravel e as etapas realizadas para criar um crud de clientes.

1º passo - acessar https://laravel.com/ → documentation para verificar os pré-requisitos

2º passo - baixar XAMPP com a versão PHP >= 7.2.5 para atender os seguintes requisitos
    • BCMath PHP Extension
    • Ctype PHP Extension
    • Fileinfo PHP Extension
    • JSON PHP Extension
    • Mbstring PHP Extension
    • OpenSSL PHP Extension
    • PDO PHP Extension
    • Tokenizer PHP Extension
    • XML PHP Extension

Instalar o Composer, programa gerenciador de pacotes php
https://getcomposer.org/download/

No terminal, ir até o local onde deseja instalar o laravel e digite o seguinte código para instalar as dependencias do laravel:
composer create-project --prefer-dist laravel/laravel blog "6.*"

Criar um novo banco de dados em http://localhost/phpmyadmin/

Abrir o projeto gerado com a IDE de preferencia, nesse tutorial foi usado o visual studio code
Acessar o arquivo .env onde na linha 9 – 14 deve-se indicar o banco de dados criado, nome de usuário e senha.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Em seguida, utilizar o seguinte comando com o objetivo de uma inserir uma tabela no banco chamada cliente
php artisan make:model Cliente -m

Esse comando vai gerar automaticamente uma Model na pasta app para espelhar os atributos da tabela do banco de dados. Assim como um novo arquivo na pasta database → migrations.

Inclua os campos que serão usados no arquivo gerado dentro da pasta app:  
protected $fillable = [‘nomes_dos_atributos’];

E acesse a pasta database → migrations onde terá um novo arquivo gerado “create_clientes_table”. Os atributos da tabela devem ser inseridos dentro desse arquivo dentro da função Schema::create();

Logo após a configuração dos atributos, acessar o terminal na pasta laravel gerada e digitar o comando: php artisan migrate para gerar uma tabela para cada arquivo na pasta database → migrations mais uma tabela padrão chamada “migrations” que vai controlar quais migrations já foram geradas no banco.

Abrir a aplicação no navegador
Php artisan serve

O laravel agora poderá ser acessado pela url http://localhost:8000/

Para editar as rotas da aplicação acesse a pasta routes → web.php. Nesta página poderá indicar views para as rotas, essas views são encontradas na pasta resources → views

php artisan tinker
Cliente::create(['nome' => 'Joao', 'cpf' => '11223344', 'telefone' => '11222112', 'rua' => 'rua aaa', 'numero' => '123', 'complemento' => 'perto do posto', 'bairro' => 'iraja', 'cep' => '112212112', 'cidade' => 'rio de janero', 'estado' => 'rj']);
