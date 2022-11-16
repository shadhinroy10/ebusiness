<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">E-Business</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <!-- Deleted -->
{{--            <li class="dropdown active">--}}
{{--                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>--}}
{{--                    <li class=active><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <!-- Deleted -->
            <li class="{{Route::is('admin.dashboard') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown active {{Route::is('category.*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('category.index')}}"><i class="far fa-square"></i> <span>Category</span></a>
            </li>

            <li class="dropdown active {{Route::is('product.*') ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class="{{Route::is('product.create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('product.create')}}">Add Product</a>
                       </li>
                    <li class="{{Route::is('product.index') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('product.index')}}">All Product</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
