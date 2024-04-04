
## Prueba técnica Beeping
@ivanmarelli


## Instrucciones

- Clonar repositorio: git clone git@github.com:ivanmarelli/beeping-test.git
- composer install
- configure su .env ver refetencia .env.example. Verifique su APP_URL local
- php artisan key:generate
- php artisan migrate:fresh --seed


## Levantar Servicios

- redis-server (confurar redis en servidor local)
- php artisan queue:work --queue=totals (cola de trabajos "totals")
- php artisan schedule:work (cron)
- npm run dev (para levantar boostrap)
- php artisan serve (levanta app local)
