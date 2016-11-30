<?php

namespace Entity;

//require 'BookEntityManager.php';
//
//require 'Database.php';

/**
 * Created by PhpStorm.
 * User: aston
 * Date: 28/11/16
 * Time: 15:58
 * Class BookEntity
 */
class BookEntity
{
    private $id;
    private $title;
    private $author;
    private $body;

    protected $manager;

    public function __construct(\Manager\BookEntityManager $manager)
    {
        //Objet de manager on lui passe une propriété $manager -> OBJ BookEntityManager
        $this->manager = $manager;
    }

    public function save()
    {
//        $db = new PDO("mysql:host=localhost;dbname=aston", "root", "paris");

        //$db = new Database('PDO');
        //= opérateur de résolution de porté (::) Methode en question est défini comme static
        //Kint::dump($db::$maVariable);

//        $db = Database::getConnection('PDO');
//        $pdo = Database::getConnection('PDO');
//        lKint::dump(Database::$maVariable);
//        Kint::dump($db);
//        Kint::dump($pdo);
//        $manager = new BookEntityManager($db);
        $this->manager->addBook($this);
//        Kint::dump($this->manager);
    }

    public function load($id)
    {
        $db = Database::getConnection('PDO');
        $manager = new BookEntityManager($db);

        if (is_numeric($id)) {
            $manager->getBook($id);
        } elseif (is_array($id)) {
            $manager->getBooks($id);
        } else {
            throw new Exception('Mauvais format de données pour la méthode load().');
        }
    }

    public function delete()
    {

    }

    //Rend un object d'une instance BookEntity déja hydraté; HS avec le CRUD
    public static function create()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            $this->id = $id;
        } else {
            throw new Exception('Erreur ID non valid');
        }
    }

    //public $title = 'SUR LES TRACES DE MARCEL... GOTLIB';

    public function getTitle()
    {
        //Kint::dump($this);

        return $this->title;
    }

    public function setTitle($title)
    {
        $title = htmlentities($title);
        if (strlen($title) <= 50) {
            $this->title = $title;
        } else {
            throw new Exception('Le titre ne peux pas dépasser 50 caractères');
        }

    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

}