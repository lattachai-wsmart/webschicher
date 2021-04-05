# Start Project
 ### add upstream
 git remote add upstream git@github.com:lattachai-wsmart/webschicher.git

Create new file .env

- DB_HOST=container db name Ex. crm_db
- DB_PORT=docker db port
- DB_DATABASE=new_crm_wsmart
- DB_USERNAME=User Docker db
- DB_PASSWORD=Pass Docker db


docker-compose exec crm_app php artisan migrate

# Docker

### Model

docker-compose exec crm_app php artisan make:model CoverageEngine

test update
