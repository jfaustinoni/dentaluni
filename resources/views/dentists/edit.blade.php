@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel border shadow p-4 mb-5 bg-body-tertiary rounded">
        <form method="POST" action="{{route('dentists.update', $dentist->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                @include('dentists.form')
        </form>
</div>
</div>

@endsection