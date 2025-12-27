# CMS Light

## Docker/PHP example of a simple PHP DBless CMS system

## Usage

- Routing - make php class for each page, like About class
    - extend aPage
    - use PascalCaseFormat for naming the class AND the file for each route (ex. /page-address -> file: PageAddress.class.php; class: PageAddress)
- Put files which do not need to be publically accessed in the `www` folder, NOT in the `html` folder. 
- `html` folder will be the base folder of your site. Your domain name should point to it on your PHP hosting
- Run `node scheduler` to start server locally and to watch for changes. 
- For production - upload only `www` folder

## Prerequisites

- Docker
- Node.JS ^14 (optional for scheduler)

## Run server / rerun after change

```
bash run.sh
```

## Stop server

```
bash stop.sh
```

## Refresh

```
bash r.sh
```

## Watch files Scheduler

```
node scheduler
```

## Help is always appreciated!

- BTC: `3N1oSTygZZKQ7qkPJ7bAvh3wNHAXZ7GaQ7`
- PayPal: https://paypal.me/antonmitsev
- Revolut: https://revolut.me/anton27cf
