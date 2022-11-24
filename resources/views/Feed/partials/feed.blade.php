

<p>
    {!! Form::label('id', 'Feed ID:') !!} 
    {!! Form::text('id', $feed->id, ['placeholder' => 
        'Feed ID', 'disabled' => 'disabled']) !!}
</p>

<p>
{!! Form::label('name', 'Name:') !!} 
{!! Form::text('name', $feed->name, ['placeholder' => 
        'Enter the Name ']) !!}
</p>

@error('name')
    <div>{{ $message}}</div>
@enderror

<p>
{!! Form::label('description', 'Description:') !!} 
{!! Form::textarea('description', $feed->description, ['placeholder' => 
        'Enter the description']) !!}
</p>

@error('description')
    <div>{{$message}}</div>
@enderror
