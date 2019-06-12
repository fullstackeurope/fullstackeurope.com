@extends('_layouts.speaker', ['speaker' => $page->speakers['nataliya-remez']])

@section('talk')
    <p>Most of us have heard of the Site Reliability Engineering from Google, but not many of us understand what does it mean in practice. Another question is what’s the difference between DevOps and SRE. Generally speaking SRE is what happens when you ask software engineers to design an operations functions, this is why it’s quite important to have SRE team quite balanced with both - traditional software engineers as well as the other half of engineers who have skills and interests related to operational fields: unix internals, networking, and so on.</p>

    <p>In this talk I’ll share some experience of how your organisation can benefit from introducing SRE and how you as a leader can coach and support your teams to enable it.</p>
@endsection

@section('bio')
    <p>Engineering Excellence Evangelist passionate about enabling organisations to improve by cultivating a culture of continuous improvement at all levels, using Agile, DevOps, Continuous Delivery, Lean and data-driven decision making.</p>
    <p>Although a nerd at heart, she has almost a decade of experience in coaching the entire organisations in doing product development with a focus on adding business value. In her spare time Nataliya is co-organising the <a href="https://www.meetup.com/Go-Agile-Stockholm/">Go Agile! Stockholm meetup</a>.</p>
@endsection
