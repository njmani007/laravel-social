@include('user.user_layout.head_css')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="login-section">
    <div class="header-section">
        <div class="logo-sec">
            <a href="index.html">
                <img src="{{ asset('assets/user/images/icon/logo.png') }}" alt="logo"
                    class="img-fluid blur-up lazyload">
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
                        <img src="{{ asset('assets/user/images/login/charcter.png') }}"
                            class="img-fluid blur-up lazyload" alt="charcter">
                        <h1>Welcome Back!</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-10 col-12 m-auto">
                <div class="login-form">
                    <div>
                        <div class="login-title">
                            <h2>Login</h2>
                        </div>
                        <div class="login-discription">
                            <h3>Hello Everyone, Welcome Back</h3>
                            <h4>Welcome to Friendbook, please login to your account.
                            </h4>
                        </div>
                        <div class="form-sec">
                            <div>
                                <form method="POST" action="{{ route('login') }}" class="theme-form">

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter email">
                                        <i class="input-icon iw-20 ih-20" data-feather="user"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password">
                                        <i class="input-icon iw-20 ih-20" data-feather="eye"></i>
                                    </div>
                                    <div class="bottom-sec">
                                        <div class="form-check checkbox_animated">
                                            <input type="checkbox" class="form-check-input" id="remember"
                                                name="remember">
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>
                                        <a href="#" class="ms-auto forget-password">Forget password?</a>
                                    </div>
                                    @csrf
                                    <div class="btn-section">
                                        <button type="submit" class="btn btn-solid btn-lg">Login</button>
                                        <a href="{{ route('register') }}" class="btn btn-solid btn-lg ms-auto">Sign
                                            Up</a>
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
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
                </p>
            </div>
        </div>
    </div>
</section>


@include('user.user_layout.footer_script')
