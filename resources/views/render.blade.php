<form action="{{ $_SERVER['PHP_SELF'] }}" method="post">
    @csrf
    @foreach($fields as $field)
        {!! $field->render() !!}
    @endforeach
    <button type="submit">SEND</button>
</form>
