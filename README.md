# Doação de Sangue


### Objetivos do projeto
Plataforma onde será possível pesquisar locais proximos para realizar doações de sangue.


## Pré-requisitos

Para utilizar o projeto, é necessário ter o xampp instalado. Segue o passo a passo para instalação e uso do mesmo:

* Baixe o programa [Xampp](https://www.apachefriends.org/download.html) de acordo com seu sistema operacional
* Siga as instruções no site para instalar de acordo com seu sistema operacional

## Como Executar o Projeto

### Passo 01: inicializando o xampp
Com o xampp devidademente instalado, siga os passos:

* Abra o Xampp Control Pane
* Inicie os serviços Apache e MySQL

#### Passo 02: criando o banco de dados
Com o Xampp rodando, utilize um navegador para acessar o link http://localhost/phpmyadmin/ 

Feito isso, crie uma nova tabela chamada **doacao**

Agora que o banco foi criado, copie o código no arquivo **base.sql** e cole na aba **SQL** da sua base de dados e clique no botão **Continuar**

#### Passo 03: utilizando o projeto

Depois de seguir os passos 1 e 2, navegue em http://localhost/doacao-de-sangue/ e utilize o projeto :D


## Contribuição

Se você quiser contribuir para o projeto (melhorias de código, correções de bugs), saiba que é muito bem-vindo!


### Instruções de Contribuição

Siga estas etapas:

1. Faça um fork do projeto
2. Crie uma nova branch
```
$ git checkout -b feature-x
```
3. Faça commit das suas alterações:
```
$ git commit -m 'Adicionei feature X'
```
4. Envie para o repositório original:
```
$ git push origin feature-x'
```
5. Abra um Pull Request e detalhe o que fez
6. Assim que possível, conferimos seu PR :)