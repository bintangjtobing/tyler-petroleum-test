### Installation
1. Clone the repository first
   ```sh
   git clone https://github.com/bintangjtobing/tyler-petroleum-test
   ```
2. Dont forget to set the connection on .env file, change on DB_Connection section
    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1 <- Your site IP
    DB_PORT=3306 <- Dont forget the port of your hosting databases
    DB_DATABASE=tylerpetroleumdb
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    
## Setup
- Go into Laravel container and run `php artisan migrate` to create database

## Run the sites
- Run `php artisan serve`
- Access the website via `http://localhost:8000`
