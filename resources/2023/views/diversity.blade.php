@extends('2022::layouts.page', ['pageTitle' => 'Diversity and Accessibility'])

@section('page')
    <h1>Diversity and Accessibility</h1>

    <p>We care deeply about making Full Stack Europe a safe and welcoming space for everyone.</p>

    <p>As with everything, this involves making many trade-offs. We want to get better at prioritising the efforts that have the most impact on safety, comfort, diversity, and accessibility. We need your help! Your feedback will help us. If you have relevant experiences, or if you are simply a bystander who cares, let us know what you would have us do differently.</p>

    <p>Please send your ideas or concerns to <a href="mailto:hello@fullstackeurope.com">hello@fullstackeurope.com</a> or call +32 468 109 891. We treat all submissions confidentially.</p>

    <h2>Doing</h2>

    <h3>Code of Conduct (CoC)</h3>

    <p>We ask all participants, speakers, and staff, to adhere to <a href="{{ route('code-of-conduct', $edition) }}">our Code of Conduct</a>, and mention it in the opening speech of the conference. Our goal is to create a safe and welcoming environment for all participants. We fully intend to enforce it, and have scenarios in place for dealing with violations.</p>

    <h3>Contact person</h3>

    <p>We have a <a href="{{ route('code-of-conduct', $edition) }}">contact person</a> for reporting Code of Conduct violations and related concerns.</p>

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

    <h3>Gender-inclusive bathrooms</h3>

    <p>Gender-inclusive bathrooms are clearly indicated</p>

    <h3>Wheelchair accessibility</h3>

    <p>There are wheelchair-accessible bathrooms downstairs. The hotel offers guestrooms for invalid guests. Please contact the hotel to assure you have such a room.

    <h3>Bring your assistant</h3>

    <p>If you need an assistant to help you attend the event, we'll give them a free ticket.</p>

    <h3>Assistance animals</h3>

    <p>Animals are not allowed but we make an exception for assistance animals.</p>

    <h3>Sign Language interpreter</h3>

    <p>If you need a sign language interpreter, please send an email to <a href="mailto:hello@fullstackeurope.com">hello@fullstackeurope.com</a> with information on what sign language you need. We will do our best to find and hire one. If you already know a person that would work for you, let us know their contact information.</p>

    <h3>Reserved accessible seating</h3>

    <p><a href="mailto:hello@fullstackeurope.com">Contact us</a> for info.</p>

    <h3>Dietary requirements</h3>

    <p>Water, tea, coffee and snacks are served throughout the day at the conference location. We inquire about dietary requirements during the registration process.</p>

    <h3>Queuing</h3>

    <p>We understand queuing can be difficult, painful or impossible for some participants. We do not anticipate long queues during the conference, but will make participants aware to let people skip the line if necessary.</p>

    <h3>People with photosensitive epilepsy/seizures</h3>

    <p>We will ask speakers to indicate if their presentation contains strobe effects or flickering.</p>

    <h3>Volunteers</h3>

    <p>If you live in Antwerp, you can volunteer to help out during the conference, and get to see a number of sessions for free.</p>

    <h3>Discounts or scholarships for students or underrepresented groups</h3>

    <p>We have scholarships for underrepresented groups, students, and anyone who needs it. <a href="mailto:hello@fullstackeurope.com">Please get in touch with us.</a></p>

    @include('2022::partials.diversity')
@endsection
