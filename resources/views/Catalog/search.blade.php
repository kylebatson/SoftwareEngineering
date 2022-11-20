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
        width: 5rem;
        margin-bottom: 10px;
        grid-row-gap: 0.5rem;
    }

	.middle{
		display: grid;
        grid-template-columns: 100%;
        align-items: center;
        width: 5rem;
        margin-bottom: 10px;
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

<body>
<div id="Container">
        <div id="Title">

            <div>Catalog</div>

        </div>

        <div id="tableCont">
        <div class="top">
            <a href="/catalog" class="bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded text-center hover:text-white">Back</a>
        </div>
            @if($items->isNotEmpty())
            <div id="table">
                <table>
                    <colgroup>
                        <col style="width: 10rem">
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
                            <th>Type</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->Category}}</td>
                            <td>{{ $item->price}}</td>
							<td> {{$item->type}}</td>
                            <td>
                                {!! Form::open(['method' =>'get', 'route' => ['catalog.show', $item->id]]) !!}
                                    {!!Form::submit('Details') !!}
                                {!! Form::close() !!}
                            </td>
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
                        </tr>
                        @endforeach
                </table>
                </tbody>
            </div>
        </div>
    </div>
@else
<div id="table">
                <table>
                    <colgroup>
                        <col style="width: 25rem">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>No items found. Please try searching again.</th>
                        </tr>
                    </thead>
</div>
@endif
@endauth

</div>
</body>
</html>