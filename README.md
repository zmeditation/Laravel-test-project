# silverorange Developer Assessment

This exercise is designed to assess how you approach tasks required in your
position as an intermediate PHP developer at silverorange. We are interested to
see how you work as well, as what your final results are; include useful Git
commit messages and comments where you think your code may be unclear.

Please do not include your name or any other self-identifying information in
code or commit messages as silverorange will anonymize your work before
reviewing.

## Tasks

Using the basic PDO framework, and data fixtures for authors and posts that are
provided:

1.  Create an importer that imports a list of post files (examples are provided
    in the `data` folder) into the database.
2.  Create a tool that given a post id from the database, renders the post
    content (title, body, author) as an HTML document.
3.  Create a tool that renders all available posts in reverse chronological
    order as an HTML document. Include the post title and author in the rendered
    document.

The post body is formatted as Markdown and the HTML should include the
formatted Markdown.

The provided framework is a guideline and does not need to be used. Adapt it or
replace it as you see fit.

The HTML rendering script does not have to be a web server—you can just dump
HTML to STDOUT. If you want to use PHP's built-in server (`php -S`) or an
existing web framework, that is acceptable.

## Environment

You may use any
[currently supported version of PHP](https://www.php.net/supported-versions.php).

## Coding Standard

Please use [PSR-12 and PSR-4](http://www.php-fig.org/psr/) for your code. The
[PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) tool can be used to check
your code.

The project is set up to lint your code using:

```
composer run lint
```

## Dependencies

Pease use the [Composer](https://getcomposer.org/) tool for dependency
management. You can use any 3rd-party libraries as necessary or as desired in
order to achieve the tasks.

## Commits

Your commit history is important to us! Try to make meaningful commit messages
that show your progress. Remember to not include your name or any other
self-identifying information in your commit messages.

## Database

You may use MySQL, MariaDB, PostgreSQL, or SQLite for this exercise.

The provided SQL files will run in PostgreSQL. You can use the provided
Docker Compose configuration to run a local instance of PostgreSQL using:

```sh
docker compose up --detach
```

The Docker container has the following database properties:

- port: `5532`
- database: `silverorange`
- user: `silverorange`
- password: `silverorange`

When the database is running, you can import the provided tables and fixtures
by running:

```sh
docker compose exec -- db psql silverorange silverorange < sql/authors.sql
docker compose exec -- db psql silverorange silverorange < sql/posts.sql
```

If you want to reset your database, run:

```sh
docker compose down --volumes
docker compose up --detach
```

For other databases, the provided SQL sources may need modification. You may
use Docker Compose or any other method of running a local database.
