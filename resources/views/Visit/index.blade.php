<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visits
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @foreach ($visits as $visit)
                    @foreach ($users as $user)
                        @if ($visit->userID == $user->id)
                            <div class="p-6 bg-white border-b border-gray-200 hover:cursor-pointer text-center">
                                {!! Form::open(['method' => 'get', 'route' => ['visit.show', $visit->id]]) !!}
                                {!! Form::submit($visit->apptDate . '    ' . $user->firstname . '    ' . $user->lastname . '    ' . $visit->status) !!}
                                {!! Form::close() !!}
                            </div>
                        @endif
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
