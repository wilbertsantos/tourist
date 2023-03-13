## Tour App using Larave and Vue

I use Laravel as the main framework and the backend of the main application because laravel has a lot of ready made library that i can easily use to fasten my development. I use Vuejs for the frontend of the application becasue its easily tied up with laravel and its easy to use.

### About Laravel
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### About Vue

Vue is a progressive framework for building user interfaces. Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable. The core library is focused on the view layer only and is easy to pick up and integrate with other libraries or existing projects. Vue.js is a popular front-end framework for building Single Page Apps. It provides structure and abstraction. We can also create a server-side rendering application using Vue.js, It’s helpful for SEO (Search Engine Optimization).

### Prerequisites
Laravel 10
Laravel Mix 
Node version >=12.14

### Step 1: Install Laravel Project
```git clone https://github.com/wilbertsantos/tourist.git```
go to application folder and copy ```.env.example``` to ```.env```
### Step 2: Install the needed libraries of laravel using composer
```composer update```
### Step 3: Install the vue and its libraries
```npm install```
### Step 4: build the resources
```npm run watch```
### Step 5: run the website
```php artisan serve```