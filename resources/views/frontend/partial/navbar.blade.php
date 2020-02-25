<header class="header" id="header">

  <nav class="navigation">

    <section class="logo"></section>

    <section class="navigation__icon">
      <span class="topBar"></span>
      <span class="middleBar"></span>
      <span class="bottomBar"></span>
    </section>

    <ul class="navigation__ul">
      <li><a href="#header">HOME</a></li>
      <li><a href="#servicediv">SERVICE</a></li>
      <li><a href="#pricingdiv">PRICE</a></li>
      <li><a href="#contactusdivs">ABOUT</a></li>
      <li><a href="#footerdiv">CONTACT</a></li>
    </ul>

    <section class="navigation__social">
      <ul class="navigation__social-ul">
        <li>
          <a href="" class="social-icon"></a>
        </li>
        <li>
          <a href="" class="social-icon"></a>
        </li>
        <li>
          <a href="" class="social-icon"></a>
        </li>
        <li>
          <a href="" class="social-icon"></a>
        </li>
      </ul>
    </section>

  </nav>b
</header>

<section class="header-section" id="header">
  <div class="center-div">
      <h1 class="font-weight-bold">We are <span class="element"></span></h1>
      <p>We create the world best websites. </p>
      <div class="header-buttons">
          <a href="#contactusdivs">About Us</a>
          <a href="#footerdiv">Contact</a>
      </div>
  </div>
</section>
 @if(isset(Auth::user()->email))
 <section class="myform"  style="left: 80%;">
  <ul class="form-1">
    <li><i class="fa fa-car">&nbsp;<a href="/user/dashboard">Dashboard</a></i></li>
    <li><i class="fa fa-sign-out">&nbsp;<a href="/logout">Logout</a></i></li>
  </ul>
</section>
@else
<section class="myform">
  <ul class="form-1">
    <li><i class="fa fa-user">&nbsp;<a href="/login">Login</a></i></li>
    <li><i class="fa fa-sign-in">&nbsp;<a href="/register">Register</a></i></li>
  </ul>
</section>
@endif