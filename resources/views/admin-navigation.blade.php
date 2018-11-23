<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'feedback') active @endif" href="{{ route('feedback') }}">
                    <span data-feather="file"></span>
                    Feedbacks
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'agents') active @endif" href="{{ route('agents') }}">
                    <span data-feather="users"></span>
                    Agents
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'accounts') active @endif" href="{{ route('accounts') }}">
                    <span data-feather="bar-chart-2"></span>
                    Accounts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'users') active @endif" href="{{ route('users') }}">
                    <span data-feather="layers"></span>
                    Users
                </a>
            </li>
        </ul>

    </div>
</nav>
