# crudPHP


#Documentação para CRUD de Amoebas em PHP
Este documento descreve um sistema CRUD (Create, Read, Update, Delete) em PHP para gerenciar registros de amoebas. Você será capaz de adicionar, editar e excluir informações sobre amoebas usando este sistema. O sistema utiliza uma base de dados MySQL para armazenar os registros.

#Pré-requisitos
Antes de começar, certifique-se de que você tenha os seguintes componentes instalados:

Servidor Web: Você precisa de um servidor web como Apache ou Nginx instalado e em execução no seu sistema.

PHP: Certifique-se de que o PHP esteja instalado. Você pode verificar a instalação do PHP executando php -v no terminal.

MySQL: Você precisa ter um servidor MySQL instalado e configurado. Certifique-se de ter as credenciais do banco de dados.

#Configuração do Banco de Dados
Crie um banco de dados MySQL chamado amoebas_db.

Funcionalidades
1. Adicionar Amoeba
Para adicionar uma nova amoeba ao banco de dados, acesse adicionar_amoeba.php no navegador. Preencha o formulário com o nome da amoeba, descrição e data de coleta e clique em "Adicionar".

2. Editar Amoeba
Para editar uma amoeba existente, acesse editar_amoeba.php?id=<id> no navegador, onde <id> é o ID da amoeba que você deseja editar. Você poderá atualizar o nome, descrição e data de coleta da amoeba.

3. Excluir Amoeba
Para excluir uma amoeba, acesse excluir_amoeba.php?id=<id> no navegador, onde <id> é o ID da amoeba que você deseja excluir.

4. Listar Amoebas
Para listar todas as amoebas existentes, acesse index.php no navegador. Você verá uma lista de todas as amoebas cadastradas no banco de dados.

Conclusão
Este CRUD em PHP permite que você gerencie informações sobre amoebas de maneira fácil e eficiente. Você pode adicionar, editar e excluir registros de amoebas de acordo com suas necessidades. Certifique-se de seguir as práticas recomendadas de segurança, como validação de entrada de dados, para proteger seu sistema contra ameaças potenciais.
