# Laravel Project

## Requirements
- PHP >= 8.3
- Composer
- MySQL 


## How to Download and Run the Project
. **Clone the Repository**

    Clone the repository to your local machine using the following command:
    ```bash
    ```

**Navigate to the Project Directory**

    Change to the project directory:
    ```bash
    cd laravelproject
    ```

 **Install Backend Dependencies**

    Use Composer to install backend dependencies:
    ```bash
    composer install
    ```



 **Create Environment File**

    Create a copy of the default environment file:
    ```bash
    cp .env.example .env
    ```
    put database credentials in .env file

 **Generate Application Key**

    Generate the application key using the following command:
    ```bash
    php artisan key:generate
    ```


**Migrate  Database **

    Run the following command to migrate the database:
    ```bash
    php artisan migrate
    ```




 **Run the Server**

    You can run the server using the following command:
    ```bash
    php artisan serve
    ```

    The application will now be available at:
    ```
    http://127.0.0.1:8000
    ```

## Troubleshooting

- If you encounter permission issues, ensure you have the correct permissions for the `storage` and `bootstrap/cache` directories.
- If you face dependency issues, try running:
    ```bash
    composer install --no-scripts
    ```



