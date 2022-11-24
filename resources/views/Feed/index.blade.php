<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Feedback
        </h2>
        <style>
            table{
  width:500px;
  text-align: ;
  margin-left: ;
  padding:;
  border-left:1px solid;
  border-top:1px solid;
  border-bottom:1px solid;
  border-right:1px solid;
  
  margin-left: auto;
  margin-bottom:0.2rem;
  margin-right: auto;
}
th{
  width:50px;
  text-align: ;
  margin-left: ;
  padding:;
  
  margin-left: auto;
  margin-bottom:1rem;
  margin-right: auto;
}
.btn
{
    background-color: blue;
    border: 2px solid;
    color: white;
    width:510px;
    padding: 16px 32px;
    margin: 10px 10px 10px 352px;
    cursor: pointer;
    text-align:center;
}
/* .btn1
{
    background-color: blue;
    border: 2px solid;
    color: white;
    width:270px;
    padding: 16px 32px;
    margin: 10px 10px 10px 120px;
    cursor: pointer;
    text-align:center;
} */

            </style>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            @auth 
            @foreach ($feed as $feed)
            <table>
                <tr>
                    <th>Name:   {{$feed -> name }}</th>
                </tr> 
                <tr>
                    <th>Review:   {{$feed -> description }}</th>
                </tr>
            <tr>

              
          
                <tr>
                <th><div class=''>      
                    @if (Auth::user()->role == 'const.admin')
                    {!! Form::open(['method' =>'delete', 'route' =>
                                                ['feed.destroy', $feed->id], 'class' => 'text-white bg-blue-900 hover:bg-blue-1200 focus:ring-4 focus:outline-none focus:ring-blue-900 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800']) !!}
                                                {!! Form::submit('Delete FeedBack') !!}
                                                {!! Form::close() !!}
                                                 @endif
                    </th> </tr>
 </div></table>
                @endforeach
                
                                <div class='btn'>{!! Form::open(['method' => 'get',
                                    'route' => ['feed.create'],
                                    
                                    
                                ]) !!}
                                {!! Form::submit('Add FeedBack') !!}
                                </div>


                        
                
                @endauth

            </div>
        </div>
    </div>
</x-app-layout>
