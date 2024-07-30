# Consulta CEP
Project developed to solve this [test](https://increazy.notion.site/Teste-Desenvolvedor-backend-62b7e24e6218412cbf1ab36aef46f603).

-   [Installation](#installation)
-   [Running the Application](#running-the-application)

## Installation

To get started with the project, follow these steps:

1. **Clone the repository:**

    ```sh
    git clone https://github.com/your-username/your-repo.git
    cd your-repo
    ```

2. **Install dependencies:**

    ```sh
    composer install
    ```

3. **Copy the example environment file and configure the environment variables:**

    ```sh
    cp .env.example .env
    ```

4. **Generate an application key:**

    ```sh
    php artisan key:generate
    ```

5. **Set up the database:**

    Update the `.env` file with your database credentials and then run the migrations:

    ```sh
    php artisan migrate
    ```
   Para resolver o problema proposto no teste não precisamos de um banco de dados, entretanto, é um requisito para um instalação limpa do Laravel

## Running the Application

To run the application, use the following command:

```sh
php artisan serve
```

**Tests**
There is a branch called overengineered where we have some extra steps and tests.

```sh
php artisan test
```
