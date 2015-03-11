ToEasy
------
Stop to create dummy function just call it.

Requirements
-----------
PHP >=5.3 Installation
Install using composer:

Add in composer.json

{
    "require": {
         "shekhar/to-easy": "dev-master"
    }
}

Code Examples In Core PHP
------------------------
<?php

//Call Autoload classes include('vendor/autoload.php');

//Include this in alias
'ToEasy' => 'Shekhar\ToEasy\Facades\ToEasy',

use ToEasy\ToEasy\ToEasy;
// type= numbers, charU(characters in upper case), charL(characters in lower case)
echo ToEasy::rand(6, 'type'); ?>

License

ToEasy is licensed under the MIT License.

Copyright 2014 shekhar singh
