Composer File Loader
====================

Allow you to load composer.json file just as composer would do it.

This allow you to load composer.json file without composer (so theorically PHP 5.2 is enough)


Support 
-------

* PSR-4 : **YES**
* PSR-0 : **YES**
* Classmap : **NO**
* Files : **NO**


Usage
-----

You have a composer.json file looking like this :

```json
{
    "name": "wilkins/composer-file-loader",
    "type": "function",
    "description": "Load composer file",
    "autoload": {
        "psr-4": {
            "": "src2/",
            "RoutePlanner\\": "src/",
            "CompanyName\\PackageName\\": [
                "packages/package-folder/src/",
                "packages/package-folder1/src/"
            ]
        }
    }
}
```


```php
// You load the PackageLoader
include __DIR__.'/PackageLoader.php';

// You load your packages
$loader = new PackageLoader\PackageLoader();
$loader->load(__DIR__."/vendor/project");

// You call the package classes
new CompanyName\PackageName\Machin();
new CompanyName\PackageName\Bidule();
new RoutePlanner\Truc();
new TestNoNamespace();
```


Testing
-------

Just go into the root directory and run :

```
php test.php
```

If no error appears, you're good! 


Contribution
------------

Created by Thibault Taillandier from [this stackoverflow question](https://stackoverflow.com/questions/39571391/psr4-auto-load-without-composer/39774973#39774973).

Please fork it to add more support



