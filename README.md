
## API para processamento de XML

## Instalação

Requisitos do ambiente de desenvolvimento:
- [Docker](https://www.docker.com)
- [Docker Compose](https://docs.docker.com/compose/install/)

Clone o repositório

    git clone git@github.com:jonasFer/xml-processor.git

Entre na pasta raiz do projeto

    cd xml-processor 

Dentro do da pasta raiz do projeto rode o comando
    
    cp .env.example .env

Execute o comando para subir os containers
    
    docker-compose up -d

Após finalizar o build dos containers, digite o comando

    docker-compose exec app bash

Dentro do bash do container app execute os seguintes comandos em sequência

    composer install
    php artisan key:generate
    php artisan migrate
    php artisan l5-swagger:generate
    php artisan queue:work

