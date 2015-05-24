@extends('master')

@section('title')
@parent
:: Sign In
@stop

{{-- Content --}}
@section('content')
    @if ($errors->has())
        <div id="errors" class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif
<div class="page-header">
    <h2>Welcome</h2>
</div>

<div>
  Welcome!
</div>
@stop
