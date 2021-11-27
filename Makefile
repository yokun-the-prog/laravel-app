up:
	docker-compose up -d
up-build:
	docker-compose up -d --build
down:
	docker-compose down
ps:
	docker-compose ps
app-laravel:
	docker-compose exec app bash
db-laravel:
	docker-compose exec mysql bash
web-laravel:
	docker-compose exec web bash