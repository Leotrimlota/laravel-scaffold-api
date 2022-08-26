This README aims to provide an overview of all resources available to the project.

# Purpose
The reason of this scaffold API is to avoid wasting of time and not starting from scratch with basics functionalities.

### What packages are included
- [Laravel](https://laravel.com/)
- [Sanctum](https://laravel.com/docs/9.x/sanctum)
- [Breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze)

### What covers this scaffold
- The authentication functionalities with api token.
    - Register
    - Login
    - Logout
    - Get Current User
    - Forgot Password
- The forgot & reset password functionalities and views
- Documentation for API

## Setup the project
All you need to do is follow the same steps you follow when setting up the environment for regular laravel projects.

## Documentation
#### Generate Tool: [APIDOC](https://apidocjs.com/)
Adjust and adapt the configuration for your project in `apidoc.json`.__
Generate changes with command: `apidoc -i documentation -o public/documentation`.__
After the documentation is generated you can see api documantions under this example links:
- Localhost : `your-localhost.test/documentation/index.html`
- Liveserver : `your-localhost.test/documentation`
