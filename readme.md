# Projeto teste_magazine_brindes

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

- Acesse o endereço http://< nome_do_host > / < pasta_onde_esta_aplicaão> /public/
- Faça o cadastro, caso já tenha usuário faça o login.


## Considerações

 - Apenas para como forma de demonstração, qualquer um pode criar um usuário e acessar o sistema.
 - Link para ver aplicação rodando: https://www.andolphi.com.br/ezoom/TesteBack/public
 - Os serviços cadastrados no menu serviços são disponibilizados através da api https://www.andolphi.com.br/ezoom/TesteBack/public/api/servico/< id >
 - Caso não consiga rodar a aplicação, por favor entre em contato. 
 - Estou disonível para qualquer dúvida.

