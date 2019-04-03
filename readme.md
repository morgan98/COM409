# COM409
Website Project for Client-Side Application Development 

**WARNING**
Make sure you have the database running before you try to enter the site!!!!


#Database Info

i'm not using docker right now due to multiple issues, but you should still be able to access the info for the database. I'm using PHPmyadmin to manage the database

STEPS

1. Open PHPmyadmin and create a database called 'com409'
2. Ensure there is an account called admin, hostname localhost with the password admin, make one if needs be.
3. Go to the .env file in the project folder. Ensure that the database name is com409 and the username and password are both admin
4. Open Command Line/powershell and cd into the project's directory
5. Type 'php artisan migrate'. This should hopefully create the tables present in the project in the phpmyadmin database. If you have previously added tables type 'php artisan migrate:fresh' in order to update tables
6. Type 'php artisan db:seed', which should populate the products table with entries.
	Alternatively, step 5 and 6 can be done by typing 'php artisan migrate:fresh --seed'
7. If you encounter an error such as 'Class UserTableSeeder does not exist' then you should run 'composer dumpautoload' in Command Line in order to remap all available classes.

#Admin Area 

The admin area has been created using the libary [Laravel Voyager](https://laravelvoyager.com/).

If you have trouble installing it please refer to the documentation on the site.

In order to access the admin area simply type: localhost/admin.

The admin login is:

username: admin@admin.com

password: password 

NOTES

1. Default user is email: admin@ulster.ac.uk   password: admin



