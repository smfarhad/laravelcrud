<form action="/users" method="POST">
    {!! csrf_field() !!}
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="Create">
</form>