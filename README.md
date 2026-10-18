# VD Corporation

Loja virtual de roupas desenvolvida em PHP, com cadastro de clientes, catálogo de produtos, carrinho e pagamento.

Este projeto foi o trabalho final da disciplina de **Técnicas Avançadas de Desenvolvimento Web** do **Curso Técnico Integrado ao Ensino Médio de Informática para Internet**.

## Funcionalidades

- **Login:** acesso com senha criptografada (SHA-256).
- **Cadastro:** criação de conta com nome, e-mail, endereço, CPF, estado, cidade e CEP.
- **Página principal:** apresenta as novidades e dá acesso às categorias de produtos.
- **Catálogo:** camisetas, bonés e agasalhos, com escolha de tamanho e carrinho de compras.
- **Pagamento:** resumo do pedido com frete e opções de cartão de crédito, boleto ou PIX.
- **Perfil:** mostra os dados do cliente e permite sair da conta.
- **Informações da loja:** páginas de Sobre nós, Contato, Termos de uso e Política de privacidade.

## Tecnologias

- PHP 8.1 + Apache
- MariaDB
- HTML, CSS, JavaScript, jQuery e Bootstrap
- Docker

## Como rodar

Com o Docker instalado:

```bash
docker compose up -d --build
```

- Loja: http://localhost:8081
- Adminer (gerenciador do banco): http://localhost:8080 (servidor `mariadb-server`, usuário `root`, senha `123`)

O banco é criado automaticamente a partir de `database/banco.sql`. Para recriá-lo do zero, rode `docker compose down -v` antes de subir de novo.

## Estrutura

```
vd-corporation/
├── database/
│   └── banco.sql        # tabelas e dados iniciais
└── html/                # raiz do site
    ├── *.php            # páginas
    ├── includes/        # conexão com o banco e sessão
    ├── actions/         # login, logout e requisições AJAX
    └── src/
        ├── css/
        ├── js/
        ├── img/
        └── fonts/
```

> A fonte dos títulos (`Bombing.ttf`) deve ser colocada em `html/src/fonts/`.
