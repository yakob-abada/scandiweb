Product
=======================

Introduction
------------
- The application was created from scratch and follows design patterns like:
    - MVC.
    - FrontController.
    - Domain-driven design (DDD).
    - Dependency Injection (DI).
- It follows Solid principles.
- Code has been covered by PHPunit.
- Github actions pipeline has been set up to run tests.

Installation
------------
- Copy .env_eample to .env file `cp .env_exmple .env`.
- Run `docker compose up`.
- Open in the browser `http://localhost/product/all`.

How does it work?
------------------ 
- Working directory: `php`.
- Create Controller class in Controller directory and name should follow this pattern `{ClassName}Controller.php`.
- Add method actions in the class and the name should follow `{methodName}Action`.
- Initialize the class in Bootstrap file and should name follow this pattern `New{ClassName}Controller.php` and here where you can identify all DI the would be passed to the controller if it's required.
- Finally Add new route in `config\routes.php` so the created action could be called from postman.

Security
------------------ 
- To make this backend be consumed by Frontend app [Frontend app](https://github.com/yakob-abada/scandiweb-app)
- index.php line 3 needed to be updated with frontend domain url to strict CORS.