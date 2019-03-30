@extends('_layouts.page', ['maxWidth' => 'w-full'])

@section('content')
    <div class="md:flex">
        <div class="md:w-1/3">
            <h1 class="mb-4">FAQ</h1>

            <ul class="mb-4">
                <li>
                    <a href="#about-the-conference">About the conference</a>
                    <ul>
                        <li><a href="#is-this-conference-for-me">Is this conference for me?</a></li>
                        <li><a href="#what-programming-language-should-i-know">What programming language should I know?</a></li>
                        <li><a href="#what-language-is-spoken">What language is spoken?</a></li>
                        {{--<li><a href="#which-pre-conference-workshop-should-i-choose">Which pre-conference workshop should I choose?</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a href="#tickets">Tickets</a>
                    <ul>
                        <li><a href="#what-is-included-in-the-ticket-prices">What is included in the ticket prices?</a></li>
                        <li><a href="#why-do-i-have-to-pay-vat">Why do I have to pay VAT?</a></li>
                        <li><a href="#can-i-get-an-invoice">Can I get an invoice?</a></li>
                        <li><a href="#how-can-i-pay">How can I pay?</a></li>
                        <li><a href="#can-i-get-a-group-deal">Can I get a group deal?</a></li>
                        <li><a href="#change-attendee-name">Can I change the attendee name on the ticket?</a></li>
                        <li><a href="#can-i-get-a-refund">Can I get a refund?</a></li>
                        <li><a href="#are-there-any-scholarships">Are there any scholarships?</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#getting-to-antwerp">Getting to Antwerp</a>
                    <ul>
                        <li><a href="#by-train">By train</a></li>
                        <li><a href="#by-plane">By plane</a></li>
                        <li><a href="#by-bus">By bus</a></li>
                        <li><a href="#by-car">By car</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="md:w-2/3 md:pt-12">
            <a class="anchor" name="about-the-conference"></a>
            <h2 class="mb-3">About the conference</h2>

            <a class="anchor" name="is-this-conference-for-me"></a>
            <h3>Is this conference for me?</h3>

            <p>Are you a developer interested in building web applications and at the same time thinking about multiple parts of the stack needed to build them? Then this conference is for you. Many of the sessions either touch a specific concept or go about multiple parts of the stack.</p>

            <a class="anchor" name="what-programming-language-should-i-know"></a>
            <h3>What programming language should I know?</h3>

            <p>The conference does not focus on any particular programming language or technology. Some sessions might have code in them and will require some knowledge in order to follow along, but in general you should be able to follow most talks even if you don’t know the language that is used.</p>

            <a class="anchor" name="what-language-is-spoken"></a>
            <h3>What language is spoken?</h3>

            <p>All sessions are in English. We also encourage all participants to speak English, even with your friends, to make it easy for others to join.</p>

            {{--<a name="which-pre-conference-workshop-should-i-choose"></a>--}}
            {{--<h3>Which pre-conference workshop should I choose?</h3>--}}

            {{--<p>They're all great! Drop us an email, we'll help you decide.</p>--}}

            <a class="anchor" name="tickets"></a>
            <h2 class="mb-3">Tickets</h2>

            <a class="anchor" name="what-is-included-in-the-ticket-prices"></a>
            <h3>What is included in the ticket prices?</h3>

            <p>You'll have access to all the sessions on the dates included in your ticket. The main conference and the pre-conference workshops, all require separate tickets (or a combo ticket). All tickets include lunch and beverages. Not included in the ticket price are accommodation, travel, dinners, or any other costs, unless specifically indicated.</p>

            <a class="anchor" name="why-do-i-have-to-pay-vat"></a>
            <h3>Why do I have to pay VAT?</h3>

            <p>According to EU VAT law, we must charge VAT for online ticket sales with the same laws as if we were selling tickets at the door. This means that EU citizens including businesses and non-EU citizens / businesses must all pay VAT tax. You may be able to deduct the VAT cost in your country.</p>

            <a class="anchor" name="can-i-get-an-invoice"></a>
            <h3>Can I get an invoice?</h3>

            <p>Yes. Your confirmation email contains a link to the invoice. Make sure you enter your company name, VAT, and details in the checkout process.</p>

            <a class="anchor" name="how-can-i-pay"></a>
            <h3>How can I pay?</h3>

            <p>By credit card, PayPal, or bank transfer (choose 'Invoice' in the checkout screen.) We don't really like PayPal so avoid it if you can.</p>

            <a class="anchor" name="can-i-get-a-group-deal"></a>
            <h3>Can I get a group deal?</h3>

            <p>If you want to bring your team, <a href="mailto:hello@fullstackeurope.com">contact us</a> and tell us which events and workshops you're interested in, and we'll see what we can do.</p>

            <a class="anchor" name="change-attendee-name"></a>
            <h3>Can I change the attendee name on the ticket?</h3>

            <p>If you bought a ticket, but you want someone else in your company to attend instead, you can use the self-service features of the ticketing system, or you can <a href="mailto:hello@fullstackeurope.com">get in touch</a> and we'll do it for you.</p>

            <a class="anchor" name="can-i-get-a-refund"></a>
            <h3>Can I get a refund?</h3>

            <p>Sometimes things don’t work out as planned. In that case, we’re happy to refund your ticket up to two weeks before the event. There will be a 10% administration cost, and transaction costs may apply. Please <a href="mailto:hello@fullstackeurope.com">contact us</a> for information. Please include the order reference, invoice number, ticket code, or ticket link.</p>

            <a class="anchor" name="are-there-any-scholarships"></a>
            <h3>Are there any scholarships?</h3>

            <p>We do not have any scholarships at this time.</p>

            <a class="anchor" name="getting-to-antwerp"></a>
            <h2 class="mb-3">Getting to Antwerp</h2>

            <p>Antwerp is centrally-located in Europe and easy to reach. You can get here by train, plane, bus or car. Your hassle-free city trip starts here.</p>

            <a class="anchor" name="by-train"></a>
            <h3>By train</h3>

            <p>Antwerp is really easy to get to by train. National and international trains, such as the Thalys, stop at Antwerp Central Station and/or Antwerp-Berchem. There are fifteen trains to and from Antwerp every hour. You can take one of several bus and tram lines into the city centre from Antwerp-Central and Antwerp-Berchem.</p>

            <p>Take the time to look up and around you if you arrive in Antwerp’s Central Station as it is widely considered one of the most beautiful stations of the world.</p>

            <a class="anchor" name="by-plane"></a>
            <h3>By plane</h3>

            <p>Antwerp is located near two airports: Brussels Airport is just 45 km from Antwerp or a 30- minute drive, Antwerp’s airport (Deurne) is just 7 kilometres from the city, or a 15-minute drive. Brussels South Charleroi Airport is 115 km from Antwerp, Eindhoven Airport 87 km. From here you can also easily get to the city. You can find further information about the various airports near Antwerp <a href="https://www.visitantwerpen.be/en/reaching-antwerp/by-plane">here</a>.</p>

            <a class="anchor" name="by-bus"></a>
            <h3>By bus</h3>

            <p>You can easily get to Antwerp by bus with one of many city links. Book a ticket with one of the <a href="https://www.visitantwerpen.be/en/reaching-antwerp/bus-connections-to-antwerp">many bus companies</a>.</p>

            <a class="anchor" name="by-car"></a>
            <h3>By car</h3>

            <p>Are you planning to travel to Antwerp by car? Please bear in mind that Antwerp’s city centre is a <a href="https://www.slimnaarantwerpen.be/en/lez">low emission zone</a>. Register your car before entering Antwerp and check whether you may enter the zone.</p>

            <p>Also bear in mind that Antwerp’s Ring road is often very busy and that several major road works and construction projects are planned in the city until 2022, which will cause substantial traffic nuisance. Check the website of <a href="https://www.slimnaarantwerpen.be/en/tothecity">Slim naar Antwerpen</a> for all information about how to get to Antwerp and about smart alternatives to travel into the city.</p>
        </div>
    </div>
@endsection
