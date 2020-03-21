@extends('layouts.app')

@section('content')
<main role="main" class="container">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h2 class="border-bottom border-gray pb-2 mb-0">Questions List</h2>
        <div class="card-body">
            @foreach ($questions as $question)
            <div class="media">
                <div class="media-body">
                    <h3 class="mt-0">{{ $question->title }}</h3>
                    {!! substr($question->body,0,250) !!}..
                </div>
            </div>
            <hr>
            @endforeach
            <div class="mx-auto text-center">
                {{ $questions->links() }}
            </div>
        </div>
    </div>
</main>
@endsection
