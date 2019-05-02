@extends('_layouts.speaker', ['speaker' => $page->speakers['matthias-noback']])

@section('bio')
    <a id="workshop" class="anchor-page"></a>
    <h2 data-anchor-id="workshop">Workshop - {{ $page->speakers['matthias-noback']['workshop'] }}</h2>

    <p>In this workshop we’ll dive into the topic of Autonomous Service development, with a sandbox project containing several interdependent services. These projects send messages to each other, and they call each other to retrieve data. In other words, they’re not autonomous at all. We’ll figure out some ways in which we can invert dependencies and leverage a messaging solution to achieve autonomy after all.</p>

    <p>In a relatively short period you’ll get acquainted with the basics of asynchronous integration, CQRS, domain events and integrating bounded contexts.</p>

    @include('_partials._cta_workshop')

    <h2>About</h2>

    <p>Matthias Noback is a professional web developer (since 2003). He lives in Zeist, The Netherlands, with his girlfriend, son, and daughter.</p>

    <p>Matthias has his own web development, training and consultancy company called Noback's Office. He has a strong focus on backend development and architecture, always looking for better ways to design software.</p>

    <p>Since 2011 he's been blogging about all sorts of programming-related topics on <a href="https://matthiasnoback.nl/">matthiasnoback.nl</a>. He's published several programming books as well (most recently: "Principles of Package Design" and a "Style Guide for Object Design").</p>
@endsection
