
<div class="footer_cont bg-primary py-3">
    <ul class="d-flex justify-content-between container w-75">
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