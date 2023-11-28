<?php

class bookdao
{
    public function showwAllBook(): array
    {
        $link = PDOUtil::createMySQLConnection();
        $query = "SELECT isbn, title, author, description FROM book";
        $stmt = $link->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, book::class);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $link = null;
        return $result;
    }

    public function addNewBook(book $book): int
    {
        $link = PDOUtil::createMySQLConnection();
        $query = "INSERT INTO book(isbn, title, author, description) VALUES(?, ?, ?, ?)";
        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $book->getIsbn());
        $stmt->bindValue(2, $book->getTitle());
        $stmt->bindValue(3, $book->getAuthor());
        $stmt->bindValue(4, $book->getDescription());
        $link->beginTransaction();
        if ($stmt->execute()){
            $link->commit();
            $result = 1;
        } else {
            $link->rollBack();
        }
        $link = null;
        return $result;
    }
}