<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Userlist
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

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
        border: solid 1px snow;
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
        background-color: grey;
        width: 100%;
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

    .last {
        display: inline-flex;
        gap: 5px;
    }

        </style>
            @if (Auth::user()->role == 'const.admin')
<div id = "table">
            <table>
                        <colgroup>
                            <col style="width:10rem">
                            <col style="width:7rem">
                            <col style="width:7rem">
                            @if (Auth::user()->role == 'const.admin')
                                <col style="width:5rem">
                                <col style="width:5rem">
                                <col style="width:5rem">
                            @endif
                        </colgroup>
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                @if (Auth::user()->role == 'const.admin')
                                    
                                @endif
                            </tr>
                        </thead>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->role }}</td>
                <td></td>
            </tr>
            @endforeach
            </table>
@endif
            
</div>
            </div>
        </div>
    </div>
</x-app-layout>

