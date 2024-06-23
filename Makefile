install:
	composer install

update:
	composer update

convert-to-arabic:
	./bin/convert-to-arabic
	
convert-to-roman:
	./bin/convert-to-roman

test:
	composer exec --verbose phpunit tests

test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-html coverage

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin tests

say-hello:
	echo "Hello, World!"