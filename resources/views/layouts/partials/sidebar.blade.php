<div id="sidebar" class="sidebar py-3">
    <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MENÚ</div>
    <ul class="sidebar-menu list-unstyled">
        <li class="sidebar-list-item">
            <a href="{{ url('/') }}" class="sidebar-link text-muted @if (Request::is('/')) {{'active'}} @endif">
                <i class="o-home-1 mr-3 text-gray"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ url('licenses') }}" class="sidebar-link text-muted @if (Request::is('licenses')) {{'active'}} @endif">
                <i class="o-paperwork-1 mr-3 text-gray"></i>
                <span>{{ __('app.licenses') }}</span>
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="#" class="sidebar-link text-muted">
                <i class="o-table-content-1 mr-3 text-gray"></i>
                <span>Tables</span>
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="#" class="sidebar-link text-muted">
                <i class="o-survey-1 mr-3 text-gray"></i>
                <span>Forms</span>
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages"
                class="sidebar-link text-muted">
                <i class="o-wireframe-1 mr-3 text-gray"></i>
                <span>Pages</span>
            </a>
            <div id="pages" class="collapse">
                <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                    <li class="sidebar-list-item">
                        <a href="#" class="sidebar-link text-muted pl-lg-5">
                            Page
                            one
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" class="sidebar-link text-muted pl-lg-5">
                            Page
                            two
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" class="sidebar-link text-muted pl-lg-5">
                            Page
                            three
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" class="sidebar-link text-muted pl-lg-5">
                            Page
                            four
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="sidebar-list-item">
            <a href="#" class="sidebar-link text-muted">
                <i class="o-exit-1 mr-3 text-gray"></i>
                <span>Login</span>
            </a>
        </li>
    </ul>
    <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">EXTRAS</div>
    <ul class="sidebar-menu list-unstyled">
        <li class="sidebar-list-item">
            <a href="#" class="sidebar-link text-muted">
                <i class="o-database-1 mr-3 text-gray"></i>
                <span>Demo</span>
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="#" class="sidebar-link text-muted">
                <i class="o-imac-screen-1 mr-3 text-gray"></i>
                <span>Demo</span>
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="#" class="sidebar-link text-muted">
                <i class="o-sales-up-1 mr-3 text-gray"></i>
                <span>Demo</span>
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="#" class="sidebar-link text-muted">
                <i class="o-wireframe-1 mr-3 text-gray"></i>
                <span>Demo</span>
            </a>
        </li>
    </ul>
</div>