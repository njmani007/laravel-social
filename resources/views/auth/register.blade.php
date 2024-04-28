@include('user.user_layout.head_css')



<section class="login-section">
    <div class="header-section">
        <div class="logo-sec">
            <a href="index.html">
                <img src="{{ asset('assets/user/images/icon/logo.png')}}" alt="logo" class="img-fluid blur-up lazyload">
            </a>
        </div>
        <div class="right-links">
            <ul>
                <li>
                    <a href="#">
                        about
                    </a>
                </li>
                <li>
                    <a href="#">
                        upgrade
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                <div class="login-welcome">
                    <div>
                        <img src="{{ asset('assets/user/images/login/charcter.png')}}" class="img-fluid blur-up lazyload"
                            alt="charcter">
                        <h1>Welcome friend!</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-10 col-12 m-auto">
                <div class="login-form">
                    <div>
                        <div class="login-title">
                            <h2>Register</h2>
                        </div>
                        <div class="login-discription">
                            <h3>Hello Everyone</h3>
                            <h4>Welcome to Friendbook, create your account below to start usinf friendbook.</h4>
                        </div>
                        <div class="form-sec">
                            <div>
                                <form class="theme-form" method="POST" action="{{ route('register') }}">

                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                        <i class="input-icon iw-20 ih-20" data-feather="user"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                        <i class="input-icon iw-20 ih-20" data-feather="mail"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <i class="input-icon iw-20 ih-20" data-feather="eye"></i>
                                    </div>
                                    <div class="bottom-sec">
                                        <div class="form-check checkbox_animated">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                        <a href="#" class="ms-auto">Forget password?</a>
                                    </div>
                                    @csrf
                                    <div class="btn-section">
                                        <button type="submit" class="btn btn-solid btn-lg">Sign up</button>
                                        <a href="{{ route('login') }}" class="btn btn-solid btn-lg ms-auto">Login</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="how-work">
        <div class="media">
            <i data-feather="play-circle"></i>
            <div class="media-body">
                <h2>how it work?</h2>
                <p>
                    Friendbook is a website which allows users, who sign-up for free profiles, to connect with
                    friends, work colleagues or people they don't know, online.
                </p>
            </div>
        </div>
    </div>
</section>


@include('user.user_layout.footer_script')
