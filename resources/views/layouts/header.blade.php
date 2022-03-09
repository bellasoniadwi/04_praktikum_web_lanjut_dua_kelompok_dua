<!DOCTYPE html>
<!-- HEADER -->
<div class="site-header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/home">Educastudio Modify</a>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li @yield('statusHome')><a href="/">Home</a></li>
                        <li @yield('statusProduct')><a href="/product">Products</a></li>
                        <li @yield('statusProgram')><a href="/program">Program</a></li>
                        <li @yield('statusNews')><a href="/news">News</a></li>
                        <li @yield('statusAbout')><a href="/about">About</a></li>
                        <li @yield('statusContact')><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </nav>         
        </div>
    </div>
</div> <!-- .site-header -->
</html>