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
    Below are the four default route files in the routes folder in Laravel:
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
    - in laravel 10:
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
Que. 
</summary>
</details>

<details>
<summary>
</summary>
</details>

<details>
<summary>
</summary>
</details>

<details>
<summary>
</summary>
</details>

<details>
<summary>
</summary>
</details>

<details>
<summary>
</summary>
</details>

<details>
<summary>
</summary>
</details>
    