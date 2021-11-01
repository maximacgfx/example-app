<nav class="mainNav">
        <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <h3>Menu</h3>
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        <!-- Responsive Menu Structure-->
        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
            @auth
                <li>
                    <a href="#"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">{{ __('menu.Logout') }}</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endif
            <li>
                <a href="{{ route('home')}}" @linkactive('home') >
                    <span class="title">{{ __('menu.home') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about')}}" @linkactive('about')>
                    <span class="title">{{ __('menu.about') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('services')}}" @linkactive('services')>
                    <span class="title">{{ __('menu.services') }}</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">{{ __('menu.pages') }}</span>
                    <span class="arrow"></span> </a>
                <!-- Level Two-->
                <ul class="sub-menu" style="display: none;">
                    <li>
                        <a href="{{ route('pricing')}}" @linkactive('pricing')>
                            <span class="title">{{ __('menu.pricing') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio')}}" @linkactive('portfolio')>
                            <span class="title">{{ __('menu.portfolio') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('error')}}">
                            <span class="title">{{ __('menu.404') }}</span>
                        </a>
                    </li>
                    <li>
                     <a class="nav-link" href="{{ route('locale', ['locale' => 'ru']) }}">{{ __('menu.l11ru') }}</a>

                    </li>
                    <li>
                    <a class="nav-link" href="{{ route('locale', ['locale' => 'en']) }}">{{ __('menu.l11en') }}</a>
                    </li>

                </ul>
            </li>
{{--            @if {{ route('') }}--}}
                    <li>
                        <a href="{{ route('news')}}" @linkactive('news')><span class="title">{{ __('menu.blog') }}</span></a>
                    </li>
{{--                @else--}}


{{--                @endif--}}

            <li class="last ">
                <a href="{{ route('contacts')}}" @linkactive('contacts')>
                    <span class="title">{{ __('menu.contacts') }}</span>
                </a>
            </li>
        </ul>
        </nav>
