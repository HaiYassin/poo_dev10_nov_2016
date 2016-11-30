<?php

//Autoloading de composer.
//	require 'vendor/autoload.php';
//  require 'class/Factory/EntityFactory.php';

function __autoload($class)
{

        //var_dump($class);
        $class = 'class/'. str_ireplace('\\', '/', $class).'.php';

        require $class;

}

////Recup obj PDO
//$db = Database::getConnection('PDO');   //  \
////Creer un manager                      //   \
//$manager = new BookEntityManager($db);  //    |=>  $book = EntityFactory::get('book');
////Creation de l'objet qu'on veut manipuler // /
//$book = new BookEntity($manager);       //   /
//$book->setTitle('Rubrique-A-Brac. 1');
////Sauvegarde en BDD
//$book->save();

//    $user = new UserEntity($manager); // Remplacé par un Factory
//    $author = new AuthorEntity($manager); // Remplacé par un Factory

$book = \Factory\EntityFactory::get('book');
//Kint::dump($book);
$book->setTitle('Rubrique-A-Brac. 1');
//Sauvegarde en BDD
$book->save();

//$user = EntityFactory::get('user');
//$author = EntityFactory::get('author');


//    $book->author = 'GotLib'; //Avant la création dans la class

//	$book->title = 'Rubrique-A-Brac. 1';
//    $book->getTitle();
//    print $book->getTitle();

//    $object = new StdClass;
//    $object->maPropriete = "bibi";
//    Kint::dump($object);


//Kint::dump($book->title);
//Kint::dump($book);


//DUMP VARIABLE
//Kint::dump($GLOBALS, $_SERVER); // pass any number of parameters

print '<br/> Hello World!';
