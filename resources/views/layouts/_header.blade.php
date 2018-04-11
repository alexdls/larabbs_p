<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            {{--Collapsed Hambumger--}}
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            {{--Brand Image--}}
            <a class="navbar-brand" href="{{ url('/') }}">
                LaraBBS
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            {{--Left Side Of Navbar--}}
            <ul class="nav navbar-nav">
            </ul>

            {{--Right Side Of Navbar--}}
            <ul class="nav navbar-nav navbar-right">
                {{--Authentication Links--}}
                <li><a href="#">登录</a></li>
                <li><a href="#">注册</a></li>
            </ul>
        </div>
    </div>
</nav>