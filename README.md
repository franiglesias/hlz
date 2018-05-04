# Holaluz Dojo

It's a simple PHPStorm project. It includes:

* Basic folder structure
* Basic namespace to start working (Dojo\)
* Composer to install required dependencies (mostly phpunit)
* Dockerized PHP interpreter (based on kill-bill)

## Docker

````bash
docker-compose up -d --build
````
````bash
bash -c "clear && docker exec -it killbill_phpcli sh"
````

## Set up PHP interpreter

Use Docker PHP interpreter

PHPStorm settings > Languages & Frameworks > PHP

* Cli Interpreter
* Add new Interpreter
* Select Docker

[Image](docs/images/config_docker_interpreter.png)

