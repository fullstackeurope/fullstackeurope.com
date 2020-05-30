# fullstackeurope.com

Site: [https://fullstackeurope.com](https://fullstackeurope.com)

## Requirements

The following tools are required in order to start the installation.

- PHP >=7.4
- [Composer](https://getcomposer.org/download/)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
- [A valid Laravel Nova license](https://nova.laravel.com)

## Installation

1. Clone this repository locally with `git clone git@github.com:fullstackeurope/fullstackeurope.com.git fullstackeurope.com`
2. Setup a local database called `fullstackeurope`
3. Copy the `.env.example` file to `.env` and fill in the database credentials
4. Add [the `auth.json` file from below](#nova-license) to the root of the project
5. Install the PHP dependencies with `composer install`
6. Generate a new app key with `php artisan key:generate`
7. Prepare the database by running `php artisan migrate --seed` 
8. Link the public storage directory with `php artisan storage:link`
9. Install and compile the front-end dependencies with `npm install && npm run dev`
10. Serve the website locally by running `php artisan serve`

You can now visit the app in your browser by visiting [http://127.0.0.1:8000](http://127.0.0.1:8000). You can login into the back-end at [http://127.0.0.1:8000/nova](http://127.0.0.1:8000/nova) with **`john@example.com`** & **`password`**.

### Nova License

Your `auth.json` file at the root of the project should contain your Nova credentials:

```json
{
    "http-basic": {
        "nova.laravel.com": {
            "username": "Your Nova email address",
            "password": "Your Nova license key"
        }
    }
}
```

## Commands

Command | Description
--- | ---
**`php artisan test`** | Run the tests
`php artisan migrate:fresh --seed` | Reset the database
`npm run watch` | Watch for changes in CSS and JS files
`vendor/bin/envoy run deploy` (*) | Run a full deployment
`vendor/bin/envoy run deploy-code` (*) | Fast deploy source code only

(*) Note that you'll need SSH access to the production server in order to run these commands.
