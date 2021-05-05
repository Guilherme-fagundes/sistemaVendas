## Sistema de vendas

Este projeto foi proposto afim de teste de conhecmento em
desenvolvimento PHP.

### Instalação

Baixe o projeto via git clone, coloque a pasta no servidor.

```bash
git clone https://github.com/Guilherme-fagundes/sistemaVendas.git
```

Entre na pasta do projeto e instale as dependencias do composer usando o seguinte comando:
```bash
composer update --no-dev
```

e gere a chave com o seguinte comando
```bash
php artisan key:generate
```

Copie o texto de dento do arquivo .env.exemple para um arquivo .env
Altere as seguintes chaves:

```dotenv
APP_URL=http://localhost/sistemaVendas
APP_NAME='Sistema venda'
DB_DATABASE=sistemavendas
```

Usuário e senha deixe padrão

Importe o sql do banco de dados que se encontra na pasta BKP_BANCO

Efetue o login com o as credenciais:
email: usuario@teste.com.br
senha: teste123
