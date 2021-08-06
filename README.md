As vantagens e desvantagens da linguagem, framework e/ou plataforma.

- Beneficios

    Produtividade e rapidez, você consegue gerar uma página de login ou um CRUD simples em poucos minutos. O Laravel vem com um sistema de autenticação que consiste em todos os passos necessários, como Login, Registro e Redefinição de Senha, que são executados com um único comando.

	Framework testado e aprovado em várias empresas, o laravel é o framework php mais usado no mundo (mais de 1.1 milhão de websites foram construidos usando laravel)

	Estrutura identica para todos os projetos. Isso fornece facilidade para manutenção do site devido aos recursos como código limpo, arquitetura MVC (que separa lógica e apresentação) e princípios de orientação a objeto.

	Recursos de segurança avançados são simples de configurar. Faz o uso do algorítimo de hash Bcrypt para não salvar senhas no banco. Também oferece uma configuração fácil de autenticação de forma que se tenha controle sobre a autenticação do usuário e controle de acesso baseado em função.

	Integração entre os pacotes – pacotes são integrados dentro do framework. Integração de terceiros O Laravel torna a integração de aplicativos de terceiros fácil com suas APIs para integração para uma variedade de recursos e funcionalidades

	O Laravel é fácil de desenvolver devido à documentação detalhada, a vasta biblioteca de documentação, guias e tutoriais em vídeo. Sendo é apoiado por uma grande comunidade no GitHub.

    Framework código-aberto e grátis para usar em qualquer projeto


- Desvantagens

    O Composer não é forte o suficiente
Como o Laravel é um novo framework, é difícil para os desenvolvedores lidar com ele. Além disso, o compositor do Laravel não é forte o suficiente em comparação com Ruby gems, npm (node.js), pip (para python), etc.

    Problemas com algumas atualizações
Plataformas com suporte de longo prazo geralmente enfrentam alguns problemas após as atualizações. Portanto, o usuário deve tomar os cuidados necessários antes de atualizar a versão. Não é apenas um problema do Laravel, mas também frameworks PHP que mostram alguns problemas quando a versão é atualizada.

    Documentação pesada com a qual nem todos os programadores conseguem lidar no início. No entanto, o suporte do Laravel e da comunidade de desenvolvedores online pode tornar o estágio inicial de trabalho com o framework o mais simples possível


* Citando as principais características.
- Laravel é um framework com a linguagem de programação do lado do servidor PHP
- Baseado em MVC (princípio Model-View-Controller)
	Padrão de arquitetura de software focado em reuso de código, no qual ocorre a divisão da estrutura lógica de um sistema em 3 camadas: a do Modelo, relacionada ao banco de dados; a de Visão, vinculada a visualização dos dados e das páginas; e a do Controle, responsável pela conexão e transmissão de informações entre as camadas Modelo e Visão. 
- Template Engine (Blade)
	O Laravel possui um sistema de template que facilita a criação da camada de visualização de dados (Páginas HTML). Responsável pela padronização da parte visual da aplicação, possibilitando maior otimização na construção de templates e facilitando a reutilização de códigos. Dentre alguns dos recursos do Blade, se destacam: Herança de layouts, sistema de tags, seções e uso de código PHP nos templates. 
- Artisan

	Ferramenta embutida para linha de comando que executa as tarefas de programação repetitivas. Também pode ser usado para criar o esqueleto do código, a estrutura do banco de dados e sua migração


- Migrations criação de tabela banco de dados
- Sistema modular com gerenciador de dependências dedicado
- Laravel Authentication 
O Laravel possui, por padrão, um módulo de autenticação/autorização completo que provê todos os recursos para sua implementação, como: Autenticação de usuários, autorização de usuários, recuperação de senhas, logout, controle de sessão e cadastro de usuários. 
- Eloquent ORM
Com o Laravel não precisamos criar códigos SQL para manipular ou criar tabelas no Banco de Dados. Todo processo é feito utilizando código PHP que, posteriormente, será convertido em instruções SQL. Implementa o padrão Active Record, onde cada model da aplicação representa uma tabela no banco de dados. 
- Vasta documentação.
A documentação do Laravel está estruturada desde sua história e instalação, até seus recursos avançados.


Servidores Web disponíveis.
Há 1.321.140 sites que podem ser encontrados na Internet utilizando Laravel. Dentre esses 661.172 ainda estão online, e 19.476 sites no Brasil. De acordo com um relatório da BuildWith, há diversos sites de grande expressão e renome que foram desenvolvidos em Laravel. Dentre eles estão: Cielo, Catho, BTG Pactual, Leroy Merlin, CI (Companhia do Intercâmbio), Senac.


Tipo de licença de software.
Laravel está sob a licensa MIT, que permite utilizar o código em sistemas proprietários;
Essa licensa é permissiva afirmando que qualquer pessoa que obtém uma copia do software e seus arquivos de documentação associados pode lidar com eles sem restrição, incluindo sem limitação os direitos a usar, copiar, modificar, mesclar, publicar, distribuir, vender copias do software. As condições impostas para tanto são apenas manter o aviso de copyright e uma copia da licença em todas as cópias do software. 


Responsáveis pelo desenvolvimento (proprietário ou comunidade).
Criado por Taylor Otwell, o código-fonte do Laravel é gerenciado no GitHub, e existem repositórios para cada um dos projetos do Laravel. Para encorajar a colaboração ativa, o Laravel encoraja fortemente as solicitações pull, não apenas relatórios de bug.
A comunidade pode propor novos recursos ou melhorias do comportamento existente do Laravel no fórum de discussão GitHub do repositório do framework Laravel.


* Tutorial de configuração do framework Laravel versão 6.x *
Esse tutorial apresenta o processo de instalação e configuração do framework laravel e as etapas realizadas para criar um crud de clientes.

1º passo - acessar https://laravel.com/ → documentation para verificar os pré-requisitos

Em seguida baixar XAMPP com a versão PHP >= 7.2.5 para atender os seguintes requisitos
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
