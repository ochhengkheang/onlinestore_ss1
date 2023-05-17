<h1>Welcome to the detail information of an Catory</h1>
<form action="/admin/articles/90" method="post">
    @csrf
    {{ method_field('delete') }}
    <input type="submit" value="Delete" name="buttonDelete">
    <input type="button" value="Cancel" name="buttonCancel">
</form>

