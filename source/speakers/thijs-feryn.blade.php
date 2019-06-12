@extends('_layouts.speaker', ['speaker' => $page->speakers['thijs-feryn']])

@section('talk')
    <p>When the pressure is on, your application will need to scale up or scale out. Throwing servers at the problem is not a sustainable solution and refactoring is not always effective.</p>

    <p>Caching, on the other hand, might reduce the impact of your application on the system. Unfortunately, when personalization comes into play, caching is really hard: it’s a tradeoff between caching enough variations of your content and maintaining a good hit rate.</p>

    <p>In this presentation, we will use different techniques in Varnish to cache personalized content:</p>

    <ul>
        <li>Using HTTP fragments such as ESI and AJAX</li>
        <li>Creating cache variations using cookie values</li>
        <li>Authentication in the edge</li>
        <li>Fetching session data in the edge</li>
        <li>Content transformation and personalization in the edge</li>
    </ul>

     <p>By doing as much decision making and transformation “in the edge”, we avoid performing expensive computing at the origin, which allows us to scale and to “cache the uncacheable”.</p>
@endsection

@section('bio')
    <p><a href="https://twitter.com/ThijsFeryn">Thijs Feryn</a> is a &quot;technical evangelist&quot; at <a href="https://www.varnish-software.com/">Varnish Software</a>, the company behind the <a href="https://www.varnish-cache.org/">Varnish Cache</a> open source technology. His goal is to bring technology to the people and people to technology. He focuses on bridging the gap between code and infrastructure.</p>

    <p>Thijs is a <a href="http://shop.oreilly.com/product/0636920056294.do">published author at O&#39;Reilly</a>, he is also involved in many open source communities. He <a href="https://feryn.eu/speaking">speaks</a>, listens, <a href="https://feryn.eu/books">writes</a>, codes, teaches, <a href="https://feryn.eu/blog">blogs</a>, <a href="http://youtube.com/ThijsFeryn">vlogs</a>, organizes and is above all very excited to speak at Full Stack Europe.</p>
@endsection
