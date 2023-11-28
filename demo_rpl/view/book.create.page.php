<?php
$message = filter_input(INPUT_GET, 'msg');
if (!empty($message))
{
    echo '<div>' . $message . '</div>';
}
?>
<form action="?menu=book-store" method="post">
    <div>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" autofocus required maxlength="13">
    </div>
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required maxlength="100">
    </div>
    <div>
        <label for="author">Author</label>
        <input type="text" id="author" name="author" required maxlength="100">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" cols="60" rows="4" required></textarea>
    </div>
    <div>
        <input type="submit" name="btn_submit" value="Submit Data">
    </div>
</form>