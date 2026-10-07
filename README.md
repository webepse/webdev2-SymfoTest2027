# installer le projet

## clone le projet 

```git clone https://github.com/webepse/webdev2-SymfoTest2027.git```

## rentrer dans le dossier

```cd webdev2-SymfoTest2027```

## ouvrir avec code

```code .```

## faire les installations
assurez vous d'être dans le dossier du site via le terminal

```composer install```

pour importMap (assetMapper)

```php bin/console importmap:install```

## la base de données
Vérifier le .env pour votre configuration

Création de la base de données: 

```php bin/console doctrine:database:create```

Création des tables 

```php bin/console doctrine:migrations:migrate```

Insèrer les fixtures (données)

```php bin/console doctrine:fixtures:load```

## démarrer le serveur 

```symfony server:start```

si jamais soucis faire avant: 

```symfony server:stop```
