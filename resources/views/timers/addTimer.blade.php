@extends('layouts.b4')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Add Timer</h2>
        </div>
        <div class="card-body">
            {!! Form::open(['action' => 'Timer\TimerController@storeTimer', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('type', 'Type') }}
                {{ Form::radio('type', 'Offensive', false, ['class' => 'form-control']) }}
                {{ Form::radio('type', 'Defensive', false, ['class' => 'form-control']) }}
                {{ Form::radio('type', 'Fuel', false, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('stage', 'Stage') }}
                {{ Form::text('stage', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('region', 'Region') }}
                {{ Form::text('region', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('system', 'System') }}
                {{ Form::text('system', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('planet', 'Planet') }}
                {{ Form::text('planet', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('moon', 'Moon') }}
                {{ Form::text('moon', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('owner', 'Owner') }}
                {{ Form::text('owner', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('eveTime', 'EVE Date & Time') }}
                {{ Form::dateTime('eveTime', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('notes', 'Notes') }}
                {{ Form::text('notes', '', ['class' => 'form-control']) }}
            </div>
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
