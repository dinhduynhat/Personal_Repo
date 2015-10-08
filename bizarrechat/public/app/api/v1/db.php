<?php  
#require 'vendor/autoload.php';  
require '../../../../vendor/autoload.php';


use Illuminate\Database\Capsule\Manager as Capsule;  
use App\User;
$UserModel = 'App\User';

$capsule = new Capsule; 

$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'bizarrechat',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));

$capsule->bootEloquent();