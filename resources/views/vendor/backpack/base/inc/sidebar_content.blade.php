<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item">
  <a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a>
</li>
<li class="nav-item"><a href="#about" class="nav-link"><i class="la la-info nav-icon"></i>About</a></li>
<li class="nav-item"><a href="#skills" class="nav-link"><i class="la la-mortar-board nav-icon"></i>Skills</a></li>
<li class="nav-item"><a href="#work" class="nav-link"><i class="la la-file-code-o nav-icon"></i>Work</a></li>
<li class="nav-item"><a href="#resume" class="nav-link"><i class="la la-certificate nav-icon"></i>Educations</a></li>
<li class="nav-item"><a href="#resume" class="nav-link"><i class="la la-wrench nav-icon"></i>Experiences</a></li>
<li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link"><i class="la la-envelope-o nav-icon"></i>Contact</a></li>





<!-- Users, Roles Permissions -->

  <!-- <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li> -->

@role('admin')
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('skill') }}'><i class='nav-icon la la-plus'></i>Add Skills</a></li>
<!-- <li class='nav-item'><a class='nav-link' href='{{ url('/skill') }}'><i class='nav-icon la la-plus'></i>Add Skills</a></li> -->
<!-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('work') }}'><i class='nav-icon la la-plus'></i>Add Works</a></li> -->
<li class='nav-item'><a class='nav-link' href='{{ url('/work') }}'><i class='nav-icon la la-plus'></i>Add Works</a></li>

<!-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('education') }}'><i class='nav-icon la la-plus'></i>Add Education</a></li> -->
<!-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('experience') }}'><i class='nav-icon la la-plus'></i>Add Experience</a></li> -->
<!-- <li class='nav-item'><a class='nav-link' /href='{{ url('/experience') }}'><i class='nav-icon la la-plus'></i>Add Experience</a></li> -->

<!-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('education') }}'><i class='nav-icon la la-plus'></i>Add Education</a></li> -->
<li class='nav-item'><a class='nav-link' href='{{ url('/education') }}'><i class='nav-icon la la-plus'></i>Add Education</a></li>
@endrole
