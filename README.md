
UMS LITE
=============

Introducing UMS LITE: A free to use, lightweight PHP framework Developed by [We Do IT Stuff](https://wedoitstuff.co.uk). For those of you who want an out-of-the-box working solution to user management with easy scalability and an intuitive Controller System.

Need something more powerful out of the box? Why not checkout out **UMS Framework Complete** (In development)

**Proposed Features in UMS Framework Complete**
1. Google Login (built)
2. User Group Manaement (WIP)
3. Stripe Payments for paid accounts (built - mostly)
4. Dark mode with state saving (Done)
5. Plugin Features (Building)
6. Automated deployments for managed hosting (WIP)
7. Rest API - build your own apps to connect (proposed)
8. Auto updates (From main / experimental)
9. Automated backups (Live with UMS LITE)
10. Plugins installer & plugins builder (proposed) <- Sell your work to other people using UMS

Works on PHP >= 7.0 & MySQL >= 5.7

Here is a list of feature included in UMS LITE

1.  USER MANAGEMENT & LEVELS
2.  Admin dashboard
3.  Create Accounts & Password Reset
4.  Support for multiple themes (three included)
5.  Easy to follow Controller based system
6.  Pretty URLS out of the box
7.  Should work on any shared / dedicated apache server

**This is a lightweight application**: please weigh up your options with all frameworks. Yes, this can be adapted and built upon to accommodate for most uses, we do not recommend building extremely large scale applications using this. (I.E, Facebook this probably won't be an upgrade from your user management system, but who knows? Hi Mark Zuckerberg)

Personal use cases so far:

1.  eCommerce dashboard & stock manager
2.  Web hosting & cloud API dashboard
3.  Online payment gateway with crypto trading

demo url [here](https://lite.umsframework.io/)
Accounts:
| Username      | Password | Account Level |
|---------------|----------|---------------|
| demo@demo.com | 12345678 | Admin (7)     |

Feel free to try out the account register process too, it's super simple! (Email verification is required - all accounts are terminated after 15 mins)

* * * * *

Installation & Usage
------------------------

**Using GIT** *recommended*
Firstly clone this repository
```git
git clone https://github.com/wedoitstuff/UMS-LITE.git
```


Now use composer (This will install all the dependencies (vendor folder) - )

```composer
composer install
```

**Shared Instructions** *must follow carefully*


1. Access your application online / or on localhost. You should be greeted with an installation wizard. complete the wizard, your system should now be installed!
2. You can manually update the .env file once installation is completed :)
3. You can change all the default demo user details once logged in!


**Making Changes**
*Changing the theme*: to change the theme edit *.env* and change this line:
```dotenv
#Choose from trendy/simple/elegant
THEME=trendy
```

I am planning on making these editable via the dashboard

**THESE ARE NOW AVAILABLE THROUGH THE DASHBOARD** `{url}/admin/configuration/basic`



* * * * *

Creating New Pages & Controllers
------------------------

First let's discuss the way pages are rendered. it's not your simple page.php (link.com/page.php) we use controllers and constructors.
**Understanding the layout**
each link is made up of the base domain (can be in a sub folder) for this example we are assuming it is in the root folder
*e.g.* https://builtontheweb.co.uk/dashboard/index
let's break this down with some examples:

root/dashboard/index
| BASE   | Controller                                       | Page                                          |
|--------|--------------------------------------------------|-----------------------------------------------|
| [root] | *application/Controller/DashboardController.php* | *application/view/content/dashboard/index.php* |

root/user/updatePassword
| BASE   | Controller                                       | Page                                          |
|--------|--------------------------------------------------|-----------------------------------------------|
| [root] | *application/Controller/DashboardController.php* | *application/view/content/dashboard/index.php* |

In the *application/Controllers* directory

Example Controller file (*application/Controllers/DashboardController.php*)
```PHP
<?php

/**
 * This controller shows an area that's only visible for logged in users (because of Auth::checkAuthentication(); in line 16)
 */
class DashboardController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // this entire controller should only be visible/usable by logged in users, so we put authentication-check here
        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /dashboard/index in your app.
     */
    public function index()
    {
        $this->View->render('dashboard/index', array(
            'user_name' => Session::get('user_name'),
            'user_email' => Session::get('user_email'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_account_type' => Session::get('user_account_type')
        ));
    }
}
```
For each page in your *application/views/theme/dashboard/...* folder you need to construct it in the Controller (*DashboardController.php* in this case)

So lets say we want a page called **overview** which we want to show as *link/dashboard/overview*.
1. We need to create the file *application/views/content/dashboard/overview.php*
2. Now we need to construct the page in the *DashboardController.php* file we do this by creating a new public function and naming it to how we want to type it in the url (i.e a public function named *test* will be accesible by typing root/dashboard/test - We want to call it overview. we then want to tell it where to find the file to load from (you don't need to add *.php* that's added later automatically). The View->render() section is where we put the file location (**you only need the folder and the file** - the rest of the file location is configured) Below is an example of the new *DashboardController.php* file with overview added
```PHP
<?php

/**
 * This controller shows an area that's only visible for logged in users (because of Auth::checkAuthentication(); in line 16)
 */
class DashboardController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // this entire controller should only be visible/usable by logged in users, so we put authentication-check here
        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /dashboard/index in your app.
     */
    public function index()
    {
        $this->View->render('dashboard/index', array(
            'user_name' => Session::get('user_name'),
            'user_email' => Session::get('user_email'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_account_type' => Session::get('user_account_type')
        ));
    }
	//example code
	public function overview()
    {
        $this->View->render('dashboard/overview', array(
            'user_name' => Session::get('user_name'),
            'user_email' => Session::get('user_email'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_account_type' => Session::get('user_account_type')
        ));
    }
}
```
3. Now you can make your page content in: *view/content/dashboard/overview.php* **Note**: YOu only need to add the main content (The header and footer is managed by the header and footer file within *application/view/{theme}/_template/...*

**Creating a new controller**
Example Controller Code:
```php
<?php

/**
 * This controller shows an area that's only visible for logged in users (because of Auth::checkAuthentication(); in line 16)
 */
class ExampleController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // this entire controller should only be visible/usable by logged in users, so we put authentication-check here
        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /example/index in your app.
     */
    public function index()
    {
        $this->View->render('example/index', array(
            'user_name' => Session::get('user_name'),
            'user_email' => Session::get('user_email'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_account_type' => Session::get('user_account_type')
        ));
    }
}

```
1. Create your new controller in *application/controller/...* name it whatever you want your sub link to be named (use capitals for the first letter and the 'C' in controller) e.g OrdersController.php - use the other files as an indicator
2. Create a new folder in *application/view/content/...* with the name of your controller (all lowercase)
3. Create your first file within that folder (index.php)
4. Change the class name to the name you just named your Controller (OrdersController)
5. Setup your first page (Follow the instructions for creating a new page) index is already setup in the example code above - you just have to edit the render to the name of your folder (hence why all lowercase for the folder)
6. To add new pages follow the above instructions
7. The `array(...)` section after render allows you to pass custom variables (which are accessed by `$this->array_key` *where array key is the name of the variable you passed*

**Creating pages with passed variables**
You can create a page with a passed variables - example case would be if you're linking to a page where you want to load dynamic content based of a variable - instead of ugly GET parameters you can use the following structure *link/controller/page/{variable}* - but how do we do this? Let's build off the ExampleController Above:
All you have to do is in *public function pagename($variable)* - just add the variable you're passing. now anything after */example/pagename/...* will be assigned to a variable called $variable - we can then add that to the render(array()) - We can also add an if statement to redirect back to the homepage if no variable is passed.
**See Below**
```php
<?php

/**
 * This controller shows an area that's only visible for logged in users (because of Auth::checkAuthentication(); in line 16)
 */
class ExampleController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // this entire controller should only be visible/usable by logged in users, so we put authentication-check here
        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /example/index in your app.
     */
    public function index()
    {
        $this->View->render('example/index', array(
            'user_name' => Session::get('user_name'),
            'user_email' => Session::get('user_email'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_account_type' => Session::get('user_account_type')
        ));
    }

    public function pagename($variable) // e.g. /example/pagename/123 ($variable = 123)
    {
	    if(isset($variable)){
	        $this->View->render('example/pagename', array(
	            'user_name' => Session::get('user_name'),
	            'user_email' => Session::get('user_email'),
	            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
	            'user_avatar_file' => Session::get('user_avatar_file'),
	            'user_account_type' => Session::get('user_account_type'),
	            'id' => $variable //Accessible via $this->id
	        ));
		} else {
			Redirect::home();
		}
    }
}

```

With a bit of playing around you'll find many more ways to extend this system to your needs.

Models are setup in core and models folder - core provides the main callbacks (like sessions, config elements, session elements etc) - the models folder handles more specific actions for the controllers - call any public model function with ClassName::FunctionName($anyParamaters)

* * * * *

Understanding the public/... folder
------------------------
In *public/vendor* is not the composer autoload (this is in *vendor/*) this is the core files for the dashboards public controls - you can also add your own php functions etc within *public/vendor/function_files/core.php*

You can create new themes by adding the css /js /img / font files in a new directory For example: *public/themes/{theme}/...*

You can then create a new theme in  *application/view/NEW_THEME/..* bare in mind you will have to use bootstrap 5 - or modify the Views.php file in core to change how you handle differing themes. - Best bet is to just use a bootstrap 5 theme - then you only need to build the header and footer

Happy coding! - I'll be adding updated as I get my free time
