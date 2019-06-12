@extends('_layouts.speaker', ['speaker' => $page->speakers['joost-lubach']])

@section('talk')
    <p>Joost makes software for corporate events or conferences based on a chat-like interaction. When a client wanted more human-like interactions in their chat scripts, he decided to write a tiny chatbot DSL, allowing simple things like if-statements and for-loops based on users' answers.</p>

    <p>In this talk, he will take you along his rollercoaster ride of creating this DSL. He had one *tiiiiny* requirement: he wanted the dialogues to be resumable from another process, in case of a server crash or restart, or simply because it would be run in a distributed environment. But that turned out to be quite a heave tiny requirement, because how on earth do you serialize the state of a for-loop?</p>

    <p>Well, let's put it this way: if you've always wanted to know everything about assembler language, or stack based VMs and that sort of techy stuff, you've come to the right place.</p>

    <p>This is also a good opportunity to come talk to him after the talk and tell him how much simpler he could have solved it. Oh and leave your phone on for this talk (but on silent mode please).</p>
@endsection

@section('bio')
    <p>Having always heard people saying: "Get off your phone, and be social", Joost has made it his personal mission to prove that technology doesn't have to mean that you're always on your phone, but can (and should) engage people socially.</p>

    <p>While freelancing, he's enjoyed having clients in the TV & media industry in The Netherlands. His app <a href="https://twitter.com/kamergotchi">Kamergotchi</a>, a game created for a popular Dutch satirical TV show even hit #1 in the Dutch App Store.</p>

    <p>After ten years of freelancing as an app & full-stack developer, he's now focusing on his two latest brain childs: <a href="https://www.groundcontrol.app">GroundControl</a>, a digital event guide & gamification system, and Blip, a crowdcasting-platform for micropodcasts.</p>

    <p>In addition to developing, he sometimes teaches JavaScript, <a href="https://nodejs.org/en/">NodeJS</a> & <a href="https://reactjs.org">React</a> at <a href="http://hackyourfuture.be">HackYourFuture</a>, a coding school for refugees, with schools in The Netherlands, Denmark and the UK.</p>
@endsection
