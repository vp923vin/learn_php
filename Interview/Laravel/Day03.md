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