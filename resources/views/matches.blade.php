@extends('layouts.layout')
@section('content')

        <div class="text-center">
            <img class="inline-block" src="/img/insider-logo.png" alt="logo"/>
        </div>
        @foreach($matches as $match)

            <div class="w-1/2 margin-auto">
                <a class="block mb-6 border border-gray-600 bg-white mt-4 p-4 rounded-b p-4 leading-normal" href="{{ route('scoreboard',$match->match_id )}}">
                    <div class="flex flex-row justify-between">
                        <p>{{ $match->team1->team_name }}</p>
                        <p> VS </p>
                        <p>{{ $match->team2->team_name  }}</p>
                    </div>
                    <p class="text-center mt-4">{{  $match->tosswinner->team_name }} wins the toss and decides to  {{ $match->tossdecision->toss_name  }}</p>
                </a>
            </div>
        @endforeach



@endsection
