@extends('layouts.app')
@section('content')
    <div class="max-w-3xl w-full m-auto py-12" x-data="" x-init="Echo.channel('room')">
        <h1>Welcome to the Reverb Home page!</h1>
    </div>
@endsection