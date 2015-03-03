<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li><a>{{Request::path() }}</a></li>
            <li>
                <a class="{{Request::path() == 'customer' ? 'active' : ''}}" href="{{route('customer.dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> {{ trans('general.Dashboard')}}</a>
            </li>
            <li>
                <a href="{{route('customer.customer.index')}}" class="{{Request::path() == 'customer' ? 'active' : ''}}">Personal Information</a>
            </li>
            <li>
                <a href="{{route('customer.customer.policy')}}" class="{{Request::path() == 'customer' ? 'active' : ''}}">Policies</a>
            </li>
            <li>
                <a href="{{route('customer.customer.getAccount')}}" class="{{Request::path() == 'customer' ? 'active' : ''}}">My Account</a>
            </li>
        </ul>
    </div>
</div>