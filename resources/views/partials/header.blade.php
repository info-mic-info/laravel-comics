<header>
        <div class="visa d-flex justify-content-end">
            <p>Dc Power Visa<i class="fa-regular fa-registered ps-1"></i></p>
            <p>Additional Dc Sites<i class="fa-solid fa-sort-down"></i></p>
    </div>

    <section class="d-flex justify-content-between">
        <div>
            <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
        </div>
        <div>
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

        <div class="search">
            <nav class="input-cont">
                <input type="text" placeholder="Search">
            </nav>
        </div>
    </section>
</header>