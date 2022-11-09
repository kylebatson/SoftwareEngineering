<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    

        <style>
           

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

    #Container {
        grid-template-rows: 20% 80%;
       
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

    

    .topBar {
        
        background-color: #4f4e5c;
        position: fixed;
        align-items: center;
    }

    .topBar>* {
        margin-right: 1rem;
    }


    .footer{
        color:black;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }

    .footer p{
        color:black;
        
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
    .info
    {
        padding-top:60px;
        padding-bottom:150px;
        font-size:20px;
        background-color: #4f4e5c;
    }

    
</style>
        
    </head>
    <body class="antialiased">
    
          
    <div class="bg">
    
        <div class="fixed top-0 right-0 px6 py4">
            <a href="{{ url('/') }}" class="ml-4 text-lg">Home</a>
            <a href="/about" class="ml-4 text-lg">About Us</a>
            <a href="/contact" class="ml-4 text-lg">Contact Us</a>
        </div>
       <div class="pgtitle"><center><h1> ABOUT US </h1></center></div>
    
    <div class = "info">
       <p> WELCOME </p>
        <p>Our business is a Decision Support System. This is used to help individuals make decisions
        about what type of Solar Power System they can afford and would like to install
        in their home. Registered customers are allowed to view the catalog and save suggestions
        while non-registered customers are only allowed to view the catalog. 
        </p>  
    </div>
        
   
       <div style="background-color:white" class="footer">
            {{View::make('footer')}}
       </div>
</div> 
    </body>
</html>
