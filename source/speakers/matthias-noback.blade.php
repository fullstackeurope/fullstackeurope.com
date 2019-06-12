@extends('_layouts.speaker', ['speaker' => $page->speakers['matthias-noback']])

@section('talk')
    <p>Web application frameworks are indispensable. You wouldn't want to deal with raw HTTP messages yourself, nor build your own router, or ORM. But if you're not careful, a framework will take over your entire project. Business logic and framework-specific code will end up being mixed together, in controllers, services and entities. Not being able to describe the use cases of your application without also talking about HTTP, or SQL, leads to hard-to-test and hard-to-change application code. Your core code will be tied to your framework, which endangers the future of the project in the long term.</p>

    <p>In this talk I'll explain how to make a clean separation between your own business logic and the code that makes your application's use cases available to the world outside. We'll discuss architectural concepts like "layers" and "ports & adapters", and how applying them will make your application flexible enough to deal with a constantly changing environment.</p>
@endsection

@section('workshop')
    <p>In this workshop we’ll dive into the topic of Autonomous Service development, with a sandbox project containing several interdependent services. These projects send messages to each other, and they call each other to retrieve data. In other words, they’re not autonomous at all. We’ll figure out some ways in which we can invert dependencies and leverage a messaging solution to achieve autonomy after all.</p>

    <p>In a relatively short period you’ll get acquainted with the basics of asynchronous integration, CQRS, domain events and integrating bounded contexts.</p>
@endsection

@section('bio')
    <p>Matthias Noback is a professional web developer (since 2003). He lives in Zeist, The Netherlands, with his girlfriend, son, and daughter.</p>

    <p>Matthias has his own web development, training and consultancy company called Noback's Office. He has a strong focus on backend development and architecture, always looking for better ways to design software.</p>

    <p>Since 2011 he's been blogging about all sorts of programming-related topics on <a href="https://matthiasnoback.nl/">matthiasnoback.nl</a>. He's published several programming books as well (most recently: "Principles of Package Design" and a "Style Guide for Object Design").</p>
@endsection
