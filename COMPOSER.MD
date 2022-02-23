# PHP advanced - WCS learn

## Install composer locally

Run following commands **_one by one_** to get `composer` file at the root of your project

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php composer-setup.php --filename=composer

php -r "unlink('composer-setup.php');"
```

To install it _globally_, follow this instructions:  
https://getcomposer.org/doc/00-intro.md#globally

## Init composer project

Check if _composer_ is up to date typing `composer self-update`.  
Launch `composer init` cmd.

## Autoload

Add the following key to your `composer.json`

```json
"autoload": {
    "psr-4": {
      "App\\": "src"
    }
  }
```

Then run `composer install`

```
⚠️ Note if you change this section, you will have to run `composer dump-autoload` to update autoloading infos.
```

In your `index.php` entry point, require autoload file from your vendor folder

```php
<?php
require __DIR__ . 'vendor/autoload.php';
?>
```

## Create Namespace

Now we can write our first classe in the src folder

```php
<?php
namespace App\Learn; // 💡 We can declare sub-namespaces

Class Foo
{
    private string $word;

    public function __construct(?string $word = 'any')
    {
        $this->word = $word;
    }

    public function classInfos()
    {
        return "The class is instancied with <strong>{$this->word}</strong> word";
    }
}
?>
```

And call it in our `index.php`

```php
<?php
use App\Learn\Foo;

require __DIR__ . '/../vendor/autoload.php';

$foo = new Foo('Hello');
?>

<?= $foo->classInfos() ?>

?>
```
