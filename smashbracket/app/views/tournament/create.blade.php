@extends('master')

@section('title')
@parent
:: Create Account
@stop

<script type="text/javascript">
    $("#startTime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>

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
    <h2>Create a tournament.</h2>
</div>

{{ Form::open(array('url' => 'tournament/create', 'class' => 'form-horizontal')) }}
  <div class="form-group">
    <label for="tournamentName"  class="col-sm-2 control-label">Tournament Name</label>
    <div class="col-sm-10">
      <input type="text" name="tournamentName" class="form-control" id="tournamentName" placeholder="Tournament Name" {{ (Input::old('tournamentName')) ? ' value="' . e(Input::old('tournamentName')) . '"' : '' }}>
    </div>
  </div>
  <div class="form-group">
    <label for="startTime"  class="col-sm-2 control-label">Start Time</label>
    <div class="col-sm-10">
      <input type="time" name="startTime" class="form-control" id="startTime" data-datepicker='datepicker' placeholder="Start Time" {{ (Input::old('startTime')) ? ' value="' . e(Input::old('startTime')) . '"' : '' }}>
    </div>
  </div>
  <div class="form-group">
    <label for="startDate"  class="col-sm-2 control-label">Start Date</label>
    <div class="col-sm-10">
      <input type="date" name="startDate" class="form-control" id="startDate" data-datepicker='datepicker' placeholder="Start Date" {{ (Input::old('startDate')) ? ' value="' . e(Input::old('startDate')) . '"' : '' }}>
    </div>
  </div>
  <div class="form-group">
    <label for="entryFee" class="col-sm-2 control-label">Entry Fee</label>
    <div class="col-sm-10">
      <input type="text" name="entryFee"  class="form-control" id="entryFee" placeholder="Entry Fee">
    </div>
  </div>
  <div class="form-group">
    <label for="gamesSelect" class="col-sm-2 control-label">Select Games</label>
    <div class="col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="gamesSelect"  class="form-control" id="n64">Super Smash Bros (N64)
        </label>
      </div>
      <br>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="gamesSelect"  class="form-control" id="melee">Super Smash Bros Melee
        </label>
      </div>
      <br>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="gamesSelect"  class="form-control" id="brawl">Super Smash Bros Brawl
        </label>
      </div>
      <br>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="gamesSelect"  class="form-control" id="projectM">Project M
        </label>
      </div>
      <br>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="gamesSelect"  class="form-control" id="wiiU">SM4SH WiiU
        </label>
      </div>
      <br>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="gamesSelect"  class="form-control" id="3ds">SM4SH 3DS
        </label>
      </div>
    </div>
  </div>
  <br>
  <div class="form-group">
    <label for="location" class="col-sm-2 control-label">Location</label>
    <div class="col-sm-10">
      <input type="text" name="location"  class="form-control" id="location" placeholder="Location">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Create Tournament</button>
      {{ Form::token() }}
    </div>
  </div>
</form>

{{ Form::close() }}

@stop
