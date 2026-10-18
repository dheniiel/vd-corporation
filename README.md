# VD-Coporation

## Como rodar

```bash
docker compose up -d --build
```

- Loja: http://localhost:8081
- Adminer (banco): http://localhost:8080 — servidor `mariadb-server`, usuário `root`, senha `123`

O banco é criado automaticamente a partir de `database/banco.sql` na primeira inicialização. Se você já tinha subido o projeto antes, rode `docker compose down -v` para recriar o banco.

## Estrutura de pastas

```
vd-corporation/
├── Dockerfile
├── docker-compose.yml
├── database/
│   └── banco.sql              # criação das tabelas e dados iniciais
└── html/                      # raiz do site (montada em /var/www/html)
    ├── index.php              # login
    ├── cadastro.php, home.php, vitrine.php, pagamento.php, perfilexi.php ...
    ├── includes/              # arquivos incluídos pelo PHP (não acessíveis pelo navegador)
    │   ├── config.php         # credenciais do banco (únicas para todo o projeto)
    │   ├── connect_db.php     # conexão mysqli
    │   ├── conexao.php        # conexão PDO
    │   └── include_session_home.php
    ├── actions/               # endpoints de processamento (AJAX, login, logout)
    │   ├── validation.php, logout.php, list.php, editar.php ...
    └── src/
        ├── css/
        ├── js/
        ├── img/
        └── fonts/             # coloque aqui a fonte Bombing.ttf
```

---

**Explorando o Universo da VD Corporation: Uma Visão Profunda de Seu Software de Loja de Roupas**

A VD Corporation, apresenta um software sofisticado e abrangente, projetado para oferecer aos clientes uma jornada de compras online sem precedentes. Conheceremos cada detalhe deste software, explorando suas páginas distintas e funcionalidades inovadoras.

**Página de Login:**
Ao acessar o software da VD Corporation, os usuários são recebidos pela página de login, que combina segurança e acessibilidade. Com criptografia, os clientes podem realizar login de maneira segura, proporcionando uma entrada rápida para a experiência de compra personalizada.

**Página de Cadastro:**
Para novos clientes, a página de cadastro é o ponto de partida. Uma interface intuitiva orienta os usuários pelo processo de criação de conta, solicitando informações essenciais para personalizar a experiência de compra. A VD Corporation valoriza a transparência, garantindo que os clientes compreendam como suas informações serão utilizadas.

**Página Principal:**
A página principal é o epicentro da experiência de compra, apresentando as categorias de produtos. O design visualmente atrativo e a navegação intuitiva incentivam os clientes a explorar as últimas tendências e novidades da VD Corporation.

**Página de Catálogo de Produtos:**
A extensa variedade de produtos ganha vida na página de catálogo. Os clientes podem ver os produtos das determinadas categorias, visualizar detalhes de cada item e adicionar o a peça do tamanho desejado no carrinho.

**Página de Pagamento:**
A transição suave para a página de pagamento é crucial. A VD Corporation simplifica esse processo, oferecendo opções de pagamento seguras e transparentes. Os clientes podem revisar o valor total, ver o frete e finalizar a compra com confiança, graças a um design intuitivo e informações claras.

**Página de Perfil:**
A página de perfil é a área onde os clientes podem observar suas informações pessoais. A personalização é a chave, e os clientes podem ajustar suas configurações para receber recomendações personalizadas e ofertas exclusivas.

**Página de Informações sobre a Loja:**
Para estabelecer transparência e construir confiança, a VD Corporation inclui uma página dedicada a informações sobre a loja. Aqui, os clientes podem aprender mais sobre a história da empresa, valores fundamentais e práticas sustentáveis, solidificando a conexão entre marca e consumidor.

**Conclusão:**
O software da VD Corporation vai além de uma plataforma de compras; é uma jornada meticulosamente projetada para proporcionar uma experiência de compra online envolvente e personalizada. Cada página é uma peça integrante dessa experiência, demonstrando o compromisso da VD Corporation em oferecer inovação, segurança e estilo em cada interação.
