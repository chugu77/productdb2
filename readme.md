## installing instructions



1. clone branch <b>jstree</b>
2. from the .docker folder run:
    docker-compose up -d --force-recreate --build
3. after container starts run:
    docker exec -it {container_name} php artisan migrate:fresh --seed
4. this will vreate default admin user:
    username: admin@mail.com
    password: password

5. enjoy :)
