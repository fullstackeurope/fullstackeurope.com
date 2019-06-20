@extends('_layouts.speaker', ['speaker' => $page->speakers['mattias-geniar']])

@section('talk')
    <p>This talk will explore the "other side" of debugging: the one from a sysadmin point of view. We'll look at malfunctioning code and debug it using tools like netstat, lsof, strace, sysdig & more to find the root cause. At the end of the talk, you should be armed with the knowledge to troubleshoot any kind of application (PHP, Ruby, Perl, ...) on a Linux server.</p>
@endsection

@section('bio')
    <p>Mattias is a Support Manager at <a href="https://www.combell.com/">Combell</a>, a leading hosting provider in Europe. With over 10y experience in both Linux and PHP development he’s soon both the dev- and the ops-side of things.</p>
    <p>He’s always on the lookout for new interesting technologies to play around with. On the side, he’s building <a href="https://ohdear.app">Oh Dear!</a> and <a href="https://dnsspy.io">DNS Spy</a>, two different SaaS projects aimed at monitoring the web.</p>
@endsection
