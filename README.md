Composer File Loader
====================

Allow you to load composer.json file just as composer would do it.

This allow you to load composer.json file without composer (so theorically PHP 5.2 is enough)


Support 
-------

* PSR-4 : <span style="color:green">**YES**</span>
* PSR-0 : <span style="color:red">**NO**</span>
* Classmap : <span style="color:red">**NO**</span>
* Files : <span style="color:red">**NO**</span>


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

include __DIR__.'/loadPackage.php';

loadPackage(__DIR__."/vendor/project");

new CompanyName\PackageName\Machin();
new CompanyName\PackageName\Bidule();
new RoutePlanner\Truc();
new TestNoNamespace();
```


Contribution
------------

Created by Thibault Taillandier from [this stackoverflow question](https://stackoverflow.com/questions/39571391/psr4-auto-load-without-composer/39774973#39774973).

Please fork it to add more support



