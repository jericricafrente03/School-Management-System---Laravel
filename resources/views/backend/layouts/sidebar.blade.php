@if(Request::is('user*'))
<div class="sidebar" id="sidebar1">
  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="javascript:void(0)" class="simple-text logo-mini">
        <img src="{{asset('Image/download.png')}}">
      </a>
      <a href="javascript:void(0)" class="simple-text logo-normal" style="text-transform: none;">
        JericDesign
      </a>
    </div>
    <ul class="nav">
      <li class="{{ Request::is('user/dashboard') ? 'active' : '' }}">
        <a href="/user/dashboard">
          <i class="tim-icons icon-cart"></i>
          <p style="text-transform: none">Payment Method</p>
        </a>
      </li>
      <li class="{{ Request::is('user/themes') ? 'active' : '' }}">
        <a href="/user/themes">
          <i class="tim-icons icon-bell-55"></i>
          <p style="text-transform: none">Themes</p>
        </a>
      </li>
      <li class="{{ Request::is('user/blog') ? 'active' : '' }}">
        <a href="/user/blog">
          <i class="tim-icons icon-badge"></i>
          <p style="text-transform: none">Blog</p>
        </a>
      </li>
      <li>
        <a href="./tables.html">
          <i class="tim-icons icon-puzzle-10"  class="active"></i>
          <p style="text-transform: none">Table List</p>
        </a>
      </li>
      <li>
        <a href="./typography.html">
          <i class="tim-icons icon-align-center"  class="active"></i>
          <p style="text-transform: none">Typography</p>
        </a>
      </li>
      <li>
    </ul>
  </div>
</div>
@endif