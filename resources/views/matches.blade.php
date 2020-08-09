@extends('layout')

@section('content')

    <section>
        <div class="lp">
            <div class="inn-title">
                <h2><i class="fa fa-check" aria-hidden="true"></i> matches<span></span></h2>
            </div>
            <div class="p-mf">
                <ul>
                    @if(!empty($allmatches) && count($allmatches) > 0)
                        @foreach($allmatches as $match)
                    <li>
                        <div class="mf-1">{{ $match['team1']->name }}</div>
                        <div class="mf-2"><img src="{{ $match['team1']->logo }}" alt="" >
                        </div>
                        <div class="mf-3"><span class="mf-31">{{ \Carbon\Carbon::parse($match['match_on'])->format('j F, Y') }}</span>
                            <span class="mf-32">{{ isset($match['winner'])?$match['winner']->name.' won the match':'Match yet to be played' }} </span>
                        </div>
                        <div class="mf-4"><img src="{{ $match['team2']->logo }}" alt="">
                        </div>
                        <div class="mf-5">{{ $match['team2']->name }}</div>
                    </li>
                        @endforeach

                    @else
                        <li>
                            <p class="text-center">
                            <h4>No data found</h4>
                            </p>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="card-footer">
                {!! $matches->links() !!}
            </div>
        </div>
    </section>

@endsection
