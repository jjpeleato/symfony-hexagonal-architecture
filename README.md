# Symfony: Hexagonal Architecture

This project is a basic example of how to organize a Symfony app using Hexagonal Architecture (also called Ports and Adapters). The goal is to demonstrate how to build maintainable, testable, and decoupled applications by separating the business logic from the technical parts.

### Installation for development

- You need to install [Lando](https://lando.dev/)

If Lando's tools do not work for you, there is another way. You must install the environment manually: XAMPP, Composer, Node.JS and NPM or Yarn.

For more information visit:

- [XAMPP](https://www.apachefriends.org/es/)
- [Composer](https://getcomposer.org/)
- [Node and NPM](https://nodejs.org/es/)
- [Yarn](https://yarnpkg.com/es-ES/)

**Note:** If you use Windows older than 10, we recommend installing [Cygwin](http://www.cygwin.com/) to execute the commands.  
**Note:** If you use Windows 10 or newer, we recommend installing [WSL 2](https://docs.microsoft.com/es-es/windows/wsl/install-win10) with Ubuntu to execute the commands.  
**Note:** If you use Windows 10 or newer, you need to install the following package: [win-node-env](https://www.npmjs.com/package/win-node-env)  
**Note:** I recommend using one of these IDEs for PHP programming: [Visual Studio Code](https://code.visualstudio.com/) or [PHPStorm](https://www.jetbrains.com/phpstorm/).

### Project structure

```
symfony_hexagonal_architecture/
├── .husky
├── bin
├── config
├── private
├── public
├── src
├── .editorconfig
├── .env.dev.dist
├── .env.dist
├── .gitignore
├── .lando.yml
├── .php-cs-fixer.dist.php
├── .prettierignore
├── commitlint.config.cjs
├── composer.json
├── composer.lock
├── LICENSE
├── package-lock.json
├── package.json
├── README.md
└── symfony.lock
```

### Technologies and tools

This project uses different technologies and tools for automation and development. For more details and learning, please see these links:

1. PHP: https://www.php.net/
2. MariaDB: https://mariadb.org/
3. MySQL: https://www.mysql.com/
4. Apache: https://www.apache.org/
5. Symfony: https://symfony.com/
6. Lando: https://docs.devwithlando.io/
7. Docker: https://www.docker.com/
8. Git: https://git-scm.com/
9. Composer: https://getcomposer.org/
10. php-cs-fixer: https://cs.symfony.com/
11. Node.js: https://nodejs.org/
12. NPM: https://www.npmjs.com/
13. Yarn: https://yarnpkg.com/
14. EditorConfig: https://editorconfig.org/
15. Husky: https://www.npmjs.com/package/husky
16. Commitlint: https://commitlint.js.org/
17. Commitizen: http://commitizen.github.io/cz-cli/

**Note:** Thank you to all the developers who made these projects.

## Contributing

Contributions are welcome! Please follow the coding standards in `php-cs-fixer.php` and test all changes before making a pull request.

## Support

For issues or feature requests, please open an issue in the repository or contact me directly.

## Finally

There will be more information in future commits if needed.

Greetings, [**@jjpeleato**.](https://www.jjpeleato.com/)
