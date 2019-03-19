<div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="{{ url('/index') }}"><img src="{{ url('design/admin') }}/assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                            <li>
                                <a href="{{ url('/index') }}" aria-expanded="true"><i class="fa fa-home fa-lg"></i><span>
                                        Dashboard
                                    </span></a>
                            </li>

                            <li>
                                <a href="{{ route('setting.index') }}" aria-expanded="true"><i class="fa fa-cog fa-lg"></i><span>
                                        Settings
                                    </span></a>
                            </li>

                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="false"><i class="fa fa-th"></i>
                                    <span>Categories</span></a>
                                <ul class="collapse" style="height: 0px;">
                                    <li><a href="#"><i class="fa fa-eye"></i> Show All Categories</a></li>
                                    <li><a href="#"><i class="fa fa-plus"></i> Add New Category</a></li>
                                </ul>
                            </li>

                           
                        
                           
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->