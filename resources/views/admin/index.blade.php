@extends('admin.admin_master')
@section('admin')

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> LabForBeer</a></div>

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
        <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
            </li>
        </ul><!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
                <div class="media-list">
                    <!-- loop starts here -->
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul,
                                    like these sweet mornings of spring.</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                                <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                                <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the
                                    present moment...</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                                <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                                <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me,
                                    and the meridian sun strikes...</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul,
                                    like these sweet mornings of spring.</p>
                            </div>
                        </div><!-- media -->
                    </a>
                </div><!-- media-list -->
                <div class="pd-15">
                    <a href=""
                       class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View
                        More Messages</a>
                </div>
            </div><!-- #messages -->

            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
                <div class="media-list">
                    <!-- loop starts here -->
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                        Bungaos</strong> tagged you and 18 others in a post.</p>
                                <span class="tx-12">October 03, 2017 8:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                        Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                        Social Network</strong></p>
                                <span class="tx-12">October 02, 2017 12:44am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">October 01, 2017 10:20pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                        Erving</strong> wants to connect with you on your conversation with <strong
                                        class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                <span class="tx-12">October 01, 2017 6:08pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                        Bungaos</strong> tagged you and 12 others in a post.</p>
                                <span class="tx-12">September 27, 2017 6:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">September 28, 2017 11:30pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                        Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great
                                        Pyramid</strong></p>
                                <span class="tx-12">September 26, 2017 11:01am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                        Erving</strong> wants to connect with you on your conversation with <strong
                                        class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                <span class="tx-12">September 23, 2017 9:19pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                </div><!-- media-list -->
            </div><!-- #notifications -->

        </div><!-- tab-content -->
    </div>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">

            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$850</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="card pd-20 bg-info">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$4,625</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-purple">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$11,908</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-sl-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$91,239</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div><!-- row -->

            <div class="row row-sm mg-t-20">
                <div class="col-xl-8">
                    <div class="card overflow-hidden">
                        <div
                            class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
                            <div class="mg-b-20 mg-sm-b-0">
                                <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Profile
                                    Statistics</h6>
                                <span class="d-block tx-12">October 23, 2017</span>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" class="btn btn-secondary tx-12 active">Today</a>
                                <a href="#" class="btn btn-secondary tx-12">This Week</a>
                                <a href="#" class="btn btn-secondary tx-12">This Month</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body pd-0 bd-color-gray-lighter">
                            <div class="row no-gutters tx-center">
                                <div class="col-12 col-sm-4 pd-y-20 tx-left">
                                    <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit. Aenean commodo ligula...</p>
                                </div><!-- col-4 -->
                                <div class="col-6 col-sm-2 pd-y-20">
                                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">6,112</h4>
                                    <p class="tx-11 mg-b-0 tx-uppercase">Views</p>
                                </div><!-- col-2 -->
                                <div class="col-6 col-sm-2 pd-y-20 bd-l">
                                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">102</h4>
                                    <p class="tx-11 mg-b-0 tx-uppercase">Likes</p>
                                </div><!-- col-2 -->
                                <div class="col-6 col-sm-2 pd-y-20 bd-l">
                                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">343</h4>
                                    <p class="tx-11 mg-b-0 tx-uppercase">Comments</p>
                                </div><!-- col-2 -->
                                <div class="col-6 col-sm-2 pd-y-20 bd-l">
                                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">960</h4>
                                    <p class="tx-11 mg-b-0 tx-uppercase">Shares</p>
                                </div><!-- col-2 -->
                            </div><!-- row -->
                        </div><!-- card-body -->
                        <div class="card-body pd-0">
                            <div id="rickshaw2" class="wd-100p ht-200"></div>
                        </div><!-- card-body -->
                    </div><!-- card -->

                    <div class="card pd-20 pd-sm-25 mg-t-20">
                        <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
                        <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths
                            proportional to the values that they represent.</p>
                        <canvas id="chartBar4" height="300"></canvas>
                    </div><!-- card -->

                </div><!-- col-8 -->
                <div class="col-xl-4 mg-t-20 mg-xl-t-0">

                    <div class="card pd-20 pd-sm-25">
                        <h6 class="card-body-title">Pie Chart</h6>
                        <p class="mg-b-20 mg-sm-b-30">Labels can be hidden if the slice is less than a given percentage of
                            the pie.</p>
                        <div id="flotPie2" class="ht-200 ht-sm-250"></div>
                    </div><!-- card -->

                    <div class="card widget-messages mg-t-20">
                        <div class="card-header">
                            <span>Messages</span>
                            <a href=""><i class="icon ion-more"></i></a>
                        </div><!-- card-header -->
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item list-group-item-action media">
                                <img src="../img/img10.jpg" alt="">
                                <div class="media-body">
                                    <div class="msg-top">
                                        <span>Mienard B. Lumaad</span>
                                        <span>4:09am</span>
                                    </div>
                                    <p class="msg-summary">Many desktop publishing packages and web page editors now
                                        use...</p>
                                </div><!-- media-body -->
                            </a><!-- list-group-item -->
                            <a href="" class="list-group-item list-group-item-action media">
                                <img src="../img/img9.jpg" alt="">
                                <div class="media-body">
                                    <div class="msg-top">
                                        <span>Isidore Dilao</span>
                                        <span>Yesterday 3:00am</span>
                                    </div>
                                    <p class="msg-summary">On the other hand, we denounce with righteous indignation and
                                        dislike...</p>
                                </div><!-- media-body -->
                            </a><!-- list-group-item -->
                            <a href="" class="list-group-item list-group-item-action media">
                                <img src="../img/img8.jpg" alt="">
                                <div class="media-body">
                                    <div class="msg-top">
                                        <span>Kirby Avendula</span>
                                        <span>Yesterday 3:00am</span>
                                    </div>
                                    <p class="msg-summary">It is a long established fact that a reader will be distracted by
                                        the readable...</p>
                                </div><!-- media-body -->
                            </a><!-- list-group-item -->
                            <a href="" class="list-group-item list-group-item-action media">
                                <img src="../img/img7.jpg" alt="">
                                <div class="media-body">
                                    <div class="msg-top">
                                        <span>Roven Galeon</span>
                                        <span>Yesterday 3:00am</span>
                                    </div>
                                    <p class="msg-summary">Than the fact that climate change may be causing it to rapidly
                                        disappear... </p>
                                </div><!-- media-body -->
                            </a><!-- list-group-item -->
                        </div><!-- list-group -->
                        <div class="card-footer">
                            <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div><!-- row -->

        </div><!-- sl-pagebody -->
        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
                <div>Made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5"
                   href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i
                        class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5"
                   href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i
                        class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div>

@endsection
