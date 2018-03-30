<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img height="80" width="80" src="{{asset('images/logo-146x150.png')}}"  class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p style="margin-left: 15px">  {{ucfirst(auth()->user()->first_name)}}</p>
                <a href="#"><i style="margin-left: 15px" class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">

                <li><a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                <li><a href="{{route('admin.index')}}"><i class="fa fa-wrench fa-fw"></i> Users</a></li>
                <li><a href="{{route('admin.create')}}"><i class="fa fa-wrench fa-fw"></i> Create a User</a></li>
                <li><a href="{{route('category.index')}}"><i class="fa fa-dashboard fa-fw"></i> All Categories</a></li>
                <li><a href="{{route('category.create')}}"><i class="fa fa-dashboard fa-fw"></i> Create Category</a></li>
                <li><a href="{{route('activity.index')}}"><i class="fa fa-dashboard fa-fw"></i> All Activities</a></li>
                <li><a href="{{route('activity.create')}}"><i class="fa fa-dashboard fa-fw"></i> Create an Activity</a></li>
                <li><a href="{{route('group.index')}}"><i class="fa fa-wrench fa-fw"></i> Group</a></li>
                <li><a href="{{route('group.create')}}"><i class="fa fa-wrench fa-fw"></i> Add a Group</a></li>


            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>                                                                                                                                                                                                            