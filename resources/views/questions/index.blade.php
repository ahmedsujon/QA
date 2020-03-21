@extends('layouts.app') @section('content')
<main role="main" class="container">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h2 class="border-bottom border-gray pb-2 mb-0">Questions List</h2>
        <div class="card-body">
            @foreach ($questions as $question)
            <div class="media">
                <div
                    class="d-flex flex-column counters"
                    style="padding-right: 15px;"
                >
                    <div style="font-size: 13px;" class="vote">
                        <strong style="padding-left: 14px;"
                            >{{ $question->votes }} <br
                        /></strong>
                        {{ str_plural('vote', $question->votes) }}
                    </div>
                    <div
                        style="font-size: 13px;"
                        class="status {{ $question->status }}"
                    >
                        <strong style="padding-left: 14px;"
                            >{{ $question->answers }} <br
                        /></strong>
                        {{ str_plural('answer', $question->answers) }}
                    </div>
                    <div style="font-size: 13px;" class="view">
                        {{ $question->views . " " . str_plural('view', $question->views) }}
                    </div>
                </div>
                <div class="media-body">
                    <h3 class="mt-0">
                        <a
                            href="{{ $question->url }}"
                            >{{ $question->title }}</a
                        >
                    </h3>
                    <p class="lead">
                        Asked by
                        <a
                            href="{{ $question->user->url }}"
                            >{{ $question->user->name }}</a
                        >
                        <small
                            class="text-muted"
                            >{{ $question->created_date }}</small
                        >
                    </p>
                    {!! substr($question->body,0,250) !!}
                </div>
            </div>
            <hr />
            @endforeach
            <div class="mx-auto text-center">
                {{ $questions->links() }}
            </div>
        </div>
    </div>
</main>
@endsection
