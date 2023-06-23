@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel border shadow p-4 mb-5 rounded">
<form method="POST" action="{{ route('specialties.save') }}">
        @csrf

        @include('specialties.form')
</form>
</div>
</div>

@endsection