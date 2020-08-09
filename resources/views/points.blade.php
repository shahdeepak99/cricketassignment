@extends('layout')

@section('content')
    <section class="ev-po">
        <div class="lp">
            <div class="row">
                <div class="col-md-12 eve-res">
                    <div class="events ev-po-2 ev-po-com">
                        <div class="ev-po-title pag-cri-inn-combg">
                            <h3>Points Table</h3>
                        </div>
                        @if(!empty($allpoints) && count($allpoints) > 0)
                            <table class="myTable">
                                <tbody>
                                <tr>
                                    <th>TEAMS</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>PTS</th>
                                </tr>
                                @foreach($allpoints as $allpoint)
                                    <tr>
                                        <td><img src="{{ $allpoint['logo'] }}" alt="" style="border-radius: 25px;">
                                            <div class="h-tm-ra">
                                                <h4>{{ $allpoint['name'] }}</h4><span>{{ $allpoint['club'] }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $allpoint['wins'] }}</td>
                                        <td>{{ $allpoint['loses'] }}</td>
                                        <td>{{ $allpoint['points'] }}</td>
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
