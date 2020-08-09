@extends('layout')

@section('content')
    <section class="ev-po">
        <div class="lp">
            <div class="row">
                <div class="col-md-12 eve-res">
                    <div class="events ev-po-2 ev-po-com">
                        <div class="ev-po-title pag-cri-inn-combg">
                            <h3>Teams</h3>
                        </div>
                        @if(!empty($teams) && $teams->count() > 0)
                        <table class="myTable">
                            <tbody>
                            <tr>
                                <th>TEAMS</th>
                                <th>Squad</th>
                            </tr>
                            @foreach($teams as $team)
                            <tr>
                                <td><img src="{{ $team->logo }}" alt="" style="border-radius: 25px;">
                                    <div class="h-tm-ra">
                                        <h4>{{ $team->name }}</h4><span>{{ $team->club }}</span>
                                    </div>
                                </td>
                                <td><a href="{{ route('team.show', base64_encode($team->id)) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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
        </div>
    </section>


@endsection
