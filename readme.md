# Projeto Teste Back-End Ezoom

Para fazer o projeto foi utilizado a seguinte estrutura:
- MARIADB / MYSQL
- LARAVEL 
- APACHE

## Instalação

1. Crie uma pasta na raiz do servidor web e copie os arquivos. _(caso os arquivos estejam compactados, descompate)_

2. Crie uma base de dados para onde serão importadas as tabelas.

3. Faça a importação do arquivo **database.sql**, no banco de dados _(O arquivo se encontra na raiz do projeto)_

4. Abra o arquivo **.env** e faça a seguinte configuração _(O arquivo se encontra na raiz do projeto)_:

|Linha de comando|Descrição                                                 |
|----------------|----------------------------------------------------------|
|APP_URL         | Informe a url se for o caso                              |
|DB_DATABASE     | Informe o database criado                                |
|DB_USERNAME     | Informe o usuário do banco de dados                      |
|DB_PASSWORD     | Informe a senha do usuário                               |

## Forma de utilizar

- Caso tenha instalado a aplicação acesse o endereço http://< nome_do_host > / < pasta_onde_esta_aplicaão> /public/
- Link para ver aplicação em produção: https://www.andolphi.com.br/ezoom/TesteBack/public
- Faça o cadastro, caso já tenha usuário faça o login.
- Procurei fazer a aplicação da forma mais intuitiva possível.
- Nela é possivel cadastrar os usuários, cliente e vendedores  _(não coloquei nivel de acesso aos usuários, todos os usuários cadastrados tem acesso total a aplicação .)_
- o Cliente pode ser associado a um vendedor _(um cliente pode ser associado a apenas um vendedor, mas o sendedor poderá ser associado a vários clientes)_.
- No menu serviço é possivel alterar os serviços descritos em https://www.andolphi.com.br/ezoom/TesteFront/ _(A a plicação está integrada com o site através de uma API)_

## Considerações

 - Apenas como forma de demonstração qualquer um pode criar um usuário e acessar o sistema.
 - Caso não consiga rodar a aplicação, por favor entre em contato. 
 - Estou disonível para qualquer dúvida.

