INSTALLATION OF RECRUITMENT APP
---------------------------------------------------------------------------

1. Install Laravel 10 via command terminal.
	- composer create-project --prefer-dist laravel/laravel:^10 recruitment

2. Go to recruitment folder then Install Spatie Permission.
	- composer require spatie/laravel-permission

3. Install Laravel UI via command terminal.
	- composer require laravel/ui

4. Create bootstrap auth scaffolding.
	- php artisan ui bootstrap --auth

5. Type npm install

6. Type npm run build

7. Copy files and folders to recruitment folder

8. Open .env file for Database connection
	- DB_HOST=localhost
	- DB_PORT=3306
	- DB_DATABASE=recruitment
	- DB_USERNAME=root
	- DB_PASSWORD=password


9. Migrate all migration via command 
	- php artisan migrate:fresh --seed

10. Type php artisan serve, then Go to 127.0.0.1:8000 in your browser.
------------------------------------------------------------------------

//Super Admin Credentials
- Email: superadmin@admin.com
- Password: password

//Admin Credentials
- Email: admin@admin.com
- Password: password

//Product Manager Credentials
- Email: manager@admin.com
- Password: password
