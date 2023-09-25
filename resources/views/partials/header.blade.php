@php
    $links = [
        [
            "title" => "navTitle",
            "childs" => [
                ["name" => "carachters"],
                ["name" => "comics"],
                ["name" => "movies"],
                ["name" => "tv"],
                ["name" => "games"],
                ["name" => "collectibles"],
                ["name" => "videos"],
                ["name" => "fans"],
                ["name" => "news"],
                ["name" => "shop"],
            ],
            
        ],
        
];
@endphp

<header>
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="/img/dc-logo.png" alt="">
        </div>

        <nav>
            @foreach ($links as $section )
            <ul>
                @foreach ($section ["childs"] as $link)
                <li>
                    <a href="">{{ $link["name"] }}</a>
                </li>
                @endforeach
            </ul>
            @endforeach
        </nav>
    </div>
</header>