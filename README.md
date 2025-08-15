
# Passo a passo

## Instalação

Clone Repositório

```sh
git clone https://github.com/fernando-fix/ead-univesp.git
```

Entrar na pasta

```sh
cd ead-univesp
```

Abrir com vscode

```sh
code .
```

Copiar o env

```sh
cp .env.example .env
```

Editar o .env se necessário

Suba os containers do projeto

```sh
docker-compose up -d --build
```

Acessar o container

```sh
docker-compose exec app bash
```

Instalar as dependências do projeto

```sh
npm install
composer install
```

Preparar o projeto

```sh
php artisan key:generate
php artisan migrate
npm run build
```

Acessar o projeto
[http://localhost:8989](http://localhost:8989)

## Comandos para desenvolvimento

Subir os containers

```sh
docker-compose up -d
```

Parar os containers

```sh
docker-compose down
```

Compilar o front end em tempo real

```sh
npm run dev
```