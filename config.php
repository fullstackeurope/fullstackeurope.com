<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'ticketsUrl' => 'https://ti.to/on3/fullstack19 ',
    'collections' => [],
    'venue' => 'Hilton Antwerp Old Town',
    'speakers' => [
        'jeremy-keith' => [
            'url' => 'jeremy-keith',
            'name' => 'Jeremy Keith',
            'twitter' => 'adactio',
            'website' => 'https://adactio.com',
            'bio' => 'Web stuff do-er at Clearleft',
        ],
        'konstantin-kudryashov' => [
            'url' => 'konstantin-kudryashov',
            'name' => 'Konstantin Kudryashov',
            'twitter' => 'everzet',
            'website' => 'https://stakeholderwhisperer.com',
            'bio' => 'eXtreme Programmer',
            'workshop' => 'Elixir for experienced web developers',
        ],
        'sara-soueidan' => [
            'url' => 'sara-soueidan',
            'name' => 'Sara Soueidan',
            'twitter' => 'sarasoueidan',
            'website' => 'https://sarasoueidan.com',
            'bio' => 'Front-End UI/UX Developer',
        ],
        'mattias-geniar' => [
            'url' => 'mattias-geniar',
            'name' => 'Mattias Geniar',
            'twitter' => 'mattiasgeniar',
            'website' => 'https://ma.ttias.be',
            'bio' => 'Problem Solver at Combell',
        ],
        'matthias-noback' => [
            'url' => 'matthias-noback',
            'name' => 'Matthias Noback',
            'twitter' => 'matthiasnoback',
            'website' => 'https://matthiasnoback.nl',
            'bio' => 'Developer at Noback\'s Office',
            'workshop' => 'Building Autonomous Services',
        ],
        'nataliya-remez' => [
            'url' => 'nataliya-remez',
            'name' => 'Nataliya Remez',
            'twitter' => 'nat_remez',
            'website' => 'https://izettle.com',
            'bio' => 'Agile Coach at iZettle',
        ],
        'gabi-davila' => [
            'url' => 'gabi-davila',
            'name' => 'Gabi D\'Ávila Ferrara',
            'twitter' => 'gabidavila',
            'website' => 'https://gabi.dev',
            'bio' => 'Developer Advocate at Google Cloud',
        ],
        'rik-van-bruggen' => [
            'url' => 'rik-van-bruggen',
            'name' => 'Rik Van Bruggen',
            'twitter' => 'rvanbruggen',
            'website' => 'https://blog.bruggen.com',
            'bio' => 'Vice-president at Neo4j',
        ],
        'mathias-verraes' => [
            'url' => 'mathias-verraes',
            'name' => 'Mathias Verraes',
            'twitter' => 'mathiasverraes',
            'website' => 'http://verraes.net',
            'bio' => 'Student of Systems',
            'workshop' => 'DDD Modelling vs Implementation',
        ],
        'indu-alagarsamy' => [
            'url' => 'indu-alagarsamy',
            'name' => 'Indu Alagarsamy',
            'twitter' => 'indu_alagarsamy',
            'website' => 'https://indu.dev',
            'bio' => 'Distributed Systems Engineer',
        ],
        'caleb-porzio' => [
            'url' => 'caleb-porzio',
            'name' => 'Caleb Porzio',
            'twitter' => 'calebporzio',
            'website' => 'https://calebporzio.com',
            'bio' => 'Full Stack Developer',
        ],
        'thijs-feryn' => [
            'url' => 'thijs-feryn',
            'name' => 'Thijs Feryn',
            'twitter' => 'ThijsFeryn',
            'website' => 'https://feryn.eu',
            'bio' => 'Evangelist at Varnish Software',
        ],
        'kadi-kraman' => [
            'url' => 'kadi-kraman',
            'name' => 'Kadi Kraman',
            'twitter' => 'kadikraman',
            'website' => 'https://formidable.com',
            'bio' => 'Senior Software Engineer at Formidable',
            'talk' => 'All Aboard the Type Train',
        ],
        'bram-van-damme' => [
            'url' => 'bram-van-damme',
            'name' => 'Bram Van Damme',
            'twitter' => 'bramus',
            'website' => 'https://bram.us',
            'bio' => 'Freelance Creative Coder',
            'workshop' => 'React for Beginners',
        ],
        'ivan-jovanovic' => [
            'url' => 'ivan-jovanovic',
            'name' => 'Ivan Jovanovic',
            'twitter' => 'ivanjov96',
            'website' => 'https://ivanjov.com',
            'bio' => 'Founder at IJ Consulting & Senior Engineer at NearForm',
            'workshop' => 'Testing JavaScript Applications',
        ],
    ],
    'stripProtocol' => function (string $website): string {
        $website = Str::replaceFirst('http://', '', $website);

        return Str::replaceFirst('https://', '', $website);
    },
];
