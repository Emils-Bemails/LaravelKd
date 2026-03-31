<form action="/books/{{ $singleBook->id }}/destroy" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Dzēst">
</form>

<h2>{{ $singleBook->title }}</h2>
<h3>{{ $singleBook->author }}</h3>
<p>{{ $singleBook->released_at }}</p>
<a href="/books">All books</a>