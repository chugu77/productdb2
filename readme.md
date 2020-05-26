clone repository from https://github.com/chugu77/productdb2.git
copy .docker/* to the root directory 

docker-compose up -d --force-recreate --build

docker-compose exec web php artisan migrate:fresh --seed

default admin user credentials:
username: admin@mail.com
password: password
