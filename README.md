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
```mysql -h $DB_HOST -u $DB_USER -p$DB_PWD < create-sf2fixme-db.sql```

with ```$DB_HOST```,```$DB_USR``` and ```$DB_USR``` correctly set.

This will create the sf2fixme database on your mysql server (delete if existing)

## Fixmes
 * .../app_dev.php/datagridbundle
 * .../app_dev.php/asseticbundle