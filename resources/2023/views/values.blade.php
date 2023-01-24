@extends('2022::layouts.page', ['pageTitle' => 'Values'])

@section('page')
    <h1>Values</h1>

    <h2>Code of Conducts</h2>

    <p>We ask all participants, speakers, sponsors, and staff, to adhere to our Code of Conduct, and mention it in the opening speech of the conference. Our goal is to create a safe and welcoming environment for all participants. We fully intend to enforce it, and have scenarios in place for dealing with violations.</p>

    <p><a href="{{ route('code-of-conduct', $edition) }}">Read the Code of Conduct</a></p>


    <h2>Sustainability</h2>

    <p>As a conference, we are not climate neutral. However, we can choose to lower our impact on the environment as much as possible, inspired by the 8 R's (Recycle - Refuse - Reduce - Reuse - Repair - Regift - Recover - Rethink).</p>

    <p><a href="{{ route('sustainability', $edition) }}">Read about our Sustainability Efforts</a></p>


    <h2>Diversity & Accessibility</h2>

    <p>We care deeply about making Full Stack Europe a safe and welcoming space for everyone. As with everything, this involves making many trade-offs. We want to get better at prioritising the efforts that have the most impact on safety, comfort, diversity, and accessibility.</p>

    <p><a href="{{ route('diversity', $edition) }}">Read about our Diversity & Accessibility efforts</a></p>


    <h2>Covid 19 Policy</h2>

    <p>For all our events, including conferences, workshops, and social events, we take the COVID-situation seriously. We want to reduce the risk of infection as much as possible, and keep everyone safe.</p>

    <p><a href="{{ route('covid-19-policy', $edition) }}">Read our COVID-19 Policy</a></p>
@endsection
