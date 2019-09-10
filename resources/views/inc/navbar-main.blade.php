<ul class="nav nav-tabs mt-5">
        <li class="nav-item">
            <a href="/" class="nav-link {{(request()->is('/')) ? 'active' : '' }}">Home</a>
        </li>
        <li class="nav-item">
            <a href="/country-leagues/country-leagues-main" class="nav-link {{(request()->is('country-leagues/country-leagues-main')) ? 'active' : '' }}">Country Leagues</a>
        </li>
        <li class="nav-item">
                <a href="#" class="nav-link">European Cups</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">National Teams</a>
            </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Inbox</a>
                <a href="#" class="dropdown-item">Drafts</a>
                <a href="#" class="dropdown-item">Sent Items</a>
                <div class="dropdown-divider"></div>
                <a href="#"class="dropdown-item">Trash</a>
            </div>
        </li>
        <li class="nav-item dropdown ml-auto">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Matches Overview</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Reports</a>
                <a href="#" class="dropdown-item">Settings</a>
                <div class="dropdown-divider"></div>
                <a href="#"class="dropdown-item">Logout</a>
            </div>
        </li>
    </ul>