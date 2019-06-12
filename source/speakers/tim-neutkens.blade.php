@extends('_layouts.speaker', ['speaker' => $page->speakers['tim-neutkens']])

@section('talk')
    <p>63% of npm users are using <a href="https://reactjs.org">React</a>. Making it the most popular JavaScript framework ever. React is being used everywhere from your favorite websites and web applications to maybe your personal website.</p>

    <p>However building fast and scalable React applications is complex. There are many pieces that have to come together, from compilation to optimization to developer experience. Furthermore there are many strategies in which websites and applications are being built today, for example statically pre-rendering, server-rendering and client-side only rendering. Let's explore how <a href="https://nextjs.org">Next.js</a> solves all of these problems for you.</p>
@endsection

@section('bio')
    <p>Tim lives in The Netherlands and co-authored <a href="https://nextjs.org">Next.js</a>, <a href="https://github.com/zeit/micro">Micro</a> and <a hre="https://mdxjs.com">MDX</a>. He got into open-source through contributing to <a href="https://hyper.is">the Hyper terminal</a> (a terminal built on web technologies).
        He has been involved in the development of Next.js since very early on, even before joining the team to work on it full-time.</p>

    <p>Nowadays he leads the Next.js team and is very passionate about creating the best possible developer experience.</p>
@endsection
