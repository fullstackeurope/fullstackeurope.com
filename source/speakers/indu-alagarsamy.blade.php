@extends('_layouts.speaker', ['speaker' => $page->speakers['indu-alagarsamy']])

@section('talk')
    <p>Good microservices have clearly defined boundaries, each responsible for their own data and models. This leads to autonomy, which leads to better deployable and scalable systems. While all this makes sense from a back-end perspective, for an end user looking at your UI, it doesn’t matter which microservice owns the data. Information needs to be cohesive.</p>

    <p>Even with an architecture that consists of multiple autonomous event-driven microservices, you can achieve this. Learn how to build a UI that knows how to get the data from these services in a clean fashion, giving your users a seamless experience. Let’s explore how composite UI can make this feasible.</p>
@endsection

@section('bio')
    <p>Indu Alagarsamy is a distributed systems design consultant with over 15 years of software development experience. She's passionate about combining domain-driven design principles with event-driven architecture style to build reliable systems. Her current day job is being a Solutions Architect at Particular Software, the makers of NServiceBus.</p>

    <p>She’s also passionate about diversity and inclusiveness in the tech industry. When not programming, she’s an occasional rock climber in Southern California and also loves to chill with her kids and her giant mastiff.</p>
@endsection
