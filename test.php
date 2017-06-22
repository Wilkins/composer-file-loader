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

#include __DIR__."/vendor/project/psr0-src1/Vendor/Space/Hello.php";

// Calling PSR-0 classes
new Vendor\Space\Hello();
new Monolog\Toto();
new Monolog\Titi();
#new Vendor_Namespace_Tete();
new UniqueGlobalClass();
new Hello\World();


// Calling classmap classes
// TODO

// Calling files classes
// TODO

echo "No errors? Then it's working!\n";
