<h1  style="text-align: center; padding-bottom:40px">Project Laravel</h1>
Project created in Laravel 10, in which I put into practice some of my knowledge acquired in the last years.

- [How to install](#How to install).
- [Knowledge/Tools/skills used](#Knowledge/Technologies/skills used).

## How to install
Steps to execute this project:
- Clone the project. Execute:
	- git clone https://github.com/Leomiguel19/laravel-project.git
- Then Execute:
	- composer update
- Then  Create the your .env file (you can copy and paste from .env.example and remove ".example")
- Configure the .env with your credentials so it can send mails.
- Last execute all this commands:
	- php artisan migrate
	- php artisan key:generate
	- php artisan storage:link



## Knowledge/Technologies/skills used
Here the Knowledge/Technologies/skills, I use during the development of this project:
- Create project laravel
- Create a login and register
- Migrations (create new and updates tables with them)
- Cron Jobs
- Mutators
- FormRequest to validate the data in the register and the login form
- Login as principal page
- It allows login with email or username
- Error handle in the FormRequest
- Handle and storage files
- Show errors in front
- Styles with Bootstrap 5
