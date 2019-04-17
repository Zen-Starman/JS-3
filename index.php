<?php
/** JS - 3 Homework
    Author: Zane Stearman
 *  Date:   04/17/2019
 *  File: index.php
 */

//this awesome page makes it so we go right to folder,
// without defining a file name!!!!!!!

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
//everything will have access because it's going through the gate
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//define a default route
//you can do GET /home/main/hello/
$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('home.html');
});


//Run Fat-free
$f3->run();