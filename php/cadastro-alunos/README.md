# Sistema de Cadastro de Alunos - SI401

Este projeto foi desenvolvido como **Atividade de Fixação (Unidades 13 a 17)** para a disciplina **SI401 - Programação para a Web**, ministrada pelo Prof. Guilherme Palermo Coelho.

**Autor:** Vinicius Pommer Petto - RA: 252160

---

## 🎯 Objetivo da Atividade
Desenvolver um site PHP com duas páginas principais para cadastrar alunos e exibir a base de dados ordenada pelo Registro Acadêmico (RA).
Seguindo as restrições do escopo de projeto, **não foram utilizados SGBDs ou Sessões**. O armazenamento de dados foi implementado utilizando manipulação de arquivos estáticos (`.txt`) com serialização em JSON.

---

## 🏛️ Arquitetura do Projeto (Padrão MVC)
Para evitar duplicação de código e garantir uma separação limpa de responsabilidades, o projeto foi construído utilizando os conceitos de arquitetura **MVC (Model-View-Controller)** adaptados para PHP puro.

O código-fonte está dividido entre o núcleo da aplicação (`app/`) e os arquivos acessíveis pelo navegador (`public/`):

```text
cadastro-alunos/
├── app/                        # Núcleo restrito da aplicação
│   ├── controller/             # Lógica de negócio e roteamento
│   │   └── cadastro.php        # Recebe requisições POST, salva dados e redireciona
│   ├── model/                  # Camada de armazenamento e abstração de dados
│   │   └── cadastro.txt        # Arquivo de texto ("banco de dados") contendo arrays JSON
│   └── view/                   # Componentes visuais (Templates)
│       ├── footer.html         # Fechamento do layout HTML
│       ├── formulario.html     # Formulário de inserção de alunos
│       ├── header.php          # Estrutura base do HTML, `<head>`, e `<nav>` dinâmica
│       └── lista.php           # Iteração e exibição ordenada dos dados armazenados
├── public/                     # Diretório exposto ao servidor web (Ponto de entrada)
│   ├── assets/                 # Armazenamento de elementos visuais e de estilo
│   │   ├── css/                # Amazenamento do arquivo CSS
│   │   │    └── style.css      # Estilos complementares (Flexbox, centralização)
│   │   └── img/                # Amazenamento do favicon
│   │        └── favicon.ico    # Imagem utilizada como ícone do sistema
│   └── index.php               # Front Controller (Rota principal de cadastro, ponto de entrada e página inicial do sistema)
└── README.md                   # Documentação do projeto
```

---

## 🛠️ Tecnologias e Créditos

O sistema foi inteiramente estruturado com os padrões mais recentes do **HTML5 e CSS3**, garantindo a validação da árvore DOM pelo W3C.

* **Linguagem Backend:** PHP 8+
* **Estruturação e Estilização:** HTML5 e CSS3 (Flexbox Layout)
* **Framework CSS/JS:** [Bootstrap v6.0.0-alpha.1](https://getbootstrap.com/) 
  *(Utilizado especificamente na estruturação do menu lateral `<nav>` e na padronização visual dos botões e inputs do formulário).*
* **Favicon:** Ícone fornecido por [Flaticon](https://www.flaticon.com/br/).
* **Conversor de Favicon:** Geração de assets via [favicon.io](https://favicon.io/).
* **Font Awesome:** Inclusão de ícones no menu lateral [Font Awesome](https://fontawesome.com/).