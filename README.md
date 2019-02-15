# Module Queues for Bluz Skeleton
## Achievements

[![PHP >= 7.1+](https://img.shields.io/packagist/php-v/bluzphp/module-queues.svg?style=flat)](https://php.net/)

[![Latest Stable Version](https://img.shields.io/packagist/v/bluzphp/module-queues.svg?label=version&style=flat)](https://packagist.org/packages/bluzphp/module-queues)

[![Build Status](https://img.shields.io/travis/bluzphp/module-queues/master.svg?style=flat)](https://travis-ci.org/bluzphp/module-queues)

[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/bluzphp/module-queues.svg?style=flat)](https://scrutinizer-ci.com/g/bluzphp/module-queues/)

[![Total Downloads](https://img.shields.io/packagist/dt/bluzphp/module-queues.svg?style=flat)](https://packagist.org/packages/bluzphp/module-queues)

[![License](https://img.shields.io/packagist/l/bluzphp/module-queues.svg?style=flat)](https://packagist.org/packages/bluzphp/module-queues)

## Usage
### Install module
To install the module run the command:
  
```bash
php /vendor/bin/bluzman module:install queues
```

### Run CLI
To run worker, run the command:

```bash
php /vendor/bin/bluzman run queues/worker
php /vendor/bin/bluzman db:migrate
```

### Remove module
To remove the module, run the command:
    
```bash
php /vendor/bin/bluzman module:remove queues
```
