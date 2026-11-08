# System

A small PHP project built while following Laracasts lessons to practice the MVC pattern. It includes basic pages, notes, and user registration and login.

## Project structure

```text
.
├── Core/                              Core application classes and helper functions
│   ├── Middleware/                    Checks whether a user is logged in or a guest
│   │   ├── Authenticated.php          Checks for a logged-in user
│   │   ├── Guest.php                   Restricts pages to guests
│   │   └── Middleware.php              Selects and runs middleware
│   ├── App.php                         Provides access to the service container
│   ├── Authenticator.php               Handles login and logout
│   ├── Container.php                   Stores and resolves application services
│   ├── Database.php                    Connects to MySQL and runs queries
│   ├── Response.php                    Contains HTTP response codes
│   ├── Router.php                      Matches requests to controllers
│   ├── Session.php                     Handles session data and flash messages
│   ├── ValidationException.php         Stores form validation errors
│   ├── Validator.php                    Validates text and email values
│   └── functions.php                    Shared helper functions
├── Http/
│   ├── Controllers/                    Handles page and form requests
│   │   ├── notes/                      Creates, shows, edits, and deletes notes
│   │   │   ├── create.php              Shows the create-note form
│   │   │   ├── destroy.php             Deletes a note
│   │   │   ├── edit.php                Shows the edit-note form
│   │   │   ├── index.php               Shows the user's notes
│   │   │   ├── show.php                Shows one note
│   │   │   ├── store.php               Saves a new note
│   │   │   └── update.php              Saves changes to a note
│   │   ├── registration/               Handles user registration
│   │   │   ├── create.php              Shows the registration form
│   │   │   └── store.php               Creates a user account
│   │   ├── session/                    Handles login and logout requests
│   │   │   ├── create.php              Shows the login form
│   │   │   ├── destroy.php             Logs the user out
│   │   │   └── store.php               Checks login details
│   │   ├── about.php                   Shows the About page
│   │   ├── contact.php                 Shows the Contact page
│   │   └── index.php                   Shows the Home page
│   └── Forms/
│       └── LoginForm.php               Validates login form input
├── Public/
│   └── index.php                       Application entry point
├── Views/                             Page templates
│   ├── notes/                          Note pages and forms
│   │   ├── create.view.php             Create-note form
│   │   ├── edit.view.php               Edit-note form
│   │   ├── index.view.php              Notes list
│   │   └── show.view.php               Note details
│   ├── partials/                       Shared page sections
│   │   ├── banner.php                  Page title
│   │   ├── footer.php                  Page footer and closing HTML tags
│   │   ├── head.php                    HTML page header and Tailwind CSS
│   │   └── nav.php                     Navigation bar
│   ├── registration/
│   │   └── create.view.php             Registration page
│   ├── session/
│   │   └── create.view.php             Login page
│   ├── 403.php                         Access denied page
│   ├── 404.php                         Not found page
│   ├── about.view.php                  About page
│   ├── contact.view.php                Contact page
│   └── index.view.php                  Home page
├── bootstrap.php                       Sets up application services
├── composer.json                       Composer package and autoload settings
├── composer.lock                       Locked Composer package versions
├── config.php                          Database connection settings
├── routes.php                          Application routes
└── .gitignore                          Files ignored by Git
```

## MVC note

`Http/Controllers/` contains the controllers, and `Views/` contains the views. Database queries are currently handled through `Core/Database.php`; there is no separate `Models/` folder in this learning project.
