<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-speedometer"></i>
                        <span>Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-email-variant"></i>
                        <span>Brand</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('brand.index')}}"><i class="mdi mdi-share-variant"></i> View Brand</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
