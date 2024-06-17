<details>
    <summary>
        Que. Explain the process of disabling CSRF protection on specific routes?
    </summary>
    Ans. In Laravel, the CSRF (Cross-Site Request Forgery) protection middleware is enabled by default.
        To disable CSRF protection for specific routes, developers can add the URL or route to the ‘$except’ variable. 
        The variable is readily available from the path app\Http\Middleware\VerifyCsrfToken.php file. 
        Check out the example below to get a better understanding of the same.<br>
        <img src="./asset/csrf.png", alt="code-csrf">
        
        for all routes:

         protected $except = [
            '*'
        ];
</details>

<details>
    <summary>
        Que. Advantages of service Containers? 
    </summary>

    Ans.
       - Easy class dependency management for creating objects.
       - Services contained as a registry.
       - Allows binding of interfaces to concrete classes.
</details>

<details>
    <summary>
        Que. Mention the process of using cookies in Laravel?
    </summary> 
    Ans. In Laravel, cookies can be used to store small amounts of data on the client-side and retrieve 
        them at a later time. Laravel supports handling and managing cookies via the Illuminate\Http\Request 
        and Illuminate\Http\Response objects. To work with cookies in Laravel, follow these steps:<br>
        Creating Cookies: <br>
        To create a cookie, use the cookie helper function or the Cookie facade. This generates a new 
        Illuminate\Cookie\CookieJar instance representing the cookie, with options such as name, value, 
        duration, path, domain, secure, and HTTP only.<br>
        <img src="./asset/cookie1.png" alt="cookie-code" ><br>
        Attaching Cookies to Responses: <br> 
        To send the created cookie to the client, attach it to your response object using the withCookie method.<br>
        <img src="./asset/cookie2.png" alt="cookie-code" ><br>
        Retrieving Cookies: <br> 
        To access the values of cookies sent by the client, use the cookie method on the Illuminate\Http\Request object.<br>
        <img src="./asset/cookie3.png" alt="cookie-code" ><br>
        Encryption: <br> 
        By default, Laravel encrypts and signs all cookies, ensuring data confidentiality and integrity. 
        If you need to set a cookie that should not be encrypted, add the cookie's name to the except array 
        in the config/cookie.php configuration file.
</details>

<details>
    <summary>
        Que. How to use insert statement function in Laravel?
    </summary>
    Ans. Query Builder:<br> 
        To insert data using Laravel's Query Builder, you can use the insert method on the DB facade:
        <img src="./asset/db-builder.png" alt="db-builder"><br>
        Eloquent ORM: <br>
        To insert a new record using Eloquent ORM, create a new model instance, set the desired attributes, 
        and call the save method:<br>
        <img src="./asset/elenquent-orm-builder.png" alt="elenquent-orm-builder">

</details>

<details>
    <summary>
        Que. How to use the updateOrInsert() method in Laravel Query?
    </summary>
    Ans. DB::table(‘blogs’)->updateOrInsert([Conditions],[fields with value]);
</details>

<details>
    <summary>
        Que. How to check if a column exists or not in a table?
    </summary>
    Ans. 
        <img src="./asset/column-check.png" alt="column-check">
</details>

<details>
    <summary>
        Que. Explain what are gates in Laravel?
    </summary>
    Ans. Laravel gates are an essential part of the application’s authorization process. 
        They serve as mechanisms to determine if a user has the necessary permissions to perform a specific action. 
        These gates are defined using the Gate facade in the AuthServiceProvider. They use callback functions 
        to express the authorization logic in a simple and concise manner.<br>
        Laravel development services use Gates throughout the website or application to check user authorization. 
        Each Gate is responsible for evaluating a single action, making it possible to evaluate multiple user abilities.
        This feature of Laravel gates enhances app security and control through precise access control based on 
        user roles and permissions.<br>
        How to use gate: <br>
        create a Gate: <br>
        php artisan make:gate YourGateName
        <br>
        Define Authorization Logic: <br>

        <?php
            namespace App\Providers;
            use Illuminate\Support\Facades\Gate;
            class YourGateName
            {
                public function boot()
                {
                    $this->registerPolicies();
                    Gate::define('your-gate-name', function ($user, $parameter) {
                        // Logic to determine if the user can perform the action
                        return /* Your authorization logic here */;
                    });
                }
            }
        ?>
<br>
        Register the Gate:<br>

        use App\Providers\YourGateName;
        class AuthServiceProvider extends ServiceProvider
        {
            protected $policies = [
                // Your model policies here
            ];
            public function boot()
            {
                $this->registerPolicies();
                $this->registerGates();
            }
            public function registerGates()
            {
                Gate::class('your-gate-name', YourGateName::class);
            }
        }
<br>
        Use the Gate in Controller or Middleware: <br>

        public function someControllerMethod()
        {
            if (Gate::allows('your-gate-name', $parameter)) {
                // Logic to perform when the gate allows the action
            } else {
                // Logic for denied access
            }
        }
<br>
        Use the Gate in Blade Views: <br>

        @can('your-gate-name', $parameter)
            <!-- Content for authorized users -->
        @else
            <!-- Content for unauthorized users -->
        @endcan
<br>
        Pass Additional Parameters:

        Gate::allows('your-gate-name', [$parameter1, $parameter2]);


</details>

<details>
    <summary>
        Que. 
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>

<details>
    <summary>
        Que.
    </summary>
    Ans.
</details>