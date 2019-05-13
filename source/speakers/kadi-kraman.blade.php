@extends('_layouts.speaker', ['speaker' => $page->speakers['kadi-kraman']])

@section('bio')
    <a id="talk" class="anchor-page"></a>
    <h2 data-anchor-id="talk">Talk - {{ $page->speakers['kadi-kraman']['talk'] }}</h2>

    <p>JavaScript is a language of add-ons, and one of its more recent trends is typing. There are obvious benefits to typing, but what are the drawbacks? Should you choose <a href="https://flow.org">Flow</a> or <a href="https://www.typescriptlang.org">TypeScript</a>? Why use types at all? And why not just go straight to <a href="https://reasonml.github.io">Reason</a>? This session will provide some insight into these questions, peppered with examples from the real world.</p>

    <h2>About</h2>

    <p>Kadi is a Software Engineer at <a href="https://formidable.com">Formidable</a>, working primarily with <a href="https://reactjs.org">React</a>, <a href="https://facebook.github.io/react-native/">React Native</a>, <a href="https://nodejs.org/en/">Node.js</a> and <a href="https://graphql.org">GraphQL</a>.</p>
@endsection
