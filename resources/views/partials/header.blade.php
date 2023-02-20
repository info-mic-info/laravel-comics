<header>
    <div class="bg-primary">
        <div class="visa d-flex justify-content-end py-2 container w-75">
            <p>Dc Power Visa<i class="fa-regular fa-registered ps-1"></i></p>
            <p class="ms-5">Additional Dc Sites<i class="fa-solid fa-sort-down"></i></p>
    </div>
    </div>

    <section class="d-flex justify-content-between container w-75">
        <div>
            <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
        </div>
        <div class="marginy">
            <nav class="nav_cont">
                <ul class="d-flex">
                    @foreach($productsmenu as $menuitem)
                    <li>
                        <a class="{{Route::currentRouteName() == 'homepage' ? 'active' : ''}}" href="{{$menuitem['url']}}">{{$menuitem['label']}}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>

        <div class="search marginy">
            <nav class="input-cont">
                <input type="text" placeholder="Search">
            </nav>
        </div>
    </section>
</header>