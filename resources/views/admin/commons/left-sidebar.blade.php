
<?php
use Illuminate\Support\Str; //Đây là lệnh để sử dụng class Str nằm trong namespace
?>
<div class="sidebar">
    <div class="sidebar-inner">
      <!-- ### $Sidebar Header ### -->
      <div class="sidebar-logo">
        <div class="peers ai-c fxw-nw">
          <div class="peer peer-greed">
            <a class="sidebar-link td-n" href="{{ route('admin.dashboard.index') }}">
              <div class="peers ai-c fxw-nw">
                <div class="peer">
                  <div class="logo">
                    <img src="assets/static/images/logo.png" alt="">
                  </div>
                </div>
                <div class="peer peer-greed">
                  <h5 class="lh-1 mB-0 logo-text">Caligraphy</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="peer">
            <div class="mobile-toggle sidebar-toggle">
              <a href="" class="td-n">
                <i class="ti-arrow-circle-left"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- ### $Sidebar Menu ### -->
      <ul class="sidebar-menu scrollable pos-r">
        <li class="nav-item mT-30 actived">
          <a class="sidebar-link" href="{{ route('admin.dashboard.index') }}">
            <span class="icon-holder">
              <i class="c-blue-500 ti-home"></i>
            </span>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown {{ Str::contains(url()->current(), '/admin/user/') ? 'open' : '' }}">    <!--kiểm tra URL hiện tại(url()->current()) có chứa chuỗi '/admin/user/' -->
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
              <i class="c-orange-500 ti-layout-list-thumb"></i>
            </span>
            <span class="title">Users</span>
            <span class="arrow">
              <i class="ti-angle-right"></i>
            </span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class='sidebar-link' href="{{ route('admin.user.index') }}">Danh sach user</a>
            </li>
            <li>
              <a class='sidebar-link' href="{{ route('admin.user.create') }}">Create user</a>
            </li>
          </ul>
        </li>
          <li class="nav-item dropdown {{ Str::contains(url()->current(), '/admin/category/') ? 'open' : '' }}">
            <a class="dropdown-toggle" href="javascript:void(0);">
              <span class="icon-holder">
                <i class="c-orange-500 ti-layout-list-thumb"></i>
              </span>
              <span class="title">Category</span>
              <span class="arrow">
                <i class="ti-angle-right"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class='sidebar-link' href="{{ route('admin.category.index') }}">Danh sach category</a>
              </li>
              <li>
                <a class='sidebar-link' href="{{ route('admin.category.create') }}">Create category</a>
              </li>
            </ul>
        </li>
          <li class="nav-item dropdown {{ Str::contains(url()->current(), '/admin/level/') ? 'open' : '' }}">
            <a class="dropdown-toggle" href="javascript:void(0);">
              <span class="icon-holder">
                <i class="c-orange-500 ti-layout-list-thumb"></i>
              </span>
              <span class="title">Level</span>
              <span class="arrow">
                <i class="ti-angle-right"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class='sidebar-link' href="{{ route('admin.level.index') }}">Danh sach level</a>
              </li>
              <li>
                <a class='sidebar-link' href="{{ route('admin.level.create') }}">Create level</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown {{ Str::contains(url()->current(), '/admin/lesson/') ? 'open' : '' }}">
            <a class="dropdown-toggle" href="javascript:void(0);">
              <span class="icon-holder">
                <i class="c-orange-500 ti-layout-list-thumb"></i>
              </span>
              <span class="title">Lessons</span>
              <span class="arrow">
                <i class="ti-angle-right"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class='sidebar-link' href="{{ route('admin.lesson.index') }}">Danh sach lesson</a>
              </li>
              <li>
                <a class='sidebar-link' href="{{ route('admin.lesson.create') }}">Create lesson</a>
              </li>
            </ul>
          </li>
      </ul>
    </div>
  </div>