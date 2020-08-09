@extends('layout')

@section('content')

    <section>
        <div class="lp">
            <div>

                <!-- TRAINING BENEFITS -->
                <div class="events ev-po-2 ev-po-com team-squad">
                    <div class="ev-po-title pag-cri-inn-combg">
                         <h3>{{ $squad->name }}</h3>
                    </div>
                    @if(!empty($squad->users) && $squad->users->count() > 0)
                    <table class="myTable">
                        <tbody>
                        <tr>
                            <th>Jersey No</th>
                            <th>TEAM PLAYERS</th>
                            <th>Player Type</th>
                            <th>matches</th>
                            <th>Highest</th>
                            <th>Hundreds</th>
                            <th>Fifties</th>
                            <th>country</th>
                        </tr>
                        @foreach($squad->users as $player)
                        <tr>
                            <td>{{ $player->jersey_number }}</td>
                            <td><img src="{{ $player->image }}" alt="">
                                <div class="h-tm-ra">
                                    <h4>{{ $player->firstname. ' '.$player->lastname }}</h4><span>specials: active, fast run, Good stamina</span>
                                </div>
                            </td>

                            <td>{{{ json_decode(json_encode($player->history['player_type']),true) }}}</td>
                            <td>{{{ json_decode(json_encode($player->history['matches']),true) }}}</td>
                            <td>{{{ json_decode(json_encode($player->history['highest']),true) }}}</td>
                            <td>{{{ json_decode(json_encode($player->history['hundreds']),true) }}}</td>
                            <td>{{{ json_decode(json_encode($player->history['fifties']),true) }}}</td>
                            <td>{{ $player->country }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <div>
                            <p class="text-center">
                            <h4>No data found</h4>
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
