@extends('user.user_layout.master')
@section('content')


    <div class="page-center">

        <!-- stroy section start -->
        <div class="story-section ratio_115">
            <div class="slide-8 no-arrow default-space">
                <div>
                    <div class="story-box add-box">
                        <div>
                            <img src="{{ asset('assets/user/images/story-bg.jpg') }}"
                                class="img-fluid blur-up lazyload bg-img" alt="">
                            <div class="add-icon">
                                <div class="icon">
                                    <img src="{{ asset('assets/user/images/icon/plus.png') }}"
                                        class="img-fluid blur-up lazyload" alt="plus">
                                </div>
                                <h6>add stories</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="story-box" data-bs-toggle="modal" data-bs-target="#storyModel">
                        <div class="adaptive-overlay orange-overlay"></div>
                        <div class="story-bg">
                            <img src="{{ asset('assets/user/images/story/6.jpg') }}" class="img-fluid bg-img"
                                data-adaptive-background='1' alt="">
                        </div>
                        <div class="story-content">
                            <h6>Anna Mull</h6>
                            <span>active now</span>
                        </div>
                        <div class="story-setting setting-dropdown">
                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light iw-13 ih-13" data-feather="sun"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="volume-x"></i>mute josephin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="user"></i>view profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="story-box" data-bs-toggle="modal" data-bs-target="#storyModel">
                        <div class="adaptive-overlay pink-overlay"></div>
                        <div class="story-bg">
                            <img src="{{ asset('assets/user/images/story/2.jpg') }}" class="img-fluid bg-img"
                                data-adaptive-background='1' alt="">
                        </div>
                        <div class="story-content">
                            <h6>josephin water</h6>
                            <span>active now</span>
                        </div>
                        <div class="story-setting setting-dropdown">
                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light iw-13 ih-13" data-feather="sun"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="volume-x"></i>mute josephin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="user"></i>view profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="story-box" data-bs-toggle="modal" data-bs-target="#storyModel">
                        <div class="adaptive-overlay skin-overlay"></div>
                        <div class="story-bg">
                            <img src="{{ asset('assets/user/images/story/1.jpg') }}" class="img-fluid bg-img"
                                data-adaptive-background='1' alt="">
                        </div>
                        <div class="story-content">
                            <h6>josephin water</h6>
                            <span>active now</span>
                        </div>
                        <div class="story-setting setting-dropdown">
                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light iw-13 ih-13" data-feather="sun"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="volume-x"></i>mute josephin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="user"></i>view profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="story-box" data-bs-toggle="modal" data-bs-target="#storyModel">
                        <div class="adaptive-overlay yellow-overlay"></div>
                        <div class="story-bg">
                            <img src="{{ asset('assets/user/images/story/3.jpg') }}" class="img-fluid bg-img"
                                data-adaptive-background='1' alt="">
                        </div>
                        <div class="story-content">
                            <h6>Petey Cruiser</h6>
                            <span>active now</span>
                        </div>
                        <div class="story-setting setting-dropdown">
                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light iw-13 ih-13" data-feather="sun"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="volume-x"></i>mute josephin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="user"></i>view profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="story-box" data-bs-toggle="modal" data-bs-target="#storyModel">
                        <div class="adaptive-overlay skin-overlay"></div>
                        <div class="story-bg">
                            <img src="{{ asset('assets/user/images/story/5.jpg') }}" class="img-fluid bg-img"
                                data-adaptive-background='1' alt="">
                        </div>
                        <div class="story-content">
                            <h6>Paul Molive</h6>
                            <span>active now</span>
                        </div>
                        <div class="story-setting setting-dropdown">
                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light iw-13 ih-13" data-feather="sun"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="volume-x"></i>mute josephin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="user"></i>view profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="story-box" data-bs-toggle="modal" data-bs-target="#storyModel">
                        <div class="adaptive-overlay pink-overlay"></div>
                        <div class="story-bg">
                            <img src="{{ asset('assets/user/images/story/4.jpg') }}" class="img-fluid bg-img"
                                data-adaptive-background='1' alt="">
                        </div>
                        <div class="story-content">
                            <h6>Anna Sthesia</h6>
                            <span>active now</span>
                        </div>
                        <div class="story-setting setting-dropdown">
                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light iw-13 ih-13" data-feather="sun"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="volume-x"></i>mute josephin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="user"></i>view profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="story-box" data-bs-toggle="modal" data-bs-target="#storyModel">
                        <div class="adaptive-overlay blue-overlay"></div>
                        <div class="story-bg">
                            <img src="{{ asset('assets/user/images/story/7.jpg') }}" class="img-fluid bg-img"
                                data-adaptive-background='1' alt="">
                        </div>
                        <div class="story-content">
                            <h6>Paige Turner</h6>
                            <span>active now</span>
                        </div>
                        <div class="story-setting setting-dropdown">
                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light iw-13 ih-13" data-feather="sun"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="volume-x"></i>mute josephin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="user"></i>view profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="story-box" data-bs-toggle="modal" data-bs-target="#storyModel">
                        <div class="adaptive-overlay"></div>
                        <div class="story-bg">
                            <img src="{{ asset('assets/user/images/story/8.jpg') }}" class="img-fluid bg-img"
                                data-adaptive-background='1' alt="">
                        </div>
                        <div class="story-content">
                            <h6>Bob Frapples</h6>
                            <span>active now</span>
                        </div>
                        <div class="story-setting setting-dropdown">
                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-light iw-13 ih-13" data-feather="sun"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="volume-x"></i>mute josephin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                    data-feather="user"></i>view profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
                        <div class="profile-setting">
                            <div class="setting-btn refresh">
                                <a href="#" class="d-flex">
                                    <i class="icon icon-theme stroke-width-3 iw-11 ih-11" data-feather="rotate-cw"></i>
                                </a>
                            </div>
                            <div class="setting-btn setting setting-dropdown">
                                <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                    <a href="#" class="d-flex" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon icon-theme stroke-width-3 iw-11 ih-11" data-feather="sun"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                        data-feather="edit"></i>edit profile</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                        data-feather="user"></i>view profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-content">
                            <a href="profile.html" class="image-section">
                                <div class="profile-img">
                                    <div>
                                        <img src="{{ asset('assets/user/images/story/8.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="profile">
                                    </div>
                                    <span class="stats">
                                        <img src="{{ asset('assets/user/images/icon/verified.png') }}"
                                            class="img-fluid blur-up lazyload" alt="verified">
                                    </span>
                                </div>
                            </a>
                            <div class="profile-detail">
                                <a href="profile.html">
                                    <h2>kelin jasen <span>❤</span></h2>
                                </a>
                                <h5>kelin.jasen156@gmail.com</h5>
                                <div class="description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <div class="counter-stats">
                                    <ul id="counter">
                                        <li>
                                            <h3 class="counter-value" data-count="546">0</h3>
                                            <h5>following</h5>
                                        </li>
                                        <li>
                                            <h3 class="counter-value" data-count="26335">0</h3>
                                            <h5>likes</h5>
                                        </li>
                                        <li>
                                            <h3 class="counter-value" data-count="6845">0</h3>
                                            <h5>followers</h5>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-solid">view profile</a>
                            </div>
                        </div>
                    </div>
                    <!-- suggestion box -->
                    <div class="suggestion-box section-t-space">
                        <div class="card-title">
                            <h3>friend suggestion</h3>
                            <div class="settings">
                                <div class="setting-btn">
                                    <a href="#" class="d-flex">
                                        <i class="icon icon-theme stroke-width-3 iw-11 ih-11"
                                            data-feather="rotate-cw"></i>
                                    </a>
                                </div>
                                <div class="setting-btn setting-dropdown ms-2">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <a href="#" class="d-flex" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-theme stroke-width-3 iw-11 ih-11" data-feather="sun"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="user"></i>see all</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="search"></i>find friends</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="settings"></i>settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="suggestion-content ratio_115">
                            <div class="slide-2 no-arrow default-space">
                                <div>
                                    <div class="story-box">
                                        <div class="adaptive-overlay pink-overlay"></div>
                                        <div class="story-bg">
                                            <img src="{{ asset('assets/user/images/story/2.jpg') }}"
                                                class="img-fluid bg-img" data-adaptive-background='1' alt="">
                                        </div>
                                        <div class="story-content">
                                            <h6>josephin water</h6>
                                            <span>active now</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="story-box">
                                        <div class="adaptive-overlay blue-overlay"></div>
                                        <div class="story-bg">
                                            <img src="{{ asset('assets/user/images/story/7.jpg') }}"
                                                class="img-fluid bg-img" data-adaptive-background='1' alt="">
                                        </div>
                                        <div class="story-content">
                                            <h6>josephin water</h6>
                                            <span>active now</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="story-box">
                                        <div class="adaptive-overlay skin-overlay"></div>
                                        <div class="story-bg">
                                            <img src="{{ asset('assets/user/images/story/1.jpg') }}"
                                                class="img-fluid bg-img" data-adaptive-background='1' alt="">
                                        </div>
                                        <div class="story-content">
                                            <h6>josephin water</h6>
                                            <span>active now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sticky-top">
                        <!-- like page -->
                        <div class="page-list section-t-space">
                            <div class="card-title">
                                <h3>liked pages</h3>
                                <h5>18 pages</h5>
                                <div class="settings">
                                    <div class="setting-btn">
                                        <a href="#" class="d-flex">
                                            <i class="icon icon-dark stroke-width-3 iw-11 ih-11"
                                                data-feather="rotate-cw"></i>
                                        </a>
                                    </div>
                                    <div class="setting-btn ms-2 setting-dropdown">
                                        <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-dark stroke-width-3 icon iw-11 ih-11"
                                                    data-feather="sun"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="edit"></i>see all</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="search"></i>find page</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="settings"></i>settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="img-part">
                                                <img src="{{ asset('assets/user/images/pages-logo/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>chrimson agency</h4>
                                                <h6>clothing store
                                                    <span><i data-feather="user"
                                                            class="icon-font-color iw-13 ih-13"></i>15k</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="favourite-btn active">
                                            <i data-feather="star" class="icon-dark iw-14 ih-14"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="img-part">
                                                <img src="{{ asset('assets/user/images/pages-logo/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>Digital Pixel</h4>
                                                <h6>software company
                                                    <span><i data-feather="user"
                                                            class="icon-font-color iw-13 ih-13"></i>158k</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="favourite-btn">
                                            <i data-feather="star" class="icon-dark iw-14 ih-14"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="img-part">
                                                <img src="{{ asset('assets/user/images/pages-logo/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>the angle bar</h4>
                                                <h6>disco bar
                                                    <span><i data-feather="user"
                                                            class="icon-font-color iw-13 ih-13"></i>8k</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="favourite-btn active">
                                            <i data-feather="star" class="icon-dark iw-14 ih-14"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="img-part">
                                                <img src="{{ asset('assets/user/images/pages-logo/4.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>fivestar food</h4>
                                                <h6>restaurant
                                                    <span><i data-feather="user"
                                                            class="icon-font-color iw-13 ih-13"></i>186k</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="favourite-btn">
                                            <i data-feather="star" class="icon-dark iw-14 ih-14"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="img-part">
                                                <img src="{{ asset('assets/user/images/pages-logo/5.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>royal watch</h4>
                                                <h6>watch shop
                                                    <span><i data-feather="user"
                                                            class="icon-font-color  iw-10 ih-10"></i>65k</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="favourite-btn">
                                            <i data-feather="star" class="icon-dark iw-14 ih-14"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- weather section -->
                        <div class="weather-section section-t-space">
                            <div class="card-title light-version">
                                <h3>weather</h3>
                                <div class="settings">
                                    <div class="setting-btn light-btn">
                                        <a href="#" class="d-flex">
                                            <i class="icon icon-light stroke-width-3 iw-11 ih-11"
                                                data-feather="rotate-cw"></i>
                                        </a>
                                    </div>
                                    <div class="setting-btn light-btn ms-2 setting-dropdown">
                                        <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                            <a class="d-flex" href="#" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-light stroke-width-3 iw-12 ih-12" data-feather="sun"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="edit"></i>change city</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="settings"></i>setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="weather-content">
                                <div class="top-title">
                                    <h2>28°C</h2>
                                    <h5>4.45 pm</h5>
                                </div>
                                <h5>sunny day</h5>
                                <h6>21 march 2021 (monday) <span>denmark</span></h6>
                            </div>
                            <div class="flaks-img">
                                <img src="{{ asset('assets/user/images/icon/snow-flaks.png') }}"
                                    class="img-fluid blur-up lazyload" alt="snow">
                            </div>
                            <div class="snowflakes" aria-hidden="true">
                                <div class="snowflake">
                                    ❅
                                </div>
                                <div class="snowflake">
                                    ❆
                                </div>
                                <div class="snowflake">
                                    ❅
                                </div>
                                <div class="snowflake">
                                    ❆
                                </div>
                                <div class="snowflake">
                                    ❅
                                </div>
                                <div class="snowflake">
                                    ❆
                                </div>
                                <div class="snowflake">
                                    ❅
                                </div>
                                <div class="snowflake">
                                    ❆
                                </div>
                                <div class="snowflake">
                                    ❅
                                </div>
                                <div class="snowflake">
                                    ❆
                                </div>
                                <div class="snowflake">
                                    ❅
                                </div>
                                <div class="snowflake">
                                    ❆
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-center">
                    <!-- create post -->
                    <div class="create-post">
                        <div class="static-section">
                            <div class="card-title">
                                <h3>create post</h3>
                                <ul class="create-option">
                                    <li class="options">
                                        <div class="setting-dropdown">
                                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                                <h5 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    public <i class="iw-14" data-feather="chevron-down"></i></h5>
                                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="globe"></i>public</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="users"></i>friends</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="user"></i>friends
                                                                except</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="user"></i>specific
                                                                friends</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="lock"></i>only me</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h5><i class="iw-15" data-feather="video"></i>go live</h5>
                                    </li>
                                </ul>
                                <div class="settings">
                                    <div class="setting-btn ms-2 setting-dropdown no-bg">
                                        <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                            <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon icon-font-color iw-14" data-feather="more-horizontal"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="edit"></i>edit profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="user"></i>view profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-input input-style icon-right">
                                <input type="text" class="form-control enable" placeholder="write something here..">
                                <a href="#">
                                    <img src="{{ asset('assets/user/images/icon/translate.png') }}"
                                        class="img-fluid blur-up lazyload icon" alt="translate">
                                </a>
                            </div>
                        </div>
                        <div class="create-bg">
                            <div class="bg-post" id="bg-post">
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
                            <ul class="gradient-bg">
                                <li onclick="clickGradient('gr-1')" class="gr-1"></li>
                                <li onclick="clickGradient('gr-2')" class="gr-2"></li>
                                <li onclick="clickGradient('gr-3')" class="gr-3"></li>
                                <li onclick="clickGradient('gr-4')" class="gr-4"></li>
                                <li onclick="clickGradient('gr-5')" class="gr-5"></li>
                                <li onclick="clickGradient('gr-6')" class="gr-6"></li>
                                <li onclick="clickGradient('gr-7')" class="gr-7"></li>
                                <li onclick="clickGradient('gr-8')" class="gr-8"></li>
                                <li onclick="clickGradient('gr-9')" class="gr-9"></li>
                                <li onclick="clickGradient('gr-10')" class="gr-10"></li>
                                <li onclick="clickGradient('gr-11')" class="gr-11"></li>
                                <li onclick="clickGradient('gr-12')" class="gr-12"></li>
                                <li onclick="clickGradient('gr-13')" class="gr-13"></li>
                                <li onclick="clickGradient('gr-14')" class="gr-14"></li>
                                <li onclick="clickGradient('gr-15')" class="gr-15"></li>
                            </ul>
                        </div>
                        <div class="options-input" id="additional-input">
                            <a id="icon-close" href="javascript:void(0)">
                                <i class="iw-15 icon-font-light icon-close" data-feather="x"></i>
                            </a>
                            <div class="search-input feeling-input">
                                <input type="text" class="form-control enable" list="feelings"
                                    placeholder="How Are You Feeling?">
                                <datalist id="feelings">
                                    <option value="Happy">
                                    <option value="Sad">
                                    <option value="Angry">
                                    <option value="Worried">
                                    <option value="Shy">
                                    <option value="Excited">
                                    <option value="Surprised">
                                    <option value="Silly">
                                    <option value="Embarrassed">
                                </datalist>
                                <a href="#">
                                    <i class="iw-15 icon-left icon-font-light" data-feather="smile"></i>
                                </a>
                            </div>
                            <div class="search-input place-input">
                                <input type="text" class="form-control" placeholder="search for places...">
                                <a href="#">
                                    <i class="iw-15 icon-left icon-font-light" data-feather="map-pin"></i>
                                </a>
                            </div>
                            <div class="search-input friend-input">
                                <input type="text" class="form-control" list="friends"
                                    placeholder="search your friends...">
                                <datalist id="friends">
                                    <option value="Paige Turner">
                                    <option value="Bob Frapples">
                                    <option value="Josephin water">
                                    <option value="Petey Cruiser">
                                    <option value="Anna Sthesia">
                                    <option value="Paul Molive">
                                    <option value="Anna Mull">
                                </datalist>
                                <a href="#">
                                    <i class="iw-15 icon-left icon-font-light" data-feather="tag"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="create-btm-option">
                            <li>
                                <input class="choose-file" type="file">
                                <h5><i class="iw-14" data-feather="camera"></i>album</h5>
                            </li>
                            <li id="feeling-btn">
                                <h5><i class="iw-15" data-feather="smile"></i>feelings & acitivity</h5>
                            </li>
                            <li id="checkin-btn">
                                <h5><i class="iw-15" data-feather="map-pin"></i>check in</h5>
                            </li>
                            <li id="friends-btn">
                                <h5><i class="iw-15" data-feather="tag"></i>tag friends</h5>
                            </li>
                        </ul>
                        <div id="post-btn" class="post-btn">
                            <button disabled="disabled" class="Disable">post</button>
                        </div>
                    </div>
                    <div class="overlay-bg"></div>
                    <div class="post-panel infinite-loader-sec section-t-space">
                        <div class="post-wrapper col-grid-box">
                            <div class="post-title">
                                <div class="profile">
                                    <div class="media">
                                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="right"
                                            data-name="sufiya eliza"
                                            data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                            <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                        </a>
                                        <div class="media-body">
                                            <h5>sufiya eliza</h5>
                                            <h6>30 mins ago</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-btn ms-auto setting-dropdown no-bg">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-font-color iw-14" data-feather="more-horizontal"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="bookmark"></i>save post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-square"></i>hide post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-octagon"></i>unfollow sufiya</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-details">
                                <div class="img-wrapper">
                                    <img src="{{ asset('assets/user/images/post/24.jpg') }}"
                                        class="img-fluid blur-up lazyload" alt="">
                                    <div class="controler">
                                        <a href="#" class="play" data-bs-toggle="modal"
                                            data-bs-target="#videoPlayer">
                                            <i class="iw-50 ih-50" data-feather="play-circle"></i>
                                        </a>
                                        <div class="duration">
                                            <h6>06:20</h6>
                                        </div>
                                        <a href="#" class="volume">
                                            <i class="iw-14 ih-14" data-feather="volume-2"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="detail-box">
                                    <h3>Today Our Three Cute Puppy Dog Birthday !!!!</h3>
                                    <h5 class="tag"><span>#ourcutepuppy,</span> #puppy, #birthday, #dog</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="bookmark favourite-btn">
                                        <i class="iw-14 ih-14" data-feather="bookmark"></i>
                                    </div>
                                    <div class="people-likes">
                                        <ul>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                        </ul>
                                        <h6>+12 people react this post</h6>
                                    </div>
                                </div>
                                <div class="like-panel">
                                    <div class="left-emoji">
                                        <ul>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                    alt="smile">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                    alt="heart">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                    alt="cry">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/033.svg"
                                                    alt="angry">
                                            </li>
                                        </ul>
                                        <h6>+75</h6>
                                    </div>
                                    <div class="right-stats">
                                        <ul>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="message-square"></i>
                                                    <span>4565</span> comment
                                                </h5>
                                            </li>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="share"></i><span>985</span>
                                                    share
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-react">
                                    <ul>
                                        <li class="react-btn">
                                            <a class="react-click" href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="smile"></i> react
                                            </a>
                                            <div class="react-box">
                                                <ul>
                                                    <li data-title="smile">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                                alt="smile">
                                                        </a>
                                                    </li>
                                                    <li data-title="love">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                                alt="heart">
                                                        </a>
                                                    </li>
                                                    <li data-title="cry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                                alt="cry">
                                                        </a>
                                                    </li>
                                                    <li data-title="wow">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/052.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="angry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/039.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="haha">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/042.svg"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-click">
                                            <a href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                            </a>
                                        </li>
                                        <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                            <a href="javascript:void(0)">
                                                <i class="iw-16 ih-16" data-feather="share"></i> share
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-section">
                                    <div class="comments d-block">
                                        <div class="ldr-comments">
                                            <ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="sub-comment">
                                                        <li>
                                                            <div class="media">
                                                                <div class="ldr-img"></div>
                                                                <div class="media-body">
                                                                    <div class="contents">
                                                                        <div class="ldr-content"></div>
                                                                        <div class="ldr-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls" data-bs-toggle="popover"
                                                    data-placement="right" data-name="Pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>Oooo Very Cute and Sweet Dog, happy birthday Cuty....
                                                        &#128578;
                                                    </p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like (5)</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                            <div class="sub-comment">
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya elija"
                                                        data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya eliza"
                                                        data-img="{{ asset('assets/user/images/user-sm/4.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/4.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="loader">
                                                    <i class="iw-15 ih-15" data-feather="rotate-cw"></i> load more
                                                    replies
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls" data-bs-toggle="popover"
                                                    data-placement="right" data-name="pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>It’s party time, Sufiya..... and happy birthday cuty 🎉🎊</p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="search-input input-style input-lg icon-right">
                                            <input type="text" class="form-control emojiPicker"
                                                placeholder="write a comment..">
                                            <a href="javascript:void(0)">
                                                <i data-feather="smile" class="icon icon-2 iw-14 ih-14"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i data-feather="camera" class="icon iw-14 ih-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-wrapper col-grid-box section-t-space">
                            <div class="post-title">
                                <div class="profile">
                                    <div class="media">
                                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="right"
                                            data-name="sufiya eliza"
                                            data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                            <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                        </a>
                                        <div class="media-body">
                                            <h5>sufiya eliza</h5>
                                            <h6>30 mins ago</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-btn ms-auto setting-dropdown no-bg">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-font-color iw-14" data-feather="more-horizontal"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="bookmark"></i>save post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-square"></i>hide post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-octagon"></i>unfollow sufiya</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-details">
                                <div class="img-wrapper">
                                    <div class="gallery-section">
                                        <div class="portfolio-section ratio_square">
                                            <div class="container-fluid p-0">
                                                <div class="row">
                                                    <div class="col-8 pt-cls">
                                                        <div class="overlay">
                                                            <div class="portfolio-image">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModel">
                                                                    <img src="{{ asset('assets/user/images/post/25.jpg') }}"
                                                                        alt=""
                                                                        class="img-fluid blur-up lazyload bg-img">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 row m-0">
                                                        <div class="col-12 pt-cls p-0">
                                                            <div class="overlay">
                                                                <div class="portfolio-image">
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#imageModel">
                                                                        <img src="{{ asset('assets/user/images/post/26.jpg') }}"
                                                                            alt=""
                                                                            class="img-fluid blur-up lazyload bg-img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 pt-cls p-0">
                                                            <div class="overlay image-plus">
                                                                <div class="portfolio-image">
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#imageModel">
                                                                        <img src="{{ asset('assets/user/images/post/27.jpg') }}"
                                                                            alt=""
                                                                            class="img-fluid blur-up lazyload bg-img">
                                                                        <span>+20</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-box">
                                    <h3>Celebration new album song launched</h3>
                                    <h5 class="tag"><span>#Musiccelebration,</span> #music, #party, #music</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="bookmark favourite-btn">
                                        <i class="iw-14 ih-14" data-feather="bookmark"></i>
                                    </div>
                                    <div class="people-likes">
                                        <ul>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                        </ul>
                                        <h6>+12 people react this post</h6>
                                    </div>
                                </div>
                                <div class="like-panel">
                                    <div class="left-emoji">
                                        <ul>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                    alt="smile">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                    alt="heart">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                    alt="cry">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/033.svg"
                                                    alt="angry">
                                            </li>
                                        </ul>
                                        <h6>+75</h6>
                                    </div>
                                    <div class="right-stats">
                                        <ul>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="message-square"></i>
                                                    <span>4565</span> comment
                                                </h5>
                                            </li>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="share"></i><span>985</span>
                                                    share
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-react">
                                    <ul>
                                        <li class="react-btn">
                                            <a class="react-click" href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="smile"></i> react
                                            </a>
                                            <div class="react-box">
                                                <ul>
                                                    <li data-title="smile">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                                alt="smile">
                                                        </a>
                                                    </li>
                                                    <li data-title="love">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                                alt="heart">
                                                        </a>
                                                    </li>
                                                    <li data-title="cry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                                alt="cry">
                                                        </a>
                                                    </li>
                                                    <li data-title="wow">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/052.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="angry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/039.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="haha">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/042.svg"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-click">
                                            <a href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                            </a>
                                        </li>
                                        <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                            <a href="javascript:void(0)">
                                                <i class="iw-16 ih-16" data-feather="share"></i> share
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-section">
                                    <div class="comments d-none">
                                        <div class="ldr-comments">
                                            <ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="sub-comment">
                                                        <li>
                                                            <div class="media">
                                                                <div class="ldr-img"></div>
                                                                <div class="media-body">
                                                                    <div class="contents">
                                                                        <div class="ldr-content"></div>
                                                                        <div class="ldr-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="Pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>Oooo Very Cute and Sweet Dog, happy birthday Cuty....
                                                        &#128578;
                                                    </p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like (5)</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                            <div class="sub-comment">
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya elija"
                                                        data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya eliza"
                                                        data-img="{{ asset('assets/user/images/user-sm/4.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/4.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="loader">
                                                    <i class="iw-15 ih-15" data-feather="rotate-cw"></i> load more
                                                    replies
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>It’s party time, Sufiya..... and happy birthday cuty 🎉🎊</p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="search-input input-style input-lg icon-right">
                                            <input type="text" class="form-control emojiPicker"
                                                placeholder="write a comment..">
                                            <a href="javascript:void(0)">
                                                <i data-feather="smile" class="icon icon-2 iw-14 ih-14"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i data-feather="camera" class="icon iw-14 ih-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-wrapper col-grid-box section-t-space">
                            <div class="post-title">
                                <div class="profile">
                                    <div class="media">
                                        <a class="popover-cls user-img" data-bs-toggle="popover"
                                            data-placement="right" data-name="sufiya eliza"
                                            data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                            <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                        </a>
                                        <div class="media-body">
                                            <h5>sufiya eliza</h5>
                                            <h6>30 mins ago</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-btn ms-auto setting-dropdown no-bg">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-font-color iw-14" data-feather="more-horizontal"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="bookmark"></i>save post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-square"></i>hide post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-octagon"></i>unfollow sufiya</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-details">
                                <div class="detail-box">
                                    <h3>Celebration new album song launched</h3>
                                    <h5 class="tag"><span>#Musiccelebration,</span> #music, #party, #music</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="bookmark favourite-btn">
                                        <i class="iw-14 ih-14" data-feather="bookmark"></i>
                                    </div>
                                    <div class="people-likes">
                                        <ul>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                        </ul>
                                        <h6>+12 people react this post</h6>
                                    </div>
                                </div>
                                <div class="like-panel">
                                    <div class="left-emoji">
                                        <ul>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                    alt="smile">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                    alt="heart">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                    alt="cry">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/033.svg"
                                                    alt="angry">
                                            </li>
                                        </ul>
                                        <h6>+75</h6>
                                    </div>
                                    <div class="right-stats">
                                        <ul>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="message-square"></i>
                                                    <span>4565</span> comment
                                                </h5>
                                            </li>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="share"></i><span>985</span>
                                                    share
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-react">
                                    <ul>
                                        <li class="react-btn">
                                            <a class="react-click" href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="smile"></i> react
                                            </a>
                                            <div class="react-box">
                                                <ul>
                                                    <li data-title="smile">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                                alt="smile">
                                                        </a>
                                                    </li>
                                                    <li data-title="love">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                                alt="heart">
                                                        </a>
                                                    </li>
                                                    <li data-title="cry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                                alt="cry">
                                                        </a>
                                                    </li>
                                                    <li data-title="wow">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/052.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="angry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/039.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="haha">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/042.svg"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-click">
                                            <a href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                            </a>
                                        </li>
                                        <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                            <a href="javascript:void(0)">
                                                <i class="iw-16 ih-16" data-feather="share"></i> share
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-section">
                                    <div class="comments d-none">
                                        <div class="ldr-comments">
                                            <ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="sub-comment">
                                                        <li>
                                                            <div class="media">
                                                                <div class="ldr-img"></div>
                                                                <div class="media-body">
                                                                    <div class="contents">
                                                                        <div class="ldr-content"></div>
                                                                        <div class="ldr-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="Pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>Oooo Very Cute and Sweet Dog, happy birthday Cuty....
                                                        &#128578;
                                                    </p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like (5)</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                            <div class="sub-comment">
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya elija"
                                                        data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya eliza"
                                                        data-img="{{ asset('assets/user/images/user-sm/4.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/4.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="loader">
                                                    <i class="iw-15 ih-15" data-feather="rotate-cw"></i> load more
                                                    replies
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>It’s party time, Sufiya..... and happy birthday cuty 🎉🎊</p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="search-input input-style input-lg icon-right">
                                            <input type="text" class="form-control emojiPicker"
                                                placeholder="write a comment..">
                                            <a href="javascript:void(0)">
                                                <i data-feather="smile" class="icon icon-2 iw-14 ih-14"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i data-feather="camera" class="icon iw-14 ih-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-wrapper col-grid-box section-t-space">
                            <div class="post-title">
                                <div class="profile">
                                    <div class="media">
                                        <a class="popover-cls user-img" data-bs-toggle="popover"
                                            data-placement="right" data-name="sufiya eliza"
                                            data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                            <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                        </a>
                                        <div class="media-body">
                                            <h5>sufiya eliza</h5>
                                            <h6>30 mins ago</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-btn ms-auto setting-dropdown no-bg">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-font-color iw-14" data-feather="more-horizontal"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="bookmark"></i>save post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-square"></i>hide post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-octagon"></i>unfollow sufiya</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-details">
                                <div class="img-wrapper">
                                    <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe
                                            src="https://giphy.com/embed/vNp62AnPg1IiPFnR3o" style="position:absolute"
                                            class="giphy-embed" allowFullScreen></iframe></div>
                                </div>
                                <div class="detail-box">
                                    <h3>Celebration new album song launched</h3>
                                    <h5 class="tag"><span>#Musiccelebration,</span> #music, #party, #music</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="bookmark favourite-btn">
                                        <i class="iw-14 ih-14" data-feather="bookmark"></i>
                                    </div>
                                    <div class="people-likes">
                                        <ul>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                        </ul>
                                        <h6>+12 people react this post</h6>
                                    </div>
                                </div>
                                <div class="like-panel">
                                    <div class="left-emoji">
                                        <ul>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                    alt="smile">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                    alt="heart">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                    alt="cry">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/033.svg"
                                                    alt="angry">
                                            </li>
                                        </ul>
                                        <h6>+75</h6>
                                    </div>
                                    <div class="right-stats">
                                        <ul>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="message-square"></i>
                                                    <span>4565</span> comment
                                                </h5>
                                            </li>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="share"></i><span>985</span>
                                                    share
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-react">
                                    <ul>
                                        <li class="react-btn">
                                            <a class="react-click" href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="smile"></i> react
                                            </a>
                                            <div class="react-box">
                                                <ul>
                                                    <li data-title="smile">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                                alt="smile">
                                                        </a>
                                                    </li>
                                                    <li data-title="love">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                                alt="heart">
                                                        </a>
                                                    </li>
                                                    <li data-title="cry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                                alt="cry">
                                                        </a>
                                                    </li>
                                                    <li data-title="wow">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/052.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="angry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/039.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="haha">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/042.svg"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-click">
                                            <a href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                            </a>
                                        </li>
                                        <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                            <a href="javascript:void(0)">
                                                <i class="iw-16 ih-16" data-feather="share"></i> share
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-section">
                                    <div class="comments d-none">
                                        <div class="ldr-comments">
                                            <ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="sub-comment">
                                                        <li>
                                                            <div class="media">
                                                                <div class="ldr-img"></div>
                                                                <div class="media-body">
                                                                    <div class="contents">
                                                                        <div class="ldr-content"></div>
                                                                        <div class="ldr-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="Pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>Oooo Very Cute and Sweet Dog, happy birthday Cuty....
                                                        &#128578;
                                                    </p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like (5)</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                            <div class="sub-comment">
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya elija"
                                                        data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya eliza"
                                                        data-img="{{ asset('assets/user/images/user-sm/4.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/4.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="loader">
                                                    <i class="iw-15 ih-15" data-feather="rotate-cw"></i> load more
                                                    replies
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>It’s party time, Sufiya..... and happy birthday cuty 🎉🎊</p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="search-input input-style input-lg icon-right">
                                            <input type="text" class="form-control emojiPicker"
                                                placeholder="write a comment..">
                                            <a href="javascript:void(0)">
                                                <i data-feather="smile" class="icon icon-2 iw-14 ih-14"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i data-feather="camera" class="icon iw-14 ih-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-wrapper col-grid-box section-t-space">
                            <div class="post-title">
                                <div class="profile">
                                    <div class="media">
                                        <a class="popover-cls user-img" data-bs-toggle="popover"
                                            data-placement="right" data-name="sufiya eliza"
                                            data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                            <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                        </a>
                                        <div class="media-body">
                                            <h5>sufiya eliza</h5>
                                            <h6>30 mins ago</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-btn ms-auto setting-dropdown no-bg">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-font-color iw-14" data-feather="more-horizontal"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="bookmark"></i>save post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-square"></i>hide post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-octagon"></i>unfollow sufiya</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-details ratio_55">
                                <div class="detail-box">
                                    <h3>Celebration new album song launched</h3>
                                    <h5 class="tag"><span>#Musiccelebration,</span> #music, #party, #music</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="bookmark favourite-btn">
                                        <i class="iw-14 ih-14" data-feather="bookmark"></i>
                                    </div>
                                    <div class="people-likes">
                                        <ul>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                        </ul>
                                        <h6>+12 people react this post</h6>
                                    </div>
                                </div>
                                <div class="like-panel">
                                    <div class="left-emoji">
                                        <ul>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                    alt="smile">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                    alt="heart">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                    alt="cry">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/033.svg"
                                                    alt="angry">
                                            </li>
                                        </ul>
                                        <h6>+75</h6>
                                    </div>
                                    <div class="right-stats">
                                        <ul>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="message-square"></i>
                                                    <span>4565</span> comment
                                                </h5>
                                            </li>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="share"></i><span>985</span>
                                                    share
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-react">
                                    <ul>
                                        <li class="react-btn">
                                            <a class="react-click" href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="smile"></i> react
                                            </a>
                                            <div class="react-box">
                                                <ul>
                                                    <li data-title="smile">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                                alt="smile">
                                                        </a>
                                                    </li>
                                                    <li data-title="love">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                                alt="heart">
                                                        </a>
                                                    </li>
                                                    <li data-title="cry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                                alt="cry">
                                                        </a>
                                                    </li>
                                                    <li data-title="wow">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/052.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="angry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/039.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="haha">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/042.svg"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-click">
                                            <a href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                            </a>
                                        </li>
                                        <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                            <a href="javascript:void(0)">
                                                <i class="iw-16 ih-16" data-feather="share"></i> share
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-section">
                                    <div class="comments d-none">
                                        <div class="ldr-comments">
                                            <ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="sub-comment">
                                                        <li>
                                                            <div class="media">
                                                                <div class="ldr-img"></div>
                                                                <div class="media-body">
                                                                    <div class="contents">
                                                                        <div class="ldr-content"></div>
                                                                        <div class="ldr-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="Pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>Oooo Very Cute and Sweet Dog, happy birthday Cuty....
                                                        &#128578;
                                                    </p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like (5)</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                            <div class="sub-comment">
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya elija"
                                                        data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya eliza"
                                                        data-img="{{ asset('assets/user/images/user-sm/4.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/4.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="loader">
                                                    <i class="iw-15 ih-15" data-feather="rotate-cw"></i> load more
                                                    replies
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>It’s party time, Sufiya..... and happy birthday cuty 🎉🎊</p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="search-input input-style input-lg icon-right">
                                            <input type="text" class="form-control emojiPicker"
                                                placeholder="write a comment..">
                                            <a href="javascript:void(0)">
                                                <i data-feather="smile" class="icon icon-2 iw-14 ih-14"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i data-feather="camera" class="icon iw-14 ih-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-wrapper col-grid-box section-t-space">
                            <div class="post-title">
                                <div class="profile">
                                    <div class="media">
                                        <a class="popover-cls user-img" data-bs-toggle="popover"
                                            data-placement="right" data-name="sufiya eliza"
                                            data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                            <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                        </a>
                                        <div class="media-body">
                                            <h5>sufiya eliza</h5>
                                            <h6>30 mins ago</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-btn ms-auto setting-dropdown no-bg">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-font-color iw-14" data-feather="more-horizontal"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="bookmark"></i>save post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-square"></i>hide post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-octagon"></i>unfollow sufiya</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-details">
                                <div class="img-wrapper">
                                    <img src="{{ asset('assets/user/images/post/2.jpg') }}"
                                        class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="detail-box">
                                    <h3>Celebration new album song launched</h3>
                                    <h5 class="tag"><span>#Musiccelebration,</span> #music, #party, #music</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="bookmark favourite-btn">
                                        <i class="iw-14 ih-14" data-feather="bookmark"></i>
                                    </div>
                                    <div class="people-likes">
                                        <ul>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                        </ul>
                                        <h6>+12 people react this post</h6>
                                    </div>
                                </div>
                                <div class="like-panel">
                                    <div class="left-emoji">
                                        <ul>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                    alt="smile">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                    alt="heart">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                    alt="cry">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/033.svg"
                                                    alt="angry">
                                            </li>
                                        </ul>
                                        <h6>+75</h6>
                                    </div>
                                    <div class="right-stats">
                                        <ul>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="message-square"></i>
                                                    <span>4565</span> comment
                                                </h5>
                                            </li>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="share"></i><span>985</span>
                                                    share
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-react">
                                    <ul>
                                        <li class="react-btn">
                                            <a class="react-click" href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="smile"></i> react
                                            </a>
                                            <div class="react-box">
                                                <ul>
                                                    <li data-title="smile">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                                alt="smile">
                                                        </a>
                                                    </li>
                                                    <li data-title="love">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                                alt="heart">
                                                        </a>
                                                    </li>
                                                    <li data-title="cry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                                alt="cry">
                                                        </a>
                                                    </li>
                                                    <li data-title="wow">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/052.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="angry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/039.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="haha">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/042.svg"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-click">
                                            <a href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                            </a>
                                        </li>
                                        <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                            <a href="javascript:void(0)">
                                                <i class="iw-16 ih-16" data-feather="share"></i> share
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-section">
                                    <div class="comments d-none">
                                        <div class="ldr-comments">
                                            <ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="sub-comment">
                                                        <li>
                                                            <div class="media">
                                                                <div class="ldr-img"></div>
                                                                <div class="media-body">
                                                                    <div class="contents">
                                                                        <div class="ldr-content"></div>
                                                                        <div class="ldr-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="Pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>Oooo Very Cute and Sweet Dog, happy birthday Cuty....
                                                        &#128578;
                                                    </p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like (5)</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                            <div class="sub-comment">
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya elija"
                                                        data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya eliza"
                                                        data-img="{{ asset('assets/user/images/user-sm/4.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/4.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="loader">
                                                    <i class="iw-15 ih-15" data-feather="rotate-cw"></i> load more
                                                    replies
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>It’s party time, Sufiya..... and happy birthday cuty 🎉🎊</p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="search-input input-style input-lg icon-right">
                                            <input type="text" class="form-control emojiPicker"
                                                placeholder="write a comment..">
                                            <a href="javascript:void(0)">
                                                <i data-feather="smile" class="icon icon-2 iw-14 ih-14"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i data-feather="camera" class="icon iw-14 ih-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-wrapper col-grid-box section-t-space">
                            <div class="post-title">
                                <div class="profile">
                                    <div class="media">
                                        <a class="popover-cls user-img" data-bs-toggle="popover"
                                            data-placement="right" data-name="sufiya eliza"
                                            data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                            <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                        </a>
                                        <div class="media-body">
                                            <h5>sufiya eliza</h5>
                                            <h6>30 mins ago</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-btn ms-auto setting-dropdown no-bg">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-font-color iw-14" data-feather="more-horizontal"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="bookmark"></i>save post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-square"></i>hide post</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="x-octagon"></i>unfollow sufiya</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-details ratio_55">
                                <div class="detail-box">
                                    <h3>Celebration new album song launched</h3>
                                    <h5 class="tag"><span>#Musiccelebration,</span> #music, #party, #music</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="bookmark favourite-btn">
                                        <i class="iw-14 ih-14" data-feather="bookmark"></i>
                                    </div>
                                    <div class="people-likes">
                                        <ul>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/1.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                            <li class="popover-cls" data-bs-toggle="popover" data-placement="right"
                                                data-name="sufiya eliza"
                                                data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="">
                                            </li>
                                        </ul>
                                        <h6>+12 people react this post</h6>
                                    </div>
                                </div>
                                <div class="like-panel">
                                    <div class="left-emoji">
                                        <ul>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                    alt="smile">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                    alt="heart">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                    alt="cry">
                                            </li>
                                            <li>
                                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/033.svg"
                                                    alt="angry">
                                            </li>
                                        </ul>
                                        <h6>+75</h6>
                                    </div>
                                    <div class="right-stats">
                                        <ul>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="message-square"></i>
                                                    <span>4565</span> comment
                                                </h5>
                                            </li>
                                            <li>
                                                <h5>
                                                    <i class="iw-16 ih-16" data-feather="share"></i><span>985</span>
                                                    share
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-react">
                                    <ul>
                                        <li class="react-btn">
                                            <a class="react-click" href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="smile"></i> react
                                            </a>
                                            <div class="react-box">
                                                <ul>
                                                    <li data-title="smile">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                                alt="smile">
                                                        </a>
                                                    </li>
                                                    <li data-title="love">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                                alt="heart">
                                                        </a>
                                                    </li>
                                                    <li data-title="cry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                                alt="cry">
                                                        </a>
                                                    </li>
                                                    <li data-title="wow">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/052.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="angry">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/039.svg"
                                                                alt="angry">
                                                        </a>
                                                    </li>
                                                    <li data-title="haha">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/042.svg"
                                                                alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-click">
                                            <a href="javascript:void(0)">
                                                <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                            </a>
                                        </li>
                                        <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                            <a href="javascript:void(0)">
                                                <i class="iw-16 ih-16" data-feather="share"></i> share
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-section">
                                    <div class="comments d-none">
                                        <div class="ldr-comments">
                                            <ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="sub-comment">
                                                        <li>
                                                            <div class="media">
                                                                <div class="ldr-img"></div>
                                                                <div class="media-body">
                                                                    <div class="contents">
                                                                        <div class="ldr-content"></div>
                                                                        <div class="ldr-content"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="ldr-img"></div>
                                                        <div class="media-body">
                                                            <div class="contents">
                                                                <div class="ldr-content"></div>
                                                                <div class="ldr-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="Pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>Oooo Very Cute and Sweet Dog, happy birthday Cuty....
                                                        &#128578;
                                                    </p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like (5)</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                            <div class="sub-comment">
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya elija"
                                                        data-img="{{ asset('assets/user/images/user-sm/3.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a href="#" class="user-img popover-cls"
                                                        data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya eliza"
                                                        data-img="{{ asset('assets/user/images/user-sm/4.jpg') }}">
                                                        <img src="{{ asset('assets/user/images/user-sm/4.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h5>sufiya elija</h5>
                                                        </a>
                                                        <p>Thank You So Much ❤❤</p>
                                                        <ul class="comment-option">
                                                            <li><a href="#">like</a></li>
                                                            <li><a href="#">reply</a></li>
                                                            <li><a href="#">translate</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <h6>50 mins ago</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="loader">
                                                    <i class="iw-15 ih-15" data-feather="rotate-cw"></i> load more
                                                    replies
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-comment">
                                            <div class="media">
                                                <a href="#" class="user-img popover-cls"
                                                    data-bs-toggle="popover" data-placement="right"
                                                    data-name="pabelo mukrani"
                                                    data-img="{{ asset('assets/user/images/user-sm/2.jpg') }}">
                                                    <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>Pabelo Mukrani</h5>
                                                    </a>
                                                    <p>It’s party time, Sufiya..... and happy birthday cuty 🎉🎊</p>
                                                    <ul class="comment-option">
                                                        <li><a href="#">like</a></li>
                                                        <li><a href="#">reply</a></li>
                                                        <li><a href="#">translate</a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <h6>50 mins ago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <div class="search-input input-style input-lg icon-right">
                                            <input type="text" class="form-control emojiPicker"
                                                placeholder="write a comment..">
                                            <a href="javascript:void(0)">
                                                <i data-feather="smile" class="icon icon-2 iw-14 ih-14"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i data-feather="camera" class="icon iw-14 ih-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="load-more" class="post-loader">
                        <div class="loader-icon">
                            <i class="icon-theme iw-25 ih-25" data-feather="rotate-ccw"></i>
                        </div>
                        <div class="no-more-text">
                            <p>no more post</p>
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <!-- birthday reminder -->
                    <div class="birthday-section event-sec">
                        <img src="{{ asset('assets/user/images/event-bg.jpg') }}"
                            class="img-fluid blur-up lazyload bg-img" alt="birthday">
                        <div class="birthday-top">
                            <div class="title">
                                <h3>college meet</h3>
                                <h6>today your collge group meeting</h6>
                            </div>
                            <div class="setting">
                                <div class="setting-btn light-btn">
                                    <a href="#" class="d-flex">
                                        <i class="icon icon-light stroke-width-3 iw-11 ih-11"
                                            data-feather="rotate-cw"></i>
                                    </a>
                                </div>
                                <div class="setting-btn light-btn ms-2 setting-dropdown">
                                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                        <a class="d-flex" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-light stroke-width-3 iw-12 ih-12" data-feather="sun"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="edit"></i>edit profile</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                            data-feather="user"></i>view profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="birthday-content">
                            <div class="image-section">
                                <div class="event-group">
                                    <div class="center-profile">
                                        <img src="{{ asset('assets/user/images/user-sm/3.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                    </div>
                                    <div class="center-profile">
                                        <img src="{{ asset('assets/user/images/user-sm/5.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                    </div>
                                    <div class="center-profile">
                                        <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                    </div>
                                    <div class="center-profile">
                                        <img src="{{ asset('assets/user/images/user-sm/2.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <h3><i class="icon-light me-2 stroke-width-3 iw-12 ih-12" data-feather="user"></i>56
                                    people
                                </h3>
                                <h6>glasgow, scotland</h6>
                                <p>Lorem 5th Sept 2019 dummy text of the printing and typesetting industry.
                                </p>
                                <form>
                                    <input type="text" placeholder="send invitation" class="form-control">
                                    <button type="submit">
                                        <i class="icon-light icon stroke-width-3 iw-13 ih-13"
                                            data-feather="arrow-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- gallery section -->
                    <div class="gallery-section section-t-space">
                        <div class="gallery-top">
                            <div class="card-title">
                                <h3>gallery</h3>
                                <h5>156 photos</h5>
                                <div class="settings">
                                    <div class="setting-btn">
                                        <a href="#">
                                            <i class="icon icon-dark stroke-width-3 iw-11 ih-11"
                                                data-feather="rotate-cw"></i>
                                        </a>
                                    </div>
                                    <div class="setting-btn ms-2 setting-dropdown">
                                        <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-dark stroke-width-3 icon iw-11 ih-11"
                                                    data-feather="sun"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="edit"></i>edit profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="user"></i>view profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-section ratio_square">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="overlay">
                                            <div class="portfolio-image">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#imageModel">
                                                    <img src="{{ asset('assets/user/images/story/1.jpg') }}"
                                                        alt="" class="img-fluid blur-up lazyload bg-img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="overlay">
                                            <div class="portfolio-image">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#imageModel">
                                                    <img src="{{ asset('assets/user/images/story/2.jpg') }}"
                                                        alt="" class="img-fluid blur-up lazyload bg-img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="overlay">
                                            <div class="portfolio-image">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#imageModel">
                                                    <img src="{{ asset('assets/user/images/story/3.jpg') }}"
                                                        alt="" class="img-fluid blur-up lazyload bg-img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 row m-0">
                                        <div class="col-12 pt-cls p-0">
                                            <div class="overlay">
                                                <div class="portfolio-image">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#imageModel">
                                                        <img src="{{ asset('assets/user/images/story/4.jpg') }}"
                                                            alt="" class="img-fluid blur-up lazyload bg-img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 pt-cls p-0">
                                            <div class="overlay">
                                                <div class="portfolio-image">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#imageModel">
                                                        <img src="{{ asset('assets/user/images/story/6.jpg') }}"
                                                            alt="" class="img-fluid blur-up lazyload bg-img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 pt-cls">
                                        <div class="overlay">
                                            <div class="portfolio-image">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#imageModel">
                                                    <img src="{{ asset('assets/user/images/story/5.jpg') }}"
                                                        alt="" class="img-fluid blur-up lazyload bg-img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sticky-top">
                        <!-- event -->
                        <div class="event-box section-t-space ratio2_3">
                            <div class="image-section">
                                <img src="{{ asset('assets/user/images/event/1.jpg') }}"
                                    class="img-fluid blur-up lazyload bg-img" alt="event">
                                <div class="card-title">
                                    <h3>event</h3>
                                    <div class="settings">
                                        <div class="setting-btn">
                                            <a href="#" class="d-flex">
                                                <i class="icon icon-dark stroke-width-3 iw-11 ih-11"
                                                    data-feather="rotate-cw"></i>
                                            </a>
                                        </div>
                                        <div class="setting-btn ms-2 setting-dropdown">
                                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="icon-dark stroke-width-3 icon iw-11 ih-11"
                                                        data-feather="sun"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="edit"></i>remind
                                                                me</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="settings"></i>setting</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                    <img src="{{ asset('assets/user/images/icon/play.png') }}"
                                        class="img-fluid blur-up lazyload" alt="play">
                                </div>
                            </div>
                            <div class="event-content">
                                <h3>christmas 2021</h3>
                                <h6>26 january 2021</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    <span>15256 People Going</span>
                                </p>
                                <div class="bottom-part">
                                    <a href="#" class="event-btn">going / not going</a>
                                </div>
                                <a href="#" class="share-btn">
                                    <i class="icon-dark stroke-width-3 iw-14 ih-14" data-feather="corner-up-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- suggestion box -->
                        <div class="suggestion-box section-t-space">
                            <div class="card-title">
                                <h3>your games</h3>
                                <h5>24 games</h5>
                                <div class="settings">
                                    <div class="setting-btn">
                                        <a href="#" class="d-flex">
                                            <i class="icon icon-dark stroke-width-3 iw-11 ih-11"
                                                data-feather="rotate-cw"></i>
                                        </a>
                                    </div>
                                    <div class="setting-btn setting-dropdown ms-2">
                                        <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-dark stroke-width-3 icon iw-11 ih-11"
                                                    data-feather="sun"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="user"></i>see all</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="search"></i>find
                                                            friends</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="settings"></i>settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="suggestion-content ratio_115">
                                <div class="slide-2 no-arrow default-space">
                                    <div>
                                        <div class="story-box">
                                            <div class="adaptive-overlay"></div>
                                            <div class="story-bg">
                                                <img src="{{ asset('assets/user/images/game/1.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img"
                                                    data-adaptive-background='1' alt="">
                                            </div>
                                            <div class="story-content">
                                                <h6>josephin water</h6>
                                                <span class="player"><i class="icon-light iw-10 ih-10"
                                                        data-feather="user"></i>15k</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="story-box">
                                            <div class="adaptive-overlay"></div>
                                            <div class="story-bg">
                                                <img src="{{ asset('assets/user/images/game/2.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img"
                                                    data-adaptive-background='1' alt="">
                                            </div>
                                            <div class="story-content">
                                                <h6>josephin water</h6>
                                                <span class="player"><i class="icon-light iw-10 ih-10"
                                                        data-feather="user"></i>30k</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="story-box">
                                            <div class="adaptive-overlay"></div>
                                            <div class="story-bg">
                                                <img src="{{ asset('assets/user/images/game/3.jpg') }}"
                                                    class="img-fluid blur-up lazyload bg-img"
                                                    data-adaptive-background='1' alt="">
                                            </div>
                                            <div class="story-content">
                                                <h6>josephin water</h6>
                                                <span class="player"> <img
                                                        src="{{ asset('assets/user/images/icon/user-w.png') }}"
                                                        class="img-fluid blur-up lazyload" alt="">25k</span>
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
    </div>




@stop
