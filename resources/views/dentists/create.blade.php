@extends('layouts.app')

@section('content')
<div class="container">
        <div class="panel border shadow p-4 mb-5 rounded">
        <form method="POST" action="{{ route('dentists.save') }}">
        @csrf

        @include('dentists.form')
</form>
        </div>

   
</div>

@endsection