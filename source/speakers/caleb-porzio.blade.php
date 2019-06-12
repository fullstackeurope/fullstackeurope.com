@extends('_layouts.speaker', ['speaker' => $page->speakers['caleb-porzio']])

@section('talk')
    <p>The big three frameworks: <a href="https://vuejs.org">Vue</a>, <a href="https://reactjs.org">React</a>, and <a href="https://angular.io">Angular</a> dominate the front-end landscape right now. For some projects, these frameworks are the perfect tool, for many others, they introduce loads of unnecessary complexity.</p>

    <p>In this talk, we’ll explore interesting tools and techniques being used by big companies like GitHub to achieve fantastic looking front-ends, without going down the SPA rabbit-hole.</p>
@endsection

@section('bio')
    <p>Caleb Porzio is an independent Full Stack developer from Buffalo, NY. He’s extremely active in the Laravel community; speaking, <a href="https://calebporzio.com">blogging</a>, and <a href="https://noplanstomerge.com">podcasting</a> things he learns and is excited about.</p>

    <p>In an increasingly complex tech landscape, Caleb is passionate about solving problems using simple solutions and resisting complexity as software demands grow. He suspects that the current JavaScript ecosystem is needlessly complex, and is trying to save the world, one app at a time!</p>
@endsection
