@extends('_layouts.speaker', ['speaker' => $page->speakers['gabi-davila']])

@section('talk')
    <p>The market offers a range of solutions to run stateless applications. One of the many perks is the scalability of such code. Learn from this talk how to come from <a href="https://cloud.google.com/functions/">Functions</a> (do one thing) to the broad world of <a href="https://cloud.google.com/run/">Cloud Run</a> (do *anything*). Prepare your containers, the demos are about to start!</p>
@endsection

@section('bio')
    <p>Gabi is a Developer Advocate at <a href="https://cloud.google.com">Google Cloud</a> and a passionate Software Engineer.</p>

    <p>She likes simplifying complex systems, and believes abstractions are best when they can be understood in a real life example. She’s driven to go beyond DBA lingo to make database and storage technology more accessible to software developers.</p>
@endsection
