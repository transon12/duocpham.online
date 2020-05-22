<?php 
$url_c = isset($_GET['c']) ? $_GET['c'] : '';
$url_a = isset($_GET['a']) ? $_GET['a'] : '';
// print_r($_GET['c'].'-'.$url_a);
?>

<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?=$base_url['web']?>"> <img alt="image" src="<?=$base_url['img']?>/upload/icon/logo.png" class="header-logo" /> <span
          class="logo-name">Vinnate.com</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <hr>
      <li class="dropdown <?=url_menuActive2('home',$url_c)?>">
        <a href="<?=$base_url['web']?>/admin" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown <?=url_menuActive2('blog',$url_c)?>">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Bài viết</span></a>
        <ul class="dropdown-menu">
          <li class="<?=url_menuActive2('blog-list',$url_c.'-'.$url_a,'li-active')?>" ><a class="nav-link" href="<?=$base_url['web']?>/adw-blog/list">Danh sách</a></li>
          <li class="<?=url_menuActive2('blog-settime',$url_c.'-'.$url_a,'li-active')?>"><a class="nav-link" href="<?=$base_url['web']?>/adw-blog/settime">Đặt lịch đăng</a></li>
          <li class="<?=url_menuActive2('blog-add',$url_c.'-'.$url_a,'li-active')?>"><a class="nav-link" href="<?=$base_url['web']?>/adw-blog/add">Thêm mới</a></li>
        </ul>
      </li>
      <li class="dropdown <?=url_menuActive2('category',$url_c)?>">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Danh mục sản phẩm</span></a>
        <ul class="dropdown-menu">
          <li class="<?=url_menuActive2('product-list_category',$url_c.'-'.$url_a,'li-active')?>"><a class="nav-link" href="<?=$base_url['web']?>/adw-product/list_category">Danh sách</a></li>
          <li class="<?=url_menuActive2('product-categoryadd',$url_c.'-'.$url_a,'li-active')?>"><a class="nav-link" href="<?=$base_url['web']?>/adw-product/categoryadd">Thêm mới</a></li>
        </ul>
      </li>
      <li class="dropdown <?=url_menuActive2('product',$url_c)?>">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Sản Phẩm</span></a>
        <ul class="dropdown-menu">
          <li class="<?=url_menuActive2('product-list',$url_c.'-'.$url_a,'li-active')?>"><a class="nav-link" href="<?=$base_url['web']?>/adw-product/list">Danh sách sản phẩm</a></li>
          <li class="<?=url_menuActive2('product-add',$url_c.'-'.$url_a,'li-active')?>"><a class="nav-link" href="<?=$base_url['web']?>/adw-product/add">Thêm mới sản phẩm</a></li>
        </ul>
      </li>
      <li class="dropdown <?=url_menuActive2('system',$url_c)?>">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Thiết lập banner</span></a>
        <ul class="dropdown-menu">
          <li class="<?=url_menuActive2('system-list',$url_c.'-'.$url_a,'li-active')?>"><a class="nav-link" href="<?=$base_url['web']?>/adw-system/list">danh sách banner</a></li>
          <li class="<?=url_menuActive2('system-adđ',$url_c.'-'.$url_a,'li-active')?>"><a class="nav-link" href="<?=$base_url['web']?>/adw-system/add">Thêm mới </a></li>
        </ul>
      </li>
    </ul>
  </aside>