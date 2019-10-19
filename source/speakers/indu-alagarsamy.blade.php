@extends('_layouts.speaker', ['speaker' => $page->speakers['indu-alagarsamy']])

@section('talk')
    <p>How does your system react when a key resource fails? Say, the database becomes unavailable, or the message broker fails. What if you get a current surge of load, that you have to keep up? What if a badly worded error message results in a billion dollar fire.</p>

    <p>Real life engineering disciplines can teach us a thing or two on designing for resilience. Learn the techniques and patterns that you can borrow from other areas of engineering, and apply them in your systems.</p>
@endsection

@section('bio')
    <p>Indu Alagarsamy is a distributed systems design consultant with over 15 years of software development experience. She's passionate about combining domain-driven design principles with event-driven architecture style to build reliable systems. Her current day job is being a Solutions Architect at Particular Software, the makers of NServiceBus.</p>

    <p>She’s also passionate about diversity and inclusiveness in the tech industry. When not programming, she’s an occasional rock climber in Southern California and also loves to chill with her kids and her giant mastiff.</p>
@endsection
