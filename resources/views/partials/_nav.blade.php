<!-- Default BootStrap Navbar-->
<nav class="navbar navbar-default ">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">PETER LEYVA</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse mynavbar" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav ">
      <li class="{{ Request::is('/') ? "active" : "" }} "><a href="/">Home</a></li>
      <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">PROFILE</a></li>
      <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">SERVICES</a></li>
      <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">PORTFOLIO</a></li>
      <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">CONTACT</a></li>
    </ul>          
  </div><!-- /.navbar-collapse -->

</div>
</nav>