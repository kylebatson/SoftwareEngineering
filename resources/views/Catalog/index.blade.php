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
        /* background-color: #696876e8; */
        /* width: fit-content; */

        padding: .5rem;
    }

    /* #filter>button {
        width: 100%;
        height: 100%;
    } */

    .top {
        display: grid;
        grid-template-columns: 100%;
        align-items: center;
        width: 39rem;
        grid-row-gap: 0.5rem;
    }
	.middle{
		display: grid;
        grid-template-columns: 100%;
        align-items: center;
        width: 39rem;
        grid-row-gap: 0.5rem;
	}

    .last {
        display: inline-flex;
        gap: 5px;
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

        <div id="tableCont" class="w-full">
            <div id="filter" class="flex justify-between w-full">
                <div class="top"> 
                        {!! Form::open (['method'=>'get', 'route'=>'catalog.filter']) !!}
                        <div>
                        {!! Form::label('filterby', 'Filter by Price:') !!}

                        {!!Form::text('minPrice', '',['placeholder'=>'Minimum Price', 'class' => 'w-1/4 rounded border-none bg-gray-300 text-black']) !!}

                        {!!Form::text('maxPrice', '',['placeholder'=>'Maximum Price', 'class' => 'w-1/4 rounded border-none bg-gray-300 text-black']) !!}

                        {!!Form::submit('Filter', ['class' => 'bg-[#443abf9a] py-2 px-6 justify-center rounded'])!!} 
                        {!!Form::close()!!} 
                        </div>
					

					 <div class="middle"> 
						{!! Form::open (['method'=>'get', 'route'=>'catalog.search']) !!}
						 <div>
						 {!! Form::label('searchby', 'Type Of Panel:') !!}
						 {!!Form::text('type', '',['placeholder'=>'Type Of Panel', 'class' => 'w-1/3 rounded border-none bg-gray-300 text-black']) !!}
						 
						 
						 {!!Form::submit('FilterType', ['class' => 'bg-[#443abf9a] py-2 px-6 justify-center rounded'])!!} 
						 {!!Form::close()!!}
						</div>							

                    <div class="last">
                        {!! Form::open (['method'=>'get', 'route'=>'catalog.search']) !!}

                        {!! Form::label('searchby', 'Search by Name:') !!}
                        {!!Form::text('name', '',['placeholder'=>'Solar Panel', 'class' => 'w-1/3 rounded border-none bg-gray-300 text-black']) !!}

                        {!!Form::submit('Search', ['class' => 'bg-[#443abf9a] py-2 px-6 justify-center rounded w-1/3'])!!} 
                        {!!Form::close()!!}
                        @if (Auth::user()->role == 'const.admin')

                            {!! Form::open(['method' => 'get', 'route'=> ['catalog.create'], 'class' => 'bg-[#443abf9a] py-2 px-6 flex items-center justify-center rounded w-1/3']) !!}
                                {!!Form::submit('Add Item') !!}
                            {!!Form::close() !!} 

                        @endif
                    </div>
                </div>
            </div>
            <div id="table">
                <table>
                    <colgroup>
                        <col style="width:10rem">
                        <col style="width:7rem">
                        <col style="width:7rem">
                        <col style="width:5rem">
                        <col style="width:5rem">
                        <col style="width:5rem">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)


                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->Category }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                {!! Form::open(['method' =>'get', 'route' => ['catalog.show', $item->id]]) !!}
                                    {!!Form::submit('Details') !!}
                                {!! Form::close() !!}
                            </td>
                            @if (Auth::user()->role == 'const.admin')
                            <td>
                                
                                {!! Form::open(['method' => 'get', 'route'=> ['catalog.edit', $item->id]]) !!}
                                    {!!Form::submit('Edit') !!}
                                {!!Form::close() !!} 
                            </td>
                            <td>
                                {!! Form::open(['method' => 'delete', 'route'=> ['catalog.destroy', $item->id]]) !!}
                                        {!!Form::submit('Delete') !!}
                                {!! Form::close() !!}
                            </td>
                            @endif
                        </tr>

                        @endforeach
                </table>
                </tbody>
            </div>
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