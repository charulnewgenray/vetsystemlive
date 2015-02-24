<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li><a>{{Request::path() }}</a></li>
            <li>
                <a class="{{Request::path() == 'veterinary' ? 'active' : ''}}" href="{{route('veterinary.dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> {{ trans('general.Dashboard')}}</a>
            </li>
            <li class="{{Request::path() == 'veterinary/pet' ? 'active' : ''}}">
                <a href="#" class="{{Request::path() == 'veterinary/pet' ? 'open' : ''}}"><i class="fa fa-bar-chart-o fa-fw"></i> {{ trans('vetgeneral.Pet-Care') }}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('veterinary.pet.index')}}" class="{{Request::path() == 'veterinary/pet' ? 'active' : ''}}">{{ trans('vetgeneral.Treatment')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs fa-fw"></i>  {{ trans('general.Settings')}}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#" class="{{Request::path() == 'veterinary' ? 'active' : ''}}">{{ trans('vetgeneral.Personal-Profile')}}</a>
                    </li>
                    <li>
                        <a href="#" class="{{Request::path() == 'veterinary' ? 'active' : ''}}">{{ trans('vetgeneral.My-Account')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
</div>