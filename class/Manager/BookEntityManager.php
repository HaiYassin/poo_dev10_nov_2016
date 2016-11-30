<?php

namespace Manager;

/**
 * Created by PhpStorm.
 * User: aston
 * Date: 28/11/16
 * Time: 16:24
 * Class BookEntityManager
 */
class BookEntityManager
{
    private $db;

    //Methodes magiques sont visibles en 'public'

    public function __construct(\PDO $db)
    {
//        Kint::dump($db);
        $this->db = $db;
    }

    public function addBook(\Entity\BookEntity $book)
    {
        //Kint::dump($book);
        //$db = new PDO("mysql:host=localhost;dbname=aston", "root", "paris");

        $query = $this->db->prepare('INSERT INTO book (title, author, body) VALUES (:title, :author, :body)');
        $query->bindValue(':title', $book->getTitle());
        $query->bindValue(':author', $book->getAuthor());
        $query->bindValue(':body', $book->getBody());

        $executed = $query->execute();
        //$errors = $db->errorInfo();
        //Kint::dump($errors);
        //Kint::dump($executed);
    }

    public function getBook($id)
    {
    }


    public function getBooks(array $ids0)
    {
    }
}