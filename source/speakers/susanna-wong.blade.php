@extends('_layouts.speaker', ['speaker' => $page->speakers['susanna-wong']])

@section('talk')
    <p>The launch of <a href="https://www.tensorflow.org/js">tensorflow.js</a> library in March 2018 has put the power of machine learning into the hands of the JavaScript developer, and with its specific capability to run machine learning programs entirely on the client-side, into the hands of the front-end dev. The talk documents the fundamental understanding of Machine Learning we need as a front end developer, in specifically the domain specific knowledge of setting up a Neural network with tensorflow.js, for us as web developers to integrate machine learning in our web projects.</p>

    <p>We will also explore possibilities of the architecture and design of static and dynamic ML systems in combination with existing front end frameworks (<a href="https://reactjs.org">React</a> and <a href="https://graphql.org">GraphQL</a>).</p>

    <p>The focus on the talk is not on the library specifically, but more on sharing of my experiences land learnings in experimenting with ML from a front end developer's perspective.</p>
@endsection

@section('bio')
    <p>Susanna is a front end enthusiast passionate about <a href="https://reactjs.org">React</a>, <a href="https://graphql.org">GraphQL</a> and recently <a href="https://emberjs.com">Ember</a>. While she is NOT a believer of any robot uprising, she is a strong believer of Machine Learning technologies taking over the development world, and has truly accepted the fate that, as a developer, we will more or less need to start switching our mindset to brace this brave new world. </p>
@endsection
