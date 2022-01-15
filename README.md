# User Switcher for Laravel

## What is it for?

User switcher is a dev tool that allow to switch between user accounts without providing passwords. This is only for
development / QA purpose and will have no effect on a production environment.

## Installation

- `composer require ...` (WIP)
- In `config/app.php`, add the provider `\Benjaminniess\UserSwitcher\UserSwitcherProvider::class` to the Application
  Service Providers list.

### Usage

#### Switch to a user

- Go to `https://your-home-url/switchto/1234` or `https://your-home-url/switchto/user@email.test` where `1234` is an
  existing user ID and `user@email.com` is an existing user email.
- You'll be redirected to the home page logged as the given user

#### Switch back

- (WIP)

### Tests

To run the tests, simply run this command at the root folder of your laravel installation

`php artisan test packages/benjaminniess/userswitcher`

### TODO

- Allow configuring the user schema
- Allow enabling on specific environment (staging for example)
- Switch back when user was previously logged
- Plug to the Laravel debug bar
- Publish to packagist
