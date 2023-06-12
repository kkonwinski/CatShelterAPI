# Makefile
start:
	docker-compose up -d

stop:
	docker-compose down

php:
	docker exec -it cat-shelter-api-php bash

nginx:
	docker exec -it cat-shelter-api-nginx bash

postgres:
	docker exec -it cat-shelter-api-postgres bash

logs:
	docker-compose logs -f
