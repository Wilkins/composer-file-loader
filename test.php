<?php

// Loading loadPackage function
include __DIR__.'/loadPackage.php';

// Loading 'project' package
loadPackage(__DIR__."/vendor/project");

// Calling PSR-4 classes
new CompanyName\PackageName\Machin();
new CompanyName\PackageName\Bidule();
new RoutePlanner\Truc();
new TestNoNamespace();

// Calling PSR-0 classes
// TODO

// Calling classmap classes
// TODO

// Calling files classes
// TODO

echo "No errors? Then it's working!\n";
