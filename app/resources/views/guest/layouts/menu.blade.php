<li class="nav-item">
    <a href="{{ route('guest/spots.index') }}"
       class="nav-link {{ Request::is('guest/spots*') ? 'active' : '' }}">
        <p>見どころ紹介</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('guest/tours.index') }}"
       class="nav-link {{ Request::is('tours*') ? 'active' : '' }}">
        <p>旅の計画</p>
    </a>
</li>


