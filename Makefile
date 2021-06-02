start:
	php artisan serve
migrate:
	php artisan migrate

console:
	php artisan tinker

test:
	php artisan test

lint:
	composer run-script phpcs -- --standard=PSR12 app/Http/Controllers app/Models routes tests

lint-fix:
	composer phpcbf  -- --standard=PSR12 app routes tests database
