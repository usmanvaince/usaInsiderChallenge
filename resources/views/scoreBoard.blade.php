@extends('layouts.layout')
@section('content')
    <div class="block mb-6 border border-gray-600 bg-white mt-4 p-4 rounded-b p-4 leading-normal">
        <score-board :bats-man-scored="'{{ $batsManScoreBoard }}'"></score-board>
    </div>
@endsection
