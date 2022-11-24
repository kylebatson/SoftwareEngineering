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
       /* background-image: url("../../images/back.jpeg");*/

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

    .pgtitle{
        background-color: #4da8da;
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
        
        background-color: black;
        position: fixed;
        align-items: center;
    }

    .topBar>* {
        margin-right: 1rem;
    }


    .footer{
        background-color: #4da8da;
        color:white;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height:50px;
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
        text-align:left;
        padding-top:20px;
        font-size:40px;
        color:white;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        padding-left:30px;
        text-shadow: 0 0 1px #303030, 0 0 1px #000000;

    }
    .info
    {
        margin-top: %;
        height:80%;
        padding-top:10px;
        padding-bottom:150px;
        padding-left:30px;
        padding-right:30px;
        font-size:20px;
        background-color: #12232e; 
        box-shadow: 0 8px 16px rgba(0, 0, 0, 3);
    }

    #Com{
        padding:30px;
        color: white;
        text-align: center;
        font-size: 25px;
    }

    #link{
        color:white;
        padding-right:10px;
    }
    #link:hover {
        color:#d44f00;
        
    }

    #rlink{
        color:#007cc7;
        float:right;
        
    }
    #rlink:hover{
        color:#d44f00;
    }
    
</style>
        
    </head>
    <body class="antialiased">
    
          
    <div class="bg">
    
        <div class="fixed top-0 right-0 px6 py4">
            <a id = "link" href="{{ url('/') }}" class="ml-4 text-lg">Home</a>
            <a id = "link" href="{{ url('/aboutus') }}" class="ml-4 text-lg">About Us</a>
            <a id = "link" href="{{ url('/contact') }}" class="ml-4 text-lg">Contact Us</a>
        </div>
       <div class="pgtitle"><h1> Commercial Solar Systems </h1></div>
    
    <div class = "info">
       <h2 id = "Com"> What Is It?</h2>
        <p>The term commercial solar refers to systems that are installed on business premises with the purpose of producing energy for that business via means of solar power. Commercial solar is seen as the opposite of residential solar, which is any solar system installed on a residence with the intention of powering a home. 
            Commercial solar is an expansive project that can take many different forms, depending on the size and nature of the company seeking to implement commercial solar solutions. 
        </p>  
        <h2 id = "Com">How It Works</h2>
        <p>Commercial solar primarily works through the strategic installation of solar panel-based photovoltaic power systems on the rooftop of the commissioning business. The solar panels are placed in a particular direction in order to maximise the amount of sunlight directly hitting them.
            When solar energy hits the panels, the panels then convert this energy into DC current. This DC current is then directed to an inverter, which converts the current into AC. It’s this AC current that’s used to power your business premises. Throughout the daytime, this process is consistent and reliable.
        </p>

        <p><a id = "rlink" href = "https://mackiesgroup.com.au/what-is-commercial-solar-how-does-it-work/">Read More..</a></p>
    </div>
        
   
       <div class="footer">
            {{View::make('footer')}}
       </div>
</div> 
    </body>
</html>
