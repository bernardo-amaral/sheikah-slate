[![Build Status](https://travis-ci.org/bernardo-amaral/sheikah-slate.svg?branch=master)](https://travis-ci.org/bernardo-amaral/sheikah-slate)

# PHP Packagist Project, Just for Tests!

I'm just trying create a vendor module for use it in my PHP projects

## Getting Started

Create a new project in your PC, and in the root folder input:

```
    composer require bernardo-amaral/sheikah-slate
```

The composer will create a composer.json file, and will install this package

### Prerequisites

You will need the composer installed and PHP (I recomend the version 7+)

```
https://getcomposer.org/
```

### Installing

composer require bernardo-amaral/sheikah-slate

## Running the tests

```
    - composer tests
    - phpunit --bootstrap vendor/autoload.php tests/
```

### And coding style tests

```
phpunit --bootstrap vendor/autoload.php --testdox tests/ --colors=always
```

## Built With

* [PHP](http://php.net/manual/pt_BR/intro-whatis.php)
* [Composer](https://getcomposer.org/)

## Authors

* **Bernardo Amaral** - *Initial work* - [bernardo-amaral](https://github.com/bernardo-amaral).

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
