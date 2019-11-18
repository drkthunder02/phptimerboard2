@extends('layouts.b4')
@section('content')
<br>
<div class="container">
    @if($ongoing > 0)
        <table class="table table-striped table-bordered">
            <thead>
                <th>Type</th>
                <th>Stage</th>
                <th>Region</th>
                <th>Location</th>
                <th>Owner</th>
                <th>Date & Time</th>
                <th>Notes</th>
            </thead>
            <tbody>
                @foreach($currentTimers as $timer)
                <tr>
                    <td>{{ $timer->type }}</td>
                    <td>{{ $timer->stage }}</td>
                    <td>{{ $timer->region }}</td>
                    <td>{{ $timer->system . " - " . $timer->planet . " - " . $timer->moon }}</td>
                    <td>{{ $timer->owner }}</td>
                    <td>{{ $timer->eveTime }}</td>
                    <td>{{ $timer->notes }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        No current timers        
    @endif
</div>
<br>
<div class="container">
    @if($past > 0)
        <table class="table table-striped table-bordered">
            <thead>
                <th>Type</th>
                <th>Stage</th>
                <th>Region</th>
                <th>Location</th>
                <th>Owner</th>
                <th>Date & Time</th>
                <th>Notes</th>
            </thead>
            <tbody>
                @foreach($oldTimers as $timer)
                <tr>
                    <td>{{ $timer->type }}</td>
                    <td>{{ $timer->stage }}</td>
                    <td>{{ $timer->region }}</td>
                    <td>{{ $timer->system . " - " . $timer->planet . " - " . $timer->moon }}</td>
                    <td>{{ $timer->owner }}</td>
                    <td>{{ $timer->eveTime }}</td>
                    <td>{{ $timer->notes }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        No past timers.
    @endif
</div>

@endsection