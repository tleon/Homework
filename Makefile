start:
	docker-compose up -d

solution-with-php-function:
	docker-compose exec php php src/WithPhpFunctions.php

solution-without-php-function:
	docker-compose exec php php src/WithoutPhpFunctions.php
