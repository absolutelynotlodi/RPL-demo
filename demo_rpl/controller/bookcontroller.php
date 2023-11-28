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
}