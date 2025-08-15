
# Passo a passo

## Instalação

Clone Repositório

```sh
git clone https://github.com/fernando-fix/ead-univesp.git
```

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
npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate
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

Acessar o container

```sh
docker-compose exec app bash
```

Compilar o front end em tempo real

```sh
npm run dev
```

Compilar o front end para produção

```sh
npm run build
```
