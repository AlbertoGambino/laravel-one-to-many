@extends('layouts.main-layout')

@section('content')


    <div class="container">

        <h1>Employees and task</h1>

        <ul>

            @foreach ($employees as $employee)

                <li>
                    <u>

                        {{ $employee -> firstname}}

                        {{ $employee -> lastname}}

                    </u>


                    @foreach ($employee -> tasks as $task)

                        <li>

                            {{$task -> title}}

                        </li>

                    @endforeach

                </li>

            @endforeach

        </ul>

    </div>

@endsection
