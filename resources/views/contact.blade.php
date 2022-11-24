<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/test.js'])
    <link type="text/javascript" src="{{URL::asset('js/test.js')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

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

    form{
        background-color:gray;
        width:60px;
        height:600px;
        padding:20px;
        background: rgba(128, 128, 128, 0.5);
        
    }

    form label, h2{
        color:white;
    }

    form h2 {
       font-size: large;
    }

    .topBar {
        
        background-color: #4f4e5c;
        position: fixed;
        align-items: center;
    }

    .topBar>* {
        margin-right: 1rem;
    }


    .footer{
        color:white;
    }

    p{
        color:white;
        text-align:center;
    }

    .lead{
        font-size:20px;
    }
    .nav{
        color:white;
        text-align:right;
        padding: 10px;
        background-color: #4f4e5c;

    }

    .pgtitle{
        padding-top:20px;
        font-size:40px;
        color:white;

    }
</style>
        
    </head>
    <body class="antialiased">
    
        
           
            <div class="nav">
            
            <a href="{{ url('/') }}" class="ml-4 text-lg">Home</a>
            <a href="about.blade.php" class="ml-4 text-lg">About Us</a>
        </div>
       <div class="pgtitle"><center><h1> CONTACT US </h1></center></div>
        <div class="relative flex items-top justify-center min-h-screen  dark:bg-gray-900 sm:items-center py-4 sm:pt-0 form-bg">
            
            
        
            {!! Form::open(['method' => 'post', 'route' => 'queries.store', 'class' => 'grid grid-cols-2 w-full gap-2']) !!}
            <div class="flex flex-col col-span-2 gap-2 "><center><h2 style="font-size:25px"> Contact Form</h2></center></div>
            <div class="flex flex-col col-span-2 gap-2 "><center><p> Fill out the form below and our associates will get back to you as soon as possible.</p></div>
            @if(Session::has('success'))
            <div class="flex flex-col col-span-2 gap-2 "><center><p class="lead">{{Session::get('success')}}</p></center></div>
            @endif
            <div class="flex flex-col ">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name','',['placeholder' => 'Enter your name here', 'class' => 'w-full rounded border-none bg-gray-300 text-black']) !!}
            </div>
            <div class="flex flex-col  ">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email','',['placeholder' => 'Enter your email address here', 'class' => 'w-full rounded border-none bg-gray-300 text-black']) !!}  
            </div>
            <div class="flex flex-col  col-span-2">
                {!! Form::label('subject', 'Subject:') !!}
                {!! Form::text('subject','',['placeholder' => 'Enter the subject of your message here.', 'class' => 'w-full rounded border-none bg-gray-300 text-black']) !!}
            </div>
            <div class="flex flex-col  col-span-2">
                {!! Form::label('message', 'Message:') !!}
                {!! Form::textarea('message','',['placeholder' => 'Tell us how we can help you.', 'class' => 'w-full rounded border-none bg-gray-300 text-black', 'rows' => 5]) !!}
            </div>
            <div class="col-span-2">
                <div class="grid grid-cols-2 gap-2">
                    <a href="{{ url('/') }}" class="bg-green-400 hover:bg-green-500 text-white py-2 px-4 rounded text-center hover:text-white">Back</a>
                    {!! Form::submit('Send', ['class' => 'bg-green-400 text-white py-2 px-4 rounded hover:bg-green-500 cursor-pointer']) !!}
                </div>
            </div> 
            <div class=" flex flex-col  col-span-2">
                <p class ="lead " >Call us at: 1(246)344-8888  |  Or email us as decisions@SPDSS.com</p>
            </div>  
            {!! Form::close() !!}
        </div> 
        <div style="background-color:white" class="footer">
            {{View::make('footer')}}
       </div> 
    </body>
</html>
