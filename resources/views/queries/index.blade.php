<html>
    @foreach ($queries as $query)
    {{ $query->name }}
    {{ $query->subject }}
    {!! Form::open(['method' =>'get', 'route' => ['queries.show', $query->id]]) !!}
        {!!Form::submit('View') !!}
    {!! Form::close() !!}
    {!! Form::open(['method' => 'delete', 'route'=> ['queries.destroy', $query->id]]) !!}
        {!!Form::submit('Delete') !!}
    {!! Form::close() !!}
    @endforeach
</html>