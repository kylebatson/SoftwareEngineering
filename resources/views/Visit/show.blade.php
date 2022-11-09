<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show visit: {{ $user->firstname }} {{ $user->lastname }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="driver-show-email">
                    Date: {{ $visit->apptDate }}
                    <br>
                    Status: {{ $visit->status }}
                </div>
            </div>
            @if (Auth::user()->role == 'const.admin')
                {!! Form::open(['method' => 'get', 'route' => ['visit.edit', $visit->id]]) !!}
                {!! Form::submit('Edit', ['class' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800']) !!}
                {!! Form::close() !!}

                {!! Form::open(['method' => 'delete', 'route' => ['visit.destroy', $visit->id]]) !!}
                {!! Form::submit('Delete', ['class' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
</x-app-layout>
