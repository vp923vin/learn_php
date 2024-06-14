Que. What is Laravel Framework?
Ans. Laravel is an open-source PHP web application framework. It is a very well documented, 
     expressive, and easy to learn framework. Laravel is very developer-friendly as the framework 
     can help beginners as well as advanced users. 

Que. What are migrations in Laravel?
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

Que. What is the latest Laravel version?
Ans. version 11.

Que. What is Models?
Ans. A model file which can be used to interact with that table.
    `php artisan make:model Post` to create a Post model.
    A Model can have properties like table, fillable, hidden, etc which defines properties of the table and model.
    
    class Post extends Model
    {
        protected $fillable = [];
        protected $hidden = [];
    }

Que. How to implement soft delete in Laravel?
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

Que. What are factories in Laravel?
Ans. Factories are a way to put values in fields of a particular model automatically. 
    Like, for testing when we add multiple fake records in the database, we can use factories 
    to generate a class for each model and put data in fields accordingly.
    


    
    