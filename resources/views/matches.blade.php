@extends('layout')

@section('content')

    <section>
        <div class="lp">
            <div class="inn-title">
                <h2><i class="fa fa-check" aria-hidden="true"></i> matches<span></span></h2>
            </div>
            <div class="p-mf">
                <ul>
                        @foreach($matches as $match)
                    <li>
                        <div class="mf-1">{{ $match->team_1->name }}</div>
                        <div class="mf-2"><img src="{{ $match->team_1->logo }}" alt="" >
                        </div>
                        <div class="mf-3"><span class="mf-31">{{ \Carbon\Carbon::parse($match->match_on)->format('j F, Y') }}</span>
                            <span class="mf-32">{{ isset($match->winner)?$match->winner->name.' won the match':'Match yet to be played' }} </span>
                        </div>
                        <div class="mf-4"><img src="{{ $match->team_2->logo }}" alt="">
                        </div>
                        <div class="mf-5">{{ $match->team_2->name }}</div>
                    </li>
                        @endforeach
                </ul>
            </div>
            <div class="card-footer">
                {!! $matches->links() !!}
            </div>
        </div>
    </section>

@endsection
