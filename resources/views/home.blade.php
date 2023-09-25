@php
    $cards = [
        [
            "title" => "cardEl",
            "childs" => [
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

        

        <div class="load">
            <button><a href="#" class="text-white fw-bold">LOAD MORE</a></button>
        </div>
    </div>
</main>

@endsection