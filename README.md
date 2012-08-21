#sf2-fixme
=========

A set of Symfony2 bundle problems to fix.

## Installation
### Sources
```
git clone https://github.com/pdoreau/sf2-fixme.git
cd sf2-fixme
php bin/vendors install
```
### Database
 * Create the database if not exists :

```mysql -h $DB_HOST -u $DB_USER -p$DB_PWD -e "create database $DB_NAME" ```

Define as well database parameters in ```app/config/parameters.ini``` after copying from ```app/config/parameters.ini.dst``` :

```cp app/config/parameters.ini.dst app/config/parameters.ini```

 * Create the schema :

``` php app/console doctrine:schema:update --force ```

 * Insert data :

```mysql -h $DB_HOST -u $DB_USER -p$DB_PWD $DB_NAME < sf2_fixme_data.sql  ```

## Fixmes
 Open your browser to the route / to see the list.