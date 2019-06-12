@extends('_layouts.speaker', ['speaker' => $page->speakers['rik-van-bruggen']])

@section('talk')
    <p>Graph data technology is changing how we store, query and analyse our data.</p>

    <p>In this talk, Rik will introduce you to the wonderful world of graphs, and explain where and where not to use them. He will also show a number of fascinating examples (from space exploration to cancer research), and do a live demo on a dataset that we all love.</p>
@endsection

@section('bio')
    <p>Rik Van Bruggen is the regional vice-president for Neo4j. He has been working for startup companies for most of his career, a has been working for Neo4j for 7 years - growing it from a few dozen people to 300+ graph professionals worldwide.</p>

    <p>He is a fond graph enthusiast, <a href="http://learningneo4j.net">writing</a>, <a href="http://blog.bruggen.com">blogging</a>, <a href="http://www.graphistania.com">podcasting</a>, <a href="https://twitter.com/rvanbruggen">tweeting</a> about it whenever possible. He has a fond technical interest, but really is passionate about business use cases - and about Belgian Beer.</p>
@endsection
