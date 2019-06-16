@extends('_layouts.speaker', ['speaker' => $page->speakers['bram-van-damme']])

@section('workshop')
    <p>Ever since React was released in 2013, it has changed the way we think about web applications and user interface development.</p>

    <p>Even though React is conceptually simpler than some alternative JavaScript frameworks, getting started with React is still complicated. The confusion is often caused by the new idioms of its underlying technology (ES2015, often referred to as “ES6”), the extra tools that surface along with its usage, or the corollary technologies that can be integrated with React.</p>

    <p>This workshop tackles all of these issues, and will get you started with React. Starting from zero React knowledge it will walk you through React's tools and features, along with some key parts of ES2015. At the end of this workshop you'll be familiar with JSX, Components, props, state, refs, hooks, basic testing, etc. and will be able to deploy your freshly created app.</p>

    <p>Prerequisites:</p>

    <ul>
        <li>Basic knowledge of JavaScript/HTML/CSS (ES5; key parts of ES2015 (aka “ES6”) and up will be covered where necessary)</li>
        <li>A working installation of NodeJS (Node 8.9+)</li>
        <li>A working installation of Git</li>
    </ul>
@endsection

@section('bio')
    <p>Bram Van Damme, nicknamed Bramus, is a 35 year old geezer who lives in Vinkt (Belgium) together with his son Finn, his daughter Tila, and his girlfriend Ellie.</p>

    <p>With his company 3RDS he works as a freelance creative coder, tackling both the frontend and the backend. His current focus is on JavaScript, React and React Native. Before launching 3RDS, Bramus worked at several web agencies in various frontend en backend roles. For seven years he also was a Lecturer Web at a technical university in Belgium.</p>

    <p>In his spare time Bramus likes to go Scuba Diving, both recreational as professional (PADI Divemaster #405966).</p>
@endsection
