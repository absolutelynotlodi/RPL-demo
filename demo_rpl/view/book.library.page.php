<table>
    <thead>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php
        /** @var book $book */
        foreach ($books as $book) {
            echo '<tr>';
            echo '<td>' . $book->getIsbn() . '</td>';
            echo '<td>' . $book->getTitle() . '</td>';
            echo '<td>' . $book->getAuthor() . '</td>';
            echo '<td>' . $book->getDescription() . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>