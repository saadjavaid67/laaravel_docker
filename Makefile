build:
	@docker-compose build --no-cache --force-rm

up:
	@docker-compose up -d

stop:
	@docker-compose stop

composer-update:
	@docker exec laravel-app bash -c "composer update"

data:
	@docker exec laravel-app bash -c "php artisan migrate"
	@docker exec laravel-app bash -c "php artisan db:seed"
