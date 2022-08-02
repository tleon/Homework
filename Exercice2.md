# Exercice 2 ~ review.

## Question 1 ~ What does this project do? Give details to explain.

    * This application should get a token from the incoming request query parameter.
    * Query the database for an uri corresponding to this token.
    * Update the number of time this token has been passed / used.
    * Redirect onto an url contained in the uri object from the database.
    * Rick roll the user.

## Question 2 ~ Did you see important or strange things?

    * The database is empty. There is no migrations to be ran so no tables are created and there is no data. The database creation and the fixtures are manual commands to be run from the readme. 
    * The symfony framework is almost not used. 
    * The ORM is almost not used either.

## Question 3 ~ What important improvements could you propose? Give us 3 improvements if possible.

    * The symfony framework could be used to handle the request / response stack. This would allow us to pass the query parameters into a validator or an option resolver. It would help us sanitize the inputs and help us to have a more elegant way to send a response.

    * We should add annotations in the controller to declare the routes and not use a yaml config file.

    * We should use the ORM or at least PDO to prepare the request and bind the parameters instead of inputing raw SQL. We could also use DQL for the query. 

    * Composer could be installed in the container. This would prevent the users of the project to have to adapt the php version on their machine to the version of the project.

    * The queries in the readme should be transformed into migrations. 

    * We could automate the build / start of the project. Create a make file to install the dependencies, start the containers and run the migrations.