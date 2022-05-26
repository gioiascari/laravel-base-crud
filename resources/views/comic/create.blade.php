<form action="{{ route('comic.store') }}" method="POST">
    @csrf

    <label for="title">Title</label>
    <input type="text" title='title'>

    <label for="price">Price</label>
    <input type="text" price='price'>

    <label for="title">Date</label>
    <input type="text" date='sale_date'>

    <label for="title">Type</label>
    <input type="text" type='type'>
</form>

