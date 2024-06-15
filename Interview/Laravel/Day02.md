<details>
    <summary>
        Que. What are Relationships in Laravel?
    </summary>

    Ans. Relationships in Laravel are a way to define relations between different models in the applications. 
        It is the same as relations in relational databases.

        Different relationships available in Laravel are:
        One to One
        One to Many
        Many to Many
        Has One Through
        Has Many Through
        One to One (Polymorphic)
        One to Many (Polymorphic)
        Many to Many (Polymorphic)
        Relationships are defined as a method on the model class. An example of One to One relation is shown below. 
        <?php
            namespace App\Models;
            use Illuminate\Database\Eloquent\Model;
            class User extends Model
            {
                public function phone()
                {
                    return $this->hasOne(Phone::class);
                }
            }
        ?>
        The above method phone on the User model can be called like : `$user->phone` or `$user->phone()->where(...)->get()`
</details>

<details>
<summary>
Que. What is Eloquent in Laravel?
</summary>
Ans. Eloquent is the ORM(object relation mapper) used to interact with the database using Model classes. 
    It gives handy methods on class objects to make a query on the database.

    It can directly be used to retrieve data from any table and run any raw query. 
    But in conjunction with Models, we can make use of its various methods and also make use of relationships 
    and attributes defined on the model.

    Some examples of using the Eloquent are below:
    `DB::table(‘users’)->get()`
    `User::all()`
    `User::where(‘name’, ‘=’, ‘Eloquent’)->get()`

</details>

<details>
<summary>
Que. What is throttling and how to implement it in Laravel?
</summary>

Ans. Throttling is a process to rate-limit requests from a particular IP. 
    This can be used to prevent DDOS(Distributed Denial-of-Service) attacks as well. 
    For throttling, Laravel provides a middleware that can be applied to routes and it can be added 
    to the global middlewares list as well to execute that middleware for each request.

    Here’s how you can add it to a particular route:

    Route::middleware('auth:api', 'throttle:60,1')->group(function () {
        Route::get('/user', function () {
            //
        });
    });

    This will enable the /user route to be accessed by a particular user from a particular IP only 60 times in a minute.
</details>

<details>
<summary>
Que. What are facades?
</summary>
Ans. Facades are a way to register your class and its methods in Laravel Container so they are available 
    in your whole application after getting resolved by Reflection.
    The main benefit of using facades is we don’t have to remember long class names and also 
    don’t need to require those classes in any other class for using them. It also gives more 
    testability to the application.

    # When to Utilize Facades
    Facades have many benefits. They provide a terse, memorable syntax that allows you to use Laravel's 
    features without remembering long class names that must be injected or configured manually. 
    Furthermore, because of their unique usage of PHP's dynamic methods, they are easy to test.
</details>

<details>
<summary>
Que. What are Events in Laravel?
</summary>
Ans. In Laravel, Events are a way to subscribe to different events that occur in the application. 
    We can make events to represent a particular event like user logged in, user logged out, user-created post, etc. 
    After which we can listen to these events by making Listener classes and do some tasks like, user logged in 
    then make an entry to audit logger of application.
    For creating a new Event in laravel, we can call below artisan command:
    `php artisan make:event UserLoggedIn`

    For this event to work, we need to create a listener as well. We can create a listener like this:
    `php artisan make:listener SetLogInFile --event=UserLoggedIn`
</details>
    