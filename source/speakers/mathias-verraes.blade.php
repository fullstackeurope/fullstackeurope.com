@extends('_layouts.speaker', ['speaker' => $page->speakers['mathias-verraes']])

@section('talk')
    <p>When we design software for a complex domain, it helps to have a deep understanding of that domain, and reflect it in the system's model. That's the central premise of DDD. Many interesting business domains are temporal; they involve many interconnected processes and behaviours happening over time.</p>

    <p>This is where traditional ways of understanding our domains fall short: they look at the artifacts of those processes, but not enough at the processes themselves.</p>

    <p>Temporal analysis patterns help us see recurring patterns in how the processes in our domains work and are organised. The insights well get from applying the patterns, show us how to choose objects, components, and services. This leads to better decoupled systems, both internally and at the level of integrations.</p>
@endsection

@section('workshop')
    <p>The design patterns from Domain-Driven Design are gradually entering the collective consciousness of software developers. But most of the information out there focuses on mechanistic implementation details of the patterns: how to make an Entity in [insert favourite programming language], how to use the Repository pattern with [insert new hot ORM], how to make immutable Value Objects in [insert legacy framework]...</p>

    <p>Applied individually, these patterns are useful, but are not giving you the full potential of Domain-Driven Design.</p>

    <p>This one day training has a different approach. We address technical concerns in implementing the DDD patterns, but the focus is on the underlying principles and heuristics for building great domain-centric object-oriented code.</p>

    <ul>
        <li>Why you’re underusing Value Objects</li>
        <li>Seeing objects as containers of lifecycles and consistency</li>
        <li>Discovering deeper domain concepts such as business rules, and lifting them into first class domain objects</li>
        <li>The relevance of processes, behaviour, temporal modelling... for finding better Aggregate boundaries</li>
        <li>How mutable software designs have distorted our perception of mutability in the domain</li>
        <li>Better heuristics for understanding a complex domain, and using them to drive a more focused design</li>
        <li>Reducing our dependence on service classes</li>
        <li>Designing an implementation model that not only encapsulates the domain, but communicates that design to future programmers and reduces their surface area for bugs</li>
        <li>...</li>
    </ul>

    <p>This workshop, aimed at programmers, is designed to give you immediate benefits when modelling and implementing the most important parts of your codebase.</p>
@endsection

@section('bio')
    <p>Mathias Verraes advises organisations on designing and modelling software for complex environments, including architecture, analysis, testing, and refactoring “unmaintainable” systems. He has worked with clients in Government, Logistics, Mobility, Energy, E-Commerce, and more.</p>

    <p>He teaches Domain-Driven Design courses and curates the DDD Europe conference. When he’s at home in Kortrijk, Belgium, he helps his two sons build crazy Lego contraptions.</p>
@endsection
