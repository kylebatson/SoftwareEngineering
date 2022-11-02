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
        height: 7vh;
        width: 100vw;
        background-color: #4f4e5c;
        position: fixed;
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
    <div class="flex justify-center items-center h-screen w-full">
        <div class="rounded-lg flex bg-blue-700 bg-opacity-25 border border-white shadow overflow-hidden p-4 w-2/5">
        @auth
        {!! Form::open(['method' => 'post', 'route' => 'catalog.store', 'class' => 'grid grid-cols-2 w-full gap-2']) !!}

        <div class="flex flex-col gap-2">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name','',['placeholder' => 'Enter the name of the catalog item', 'class' => 'w-full rounded border-none bg-gray-300 text-black']) !!}
            
            @error('name')
                <div class="text-red-50 font-bold">{{ $message }}</div>
            @enderror
            </div>
            <div class="flex flex-col gap-2">
                {!! Form::label('Category', 'Category:') !!}
                {!! Form::text('Category','',['placeholder' => 'Category', 'class' => 'w-full rounded border-none bg-gray-300 text-black']) !!}
            
                @error('Category')
                    <div class="text-red-50 font-bold">{{ $message }}</div>
                @enderror
                </div>
            <div class="flex flex-col gap-2">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price','',['placeholder' => 'Enter the price of the catalog item', 'class' => 'w-full rounded border-none bg-gray-300 text-black']) !!}
            @error('price')
                <div class="text-red-50 font-bold">{{ $message }}</div>
            @enderror
            </div>
            <div class="flex flex-col gap-2">
                    {!! Form::label('supplier', 'Supplier:') !!}
                    {!! Form::text('supplier','',['placeholder' => 'Supplier', 'class' => 'w-full rounded border-none bg-gray-300 text-black']) !!}
                    @error('price')
                        <div class="text-red-50 font-bold">{{ $message }}</div>
                    @enderror
                    </div>
            <div class="flex flex-col gap-2 col-span-2">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description','',['placeholder' => 'Enter the description of the catalog item', 'class' => 'w-full rounded border-none bg-gray-300 text-black', 'rows' => 5]) !!}
            @error('description')
                <div class="text-red-50 font-bold">{{ $message }}</div>
            @enderror
            </div>

            <div class="col-span-2">
                <div class="grid grid-cols-2 gap-2">
                    <a href="/catalog" class="bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded text-center hover:text-white">Back</a>

                    {!! Form::submit('Add Item', ['class' => 'bg-green-400 text-white py-2 px-4 rounded hover:bg-green-500 cursor-pointer']) !!}
                </div>
            </div>
            
        {!! Form::close() !!}
        @endauth
    </div>
</div>
@endauth
</body>
</html>