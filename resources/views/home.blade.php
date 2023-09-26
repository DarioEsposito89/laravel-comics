@php
    $links = [
        [
            "title" => "cardEl",
            "cards" => [
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
                ["thumb"=> "https://www.morawa.at/annotstream/9783741617393/COPL/Johns-Geoff/Superman-Action-Comics-1000-Deluxe-Edition.jpg?sq=3",
                "price"=> "$19.99",
                "series"=> "Action Comics",
                "type"=> "comic book"],
            ],
            "blueBar"=>[
            ["img"=>"./img/buy-comics-digital-comics.png",
            "name"=>"Digital Comics"],
            ["img"=>"./img/buy-comics-merchandise.png",
            "name"=>"Dc Merchandise"],
            ["img"=>"./img/buy-comics-subscriptions.png",
            "name"=>"Subscription"],
            ["img"=>"./img/buy-comics-shop-locator.png",
            "name"=>"Comic shop locator",
            "resize"=>"special-img"],
            ["img"=>"./img/buy-dc-power-visa.svg",
            "name"=>"Dc power Visa"],
            ],
            
        ],
        
];
@endphp

@extends("layouts.public")

@section("title", "DC Comics - Homepage")

@section("main")
<main>
    <div class="jumbotron">
        <img src = "./img/jumbotron.jpg" alt="">
    </div>

    <div class="container">
        <h1 class="text-white">CURRENT SERIES</h1>
        <div class="cards">
            @foreach ($links as $section)
            <div class="card">
                @foreach ($section["cards"] as $card)
                <img src="{{$card["thumb"]}}" class="img-series" alt="{{$card["series"]}}">
                <div class="card-body">
                    <p class="text-white text-uppercase pt-2">{{$card["series"]}}</p>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
        
        <div class="load">
            <button><a href="#" class="text-white fw-bold">LOAD MORE</a></button>
        </div>

        
    </div>
    <section class="section-top">
        <div class="container">
            @foreach ($links as $section )
            <ul class="list-buy d-flex justify-content-between align-items-cemter gap-3">
                @foreach ($section ["blueBar"] as $icon)
                <li class="text-uppercase d-flex align-items-center">
                    <a href="#" class="text-white d-flex gap-3 align-items-center">
                            <img :src="{{ $icon["img"] }}" alt="{{ $icon["name"] }}" class="img-fluid">
                    </a>
                </li>
                @endforeach
            </ul>
            @endforeach
        </div>
    </section> 
</main>

@endsection