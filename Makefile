# Kokoroe Recruitment

all:
	make composer.phar
	make vendor
	make test

composer.phar:
	@curl -sS https://getcomposer.org/installer | php

vendor: composer.phar
	@php composer.phar install

test: vendor
	@./vendor/bin/phpunit --coverage-text --coverage-html build/coverage
