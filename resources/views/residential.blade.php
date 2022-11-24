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
        
       /* height:80%;*/
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

    #hhd{
        text-align:left;
        color:white;
        text-decoration-line:underline;
        font-size:22px;
        padding:15px;
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
       <div class="pgtitle"><h1> Residential Solar Systems </h1></div>
    
    <div class = "info">
       <h2 id = "Com"> What Is It?</h2>
        <p>There are many different types of residential solar energy systems but they all work on the same basic principles: Solar panels generate power by converting sunlight into the Direct Current (DC). The DC power can be stored in batteries or directly converted into the Alternating Current (AC) power by an inverter, which can be used to run home appliances. 
            Choosing the most suitable solar system for you depends on your location, energy needs, and budget. There are three main types of residential solar systems and below we will discuss them all.
        </p>  
       
        <h3 id = "hhd">On-Grid Systems</h3>
        <p>An on-grid solar system is directly tied to the traditional electric utility grid. So far it is the most common solar system type installed on homes in the world.
             This is in part because they can utilize the grid to help regulate the delivery of power from the panels into the home, thus reducing the amount of equipment needed, and the overall system cost.
              The main components of such a system are solar panels, a power meter, and an inverter. No battery is required. Therefore, on-grid solar systems are generally cheaper and simpler to install.
               The excess power is fed back to the grid and you will be paid a feed-in tariff by your electricity retailer. A house with an on-grid residential solar will take electricity from the grid if the solar system is not producing sufficient energy.
             The benefit of having a grid-tied solar system is that you don’t have to buy an expensive battery backup system to store excess energy.
        </p>
        <h3 id = "hhd">Off-Grid Systems</h3>
        <p>Off-grid solar systems are most suitable for rural areas with little or no grid connection. An off-grid residential solar system is completely disconnected from the traditional electric power grid.
             Therefore, together with solar panels, such a system requires a large capacity battery array capable of powering the property during periods of low irradiance in winter. It also requires an off-grid inverter capable of supplying the maximum load ever required at one time.
              Part of off-grid households has backup generators installed as a third energy source during periods of prolonged excess production or unusual demand. However, these can be quite expensive to buy and to run.
               When using an off-grid solar system, you will need to be very careful with your energy consumption to make sure that your backup battery doesn’t get completely drained.
                This is why the houses using such setups are smaller or more conservatively designed. What is appealing about the off-grid solar system is that you are 100% self-sustaining your energy use.
        </p>
        <h3 id = "hhd">Hybrid Systems</h3>
        <p>Hybrid systems are the most flexible option available. Similar to an on-grid solar system, a hybrid solar power system is connected to the utility power grid. It consists of solar panels, a hybrid inverter, and a power meter but is also combined with a solar battery.
             A hybrid solar system works by sending solar power to your inverter, which then sends energy to power your home. The extra energy that is not used to power your home goes to the battery for storage. Therefore, the battery can provide power to your home when your solar panels are not producing energy.
              However, if there is not enough energy in the battery, the house will then take electricity from the grid. Hybrid systems are more expensive than grid-tied systems due to the added battery and installation costs. However, they are much cheaper than off-grid solar systems.
               The main benefit of a hybrid solar system is that you will have power in any situation.
                You can also read about the tips on how to size your solar battery and your solar inverter so that you can get the maximum out of your residential solar.
        </p>

        <p><a id = "rlink" href = "https://roofit.solar/types-of-residential-solar-energy-systems/">Read More..</a></p>
    </div>
        
   
       <div class="footer">
            {{View::make('footer')}}
       </div>
</div> 
    </body>
</html>
