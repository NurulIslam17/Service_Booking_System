

# About

It is a simple Laravel API project implemented with Sanctum API authentication. There are basically two types of users: one is Admin, and the other is Customer. There are some business services for which any customer can book the service, but before that, that specific customer should have a system member registered via the system. Initially, the customer booked a service that is pending. The system admin can approve the service for the customer.

# Admin Role

- Also a system user
- Can Create Busines Service and Permorme Update, Delete operation
- Can approve booking service
- Can see all customers booking service
- Can delete booking service

# Customer Role

- Can apply for service booking
- Can see available business service (login required)
- Can see only own booking

# Requirements

- Laragon or any Local server setup (Xamp,Herd)
- VS code (or any code Editor)
- Postman (or any api platform)

