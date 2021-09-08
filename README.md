Installation instructions

1. Clone the project from git to your server : git clone https://github.com/kipkuruibarnaba/laravelAdminLte.git
2. Cd into the project and run : composer install
3. Generate .env by running this command : cp .env.example .env
4. Generate key by running the following command : php artisan key:generate
5. Create a database of your choice name in your server.
6. Go to the .env file in the project and configure your : database name, username and password as shown below.The database name should be the same as the one you have created in your server
   DB_DATABASE=adminltedb
   DB_USERNAME=root
   DB_PASSWORD=
   7.Run the following command in the project directory to create table schemas in the database : php artisan migrate
   8.Run the following command in the project directory to seed the users table : php artisan db:seed
7. Start the Project by running: php artisan serve
   10.The project will run on your browser on port : http://127.0.0.1:8000/
   11.Login using the credentials :
   email address: admin@admin.com
   password: password
