# Statamic Cookie Consent
![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/jonassiewertsen/statamic-cookie-consent.svg?style=for-the-badge)](https://packagist.org/packages/jonassiewertsen/statamic-cookie-consent)

This Package is basically a wrapper for the [Laravel Cookie Consent Package from Spatie.](https://github.com/spatie/laravel-cookie-consent)

## Installation
Pull in your package with composer
```bash
composer require jonassiewertsen/statamic-cookie-consent
```

## Settings
### Disabling the cookie consent
You can disable the package in your .env file
```bash
COOKIE_CONSENT_ENABLED=false
```

### Publishing the lang files
```bash
php artisan vendor:publish --provider="Spatie\CookieConsent\CookieConsentServiceProvider" --tag="lang"
```
### Publishing the view
```bash
php artisan vendor:publish --provider="Spatie\CookieConsent\CookieConsentServiceProvider" --tag="views"
```

### Publishing the config file
```bash 
php artisan vendor:publish --provider="Spatie\CookieConsent\CookieConsentServiceProvider" --tag="config"
```

# License 

This Package / Addon is open source. Feel free to contribute or use it however you like!