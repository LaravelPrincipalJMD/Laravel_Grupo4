## Introduccion

Para el correcto despliegue de nuestra app de JuiceHub con Docker,
se deben complimentar los siguientes pasos en el orden en el que se especifican:

## PASO nº 1

Debemos clonar el repositorio de la app
Para ello ejecutaremos el siguiente comando en la consola:

```git clone https://github.com/LaravelPrincipalJMD/Laravel_Grupo4.git```

## PASO nº 2
Debemos crear la carpeta *mysql* en la raiz del proyecto. La carpeta permanecerá vacía

## PASO nº 3

Debemos situarnos desde una terminal dentro de la carpeta Laravel_Group4 
y ejecutar el siguiente comando:

```docker-compose up -d```

## PASO nº 3

Desde la misma terminal, o desde otra, debemos situarnos dentro de la carpeta *src* y ejecutar el siguiente comando

```composer update```

## PASO nº 4

Debemos crear dentro de *src* un archivo con nombre *.env* y compiaremos exactamente el contenido del archivo *.env.example*

## PASO nº 5

En este punto debemos instalar *npm* y correrlo. Reservaremos una terminal para esto:

```npm i```

y

```npm run dev```

Es importante realizar estos pasos dentro de *src*

## PASO nº 5

Nuestra aplicación ya estará corriendo. Pero necesitamos hacer las migraciones y utilizar los seeders. Para ello, desde una terminal accedermos a la raiz de la carpeta y ejecutaremos el siguiente comando:

```docker-compose exec php php /var/www/html/artisan migrate```

y

```docker-compose exec php php /var/www/html/artisan db:seed```


## POSIBLE FIX 

Si al clonar el repositorio, el archivo *Dockerfile* tiene en su nombre la *f* mayuscula, debe cambiarse a minuscula para que quede así: *Dockerfile*

## POSIBLE FIX 2

En el caso de que no nos permita importar los seeds, probaremos con el siguiente comando antes de emplear el correspondiente:

```docker-compose exec php php /var/www/html/artisan config:clear```

