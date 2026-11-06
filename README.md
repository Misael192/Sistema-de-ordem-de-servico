# RMW - Sistema de Gestão Condominial e Ordem de Serviço

Sistema web desenvolvido em PHP e MySQL voltado para administração de condomínios e acompanhamento de chamados e ordens de serviço, facilitando a rotina de síndicos, administradores e moradores.

---

## 📌 Funcionalidades Principais

- **Autenticação e Controle de Acesso:** Telas de autenticação com separação de perfis (Administrador/Síndico e Morador).
- **Gestão de Chamados e O.S.:** Fluxo completo de ordens de serviço com categorização por status (Abertos, Em Andamento e Concluídos).
- **Agendamentos de Áreas Comuns:** Controle e listagem de reservas de espaços como churrasqueira, salão de festas, quadra e salão de jogos.
- **Cadastros Administrativos:** Formulários com validação para moradores, síndicos, funcionários e visitantes.
- **Mural de Avisos:** Publicação e busca de informes internos para os condôminos.
- **Votações / Assembleias:** Seção dedicada para acompanhamento e registro de deliberações.
- **Documentação e Regulamento:** Disponibilização de arquivos de regulamento interno em PDF para consulta.

---

## 🛠️ Tecnologias Utilizadas

- **Linguagem Backend:** PHP
- **Banco de Dados:** MySQL (`BD_CONDOMINIO`) via extensão MySQLi
- **Frontend:** HTML5, CSS3, JavaScript
- **Frameworks e Bibliotecas:**
  - Bootstrap (Grid, componentes responsivos e modais)
  - jQuery e jQuery UI
  - Bootstrap Datetimepicker (para campos de data e horário)

---

## 📂 Estrutura do Projeto

```
├── adm/                    # Painel administrativo e rotinas de backend
│   ├── Agendamentos.php    # Listagem de agendamentos de áreas comuns
│   ├── Chamados.php        # Gerenciamento de chamados abertos
│   ├── Chamados_anda.php   # Chamados em andamento
│   ├── Chamados_fech.php   # Histórico de chamados finalizados
│   ├── Cadastro_*.php      # Formulários de cadastro (morador, síndico, etc.)
│   ├── conexao.php         # Script de conexão com o banco de dados
│   ├── Mural.php           # Visualização e gestão do mural
│   └── Votacoes.php        # Tela de votações do condomínio
├── css/                    # Estilos CSS e temas Bootstrap
├── datepicker/             # Componente de seleção de data
├── img/                    # Imagens do sistema e fotos das áreas comuns
├── js/                     # Scripts JavaScript e bibliotecas (jQuery, Bootstrap)
├── pdf/                    # Documentos de apoio e regulamento do condomínio
├── home.php                # Painel principal pós-login
└── index.php               # Página inicial com formulário de login
```

---

## 🚀 Como Executar Localmente

### Pré-requisitos
- Servidor web local com suporte a PHP e MySQL (ex.: [XAMPP](https://www.apachefriends.org/), WampServer ou Laragon).

### Passo a passo
1. **Clonar o repositório:**
   ```bash
   git clone https://github.com/Misael192/Sistema-de-ordem-de-servico.git
   ```

2. **Posicionar na pasta do servidor:**
   Mova a pasta clonada para o diretório raiz do servidor web (ex.: `htdocs` no XAMPP ou `www` no WampServer).

3. **Configurar o Banco de Dados:**
   - Crie uma base de dados no MySQL com o nome `BD_CONDOMINIO`.
   - Caso necessário, ajuste as credenciais de acesso em `adm/conexao.php`:
     ```php
     $bdservidor = '127.0.0.1';
     $bdusuario  = 'root';
     $bdsenha    = '';
     $bdbanco    = 'BD_CONDOMINIO';
     ```

4. **Acessar a aplicação:**
   Inicie os serviços do Apache e MySQL e abra o navegador no endereço:
   ```
   http://localhost/Sistema-de-ordem-de-servico/index.php
   ```

