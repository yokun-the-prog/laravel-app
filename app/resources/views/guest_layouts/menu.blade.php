<li class="nav-item">
    <a href="{{ route('spots.index') }}"
       class="nav-link {{ Request::is('spots*') ? 'active' : '' }}">
        <p>Spots</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tours.index') }}"
       class="nav-link {{ Request::is('tours*') ? 'active' : '' }}">
        <p>Tours</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('plans.index') }}"
       class="nav-link {{ Request::is('plans*') ? 'active' : '' }}">
        <p>Tours</p>
    </a>
</li>



