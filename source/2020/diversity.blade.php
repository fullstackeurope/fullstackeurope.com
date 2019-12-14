@extends('2020._layouts.page', ['pageTitle' => 'Diversity And Accessibility'])

@section('content')
    <h1>Diversity and Accessibility</h1>

    <p>We care deeply about making Full Stack Europe a safe and welcoming space for everyone.</p>

    <p>As with everything, this involves making many trade-offs. We want to get better at prioritising the efforts that have the most impact on safety, comfort, diversity, and accessibility. We need your help! Your feedback will help us. If you have relevant experiences, or if you are simply a bystander who cares, let us know what you would have us do differently.</p>

    <p>Please send your ideas or concerns to <a href="mailto:hello@fullstackeurope.com">hello@fullstackeurope.com</a> or call +32 468 109 891. We treat all submissions confidentially.</p>

    <h2>Doing</h2>

    <h3>Code of Conduct (CoC)</h3>

    <p>We ask all participants, speakers, and staff, to adhere to <a href="{{ $page->fseu20['baseUrl'] }}code-of-conduct">our Code of Conduct</a>, and mention it in the opening speech of the conference. Our goal is to create a safe and welcoming environment for all participants. We fully intend to enforce it, and have scenarios in place for dealing with violations.</p>

    <h3>Contact person</h3>

    <p>We have a <a href="{{ $page->fseu20['baseUrl'] }}code-of-conduct">contact person</a> for reporting Code of Conduct violations and related concerns.</p>

    <h3>Speaker reimbursements</h3>

    <p>Speakers' expenses are fully reimbursed, so that having limited means is not an objection to speak at the conference.</p>

    <h3>Language</h3>

    <p>We encourage participants to speak English, even if you share another language with your conversation partners. This makes it easier for others to join.</p>

    <h3>Speaker diversity</h3>

    <p>We put a lot of effort in curating the content of the conference, and do additional research efforts to find relevant speakers from underrepresented groups.</p>

    <h3>Presentation support</h3>

    <p>We offer support to speakers who are new to public speaking, or who are developing new content. For example, we sometimes pair up new speakers with experienced speakers to give feedback on the material, or help find opportunities for new speaker to do a tryout at a meetup.</p>

    <h3>Gender-inclusive language</h3>

    <p>We attempt to use gender-neutral language in all our communication. Let us know when we make mistakes.</p>

    <h3>Wheelchair accessibility</h3>

    <p>There are wheelchair-accessible bathrooms downstairs. The hotel offers guestrooms for invalid guests. Please contact the hotel to assure you have such a room.

    <h3>Reserved accessible seating</h3>

    <p><a href="mailto:hello@fullstackeurope.com">Contact us</a> for info.</p>

    <h3>Dietary requirements</h3>

    <p>We inquire about dietary requirements during the registration process.</p>

    <h3>Volunteers</h3>

    <p>If you live in Antwerp, you can volunteer to help out during the conference, and get to see a number of sessions for free.</p>

    <h3>Discounts or scholarships for students or underrepresented groups</h3>

    <p>We have scholarships for underrepresented groups, students, and anyone who needs it. <a href="mailto:hello@fullstackeurope.com">Please get in touch with us.</a></p>

    @include('2020._partials.diversity')
@endsection
