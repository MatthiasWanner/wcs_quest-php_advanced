# Install composer locally

Run following commands **_one by one_** to get `composer` file at the root of your project

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php composer-setup.php --filename=composer

php -r "unlink('composer-setup.php');"
```

To install it _globally_, follow this instructions:  
https://getcomposer.org/doc/00-intro.md#globally
