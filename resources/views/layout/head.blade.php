<nav class="navbar navbar-expand-md bg-primary navbar-light">
<!-- Brand -->
    <a class="navbar-brand" href="#">Saturday Session</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            {{-- <li class="{{ Request::is('/category')? 'nav-item active' : 'nav-item'}} "> --}}
            {{-- <li class="nav-item active"> --}}
            <li {{ Request::is('category*') ? "class=active"  : '' }}>
                <a class="nav-link" href="{{ url('category') }}">Category</a>
            </li>
            <li {{ Request::is('product*') ? "class=active"  : '' }}>
                <a class="nav-link" href="{{ url('product') }}">Product</a>
            </li>
      
        </ul>
    </div>
</nav>