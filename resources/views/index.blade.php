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
        <img src="logo100x100.png" alt="logo">
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
        $records=\Illuminate\Support\Facades\DB::table("projects")->get();
    @endphp
    @foreach($records as $record)
        <div class="project">
            <a class="project-link" href="{{$record->project_link}}">{{$record->repository_name}}</a><br>
            <a class="github-button" href="https://github.com/{{$record->owner_name}}/{{$record->repository_name}}" data-icon="octicon-star" data-show-count="true" aria-label="Star {{$record->owner_name}}/{{$record->repository_name}} on GitHub">Star</a>
            <a class="github-button" href="https://github.com/{{$record->owner_name}}/{{$record->repository_name}}/issues" data-icon="octicon-issue-opened" data-show-count="true" aria-label="Issue {{$record->owner_name}}/{{$record->repository_name}} on GitHub">Issue</a>
        </div>
        <p class="indent">{{$record->description}}</p>
    @endforeach

</div>

</body>

</html>-