<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('spots.index') }}"
       class="nav-link {{ Request::is('admin/spots*') ? 'active' : '' }}">
        <p>Spots</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tours.index') }}"
       class="nav-link {{ Request::is('admin/tours*') ? 'active' : '' }}">
        <p>Tours</p>
    </a>        
</li>            


<li class="nav-item">
    <a href="{{ route('destinations.index') }}"
       class="nav-link {{ Request::is('admin/destinations*') ? 'active' : '' }}">
        <p>Destinations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('photorallyDivisions.index') }}"
       class="nav-link {{ Request::is('admin/photorallyDivisions*') ? 'active' : '' }}">
        <p>Photorally Divisions</p>
    </a>                
</li>                


<li class="nav-item">
    <a href="{{ route('transportDivisions.index') }}"
       class="nav-link {{ Request::is('admin/transportDivisions*') ? 'active' : '' }}">
        <p>Transport Divisions</p>
    </a>                
</li>                


<li class="nav-item">
    <a href="{{ route('erratumDivisions.index') }}"
       class="nav-link {{ Request::is('admin/erratumDivisions*') ? 'active' : '' }}">
        <p>Erratum Divisions</p>
    </a>        
</li>        


<li class="nav-item">
    <a href="{{ route('tags.index') }}"
        class="nav-link {{ Request::is('admin/tags*') ? 'active' : '' }}">
    <p>Tags</p>   
</a>    
</li>        



<li class="nav-item">
    <a href="{{ route('spotTags.index') }}"
    class="nav-link {{ Request::is('spotTags*') ? 'active' : '' }}">
    <p>Spot Tags</p>
</a>    
</li>    


<li class="nav-item">
    <a href="{{ route('spotFilepaths.index') }}"
    class="nav-link {{ Request::is('spotFilepaths*') ? 'active' : '' }}">
    <p>Spot Filepaths</p>
</a>    
</li>    


<li class="nav-item">
    <a href="{{ route('tourFilepaths.index') }}"
       class="nav-link {{ Request::is('tourFilepaths*') ? 'active' : '' }}">
        <p>Tour Filepaths</p>
    </a>            
</li>            
