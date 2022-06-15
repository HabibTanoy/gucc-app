<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" /> <span
                    class="logo-name">{{ env("APP_NAME") }}</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown @if (Route::is('home')) active @endif">
                <a href="{{ route('home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Sliders</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('slider.index')) active @endif"><a class="nav-link" href="{{route('slider.index')}}">All Slider</a></li>
                    <li class="@if(Request::is('slider.create')) active @endif"><a class="nav-link" href="{{route('slider.create')}}">Add Slider</a></li>
                </ul>
            </li>
{{--            <li class="dropdown">--}}
{{--                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Services</span></a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li class="@if(Request::is('service.index')) active @endif"><a class="nav-link" href="{{route('service.index')}}">All Services</a></li>--}}
{{--                    <li class="@if(Request::is('service.create')) active @endif"><a class="nav-link" href="{{route('service.create')}}">Add Service</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Facilities</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('facilities.index')) active @endif"><a class="nav-link" href="{{route('facilities.index')}}">All Facilities</a></li>
                    <li class="@if(Request::is('facilities.create')) active @endif"><a class="nav-link" href="{{route('facilities.create')}}">Add Facilities</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Tutorials</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('program.index')) active @endif"><a class="nav-link" href="{{route('program.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('program.create')) active @endif"><a class="nav-link" href="{{route('program.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Recent News</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('recent-news.index')) active @endif"><a class="nav-link" href="{{route('recent-news.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('recent-news.create')) active @endif"><a class="nav-link" href="{{route('recent-news.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Teams</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('teams.index')) active @endif"><a class="nav-link" href="{{route('teams.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('teams.create')) active @endif"><a class="nav-link" href="{{route('teams.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Osa</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('osa.index')) active @endif"><a class="nav-link" href="{{route('osa.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('osa.create')) active @endif"><a class="nav-link" href="{{route('osa.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Special Assistant</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('special-assistant.index')) active @endif"><a class="nav-link" href="{{route('special-assistant.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('special-assistant.create')) active @endif"><a class="nav-link" href="{{route('special-assistant.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Founders</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('founder.index')) active @endif"><a class="nav-link" href="{{route('founder.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('founder.create')) active @endif"><a class="nav-link" href="{{route('founder.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Executive Committee</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('executive-committee.index')) active @endif"><a class="nav-link" href="{{route('executive-committee.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('executive-committee.create')) active @endif"><a class="nav-link" href="{{route('executive-committee.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Ags</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('ags.index')) active @endif"><a class="nav-link" href="{{route('ags.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('ags.create')) active @endif"><a class="nav-link" href="{{route('ags.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Former Committee</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('former-committee.index')) active @endif"><a class="nav-link" href="{{route('former-committee.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('former-committee.create')) active @endif"><a class="nav-link" href="{{route('former-committee.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Advisor</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('advisor.index')) active @endif"><a class="nav-link" href="{{route('advisor.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('advisor.create')) active @endif"><a class="nav-link" href="{{route('advisor.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Activity News</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('activity-news.index')) active @endif"><a class="nav-link" href="{{route('activity-news.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('activity-news.create')) active @endif"><a class="nav-link" href="{{route('activity-news.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Events</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('events.index')) active @endif"><a class="nav-link" href="{{route('events.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('events.create')) active @endif"><a class="nav-link" href="{{route('events.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Gallery</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('gallery.index')) active @endif"><a class="nav-link" href="{{route('gallery.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('gallery.create')) active @endif"><a class="nav-link" href="{{route('gallery.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Media Coverage</span></a>
                <ul class="dropdown-menu">
                    <li class="@if(Request::is('media-coverage.index')) active @endif"><a class="nav-link" href="{{route('media-coverage.index')}}">All Tutorial</a></li>
                    <li class="@if(Request::is('media-coverage.create')) active @endif"><a class="nav-link" href="{{route('media-coverage.create')}}">Add Tutorial</a></li>
                </ul>
            </li>
            {{-- THIS IS FOR DUMMY ONLY, CHANGE IT AS YOU NEED --}}
            <li class="dropdown @if (Route::is('home.*')) active @endif" style="visibility: hidden;">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-capsules"></i>
                    <span>Home</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
