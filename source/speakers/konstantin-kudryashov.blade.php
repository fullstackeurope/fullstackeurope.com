@extends('_layouts.speaker', ['speaker' => $page->speakers['konstantin-kudryashov']])

@section('talk')
    <p>In the context of ever-increasing expectations, combined with the environment of ever-growing number of technologies and frameworks, it is hard not to fall into the trap of building for the sake of building. Teams spend precious man-months setting up custom instances of <a href="https://wordpress.org">Wordpress</a>, <a href="https://magento.com">Magento</a>, <a href="https://dotnet.microsoft.com/apps/aspnet/mvc">.NET MVC</a>, <a href="https://reactjs.org">React</a>, you name it. Doesn’t it sometimes feel that we’re spending increasingly more time building the same things (CMS, CRUD, E-Com) and less time building something that actually matters?</p>

    <p>This talk will explore fresh “new” world of Serverless and the surrounding ecosystem. And in exploring this, we would try to identify better ways of serving ever-increasing business needs without spending exponentially more time solving already solved problems.</p>

    <p>You might not need a server, CI pipeline, CMS, E-commerce or general framework. Because if someone else solves that for you, you will have all the time in the world to do something that deeply matters for your stakeholders.</p>
@endsection

@section('workshop')
    <p>There are many commonly accepted truths in modern software development. Most of them are born from years of hitting hundreds of walls with thousands of heads. Some good examples of such axioms are:</p>

    <ul>
        <li>Web is stateless;</li>
        <li>Functional programming is complicated;</li>
        <li>Parallelisation and concurrency are hard;</li>
        <li>Scaling is a big undertaking;</li>
        <li>Realtime UI requires heavy usage of JavaScript.</li>
    </ul>

    <p>In this workshop we will experiment with <a href="https://elixir-lang.org">Elixir</a> - a fresh new programming language built on the shoulders of giants that are <a href="https://www.erlang.org">Erlang</a> and OTP. During this experimentation we will explore how Elixir and OTP directly challenge the above “truths”. It turns out, web can be stateful with cheap long-running processes and web sockets. Functional programming can be fun without many semantic overheads. Parallelisation can be made easy with actor model embedded into the language kernel. Scaling can be straight-forward if it is built into underlying language infrastructure. And you don’t need to write a single line of JavaScript if all you need is realtime dashboard or chat.</p>

    <p>This is not a training for beginner developers, nor is it a certification course for experienced Beam/Erlang/OTP/Elixir engineers. This a one-day roller-coaster ride of exploring exciting and interesting toys Erlang ecosystem provides. We would do a very shallow dive over many aspects of Elixir, but would rarely dig deep below the surface. The purpose of this day is to get you excited about Elixir and OTP, not to make you an expert in them.</p>

    <p>This workshop, aimed at experienced non-Erlang/Elixir engineers, is designed to give you an introductory ride across the Elixir ecosystem and provide you with tools to get started with it, coupled with the knowledge of when such a move would be appropriate.</p>

    <p>Bring your laptop with Linux/MacOS as a main OS or within your VM of choice.</p>
@endsection

@section('bio')
    <p>Konstantin Kudryashov is a seasoned software engineer and leader with deep appreciation for business processes and constraints. Konstantin is a <a href="https://joind.in/user/everzet/talks">prominent public speaker</a> in Agile, BDD and DDD communities. He created <a href="https://github.com/behat/behat">Behat</a> (BDD toolset) and co-created <a href="https://github.com/phpspec/phpspec">PhpSpec</a> (RSpec for PHP).<p>

    <p>In the last 3 years, Konstantin has lead teams in rapid delivery of more than 5 software products to market, within extremely short timelines. Majority of deliveries resulted in both a significant KPI uplift and a positive business impact. Konstantin is helping organisations bridge the gap between business and development. He currently helps and mentors startup teams within <a href="https://www.kametventures.com">Kamet Ventures</a>.</p>
@endsection
