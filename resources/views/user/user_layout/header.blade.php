
<body>

    <!-- loader start -->
    <div class="pre-loader">
        <header class="header-light">
            <div class="mobile-fix-menu"></div>
            <div class="container-fluid custom-padding">
                <div class="header-section">
                    <div class="header-left">
                        <div class="brand-logo">
                            <a href="index.html">
                                <img src="{{asset('assets/user//images/icon/logo-color.png')}}" alt="logo"
                                    class="img-fluid blur-up lazyload">
                            </a>
                        </div>
                        <div class="search-box">
                            <i data-feather="search" class="icon iw-16 icon-light"></i>
                            <input type="text" class="form-control" placeholder="find friends...">
                        </div>
                        <ul class="btn-group">
                            <li class="header-btn home-btn">
                                <a class="main-link" href="index.html">
                                    <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="home"></i>
                                </a>
                            </li>
                            <li class="header-btn custom-dropdown dropdown-lg add-friend">
                                <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="user-plus"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-header">
                                        <span>friend request</span>
                                        <div class="mobile-close">
                                            <h5>close</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown-content">
                                        <ul class="friend-list">
                                            <li>
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/5.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">Paige Turner</h5>
                                                            <h6> 1 mutual friend</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-btns">
                                                    <button type="button" class="btn btn-solid">confirm</button>
                                                    <button type="button" class="btn btn-outline ms-1">delete</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/6.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">Paige Turner</h5>
                                                            <h6> 1 mutual friend</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-btns">
                                                    <button type="button" class="btn btn-solid">confirm</button>
                                                    <button type="button" class="btn btn-outline ms-1">delete</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/7.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">Paige Turner</h5>
                                                            <h6> 1 mutual friend</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-btns">
                                                    <button type="button" class="btn btn-solid">confirm</button>
                                                    <button type="button" class="btn btn-outline ms-1">delete</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/2.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">Paige Turner</h5>
                                                            <h6> 1 mutual friend</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-btns">
                                                    <button type="button" class="btn btn-solid">confirm</button>
                                                    <button type="button" class="btn btn-outline ms-1">delete</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <div class="post-stats">
                            <ul>
                                <li>
                                    <a href="#">
                                        <h3>326</h3>
                                        <span>total posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>2456</h3>
                                        <span>total friends</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="option-list">
                            <li class="header-btn custom-dropdown dropdown-lg btn-group message-btn">
                                <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light stroke-width-3 iw-16 ih-16"
                                        data-feather="message-circle"></i><span class="count success">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header">
                                        <div class="left-title">
                                            <span>messages</span>
                                        </div>
                                        <div class="right-option">
                                            <ul>
                                                <li>
                                                    <a href="messanger.html">
                                                        <i class="iw-16 ih-16" data-feather="maximize"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="iw-16 ih-16" data-feather="edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="iw-16 ih-16" data-feather="more-horizontal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mobile-close">
                                            <h5>close</h5>
                                        </div>
                                    </div>
                                    <div class="search-bar input-style icon-left">
                                        <i class="iw-16 ih-16 icon" data-feather="search"></i>
                                        <input type="text" class="form-control" placeholder="search messages...">
                                    </div>
                                    <div class="dropdown-content">
                                        <ul class="friend-list">
                                            <li>
                                                <a href="#">
                                                    <div class="media">
                                                        <img src="{{asset('assets/user//images/user-sm/1.jpg')}}" alt="user">
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">Paige Turner</h5>
                                                                <h6>Are you there ?</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="active-status">
                                                        <span class="active"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="media">
                                                        <img src="{{asset('assets/user//images/user-sm/2.jpg')}}" alt="user">
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">Paige Turner</h5>
                                                                <h6>Are you there ?</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="media">
                                                        <img src="{{asset('assets/user//images/user-sm/3.jpg')}}" alt="user">
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">Bob Frapples</h5>
                                                                <h6>hello ! how are you ?</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="active-status">
                                                        <span class="offline"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="header-btn custom-dropdown">
                                <a class="main-link" href="javascript:void(0)">
                                    <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="moon"></i>
                                </a>
                                <a class="main-link d-none" href="javascript:void(0)">
                                    <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="sun"></i>
                                </a>
                            </li>
                            <li class="header-btn custom-dropdown d-md-none d-block app-btn">
                                <a class="main-link" href="javascript:void(0)">
                                    <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="grid"></i>
                                </a>
                                <div class="overlay-bg app-overlay"></div>
                                <div class="app-box">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="app-icon">
                                                <a href="index.html">
                                                    <div class="icon">
                                                        <i data-feather="file" class="bar-icon"></i>
                                                    </div>
                                                    <h5>Newsfeed</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="app-icon">
                                                <a href="single-page.html">
                                                    <div class="icon">
                                                        <i data-feather="star" class="bar-icon"></i>
                                                    </div>
                                                    <h5>favourite</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="app-icon">
                                                <a href="#">
                                                    <div class="icon">
                                                        <i data-feather="users" class="bar-icon"></i>
                                                    </div>
                                                    <h5>group</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="app-icon">
                                                <a href="music.html">
                                                    <div class="icon">
                                                        <i data-feather="headphones" class="bar-icon"></i>
                                                    </div>
                                                    <h5>music</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="app-icon">
                                                <a href="weather.html">
                                                    <div class="icon">
                                                        <i data-feather="cloud" class="bar-icon"></i>
                                                    </div>
                                                    <h5>weather</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="app-icon">
                                                <a href="event.html">
                                                    <div class="icon">
                                                        <i data-feather="calendar" class="bar-icon"></i>
                                                    </div>
                                                    <h5>calender</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="app-icon">
                                                <a href="#">
                                                    <div class="icon">
                                                        <svg class="bar-icon">
                                                            <use class="fill-color"
                                                                xlink:href="https://themes.pixelstrap.com/friendbook/assets/svg/icons.svg#cake"></use>
                                                        </svg>
                                                    </div>
                                                    <h5>event</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="app-icon">
                                                <a href="games.html">
                                                    <div class="icon">
                                                        <svg class="bar-icon">
                                                            <use class="fill-color"
                                                                xlink:href="https://themes.pixelstrap.com/friendbook/assets/svg/icons.svg#game-controller">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <h5>games</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="header-btn custom-dropdown dropdown-lg btn-group notification-btn">
                                <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="bell"></i><span
                                        class="count warning">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header">
                                        <span>Notification</span>
                                        <div class="mobile-close">
                                            <h5>close</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown-content">
                                        <ul class="friend-list">
                                            <li class="d-block">
                                                <div>
                                                    <div class="media">
                                                        <img src="{{asset('assets/user//images/user-sm/5.jpg')}}" alt="user">
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0"><span>Paige Turner</span> send you a
                                                                    friend request
                                                                </h5>
                                                                <h6> 1 mutual friend</h6>
                                                                <div class="action-btns">
                                                                    <button type="button" class="btn btn-solid"><i
                                                                            data-feather="check"></i></button>
                                                                    <button type="button" class="btn btn-solid ms-1"><i
                                                                            data-feather="x"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="media">
                                                        <img src="{{asset('assets/user//images/user-sm/6.jpg')}}" alt="user">
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0"><span>Bob Frapples</span> add their
                                                                    stories
                                                                </h5>
                                                                <h6>8 hour ago</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="media">
                                                        <img src="{{asset('assets/user//images/user-sm/7.jpg')}}" alt="user">
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0"><span>Josephin water</span> have
                                                                    birthday today
                                                                </h5>
                                                                <h6>sun at 5.55 AM</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="media">
                                                        <img src="{{asset('assets/user//images/user-sm/2.jpg')}}" alt="user">
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0"><span>Petey Cruiser</span> added a new
                                                                    photo
                                                                </h5>
                                                                <h6>sun at 5.40 AM</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="header-btn custom-dropdown profile-btn btn-group">
                                <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light stroke-width-3 d-sm-none d-block iw-16 ih-16"
                                        data-feather="user"></i>
                                    <div class="media d-none d-sm-flex">
                                        <div class="user-img">
                                            <img src="{{asset('assets/user//images/user-sm/1.jpg')}}"
                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                            <span class="available-stats online"></span>
                                        </div>
                                        <div class="media-body d-none d-md-block">
                                            <h4>Josephin water</h4>
                                            <span>active now</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header">
                                        <span>profile</span>
                                        <div class="mobile-close">
                                            <h5>close</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown-content">
                                        <ul class="friend-list">
                                            <li>
                                                <a href="profile.html">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">Profile</h5>
                                                                <h6>Profile preview & settings</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="settings.html">
                                                    <div class="media">
                                                        <i data-feather="settings"></i>
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">setting & privacy</h5>
                                                                <h6>all settings & privacy</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="help-support.html">
                                                    <div class="media">
                                                        <i data-feather="help-circle"></i>
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">help & support</h5>
                                                                <h6>browse help here</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login.html">
                                                    <div class="media">
                                                        <i data-feather="log-out"></i>
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">log out</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-body container-fluid custom-padding">

            <!-- sidebar panel start -->
            <div class="sidebar-panel sidebar-white">
                <div class="main-icon">
                    <a href="#">
                        <i data-feather="grid" class="bar-icon"></i>
                    </a>
                </div>
                <ul class="sidebar-icon">
                    <li>
                        <a href="index.html" class="tippy" title="Newsfeed">
                            <i data-feather="file" class="bar-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="single-page.html" class="tippy" title="Favourite">
                            <i data-feather="star" class="bar-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tippy" title="Groups">
                            <i data-feather="users" class="bar-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="music.html" class="tippy" title="Music">
                            <i data-feather="headphones" class="bar-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="weather.html" class="tippy" title="Weather">
                            <i data-feather="cloud" class="bar-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="event.html" class="tippy" title="Event & Calender">
                            <i data-feather="calendar" class="bar-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="birthday.html" class="tippy" title="Birthday">
                            <svg class="bar-icon fill-white">
                                <use xlink:href="https://themes.pixelstrap.com/friendbook/assets/svg/icons.svg#cake"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="inner-list">
                        <a href="games.html" class="tippy" title="Games">
                            <svg class="bar-icon fill-white">
                                <use xlink:href="https://themes.pixelstrap.com/friendbook/assets/svg/icons.svg#game-controller"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="main-icon">
                    <a href="#">
                        <i data-feather="power" class="bar-icon"></i>
                    </a>
                </div>
            </div>
            <!-- sidebar panel end -->


            <div class="page-center">

                <!-- stroy section start -->
                <div class="story-section ratio_115">
                    <div class="slide-8 no-arrow default-space">
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="story-box">
                                <div class="story-bg bg-size">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- stroy section end -->

                <div class="container-fluid section-t-space px-0 layout-default">
                    <div class="page-content">
                        <div class="content-left">
                            <!-- profile box -->
                            <div class="profile-box">
                                <div class="profile-content">
                                    <a href="profile.html" class="image-section">
                                        <div class="profile-img">
                                            <div class="bg-loader"></div>
                                        </div>
                                    </a>
                                    <div class="profile-detail">
                                        <h2></h2>
                                        <h5></h5>
                                        <div class="description">
                                            <p></p>
                                            <p></p>
                                        </div>
                                        <div class="counter-stats">
                                            <span></span>
                                        </div>
                                        <div class="ldr-btn btn"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- suggestion box -->
                            <div class="suggestion-box section-t-space">
                                <div class="card-title">
                                    <h3></h3>
                                </div>
                                <div class="suggestion-content ratio_115">
                                    <div class="slide-2 no-arrow default-space">
                                        <div>
                                            <div class="story-box">
                                                <div class="story-bg bg-size">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story-box">
                                                <div class="story-bg bg-size">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- like page -->
                            <div class="page-list section-t-space">
                                <div class="card-title">
                                    <h3></h3>
                                </div>
                                <div class="list-content">
                                    <ul>
                                        <li>
                                            <div class="media">
                                                <div class="img-part">
                                                </div>
                                                <div class="media-body">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="img-part">
                                                </div>
                                                <div class="media-body">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="img-part">
                                                </div>
                                                <div class="media-body">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="img-part">
                                                </div>
                                                <div class="media-body">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="img-part">
                                                </div>
                                                <div class="media-body">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content-center">
                            <!-- create post -->
                            <div class="create-post">
                                <div class="static-section">
                                    <div class="card-title">
                                        <h3></h3>
                                    </div>
                                    <div class="search-input input-style icon-right">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="create-bg">
                                    <div class="bg-post">
                                        <div class="input-sec">
                                            <input type="text" class="form-control enable"
                                                placeholder="write something here.." />
                                            <div class="close-icon">
                                                <a href="javascript:void(0)">
                                                    <i class="iw-20 ih-20" data-feather="x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gradient-bg">
                                    </div>
                                </div>
                                <ul class="create-btm-option">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <div class="post-btn">
                                    <button disabled="disabled" class="Disable">post</button>
                                </div>
                            </div>
                            <div class="overlay-bg"></div>
                            <div class="post-panel section-t-space">
                                <div class="post-wrapper col-grid-box">
                                    <div class="post-title">
                                        <div class="profile">
                                            <div class="media">
                                                <div class="user-img">
                                                </div>
                                                <div class="media-body">
                                                    <h5></h5>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-details ratio2_1">
                                        <div class="img-wrapper bg-size">
                                        </div>
                                        <div class="detail-box">
                                            <h3></h3>
                                            <h5 class="tag"></h5>
                                            <div class="ldr-p">
                                                <p></p>
                                                <p></p>
                                            </div>
                                            <div class="bookmark favourite-btn">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-wrapper col-grid-box section-t-space">
                                    <div class="post-title">
                                        <div class="profile">
                                            <div class="media">
                                                <div class="user-img">
                                                </div>
                                                <div class="media-body">
                                                    <h5></h5>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-details ratio2_1">
                                        <div class="img-wrapper bg-size">
                                        </div>
                                        <div class="detail-box">
                                            <h3></h3>
                                            <h5 class="tag"></h5>
                                            <div class="ldr-p">
                                                <p></p>
                                                <p></p>
                                            </div>
                                            <div class="bookmark favourite-btn">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-right">
                            <!-- birthday reminder -->
                            <div class="birthday-section bg-size">
                                <div class="birthday-top">
                                    <div class="title">
                                        <h3></h3>
                                        <h6></h6>
                                    </div>
                                </div>
                                <div class="birthday-content">
                                    <div class="image-section">
                                        <div class="icon">
                                        </div>
                                        <div class="center-profile">
                                        </div>
                                        <div class="icon">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3></h3>
                                        <h6></h6>
                                        <div class="ldr-p">
                                            <p></p>
                                            <p></p>
                                        </div>
                                        <form>
                                            <input type="text" class="form-control">
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- gallery section -->
                            <div class="gallery-section section-t-space">
                                <div class="gallery-top">
                                    <div class="card-title">
                                        <h3></h3>
                                    </div>
                                </div>
                                <div class="portfolio-section ratio_square">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="overlay">
                                                    <div class="portfolio-image bg-size">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="overlay">
                                                    <div class="portfolio-image bg-size">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="overlay">
                                                    <div class="portfolio-image bg-size">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 row m-0">
                                                <div class="col-12 pt-cls p-0">
                                                    <div class="overlay">
                                                        <div class="portfolio-image bg-size">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 pt-cls p-0">
                                                    <div class="overlay">
                                                        <div class="portfolio-image bg-size">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8 pt-cls">
                                                <div class="overlay">
                                                    <div class="portfolio-image bg-size">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- suggestion box -->
                            <div class="suggestion-box section-t-space">
                                <div class="card-title">
                                    <h3></h3>
                                </div>
                                <div class="suggestion-content ratio_115">
                                    <div class="slide-2 no-arrow default-space">
                                        <div>
                                            <div class="story-box">
                                                <div class="story-bg bg-size">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story-box">
                                                <div class="story-bg bg-size">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- conversation panel start -->
            <div class="conversation-panel xl-light">
                <div class="panel-header">
                    <h2></h2>
                    <h5></h5>
                </div>
                <div class="search-bar">
                    <div class="lg-search">
                        <input type="text" class="form-control">
                    </div>
                    <div class="xs-search">
                        <div class="icon-search">
                            <i data-feather="search" class="icon-dark iw-16"></i>
                        </div>
                    </div>
                </div>
                <div class="friend-section">
                    <div class="header-section">
                        <h5></h5>
                        <div class="down-arrow">
                        </div>
                    </div>
                    <div class="friend-list collapse show">
                        <ul>
                            <li class="friend-box user1">
                                <div class="media">
                                    <a class="user-img">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="user-name"></h5>
                                        <h6></h6>
                                    </div>
                                </div>
                            </li>
                            <li class="friend-box user2">
                                <div class="media">
                                    <a class="user-img">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="user-name"></h5>
                                        <h6></h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="friend-section">
                    <div class="header-section">
                        <h5></h5>
                        <div class="down-arrow">
                        </div>
                    </div>
                    <div class="friend-list collapse show">
                        <ul>
                            <li class="friend-box user3">
                                <div class="media">
                                    <a class="user-img">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="user-name"></h5>
                                        <h6></h6>
                                    </div>
                                </div>
                            </li>
                            <li class="friend-box user4">
                                <div class="media">
                                    <a class="user-img">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="user-name"></h5>
                                        <h6></h6>
                                    </div>
                                </div>
                            </li>
                            <li class="friend-box user5">
                                <div class="media">
                                    <a class="user-img">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="user-name"></h5>
                                        <h6></h6>
                                    </div>
                                </div>
                            </li>
                            <li class="friend-box user6">
                                <div class="media">
                                    <a class="user-img">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="user-name"></h5>
                                        <h6></h6>
                                    </div>
                                </div>
                            </li>
                            <li class="friend-box user7">
                                <div class="media">
                                    <a class="user-img">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="user-name"></h5>
                                        <h6></h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- conversation panel end -->

        </div>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <header class="header-light">
        <div class="mobile-fix-menu"></div>
        <div class="container-fluid custom-padding">
            <div class="header-section">
                <div class="header-left">
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="{{asset('assets/user//images/icon/logo-color.png')}}" alt="logo"
                                class="img-fluid blur-up lazyload">
                        </a>
                    </div>
                    <div class="search-box">
                        <i data-feather="search" class="icon iw-16 icon-light"></i>
                        <input type="text" class="form-control search-type" placeholder="find friends...">
                        <div class="icon-close">
                            <i data-feather="x" class="iw-16 icon-light"></i>
                        </div>
                        <div class="search-suggestion">
                            <span class="recent">recent search</span>
                            <ul class="friend-list">
                                <li>
                                    <div class="media">
                                        <img src="{{asset('assets/user//images/user-sm/9.jpg')}}" alt="user">
                                        <div class="media-body">
                                            <div>
                                                <h5 class="mt-0">Paige Turner</h5>
                                                <h6> 1 mutual friend</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img src="{{asset('assets/user//images/user-sm/12.jpg')}}" alt="user">
                                        <div class="media-body">
                                            <div>
                                                <h5 class="mt-0">Paige Turner</h5>
                                                <h6> 1 mutual friend</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img src="{{asset('assets/user//images/user-sm/15.jpg')}}" alt="user">
                                        <div class="media-body">
                                            <div>
                                                <h5 class="mt-0">Paige Turner</h5>
                                                <h6> 1 mutual friend</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="btn-group">
                        <li class="header-btn home-btn">
                            <a class="main-link" href="index.html">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="home"></i>
                            </a>
                        </li>
                        <li class="header-btn custom-dropdown dropdown-lg add-friend">
                            <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="user-plus"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-header">
                                    <span>friend request</span>
                                    <div class="mobile-close">
                                        <h5>close</h5>
                                    </div>
                                </div>
                                <div class="dropdown-content">
                                    <ul class="friend-list">
                                        <li>
                                            <div class="media">
                                                <img src="{{asset('assets/user//images/user-sm/5.jpg')}}" alt="user">
                                                <div class="media-body">
                                                    <div>
                                                        <h5 class="mt-0">Paige Turner</h5>
                                                        <h6> 1 mutual friend</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <button type="button" class="btn btn-solid">confirm</button>
                                                <button type="button" class="btn btn-outline ms-1">delete</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img src="{{asset('assets/user//images/user-sm/6.jpg')}}" alt="user">
                                                <div class="media-body">
                                                    <div>
                                                        <h5 class="mt-0">Paige Turner</h5>
                                                        <h6> 1 mutual friend</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <button type="button" class="btn btn-solid">confirm</button>
                                                <button type="button" class="btn btn-outline ms-1">delete</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img src="{{asset('assets/user//images/user-sm/7.jpg')}}" alt="user">
                                                <div class="media-body">
                                                    <div>
                                                        <h5 class="mt-0">Paige Turner</h5>
                                                        <h6> 1 mutual friend</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <button type="button" class="btn btn-solid">confirm</button>
                                                <button type="button" class="btn btn-outline ms-1">delete</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img src="{{asset('assets/user//images/user-sm/2.jpg')}}" alt="user">
                                                <div class="media-body">
                                                    <div>
                                                        <h5 class="mt-0">Paige Turner</h5>
                                                        <h6> 1 mutual friend</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <button type="button" class="btn btn-solid">confirm</button>
                                                <button type="button" class="btn btn-outline ms-1">delete</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <div class="post-stats">
                        <ul>
                            <li>
                                <h3>326</h3>
                                <span>total posts</span>
                            </li>
                            <li>
                                <h3>2456</h3>
                                <span>total friends</span>
                            </li>
                        </ul>
                    </div>
                    <ul class="option-list">
                        <li class="header-btn custom-dropdown dropdown-lg btn-group message-btn">
                            <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="message-circle"></i><span
                                    class="count success">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">
                                    <div class="left-title">
                                        <span>messages</span>
                                    </div>
                                    <div class="right-option">
                                        <ul>
                                            <li>
                                                <a href="messanger.html">
                                                    <i class="iw-16 ih-16" data-feather="maximize"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="iw-16 ih-16" data-feather="edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="iw-16 ih-16" data-feather="more-horizontal"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mobile-close">
                                        <h5>close</h5>
                                    </div>
                                </div>
                                <div class="search-bar input-style icon-left">
                                    <i class="iw-16 ih-16 icon" data-feather="search"></i>
                                    <input type="text" class="form-control" placeholder="search messages...">
                                </div>
                                <div class="dropdown-content">
                                    <ul class="friend-list">
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/1.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">Paige Turner</h5>
                                                            <h6>Are you there ?</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="active-status">
                                                    <span class="active"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/2.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">Paige Turner</h5>
                                                            <h6>Are you there ?</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/3.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">Bob Frapples</h5>
                                                            <h6>hello ! how are you ?</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="active-status">
                                                    <span class="offline"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-btn custom-dropdown">
                            <a id="dark" class="main-link" href="javascript:void(0)">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="moon"></i>
                            </a>
                            <a id="light" class="main-link d-none" href="javascript:void(0)">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="sun"></i>
                            </a>
                        </li>
                        <li class="header-btn custom-dropdown d-md-none d-block app-btn">
                            <a class="main-link" href="javascript:void(0)">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="grid"></i>
                            </a>
                            <div class="overlay-bg app-overlay"></div>
                            <div class="app-box">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="index.html">
                                                <div class="icon">
                                                    <i data-feather="file" class="bar-icon"></i>
                                                </div>
                                                <h5>Newsfeed</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="single-page.html">
                                                <div class="icon">
                                                    <i data-feather="star" class="bar-icon"></i>
                                                </div>
                                                <h5>favourite</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="#">
                                                <div class="icon">
                                                    <i data-feather="users" class="bar-icon"></i>
                                                </div>
                                                <h5>group</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="music.html">
                                                <div class="icon">
                                                    <i data-feather="headphones" class="bar-icon"></i>
                                                </div>
                                                <h5>music</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="weather.html">
                                                <div class="icon">
                                                    <i data-feather="cloud" class="bar-icon"></i>
                                                </div>
                                                <h5>weather</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="event.html">
                                                <div class="icon">
                                                    <i data-feather="calendar" class="bar-icon"></i>
                                                </div>
                                                <h5>calender</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="#">
                                                <div class="icon">
                                                    <svg class="bar-icon">
                                                        <use class="fill-color"
                                                            xlink:href="https://themes.pixelstrap.com/friendbook/assets/svg/icons.svg#cake"></use>
                                                    </svg>
                                                </div>
                                                <h5>event</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="games.html">
                                                <div class="icon">
                                                    <svg class="bar-icon">
                                                        <use class="fill-color"
                                                            xlink:href="https://themes.pixelstrap.com/friendbook/assets/svg/icons.svg#game-controller">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <h5>games</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-btn custom-dropdown dropdown-lg btn-group notification-btn">
                            <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="bell"></i><span
                                    class="count warning">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">
                                    <span>Notification</span>
                                    <div class="mobile-close">
                                        <h5>close</h5>
                                    </div>
                                </div>
                                <div class="dropdown-content">
                                    <ul class="friend-list">
                                        <li class="d-block">
                                            <div>
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/5.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0"><span>Paige Turner</span> send you a friend
                                                                request
                                                            </h5>
                                                            <h6> 1 mutual friend</h6>
                                                            <div class="action-btns">
                                                                <button type="button" class="btn btn-solid"><i
                                                                        data-feather="check"></i></button>
                                                                <button type="button" class="btn btn-solid ms-1"><i
                                                                        data-feather="x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/6.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0"><span>Bob Frapples</span> add their stories
                                                            </h5>
                                                            <h6>8 hour ago</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/7.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0"><span>Josephin water</span> have birthday
                                                                today
                                                            </h5>
                                                            <h6>sun at 5.55 AM</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <img src="{{asset('assets/user//images/user-sm/2.jpg')}}" alt="user">
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0"><span>Petey Cruiser</span> added a new
                                                                photo
                                                            </h5>
                                                            <h6>sun at 5.40 AM</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="header-btn custom-dropdown profile-btn btn-group">
                            <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-light stroke-width-3 d-sm-none d-block iw-16 ih-16"
                                    data-feather="user"></i>
                                <div class="media d-none d-sm-flex">
                                    <div class="user-img">
                                        <img src="{{asset('assets/user//images/user-sm/1.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                        <span class="available-stats online"></span>
                                    </div>
                                    <div class="media-body d-none d-md-block">
                                        <h4>Josephin water</h4>
                                        <span>active now</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">
                                    <span>profile</span>
                                    <div class="mobile-close">
                                        <h5>close</h5>
                                    </div>
                                </div>
                                <div class="dropdown-content">
                                    <ul class="friend-list">
                                        <li>
                                            <a href="profile.html">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">Profile</h5>
                                                            <h6>Profile preview & settings</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="settings.html">
                                                <div class="media">
                                                    <i data-feather="settings"></i>
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">setting & privacy</h5>
                                                            <h6>all settings & privacy</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="help-support.html">
                                                <div class="media">
                                                    <i data-feather="help-circle"></i>
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">help & support</h5>
                                                            <h6>browse help here</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login.html">
                                                <div class="media">
                                                    <i data-feather="log-out"></i>
                                                    <div class="media-body">
                                                        <div>
                                                            <h5 class="mt-0">log out</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- page body start -->
    <div class="page-body container-fluid custom-padding">
