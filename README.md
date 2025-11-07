# VILT stack with Fortify preinstalled

<p>
  <img src="https://img.shields.io/badge/Laravel-12.^-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Vue.js-3.^-4FC08D?style=flat&logo=vue.js&logoColor=white" alt="Vue">
  <img src="https://img.shields.io/badge/Inertia.js-2.^-9553E9?style=flat&logo=inertia&logoColor=white" alt="Inertia">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.^-06B6D4?style=flat&logo=tailwind-css&logoColor=white" alt="Tailwind">
  <img src="https://img.shields.io/badge/Ziggy-2.^-fad710?style=flat&logo=reactrouter&logoColor=white" alt="Ziggy.js">
  <img src="https://img.shields.io/badge/Laravel_Fortify-1.3%5E-0d9b6a?style=flat&logo=laravel&logoColor=white" alt="Laravel Fortify">
</p>

## What is it?

This is an extension to the [vilt stack starter kit](https://github.com/DignitySAMP/vilt-stack) that I maintain with Laravel Fortify preinstalled as well as using the recommended methodology for form control and Vue components and layouts, remniscent of the old Vue Breeze starterkit.

What's included (out of the box):
 - Registration
 - Authentication
 - 2FA management (see `auth/TwoFactorChallenge.vue` and `auth/TwoFactorSetup.vue` for a working example)
 - 2FA verification (when enabled, prompted every login)
 - Email verification (prompted when using the `verified` middleware)
 - Password confirmation (prompted when using the `password.confirm` middleware)
 - Forgot your password e-mail

All that's left for you to configure is the mail configuration which can be adjusted in the `.env` file with the `MAIL_` prefix.

## Installation

Either click the `Use this template` button and make a new repository, or:

```bash
# clone the repo
git clone https://github.com/DignitySAMP/vilt-stack-fortify
cd vilt-stack-fortify

# install node and composer packages
npm install
composer install

# copy .env, set up app key and create database
cp .env.example
php artisan key:generate
php artisan migrate # 'yes' when prompted to make sqlite database, OR go to .env and configure your own database

# migrations, seeding (optional)
php artisan migrate --seed # remove the --seed if you don't wish to seed
# seeding creates a test user: test@example.com:test@example.com

# running
npm run dev
php artisan serve
```