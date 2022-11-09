<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="driver-show-name">
        Edit {{ $user->firstname }} {{ $user->lastname }}
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {!! Form::open(['method' => 'put', 'route' => ['visit.update', $visit->id]]) !!}

                @error('itemName')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('userID', 'User Id: ') !!}
                    {{ Form::select('userID', $users, $visit->userId); }}
                </p>

                @error('itemDosage')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('apptDate', 'Date: ') !!}
                    {{ Form::date('apptDate', date('Y-m-d', strtotime($visit->apptDate))) }}  
                </p>

                @error('amount')
                    <div class="">{{ $message }}</div>
                @enderror

                <p>
                    {!! Form::label('status', 'Status: ') !!}
                    {!! Form::text('status', $visit->status, ['placeholder' => 'Completed']) !!}
                </p>


                {!! Form::submit('Edit Visit', ['class' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
