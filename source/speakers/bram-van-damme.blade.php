@extends('_layouts.speaker', ['speaker' => $page->speakers['bram-van-damme']])

@section('workshop')
    <p>This workshop will get you started with React. Starting from zero React knowledge it will walk you through React's features. At the end of this workshop you'll be familiar with JSX, components, props, state, refs, hooks, etc. and will be able to deploy your freshly created app.</p>

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
