<div id="footer_up">

    <div id="footer_content" class="container">

        <div id="footer_links">

            @foreach ($footerLinks as $link)

                    <ul>
                        <h4> {{ $link['linksName'] }} </h4>
                        @foreach ($link['links'] as $mainLink)
                            <li>
                                <a href="">{{ $mainLink }}</a>
                            </li>
                        @endforeach
                    </ul>

            @endforeach

           

        </div>


        <div id="footer_logo">
            <img src=" {{ Vite::asset('resources/img/dc-logo-bg.png') }} " alt="">
        </div>

    </div>

    <div id="copyrights" class="container">
        <div>

            All Site TM and &#169; 2020 DC Entertainment, unless otherwise 
            <a href="#">
                noted here
            </a>
            . All rights reserved.

        </div>
        <div>
                    
            <a href="#">Cookies Settings.</a>
                    
        </div>
    </div>

</div>