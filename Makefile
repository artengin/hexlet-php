install:
	composer install

convert-to-arabic:
	./bin/convert-to-arabic

convert-to-roman:
	./bin/convert-to-roman

test-arabic:
	./bin/test-arabic

test-roman:
	./bin/test-roman

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin tests