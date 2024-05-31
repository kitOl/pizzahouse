@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content text-center mt-5 ">
        <div class="title m-b-md">
            Pizza List
        </div>

        @foreach ($pizzas as $pizza)
            <div>
                {{ $loop->index + 1 }}  {{ $pizza['type'] }} - {{ $pizza['base'] }}
                @if ($loop->first)
                    <span> - first in the loop - </span>
                @elseif ($loop->last)
                <span> - last in the loop - </span>
                @endif
            </div>
        @endforeach

    </div>
</div>
@endsection
