
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

Abrir em uma nova janela do vscode

```sh
code .
```

Feche a janela anterior e use a janela atual para continuar

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

Instalar as dependências javascript do projeto

```sh
npm install
npm run build
```

Instalar as dependências php do projeto

```sh
composer install
```

Preparar o projeto

```sh
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

Compilar o front end em tempo real

```sh
docker-compose exec app npm run dev
```

Compilar o front end para produção

```sh
docker-compose exec app npm run build
```
