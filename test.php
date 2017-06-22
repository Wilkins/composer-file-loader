<?php

include __DIR__.'/loadPackage.php';

loadPackage(__DIR__."/vendor/project");

new CompanyName\PackageName\Machin();
new CompanyName\PackageName\Bidule();
new RoutePlanner\Truc();
new TestNoNamespace();

echo "No errors? Then it's working!\n";
