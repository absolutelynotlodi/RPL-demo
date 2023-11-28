<?php

class BookController
{
    private bookdao $bookdao;

    public function __construct()
    {
        $this->bookdao = new bookdao();
    }

    public function index(): void
    {
        $books = $this->bookdao->showwAllBook();
        include_once 'view/book.library.page.php';
    }

    public function create(): void
    {
        include_once 'view/book.create.page.php';
    }

    public function store(): void
    {
        $submitted = filter_input(INPUT_POST, 'btn_submit');
        if (isset($submitted))
        {
            $isbn = trim(filter_input(INPUT_POST, 'isbn'));
            $title = trim(filter_input(INPUT_POST, 'title'));
            $author = trim(filter_input(INPUT_POST, 'author'));
            $description = trim(filter_input(INPUT_POST, 'description'));
            if (!empty($isbn) && !empty($title) && !empty($author) && !empty($description))
            {
                $book = new book();
                $book->setIsbn($isbn);
                $book->setTitle($title);
                $book->setAuthor($author);
                $book->setDescription($description);
                $result = $this->bookdao->addNewBook($book);
                if ($result)
                {
                    header('location:index.php?menu=library&msg=Book added');
                } else
                {
                    header('location:index.php?menu=book-create&msg=Failed to add book');
                }
            } else {
                header('location:index.php?menu=book-create&msg=Please fill all data');
            }
        }
    }
}