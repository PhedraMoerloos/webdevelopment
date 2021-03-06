@extends('master')



@section('content')

      <h2>These are the participants for Competition Yuppie:</h2>

      @foreach ($valid_participants as $valid_participant)

          <div>

            <ul>
              <li><b>Name:</b> {{ $valid_participant->firstname }} {{ $valid_participant->lastname }}</li>
              <li><b>Address:</b> {{ $valid_participant->address }}, {{ $valid_participant->zipcode }} {{ $valid_participant->city }}</li>
              <li><b>Email:</b> {{ $valid_participant->email }}</li>
              <li><b>IP address:</b> {{ $valid_participant->ipaddress }}</li>
              <li><b>Answered correctly:</b> {{ ($valid_participant->answered_correctly) ? 'Yes' : 'No' }}</li>
              <li><b>Is the winner of a period:</b> {{ ($valid_participant->is_winner) ? 'Yes' : 'No' }}</li>
              <li><b>Played in period:</b> {{ $valid_participant->period->period_number }}</li>
            </ul>


          </div>

      @endforeach

@endsection
