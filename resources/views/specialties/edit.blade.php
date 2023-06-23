@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel border shadow p-4 mb-5 rounded">
        <form method="POST" action="{{route('specialties.update', $specialty->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                @include('specialties.form')
        </form>
</div>
</div>

@endsection