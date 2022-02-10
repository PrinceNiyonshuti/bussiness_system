<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About - - Business Management System

The system that will administer or manage companies and their employees and clients.

### Resources

-   Use of Notifications
-   Use of Custom email
-   Use of Queues
-   Use of queue jobs
-   use of queue workers

[Link To Repository](https://github.com/PrinceNiyonshuti/bussiness_system.git)

[Link To Deployed App](http://lar-bms.herokuapp.com)

### Requirements

before starting to run the project , make sure you have mailtrap account in order to check the verification link

-   [Mailtrap](https://mailtrap.io/)
-   create your .env file
-   create your database

### .env Mailtrap corresponding data and for public storage access , also for queues to be processed

    MAIL_MAILER=
    MAIL_HOST=
    MAIL_PORT=
    MAIL_USERNAME=
    MAIL_PASSWORD=
    MAIL_ENCRYPTION=
    MAIL_FROM_ADDRESS=
    FILESYSTEM_DRIVER=public
    QUEUE_CONNECTION=database

### after run these script
    Run composer install
    Run cp .env.example .env or copy .env.example .env
    Run php artisan key:generate
    Run php artisan migrate
    Run php artisan db:seed
    Run php artisan storage:link
    Run php artisan queue:work
    Run php artisan serve
