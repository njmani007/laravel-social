<!-- conversation panel start -->
<div class="conversation-panel xl-light">
    <div class="panel-header">
        <h2>friends</h2>
        <h5>start new conversation</h5>
        <div class="setting">
            <div class="setting-btn setting-dropdown">
                <div class="btn-group custom-dropdown dropdown-sm">
                    <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-theme stroke-width-3 icon iw-11 ih-11" data-feather="sun"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                        <ul>
                            <li>
                                <a href="#"><i class="icon-font-light iw-16 ih-16" data-feather="user"></i>see
                                    all</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-font-light iw-16 ih-16" data-feather="search"></i>find
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
    <div class="search-bar">
        <div class="lg-search">
            <i data-feather="search" class="icon-theme icon iw-16"></i>
            <input type="text" class="form-control" placeholder="find friends...">
        </div>
        <div class="xs-search">
            <div class="icon-search">
                <i data-feather="search" class="icon-dark iw-16"></i>
            </div>
            <div class="lg-search">
                <i data-feather="search" class="icon-dark icon iw-16"></i>
                <input type="text" class="form-control" placeholder="find friends...">
                <div class="icon-close">
                    <i data-feather="x" class="icon-dark iw-16"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="friend-section">
        <div class="header-section">
            <a data-bs-toggle="collapse" href="#accordion" aria-expanded="true" class="">close friends
                <div class="down-arrow">
                    <i data-feather="chevron-down" class="icon-theme iw-14 ih-14"></i>
                </div>
            </a>
        </div>
        <div id="accordion" class="friend-list collapse show">
            <ul>
                <li class="friend-box user1">
                    <div class="media">
                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="bottom"
                            data-name="paige turner" data-img="{{asset('assets/user/images/user-sm/1.jpg')}}">
                            <img src="{{asset('assets/user/images/user-sm/1.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                alt="user">
                            <span class="available-stats"></span>
                        </a>
                        <div class="media-body">
                            <h5 class="user-name">Paige Turner</h5>
                            <h6>alabma, USA</h6>
                        </div>
                    </div>
                </li>
                <li class="friend-box user2">
                    <div class="media">
                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="bottom"
                            data-name="bob frapples" data-img="{{asset('assets/user/images/user-sm/2.jpg')}}">
                            <img src="{{asset('assets/user/images/user-sm/2.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                alt="user">
                            <span class="available-stats online"></span>
                        </a>
                        <div class="media-body">
                            <h5 class="user-name">Bob Frapples</h5>
                            <h6>alabma, USA</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="friend-section">
        <div class="header-section">
            <a data-bs-toggle="collapse" href="#accordion1" class="">recent chats
                <div class="down-arrow">
                    <i data-feather="chevron-down" class="icon-theme iw-14 ih-14"></i>
                </div>
            </a>
        </div>
        <div id="accordion1" class="friend-list collapse show">
            <ul>
                <li class="friend-box user3">
                    <div class="media">
                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="bottom"
                            data-name="josephin water" data-img="{{asset('assets/user/images/user-sm/3.jpg')}}">
                            <img src="{{asset('assets/user/images/user-sm/3.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                alt="user">
                            <span class="available-stats"></span>
                        </a>
                        <div class="media-body">
                            <h5 class="user-name">Josephin water</h5>
                            <h6>alabma, USA</h6>
                        </div>
                    </div>
                </li>
                <li class="friend-box user4">
                    <div class="media">
                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="right"
                            data-name="petey cruiser" data-img="{{asset('assets/user/images/user-sm/4.jpg')}}">
                            <img src="{{asset('assets/user/images/user-sm/4.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                alt="user">
                            <span class="available-stats offline"></span>
                        </a>
                        <div class="media-body">
                            <h5 class="user-name">Petey Cruiser</h5>
                            <h6>alabma, USA</h6>
                        </div>
                    </div>
                </li>
                <li class="friend-box user5">
                    <div class="media">
                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="right"
                            data-name="anna sthesia" data-img="{{asset('assets/user/images/user-sm/5.jpg')}}">
                            <img src="{{asset('assets/user/images/user-sm/5.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                alt="user">
                            <span class="available-stats online"></span>
                        </a>
                        <div class="media-body">
                            <h5 class="user-name">Anna Sthesia</h5>
                            <h6>alabma, USA</h6>
                        </div>
                    </div>
                </li>
                <li class="friend-box user6">
                    <div class="media">
                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="right"
                            data-name="paul molive" data-img="{{asset('assets/user/images/user-sm/6.jpg')}}">
                            <img src="{{asset('assets/user/images/user-sm/6.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                alt="user">
                            <span class="available-stats"></span>
                        </a>
                        <div class="media-body">
                            <h5 class="user-name">Paul Molive</h5>
                            <h6>alabma, USA</h6>
                        </div>
                    </div>
                </li>
                <li class="friend-box user7">
                    <div class="media">
                        <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="right"
                            data-name="anna mull" data-img="{{asset('assets/user/images/user-sm/7.jpg')}}">
                            <img src="{{asset('assets/user/images/user-sm/7.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                alt="user">
                            <span class="available-stats away"></span>
                        </a>
                        <div class="media-body">
                            <h5 class="user-name">Anna Mull</h5>
                            <h6>alabma, USA</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- conversation panel end -->


</div>
<!-- page body end -->


<!-- story model start -->
<div class="modal story-model" id="storyModel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="story-bg">
                    <div class="container-fluid p-0">
                        <div class="row m-0">
                            <div class="left-box col-xl-3 col-lg-4">
                                <div class="model-title">
                                    <div class="title-main">
                                        <h2>stories</h2>
                                    </div>
                                    <div class="title-setting">
                                        <ul>
                                            <li><a href="#">archive</a></li>
                                            <li><a href="#">settings</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-flex">
                                    <div class="add-story">
                                        <h4 class="story-title">your story</h4>
                                        <div class="media list-media">
                                            <div class="story-img" data-bs-toggle="modal" data-bs-target="#addStory">
                                                <div class="user-img">
                                                    <img src="{{asset('assets/user/images/story-bg.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                </div>
                                                <div class="add-icon">
                                                    <div class="icon">
                                                        <img src="{{asset('assets/user/images/icon/plus.png')}}"
                                                            class="img-fluid blur-up lazyload" alt="plus">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5>add story</h5>
                                                <h6>share your photos or video</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="friend-story">
                                        <h4 class="story-title">all stories</h4>
                                        <div class="slider-nav">
                                            <div>
                                                <div class="media list-media">
                                                    <div class="story-img seen">
                                                        <div class="user-img">
                                                            <img src="{{asset('assets/user/images/user-sm/1.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Petey Cruiser</h5>
                                                        <h6>2 hours ago</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="media list-media">
                                                    <div class="story-img seen">
                                                        <div class="user-img">
                                                            <img src="{{asset('assets/user/images/user-sm/2.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Anna Sthesia</h5>
                                                        <h6>3 hours ago</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="media list-media">
                                                    <div class="story-img">
                                                        <div class="user-img">
                                                            <img src="{{asset('assets/user/images/user-sm/3.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Paul Molive</h5>
                                                        <h6>5 hours ago</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="media list-media">
                                                    <div class="story-img">
                                                        <div class="user-img">
                                                            <img src="{{asset('assets/user/images/user-sm/4.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Anna Mull</h5>
                                                        <h6>5 hours ago</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="media list-media">
                                                    <div class="story-img">
                                                        <div class="user-img">
                                                            <img src="{{asset('assets/user/images/user-sm/5.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Paige Turner</h5>
                                                        <h6>5 hours ago</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="media list-media">
                                                    <div class="story-img">
                                                        <div class="user-img">
                                                            <img src="{{asset('assets/user/images/user-sm/6.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Bob Frapples</h5>
                                                        <h6>5 hours ago</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-box col-xl-9 col-lg-8 p-0">
                                <a href="#" data-bs-dismiss="modal"><i data-feather="x"
                                        class="icon-light close"></i></a>
                                <div class="sliderContainer">
                                    <div class="slider single-item">
                                        <div>
                                            <div class="story-image"><img src="{{asset('assets/user/images/post/1.jpg')}}"
                                                    class="img-fluid blur-up lazyload" alt=""></div>
                                        </div>
                                        <div>
                                            <div class="story-image"><img src="{{asset('assets/user/images/post/2.jpg')}}"
                                                    class="img-fluid blur-up lazyload" alt=""></div>
                                        </div>
                                        <div>
                                            <div class="story-image"><img src="{{asset('assets/user/images/post/3.jpg')}}"
                                                    class="img-fluid blur-up lazyload" alt=""></div>
                                        </div>
                                        <div>
                                            <div class="story-image"><img src="{{asset('assets/user/images/post/4.jpg')}}"
                                                    class="img-fluid blur-up lazyload" alt=""></div>
                                        </div>
                                        <div>
                                            <div class="story-image"><img src="{{asset('assets/user/images/post/5.jpg')}}"
                                                    class="img-fluid blur-up lazyload" alt=""></div>
                                        </div>
                                        <div>
                                            <div class="story-image"><img src="{{asset('assets/user/images/post/6.jpg')}}"
                                                    class="img-fluid blur-up lazyload" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="progressBarContainer">
                                        <div class="item">
                                            <span data-slick-index="0" class="progressBar"></span>
                                        </div>
                                        <div class="item">
                                            <span data-slick-index="1" class="progressBar"></span>
                                        </div>
                                        <div class="item">
                                            <span data-slick-index="2" class="progressBar"></span>
                                        </div>
                                        <div class="item">
                                            <span data-slick-index="3" class="progressBar"></span>
                                        </div>
                                        <div class="item">
                                            <span data-slick-index="4" class="progressBar"></span>
                                        </div>
                                        <div class="item">
                                            <span data-slick-index="5" class="progressBar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="reply-section">
                                    <div class="reply-form">
                                        <input class="form-control" placeholder="reply...">
                                    </div>
                                    <ul class="emoji icon-xl">
                                        <li><img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/040.svg"
                                                class="img-fluid blur-up lazyload" alt="smile">
                                        </li>
                                        <li><img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/113.svg"
                                                class="img-fluid blur-up lazyload" alt="smile">
                                        </li>
                                        <li><img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/027.svg"
                                                class="img-fluid blur-up lazyload" alt="smile">
                                        </li>
                                        <li><img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/052.svg"
                                                class="img-fluid blur-up lazyload" alt="smile">
                                        </li>
                                        <li><img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/039.svg"
                                                class="img-fluid blur-up lazyload" alt="smile">
                                        </li>
                                        <li><img src="https://themes.pixelstrap.com/friendbook/assets/svg/emoji/042.svg"
                                                class="img-fluid blur-up lazyload" alt="smile">
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- story model end -->


<!-- video player model start -->
<div class="modal fade bd-example-modal-lg" id="videoPlayer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body video-model">
                <iframe class="video" src="https://www.youtube.com/embed/TKnufs85hXk"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- video player model end -->


<!-- gallery image model -->
<div class="modal comment-model" id="imageModel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div>
                <div class="image-gallery">
                    <div class="row m-0">
                        <div class="col-xl-9 col-lg-8 p-0">
                            <a href="#" data-bs-dismiss="modal"><i data-feather="x"
                                    class="icon-light close-btn"></i></a>
                            <div class="slide-1 box-arrow dots-number">
                                <div>
                                    <div class="img-part">
                                        <img src="{{asset('assets/user/images/post/15.jpg')}}" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-part">
                                        <img src="{{asset('assets/user/images/post/16.jpg')}}" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-part">
                                        <img src="{{asset('assets/user/images/post/17.jpg')}}" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 p-0">
                            <div class="comment-part">
                                <div class="user-detail">
                                    <div class="user-media">
                                        <div class="media">
                                            <a class="user-img">
                                                <img src="{{asset('assets/user/images/user-sm/1.jpg')}}"
                                                    class="img-fluid blur-up lazyload bg-img" alt="user">
                                                <span class="available-stats"></span>
                                            </a>
                                            <div class="media-body">
                                                <h5 class="user-name">Paige Turner
                                                </h5>
                                                <h6>alabma, USA</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-btn ms-auto setting-dropdown no-bg">
                                        <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                            <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon icon-font-color iw-14"
                                                    data-feather="more-horizontal"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="bookmark"></i>save
                                                            post</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="edit"></i>edit
                                                            post</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="icon-font-light iw-16 ih-16"
                                                                data-feather="x-square"></i>hide
                                                            post</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-panel mb-0">
                                    <div class="post-wrapper">
                                        <div class="post-details">
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
                                                    </ul>
                                                    <h6>+75</h6>
                                                </div>
                                                <div class="right-stats">
                                                    <ul>
                                                        <li>
                                                            <h5>
                                                                <i class="iw-16 ih-16"
                                                                    data-feather="message-square"></i>
                                                                <span>4565</span> comment
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h5>
                                                                <i class="iw-16 ih-16"
                                                                    data-feather="share"></i><span>985</span> share
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
                                                            <i class="iw-18 ih-18" data-feather="message-square"></i>
                                                            comment
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
                                                                    <div class="ldr-img">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="contents">
                                                                            <div class="ldr-content">
                                                                            </div>
                                                                            <div class="ldr-content">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="sub-comment">
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="ldr-img">
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div class="contents">
                                                                                    <div class="ldr-content">
                                                                                    </div>
                                                                                    <div class="ldr-content">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="media">
                                                                    <div class="ldr-img">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="contents">
                                                                            <div class="ldr-content">
                                                                            </div>
                                                                            <div class="ldr-content">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="media">
                                                                    <div class="ldr-img">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="contents">
                                                                            <div class="ldr-content">
                                                                            </div>
                                                                            <div class="ldr-content">
                                                                            </div>
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
                                                                data-img="{{asset('assets/user/images/user-sm/2.jpg')}}">
                                                                <img src="{{asset('assets/user/images/user-sm/2.jpg')}}"
                                                                    class="img-fluid blur-up lazyload bg-img"
                                                                    alt="user">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    <h5>Pabelo Mukrani
                                                                    </h5>
                                                                </a>
                                                                <p>Oooo Very Cute and Sweet Dog, happy birthday
                                                                    Cuty.... &#128578;
                                                                </p>
                                                                <ul class="comment-option">
                                                                    <li><a href="#">like
                                                                            (5)</a>
                                                                    </li>
                                                                    <li><a href="#">reply</a>
                                                                    </li>
                                                                    <li><a href="#">translate</a>
                                                                    </li>
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
                                                                    data-img="{{asset('assets/user/images/user-sm/3.jpg')}}">
                                                                    <img src="{{asset('assets/user/images/user-sm/3.jpg')}}"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt="user">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h5>sufiya elija
                                                                        </h5>
                                                                    </a>
                                                                    <p>Thank You So Much ❤❤</p>
                                                                    <ul class="comment-option">
                                                                        <li><a href="#">like</a>
                                                                        </li>
                                                                        <li><a href="#">reply</a>
                                                                        </li>
                                                                        <li><a href="#">translate</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="comment-time">
                                                                    <h6>50 mins ago
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <a href="#" class="user-img popover-cls"
                                                                    data-bs-toggle="popover" data-placement="right"
                                                                    data-name="sufiya eliza"
                                                                    data-img="{{asset('assets/user/images/user-sm/4.jpg')}}">
                                                                    <img src="{{asset('assets/user/images/user-sm/4.jpg')}}"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt="user">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h5>sufiya elija
                                                                        </h5>
                                                                    </a>
                                                                    <p>Thank You So Much ❤❤</p>
                                                                    <ul class="comment-option">
                                                                        <li><a href="#">like</a>
                                                                        </li>
                                                                        <li><a href="#">reply</a>
                                                                        </li>
                                                                        <li><a href="#">translate</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="comment-time">
                                                                    <h6>50 mins ago
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <a href="javascript:void(0)" class="loader">
                                                                <i class="iw-15 ih-15" data-feather="rotate-cw"></i>
                                                                load more replies
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="main-comment">
                                                        <div class="media">
                                                            <a href="#" class="user-img popover-cls"
                                                                data-bs-toggle="popover" data-placement="right"
                                                                data-name="pabelo mukrani"
                                                                data-img="{{asset('assets/user/images/user-sm/2.jpg')}}">
                                                                <img src="{{asset('assets/user/images/user-sm/2.jpg')}}"
                                                                    class="img-fluid blur-up lazyload bg-img"
                                                                    alt="user">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    <h5>Pabelo Mukrani
                                                                    </h5>
                                                                </a>
                                                                <p>It’s party time, Sufiya..... and happy birthday
                                                                    cuty 🎉🎊
                                                                </p>
                                                                <ul class="comment-option">
                                                                    <li><a href="#">like</a>
                                                                    </li>
                                                                    <li><a href="#">reply</a>
                                                                    </li>
                                                                    <li><a href="#">translate</a>
                                                                    </li>
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
                                                            <i data-feather="smile"
                                                                class="icon icon-2 iw-14 ih-14"></i>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- share post model start -->
<div class="modal fade mobile-full-width" id="shareModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content share-modal">
            <div class="modal-header">
                <div class="setting-dropdown">
                    <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                        <h5 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">share as post <i
                                class="iw-14" data-feather="chevron-down"></i></h5>
                        <div class="dropdown-menu custom-dropdown">
                            <ul>
                                <li>
                                    <a href="#">share as post</a>
                                </li>
                                <li>
                                    <a href="#">on friend's feed</a>
                                </li>
                                <li>
                                    <a href="#">in a group</a>
                                </li>
                                <li>
                                    <a href="#">share as message</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x" class="icon-light close-btn"></i></a>


            </div>
            <div class="modal-body">
                <div class="user-info">
                    <div class="media">
                        <a href="#" class="user-img">
                            <img src="{{asset('assets/user/images/user-sm/2.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                alt="user">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h5>Pabelo Mukrani</h5>
                            </a>
                            <div class="setting-dropdown">
                                <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                    <h6 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-font-light left-icon iw-12 ih-12"
                                            data-feather="globe"></i>public <i class="iw-14"
                                            data-feather="chevron-down"></i>
                                    </h6>
                                    <div class="dropdown-menu custom-dropdown">
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
                                                        data-feather="lock"></i>only
                                                    me</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-section">
                    <input type="text" class="form-control emojiPicker" placeholder="write a comment..">
                </div>
                <div class="post-section ratio2_1">
                    <div class="post-img">
                        <img src="{{asset('assets/user/images/post/1.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt="">
                    </div>
                    <div class="post-content">
                        <h3>Today Our Three Cute Puppy Dog Birthday !!!!</h3>
                        <h5 class="tag"><span>#ourcutepuppy,</span> #puppy, #birthday, #dog</h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-solid">share post</button>
            </div>
        </div>
    </div>
</div>
<!-- share post model end -->


<!-- add post/story model start -->
<div class="modal fade" id="addStory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
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
                                <img src="{{asset('assets/user/images/icon/translate.png')}}" class="img-fluid blur-up lazyload icon"
                                    alt="translate">
                            </a>
                        </div>
                    </div>
                    <div class="create-bg">
                        <div class="bg-post" id="bg-post1">
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
                            <li onclick="clickGradient( 'gr-1')" class="gr-1"></li>
                            <li onclick="clickGradient( 'gr-2')" class="gr-2"></li>
                            <li onclick="clickGradient( 'gr-3')" class="gr-3"></li>
                            <li onclick="clickGradient( 'gr-4')" class="gr-4"></li>
                            <li onclick="clickGradient( 'gr-5')" class="gr-5"></li>
                            <li onclick="clickGradient( 'gr-6')" class="gr-6"></li>
                            <li onclick="clickGradient( 'gr-7')" class="gr-7"></li>
                            <li onclick="clickGradient( 'gr-8')" class="gr-8"></li>
                            <li onclick="clickGradient( 'gr-9')" class="gr-9"></li>
                            <li onclick="clickGradient( 'gr-10')" class="gr-10"></li>
                            <li onclick="clickGradient( 'gr-11')" class="gr-11"></li>
                            <li onclick="clickGradient( 'gr-12')" class="gr-12"></li>
                            <li onclick="clickGradient( 'gr-13')" class="gr-13"></li>
                            <li onclick="clickGradient( 'gr-14')" class="gr-14"></li>
                            <li onclick="clickGradient( 'gr-15')" class="gr-15"></li>
                        </ul>
                    </div>
                    <ul class="create-btm-option">
                        <li>
                            <input class="choose-file" type="file">
                            <h5><i class="iw-14" data-feather="camera"></i>album</h5>
                        </li>
                        <li>
                            <h5><i class="iw-15" data-feather="smile"></i>feelings & acitivity</h5>
                        </li>
                        <li>
                            <h5><i class="iw-15" data-feather="map-pin"></i>check in</h5>
                        </li>
                        <li>
                            <h5><i class="iw-15" data-feather="tag"></i>tag friends</h5>
                        </li>
                    </ul>
                    <div id="post-btn1" class="post-btn">
                        <button disabled="disabled" class="Disable">post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- add post/story model end -->

