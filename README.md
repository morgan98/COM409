# COM409
Website Project for Client-Side Application Development 

**WARNING**
Make sure you have the database running before you try to enter the site!!!!


#Database Info

i'm not using docker right now due to multiple issues, but you should still be able to access the info for the database. I'm using PHPmyadmin to manage the database

STEPS

1. Open PHPmyadmin and create a database called 'com409'
2. ensure their is an account called admin, hostname localhost with the password admin, make one if needs be.
3. Go to the .env file in the project folder. Ensure that the database name is com409 and the username and password are both admin
4. Open Command Line/powershell and cd into the project's directory
5. Type 'php artisan migrate'. This should hopefully create the tables present in the project in the phpmyadmin database. If not, create an empty database within phpmyadmin named com409 and try again.
6. Type 'php artisan db:seed', which should populate the products table with entries.



