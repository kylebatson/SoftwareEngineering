<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    @vite(['resources/css/app.css', 'resources/js/test.js'])
    <link type="text/javascript" src="{{URL::asset('js/test.js')}}">
</head>

<style>
    * {
        color: snow;
    }

    body {
        background-color: #619deba3;
        background-image: url("../../images/back.jpeg");

    }

    td {
        padding: .5rem;
    }

    #Title {
        height: 100%;
        width: 100%;
        font-size: 2.5rem;
        font-weight: bolder;
        display: flex;
        justify-content: end;
        flex-direction: column;
        text-align: center;
    }

    #Container {
        grid-template-rows: 20% 80%;
        box-sizing: border-box;
        display: grid;
        justify-content: center;
        min-width: fit-content;
        max-width: 80vw;
        border: solid white 2px;
        border-top: none;
        height: 94vh;
        margin: auto;
        align-items: center;
    }

    table {
        border: solid 1px snow;
        text-align: center;
        background-color: #443abf4a;

    }

    td {
        border: solid 1px snow;

    }

    #topBar {
        height: 6vh;
        width: 100vw;
        background-color: #4f4e5c;

        display: flex;
        flex-direction: row-reverse;
        align-items: center;
    }

    #topBar>* {
        margin-right: 1rem;
    }

    #filter {
        box-sizing: border-box;
        background-color: #696876e8;
        width: fit-content;
        height: 3rem;

        padding: .5rem;
    }

    #filter>button {
        width: 100%;
        height: 100%;
    }
</style>


<body>
    @auth
    <div id="topBar">
        <!-- <a href="{{ route('dashboard') }}">Dashboard</a> -->

        <div>Contact Us</div>
        <div>About Us</div>
        <a href="{{ route('dashboard') }}" class="ml-4 text-lg">Dashboard</a>
        <a href="{{ url('/') }}" class="ml-4 text-lg">Home</a>
    </div>
    <div id="Container">
    <div class="form-1">
    @auth
       {!! Form::open(['method' => 'post', 'route' => 'catalog.store']) !!}

       <p>
           {!! Form::label('name', 'Name:') !!}
           {!! Form::text('name','',['placeholder' => 'Enter the name of the catalog item']) !!}
        </p>
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <p>
            {!! Form::label('Category', 'Category:') !!}
            {!! Form::text('Category','',['placeholder' => 'Category']) !!}
        </p>
            @error('Category')
                <div>{{ $message }}</div>
            @enderror
        <p>
           {!! Form::label('price', 'Price:') !!}
           {!! Form::text('price','',['placeholder' => 'Enter the price of the catalog item']) !!}
        </p>
        @error('price')
            <div>{{ $message }}</div>
        @enderror
        <p>
                {!! Form::label('supplier', 'Supplier:') !!}
                {!! Form::text('supplier','',['placeholder' => 'Supplier']) !!}
                </p>
                @error('price')
                    <div>{{ $message }}</div>
                @enderror
        <p>
           {!! Form::label('description', 'Description:') !!}
           {!! Form::text('description','',['placeholder' => 'Enter the description of the catalog item']) !!}
        </p>
        @error('description')
            <div>{{ $message }}</div>
        @enderror


        <p>
           {!! Form::submit('Add Item') !!}
        </p>

       {!! Form::close() !!}
    @endauth
</div>
</div>
@endauth
</body>
</html>