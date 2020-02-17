<html>

<head>
    <script defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="css.css" type="text/css">
    <meta charset='utf-8'>
    <title>umihico -software engineer in Tokyo- </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="js/stickyfill.min.js"></script>
    <script>
        $('.sticky').Stickyfill();
    </script>
</head>

<body>
<div class="wavebox">
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
</div>
<div class="container">

    <a class="logo" href="/">
        <img src="/logo100x100.png" alt="logo">
    </a>
    <h1>Hello</h1>
    <p class="indent">I'm <b>umihico</b>, a software engineer currently living in Tokyo. </p>
    <p><a class="github-button" href="https://github.com/umihico" data-size="large" data-show-count="true" aria-label="Follow @umihico on GitHub">Follow @umihico</a></p>
    Others:
    <a href="https://gist.github.com/umihico/">Gist</a>
    <a href="https://twitter.com/umihico_">Twitter</a>
    <a href="https://qiita.com/umihico">Qiita</a>
    <!-- <a href="https://stackoverflow.com/users/9774231/umihico">stackoverflow</a> -->
    <!-- <a href="https://bitbucket.org/umihico/">Bitbucket</a> -->
    <br>

    <h2>Experience</h2>
    <p class="indent">2019 Fiveneeds Co. Ltd,</p>
    <p class="indent">2018 Freelance while traveling the world</p>
    <p class="indent">2014 Nomura Securities Co., Ltd.</p>

    <h2>Hobby Projects</h2>
    @php
        $records=[
            [
                'repo_name'=>"umihi.co",
                'description'=>"my portfolio website ,(this website)",
                'url'=>"https://umihi.co/",
            ],
            [
                'repo_name'=>"thumbnailed-portfolio-websites",
                'description'=>"GIF Screenshots of everybody's #,portfolio-website",
                'url'=>"https://portfolios.umihi.co/",
            ],
            [
                'repo_name'=>"pythonista-chromeless",
                'description'=>"AWS lambda unit which execute given code on selenium",
                'url'=>"https://github.com/umihico/pythonista-chromeless/",
            ],
            [
                'repo_name'=>"kindle-highlights",
                'description'=>"Share highlights that have ,been inspiring you in github pages.",
                'url'=>"https://books.umihi.co/",
            ],
            [
                'repo_name'=>"minigun-requests",
                'description'=>"Web scraping API to outsource tons of GET & xpat,h to cloud computing",
                'url'=>"https://github.com/umihico/minigun-requests/",
            ],
            [
                'repo_name'=>"microdb",
                'description'=>"In-memory, Hash-mapping, Disk-writable, Thread-safe database.",
                'url'=>"https://github.com/umihico/microdb/",
            ],
            [
                'repo_name'=>"ppickle",
                'description'=>"multilingual human-readable output pick,ler",
                'url'=>"https://github.com/umihico/ppickle/",
            ],
            [
                'repo_name'=>"lemp",
                'description'=>"my LEMP infrastructure as code",
                'url'=>"https://github.com/umihico/lemp/",
            ],
        ];
    @endphp
    @foreach($records as $record)
        <div class="project">
            <a class="project-link" href="{{$record['url']}}">{{$record['repo_name']}}</a><br>
            <a class="github-button" href="https://github.com/umihico/{{$record['repo_name']}}" data-icon="octicon-star" data-show-count="true" aria-label="Star umihico/{{$record['repo_name']}} on GitHub">Star</a>
            <a class="github-button" href="https://github.com/umihico/{{$record['repo_name']}}/issues" data-icon="octicon-issue-opened" data-show-count="true" aria-label="Issue umihico/{{$record['repo_name']}} on GitHub">Issue</a>
        </div>
        <p class="indent">{{$record['description']}}</p>
    @endforeach

</div>

</body>

</html>-