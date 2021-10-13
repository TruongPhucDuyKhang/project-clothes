<!--sidebar start-->
<aside>
<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="{{ route('admin.index.index') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.cat.index') }}">
                    <i class="fa fa-book"></i>
                    <span>Quản lý danh mục</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-user"></i>
                    <span>Quản lý User</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.order.index') }}">
                    <i class="fa fa-truck"></i>
                    <span>Quản lý đơn hàng</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Quản lý sản phẩm</span>
                </a>
                <ul class="sub">
                    <li><a class="active" href="{{ route('admin.shop.index') }}">Danh sách sản phẩm</a></li>
                    <li><a href="{{ route('admin.shop.add') }}">Thêm sản phẩm</a></li>
                </ul>
            </li>
            
            </li>
            {{-- <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Form Components</span>
                </a>
                <ul class="sub">
                    <li><a href="form_component.html">Form Elements</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="dropzone.html">Dropzone</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-envelope"></i>
                    <span>Mail </span>
                </a>
                <ul class="sub">
                    <li><a href="mail.html">Inbox</a></li>
                    <li><a href="mail_compose.html">Compose Mail</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a href="chartjs.html">Chart js</a></li>
                    <li><a href="flot_chart.html">Flot Charts</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Maps</span>
                </a>
                <ul class="sub">
                    <li><a href="google_map.html">Google Map</a></li>
                    <li><a href="vector_map.html">Vector Map</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-glass"></i>
                    <span>Extra</span>
                </a>
                <ul class="sub">
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="404.html">404 Error</a></li>
                    <li><a href="registration.html">Registration</a></li>
                </ul>
            </li>
            <li>
                <a href="login.html">
                    <i class="fa fa-user"></i>
                    <span>Login Page</span>
                </a>
            </li> --}}
        </ul>            
    </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->