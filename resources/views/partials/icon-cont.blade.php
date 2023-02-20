
<div class="footer_cont bg-primary">
    <ul class="d-flex flex-wrap container w-75">
        @foreach($productsicon as $product)
            <li>
                <a href="#">
                    <img src="{{ asset(Vite::asset($product['img'])) }}" alt="">
                </a>
                <span class="description text-white">{{$product['description']}}</span>
            </li>
        @endforeach
    </ul>
</div>