<details>
    <summary>
        Que. What is Laravel Framework?
    </summary>

    Ans. Laravel is an open-source PHP web application framework. It is a very well documented, 
        expressive, and easy to learn framework. Laravel is very developer-friendly as the framework 
        can help beginners as well as advanced users. 
</details>

<details>
    <summary>
        Que. What are migrations in Laravel?
    </summary>

    Ans. Migrations are used to create database schemas in Laravel.
        `PHP artisan migrate` to run migrations in Laravel FROM root directory.
        The up() method runs when we run `php artisan migrate` and down() method runs when we run `php artisan migrate:rollback`.
        If we rollback, it only rolls back the previously run migration.
        If we want to rollback all migrations, we can run `php artisan migrate:reset`.
        we can use `PHP artisan migrate:fresh` to drop the tables first and then run migrations from the start.

    <?php
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateUsersTable extends Migration
        {
            public function up()
            {
                Schema::create('users', function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                });
            }

            public function down()
            {
                Schema::dropIfExists('users');
            }
        }
    ?>
</details>

<details>
    <summary>
        Que. What is the latest Laravel version?
    </summary>

    Ans. version 11.
</details>

<details>
    <summary>
        Que. What is Models?
    </summary>

    Ans. A model file which can be used to interact with that table.
        `php artisan make:model Post` to create a Post model.
        A Model can have properties like table, fillable, hidden, etc which defines properties of the table and model.
        
    class Post extends Model
    {
        protected $fillable = [];
        protected $hidden = [];
    }
</details>

<details>
    <summary>
        Que. How to implement soft delete in Laravel?
    </summary>

    Ans. Soft Delete means when any data row is deleted by any means in the database, 
        we are not deleting the data but adding a timestamp of deletion.
        We can add soft delete features by adding a trait in the model file like below.

        - soft Delete include in the migration file if you are using migrations for creating tables.

    Schema::table('users', function (Blueprint $table) {
        $table->softDeletes();
    });
    
    - use in the model for interactio with database

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Post extends Model {
        use SoftDeletes;
        protected $table = 'posts';
    }

        and for use you can use Eloquent\Model delete() method.
</details>

<details>
    <summary>
        Que. What are factories in Laravel?
    </summary>

    Ans. Factories are a way to put values in fields of a particular model automatically. 
        Like, for testing when we add multiple fake records in the database, we can use factories 
        to generate a class for each model and put data in fields accordingly.

    Factories are like defining schemas for database.

    <?php
        namespace Database\Factories;
        use App\Models\User;
        use Illuminate\Database\Eloquent\Factories\Factory;
        use Illuminate\Support\Str;

        class UserFactory extends Factory
        {
            protected $model = User::class;
            public function definition()
            {
                return [
                    'name' => $this->faker->name,
                    'email' => $this->faker->unique()->safeEmail,
                    'email_verified_at' => now(),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'remember_token' => Str::random(10),
                ];
            }
        }

            We can create a new factory using php artisan make:factory FactoryName  --model=modelName
    
</details>

<details>
<summary>
Que. What are seeders in Laravel?
</summary>

Ans. Seeders in Laravel are used to put data in the database tables automatically. 
     After running migrations to create the tables, we can run `php artisan db:seed` to run the seeder 
     to populate the database tables.
     `php artisan make:seeder [className]` to create the seeders.

    <?php
        use App\Models\Auth\User;
        use Illuminate\Database\Eloquent\Model;
        use Illuminate\Database\Seeder;

        class UserTableSeeder extends Seeder
        {
            /**
            * Run the database seeds.
            */
            public function run()
            {
                factory(User::class, 10)->create();
            }
        }
    ?>
</details>

<details>
    <summary>
        Que. What are the default route files in Laravel?
    </summary>
    Ans. Below are the four default route files in the routes folder in Laravel:
    <ul>
        <li>
            web.php - For registering web routes.
        </li>
        <li>
            api.php - For registering API routes.
        </li>
        <li>
            console.php - For registering closure-based console commands.
        </li>
        <li>
            channel.php - For registering all your event broadcasting channels that your application supports.
        </li>
    </ul>
</details>

<details>
    <summary>
    Que. how to do write custom routes in laravel 10 and laravel 11?
    </summary>

    Ans.- in laravel 10:

        - first step is to create custom route file. for example admin.php
            then Add Files to ServiceProvider.
        - path app/Providers/RouteServiceProvider.php
        - in map function call the protected function function like this:

        protected function mapAdminRoutes()
        {
            Route::prefix('admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
        }

        - laravel 11:

        - Create custom route file in routes folder.
        - Define your custom route file in app/bootstrap/app.php file

         health: '/up',
            then: function () {
                Route::namespace('admin')->prefix('admin')->name('admin.')->group(base_path('routes/admin.php'));
            },

</details>


<details>
    <summary>
    Que. How to put Laravel applications in maintenance mode?
    </summary>

    Ans. Maintenance mode is used to put a maintenance page to customers and under the hood, 
        we can do software updates, bug fixes, etc. Laravel applications can be put into maintenance 
        mode using the below command:

        php artisan down

        And can put the application again on live using the below command:

        php artisan up

</details>

<details>
    <summary>
        Que. Can we use Laravel for Full Stack Development (Frontend + Backend)?
    </summary>
    Ans. Laravel is the best choice to make progressive, scalable full-stack web applications. 
        Full-stack web applications can have a backend in laravel and the frontend can be made using blade 
        files or SPAs using Vue.js as it is provided by default. But it can also be used to just provide rest 
        APIs to a SPA application.
</details>

<details>
    <summary>
        Que. How to define environment variables in Laravel?
    </summary>
    Ans. The environment variables can be defined in the .env file in the project directory. 
        A brand new laravel application comes with a .env.example and while installing we copy this file and 
        rename it to .env and all the environment variables will be defined here.

        Some of the examples of environment variables are APP_ENV, DB_HOST, DB_PORT, etc.

</details>

<details>
    <summary>
        Que. What is an artisan?
    </summary>
    Ans. Artisan is the command-line tool for Laravel to help the developer build the application. 
        You can enter the below command to get all the available commands:

        PHP artisan list: Artisan command can help in creating the files using the make command. 
        Some of the useful make commands are listed below:

        php artisan make:controller - Make Controller file

        php artisan make:model - Make a Model file

        php artisan make:migration - Make Migration file

        php artisan make:seeder - Make Seeder file

        php artisan make:factory - Make Factory file

        php artisan make:policy - Make Policy file

        php artisan make:command - Make a new artisan Command

</details>

<details>
    <summary>
        Que. What are available databases supported by Laravel?
    </summary>
    Ans. The supported databases in laravel are:
        PostgreSQL
        SQL Server
        SQLite
        MySQL
</details>

<details>
    <summary>
        Que. What is the templating engine used in Laravel?
    </summary>
    Ans. The templating engine used in Laravel is Blade. The blade gives the ability to use its mustache-like syntax 
        with the plain PHP and gets compiled into plain PHP and cached until any other change happens in the blade file.
        The blade file has .blade.php extension.
</details>

<details>
<summary>
    Que. Define Composer.
</summary>
    Ans. Composer is the package manager for the framework. It helps in adding new packages from 
        the huge community into your laravel application.

        For example, one of the most used packages for authentication will be Passport, for including 
        that into your project, you can run the below command on your terminal:

        composer requires laravel/passport

        {
            "name": "laravel/laravel",
            "type": "project",
            "description": "The Laravel Framework.",
            "keywords": [
                "framework",
                "laravel"
            ],
            "license": "MIT",
            "require": {
                "php": "^7.3|^8.0",
                "fideloper/proxy": "^4.4",
                "fruitcake/laravel-cors": "^2.0",
                "guzzlehttp/guzzle": "^7.0.1",
                "laravel/framework": "^8.12",
                "laravel/tinker": "^2.5"
            },
            "require-dev": {
                "facade/ignition": "^2.5",
                "fakerphp/faker": "^1.9.1",
                "laravel/sail": "^1.0.1",
                "mockery/mockery": "^1.4.2",
                "nunomaduro/collision": "^5.0",
                "phpunit/phpunit": "^9.3.3"
            }
        }
        The “require” and “require-dev” keys in composer.json specify production and dev packages and 
        their version constraints respectively.
</details>