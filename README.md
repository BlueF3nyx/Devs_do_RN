# Sistema de Gestão de Anuidades - Devs do RN

## Sobre o Projeto:
 Este é um pequeno projeto que foi desenvolvido para facilitar a gestão dos associados e suas anuidades na associação **Devs do RN**. Permitindo cadastrar associados, registrar valores de anuidades e realizar o controle de pagamentos, com a possibilidade de verificar quais associados estão em dia e quais estão com pagamentos em atraso.
## Tecnologias Utilizadas
- **Backend**: PHP utizando o XAMPP(sem framework)
- **Banco de dados**: MySQL
- **Controle de versão**: Git
## Funcionalidades

- Cadastro de associados (nome, e-mail, CPF e data de filiação).
- Cadastro de anuidades (ano e valor).
- Cálculo e cobrança das anuidades devidas por associado.
- Pagamento de anuidades (marcação de pagamento no banco de dados).
- Identificação de associados com pagamentos em dia ou em atraso.
 
## Tutorial de Instalação e como testar:
1. Clone o repositório para sua máquina local: 
- git clone https://github.com/Seu_Usuario/devs-do-rn.git

2. Configurar o banco de dados:
  - O banco de dados será criado utilizando o script meu_database.sql presente na raiz do projeto, para isso, siga o **passo a passo**:
  - 
## Acesse o MYSQL no terminal
    - mysql -u root -p

## Crie o banco de dados e as tabelas:
      -source meu_database.sql;
 
 ## Verifique se as tabelas foram criadas com sucesso:
      - Show tables;

3. Rodar o servidor PHP:
   - Para isso, você pode rodar a aplicação localmente usando o servidor embutido do próprio PHP. Na raiz do seu projeto, utilize o seguinte comando:
      - php -S localhost:8000

   - Com o comando anterior, poderá ser feito a inicialização do servidor local, agora, acesse a aplicação do navegador, acessando a sua **URL**:

     - http://localhost:8000
    
     - 
5. Acessar a aplicação:
      - Após entrar a URL, voce verá duas páginas, nas quais são:

      - Pagina Principal: Essa pagina é onde será vizualizado com o formulário de cadastro de associados, podendo fazer o cadastramento de novos associados e ver a lista dos que foram registrados;
  
      - Cadastro de Anuidade e Pagamento: Embora não esteja totalmente implementado aqui, você pode continuar a expansão do projeto criando páginas para a gestão das anuidades e pagamentos.
  

## Como Testar:
   1. Cadastar um Associado:
      - Na página principal, preencha o formulário de cadastro com nome, e-mail, cpf e data de filiação e clique em "Cadastrar".

      -  O associado será adicionado ao banco de dados e aparecerá a lista de associados abaixo do formulário.

   2. Cadastrar uma anuidade:
      - Nessa página, preencha com a data e ano das anuidades dos associados e clique em "Cadastrar".
     
   3. Registro de Pagamento:
      - Nessa página, preencha os dados do ano e valor da anuidade e clique em "Cadastrar".
     
   Assim, poderá ser vizualizado a gestão dos associados e suas anuidades.
