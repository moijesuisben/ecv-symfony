# Everything to know about your symfony project
## Run it
### Docker
- `sudo service apache2 stop`
- `docker-compose -f docker-compose.yaml up`
## PhpMyAdmin
- `serveur : ecv_mysql`
- `user : phpecv`
- `mdp : sYLVs6PpFiPgys2kUm6b6n4aFacQohz7`
### Database
1. Communicate with it
- `docker exec -it ecv_php /bin/bash`
2. Create your DB
- `php bin/console d:d:c` (doctrine:database:create)
3. Add/create an entity in it
- `php bin/console make:entity`
- don't miss out the relations to do at the type part
4. Get help to act on it
- `php bin/console`
5. Visibility on your database
- in your navigator, go to : `localhost:8036`
6. Delete some tables from the database
- Delete the entity file and do a `php bin/console doctrine:schema:update --force`
#### Create a command to import CSV file into your database
### Forms
To create it : `php bin/console make:form` in the bash
#### Form Class
#### Use a validator
#### Create our own validators
#### A form in a form
#### Render customization