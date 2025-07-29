

# Story

It is a simple Laravel API project implemented with Sanctum API authentication. There are basically two types of users: one is Admin, and the other is Customer. There are some business services for which any customer can book the service, but before that, that specific customer should have a system member registered via the system. Initially, the customer booked a service that is pending. The system admin can approve the service for the customer.

# Admin Role

- Also a system user
- Can Create Busines Service and Permorme Update, Delete operation
- Can approve booking service
- Can see all customers booking service
- Can delete booking service

# Customer Role

- Can apply for service booking
- Can see available business service(Login required)

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**



If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
