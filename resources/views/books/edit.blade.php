<h1>Edit book</h1>

<form action="/books" method="post">
    @csrf
    <input type="text" name="title" placeholder="title goes here">
    <input type="text" name="author" placeholder="author goes here">
    <input type="date" name="released_at" placeholder="date goes here">
    <input type="submit" value="edit">
</form>
