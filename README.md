# php-front-controller
Example of a Front Controller pattern usage in PHP

Usage:

Controllers, actions and params matches URL segments:
www.example.com/mycontroller/myaction

The front controller will look for a class named mycontroller and a function called myaction. The class_autoloader.php will be responsible for finding and including class files.

Simple create controllers namespaced inside a folder with the same name of the namespace. Example:

controller (dir)
--Controller\MyController.php

model (dir)
--Model\MyModel.php
