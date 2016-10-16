# Silex Version ServiceProvider

[![Code Climate](https://codeclimate.com/github/frostieDE/silex-validator-serviceprovider/badges/gpa.svg)](https://codeclimate.com/github/frostieDE/silex-validator-serviceprovider)

ServiceProvider for Silex which enables annotations for the Symfony Validator component.

## Installation

```
$ composer require frostiede/silex-validator-serviceprovider
```

Afterwards, register the ServiceProvider:

```php
$app->register(new ValidatorServiceProvider());
```

**Note:** This is a replacement for the default `ValidatorServiceProvider` provided by Silex.
So only use one of them. 

## Usage

Use it as the default `ValidatorServiceProvider` provided by Silex. But be happy about being
able to use annotations.

# Contribution

Any help is welcomed. Feel free to create issues and merge requests :-)

# License

MIT License