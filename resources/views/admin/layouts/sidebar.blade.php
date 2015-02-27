<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                 <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                 </span>
                </div>
                {{Request::path() }}
            </li>
            <li>
                <a class="{{Request::path() == 'admin' ? 'active' : ''}}" href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard fa-fw"></i> {{ trans('general.Dashboard')}}</a>
            </li>
            <li class="{{ strpos(Request::path(),'admin/customers' ) == 'false' ? 'active' :    ''}}">
                <a href="#" {{Request::path() == 'admin/customers' ? 'open' : ''}}><i class="fa fa-bar-chart-o fa-fw"></i> {{ trans('general.Manage-Customers') }}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.customers.index')}}" class="{{Request::path() == 'admin/customers' ? 'active' : ''}}">{{ trans('general.customers')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li class="{{ strpos(Request::path(),'admin/veterinary' ) == 'false' ? 'active' :    ''}}">
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> {{ trans('general.Manage-Veterinary') }}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.veterinary.index')}}" class="{{Request::path() == 'admin/veterinary' ? 'active' : ''}}">{{ trans('general.View-Physicians')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.veterinary.create')}}" class="{{Request::path() == 'admin/veterinary' ? 'active' : ''}}">{{ trans('general.Add-Physicians')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li class="{{ strpos(Request::path(),'admin/settings/' ) == 'false' ? 'active' :    ''}}">
                <a href="#"><i class="fa fa-cogs fa-fw"></i>  {{ trans('general.Settings')}}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.settings.show','dog-price-factor')}}" class="{{Request::path() == 'admin/settings/dog-price-factor' ? 'active' : ''}}">{{ trans('general.Dog-Price-Factor')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','cat-price-factor')}}" class="{{Request::path() == 'admin/settings/cat-price-factor' ? 'active' : ''}}">{{ trans('general.Cat-Price-Factor') }}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','dog-breeds')}}" class="{{Request::path() == 'admin/settings/dog-breeds' ? 'active' : ''}}">{{ trans('general.Dog-Breeds') }}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','cat-breeds')}}" class="{{Request::path() == 'admin/settings/cat-breeds' ? 'active' : ''}}">{{ trans('general.Cat-Breeds')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','health-questions')}}" class="{{Request::path() == 'admin/settings/health-questions' ? 'active' : ''}}">{{ trans('general.Health-Questions')}} </a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','cat-questions')}}" class="{{Request::path() == 'admin/settings/cat-questions' ? 'active' : ''}}">{{ trans('general.Cat-Questions') }}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','illness-questions')}}" class="{{Request::path() == 'admin/settings/illness-questions' ? 'active' : ''}}">{{ trans('general.Illness-Questions')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','general-questions')}}" class="{{Request::path() == 'admin/settings/general-questions' ? 'active' : ''}}">{{ trans('general.General-Questions')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','messages')}}" class="{{Request::path() == 'admin/settings/messages' ? 'active' : ''}}">{{ trans('general.Messages')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings.show','price-factor')}}" class="{{Request::path() == 'admin/settings/price-factor' ? 'active' : ''}}">{{ trans('general.Prices') }}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
</div>