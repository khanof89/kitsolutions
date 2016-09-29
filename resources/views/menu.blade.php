<div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
    <div class="container">
        <nav id="mainMenu" class="main-menu mega-menu">
            <ul class="main-menu nav nav-pills" >
                @foreach($menus as $menu)
                    <li @if(count($menu->submenus)) class="dropdown" @endif>
                        <a href="{{$menu->url}}">
                            @if($menu->name == 'Home')
                                <i class="fa fa-home"></i>@endif
                            {{$menu->name}}
                            @if(count($menu->submenus))
                                <i class="fa fa-angle-down"></i>
                            @endif
                        </a>
                        @if(count($menu->submenus))
                            <ul class="dropdown-menu">
                                @foreach($menu->submenus as $submenu)
                                    <li><a href="{{$submenu->url}}">{{$submenu->name}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>