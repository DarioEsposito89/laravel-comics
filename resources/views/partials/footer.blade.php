@php
    $links = [
        [
            "title" => "footerTitle",
            "listComic" => [
                ["name" => "carachters"],
                ["name" => "comics"],
                ["name" => "movies"],
                ["name" => "tv"],
                ["name" => "games"],
                ["name" => "videos"],
                ["name" => "news"]
            ],
            "listShop" => [
                ["name" => "Shop DC"],
                ["name" => "Shop DC Collectibles"]
            ],
            "listDC" => [
                ["name" => "terms of use"],
                ["name" => "privacy policy (new)"],
                ["name" => "ad choices"],
                ["name" => "advertising"],
                ["name" => "jobs"],
                ["name" => "subscriptions"],
                ["name" => "talent"],
                ["name" => "workshops"],
                ["name" => "CPSC"],
                ["name" => "certificates"],
                ["name" => "ratings"],
                ["name" => "shop help"],
                ["name" => "contact us"]
            ],
            "listSites" => [
                ["name" => "DC"],
                ["name" => "MAD"],
                ["name" => "magazine"],
                ["name" => "DC kids"],
                ["name" => "DC"],
                ["name" => "universe"],
                ["name" => "DC power visa"]
            ],
            "listSocial" => [
                ["img" => "./img/footer-facebook.png"],
                ["img" => "./img/footer-twitter.png"],
                ["img" => "./img/footer-youtube.png"],
                ["img" => "./img/footer-pinterest.png"],
                ["img" => "./img/footer-periscope.png"]
            ],
            
        ],
        
];
@endphp

<footer>
    <section class="section-middle bg-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="list-container d-flex pt-2 gap-5">
                <div id="comics-and-shop">
                    <h4 class="text-white">DC COMICS</h4>
                    @foreach ($links as $section )
                    <ul>
                        @foreach ($section ["listComic"] as $link)
                        <li class="lh-2 text-capitalize">
                            <a href="#" style="color: #ada8a8; font-size: 1rem; margin: 1rem 0;">{{ $link["name"] }}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endforeach

                    <h4 class="text-white">SHOP</h4>
                    @foreach ($links as $section )
                    <ul>
                        @foreach ($section ["listShop"] as $link)
                        <li class="lh-2 text-capitalize">
                            <a href="#" style="color: #ada8a8; font-size: 1rem; margin: 1rem 0;">{{ $link["name"] }}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endforeach
                </div>
            
                <div id="dc">
                    <h4 class="text-white">DC</h4>
                    @foreach ($links as $section )
                    <ul>
                        @foreach ($section ["listDC"] as $link)
                        <li class="lh-2 text-capitalize" >
                            <a href="#" style="color: #ada8a8; font-size: 1rem; margin: 1rem 0;">{{ $link["name"] }}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endforeach
                </div>
            
                <div id="SITES">
                    <h4 class="text-white">SITES</h4>
                    @foreach ($links as $section )
                    <ul>
                        @foreach ($section ["listSites"] as $link)
                        <li class="lh-2 text-capitalize">
                            <a href="#" style="color: #ada8a8; font-size: 1rem; margin: 1rem 0;">{{ $link["name"] }}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endforeach
                </div>
            </div>

            <div class="big-logo">
                <img src="./img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </section>
    
    <section class="section-bottom d-flex align-items-center" style="background-color: #303030; height: 100px;">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="sign">
                <button type="button" class="btn btn-outline-primary rounded-0 text-white">SIGN-UP NOW!</button>
            </div>

            <div class="follow d-flex align-items-center">
                <h3 class="text-primary">FOLLOW US</h3>
                @foreach ($links as $section )
                <ul class="list-social d-flex gap-3">
                    @foreach ($section ["listSocial"] as $imgSocial)
                    <li>
                        <a href="#" class="me-1 d-flex align-items-center">
                            <div class="img-container">
                                <img :src="{{$imgSocial["img"]}}" alt="" >
                            </div>
                        </a> 
                    </li>
                    @endforeach
                </ul>
                @endforeach
            </div>
        </div>
    </section>
</footer>