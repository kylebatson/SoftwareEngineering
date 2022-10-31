<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add a Catalog Item</title>
    @vite(['resources/css/app.css', 'resources/js/test.js'])
    <link type="text/javascript" src="{{URL::asset('js/test.js')}}">
</head>

<style>
    * {
        color: snow;
    }

    input {
        color: black;
    }

    body {
        background-color: #619deba3;
        background-image: url("../../images/back.jpeg");

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
        <div id="Title">

            <div>Catalog</div>

        </div>
        <div>
            {!! Form::open(['method'=>'post','route'=>'catalog.store']) !!}
            <p>
                {!! Form::label('name',"Name:") !!}
                {!! Form::text('name',"",['placeholder'=>'Enter the name of the catalog item']) !!}
            </p>
            <p>
                {!! Form::label('category',"Category:") !!}
                {!! Form::text('category',"",['placeholder'=>'Enter the category of the catalog item']) !!}
            </p>
            <p>
                {!! Form::label('price',"Price:") !!}
                {!! Form::text('price',"",['placeholder'=>'Enter the price of the catalog item']) !!}
            </p>
            <p>
                {!! Form::label('supplier',"Supplier:") !!}
                {!! Form::text('supplier',"",['placeholder'=>'Enter the supplier of the catalog item']) !!}
            </p>
            <p>
                {!! Form::label('description',"Description:") !!}
                {!! Form::text('description',"",['placeholder'=>'Enter the the item\'s description']) !!}
            </p>

            <p>{!! Form::submit('Add Entry') !!}</p>

            {!! Form::close() !!}


        </div>

    </div>
    <script type='text/javascript'>
        function query_() {
            fetch('http://localhost:8000/catalog', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": "{{ csrf_token()}}"
                },
                body: JSON.stringify({
                    "fname": "deron",
                    "sname": "worrell"
                })

            }).then(response => {
                console.log(response);
            })
        }
    </script>
    @endauth
</body>

</html>