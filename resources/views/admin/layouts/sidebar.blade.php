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
            </li>
            <li>
                <a class="active" href="#"><i class="fa fa-dashboard fa-fw"></i> {{ trans('general.Dashboard')}}</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> {{ trans('general.Manage-Customers') }}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/customers">{{ trans('general.customers')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs fa-fw"></i>  {{ trans('general.Settings')}}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/settings/dog-price-factor">{{ trans('general.Dog-Price-Factor')}}</a>
                    </li>
                    <li>
                        <a href="/admin/settings/cat-price-factor">{{ trans('general.Cat-Price-Factor') }}</a>
                    </li>
                    <li>
                        <a href="dog-breeds">{{ trans('general.Dog-Breeds') }}</a>
                    </li>
                    <li>
                        <a href="cat-breeds">{{ trans('general.Cat-Breeds')}}</a>
                    </li>
                    <li>
                        <a href="health-questions">{{ trans('Health-Questions')}} </a>
                    </li>
                    <li>
                        <a href="cat-questions">{{ trans('general.Cat-Questions') }}</a>
                    </li>
                    <li>
                        <a href="illness-questions">{{ trans('general.Illness-Questions')}}</a>
                    </li>
                    <li>
                        <a href="general-questions">{{ trans('general.General-Questions')}}</a>
                    </li>
                    <li>
                        <a href="messages">{{ trans('general.Messages')}}</a>
                    </li>
                    <li>
                        <a href="prices">{{ trans('general.Prices') }}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
</div>