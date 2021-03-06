@extends('layouts.app')
@section('content')
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        @if(isset($articleDetail))
                            <div ><a href="{{route('home')}}">Home / </a> <a href="{{route('get.list.article')}}"> Bài viết / </a> {{$articleDetail->a_name}}</div>
                            <br>
                            <div class="blog-title-area text-center">

                                <h3>{{$articleDetail->a_name}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="tech-single.html" title="">{{\Carbon\Carbon::parse($articleDetail->created_at)->diffForHumans()}}</a></small>
                                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> {{$articleDetail->a_view}}</a></small>
                                </div><!-- end meta -->
                                <br>
                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->
                            <br>
                            <div class="blog-content">
                                <div class="pp">
                                    {!! $articleDetail->a_content !!}
                                </div><!-- end pp -->
                            </div><!-- end content -->
                        @endif
                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <hr class="invis1">

                        <div class="custombox prevnextpost clearfix">
                            <div class="row">
                                @if(isset($articleDetailPNext))
                                    <div class="col-lg-6">
                                        <div class="blog-list-widget">
                                            <div class="list-group">
                                                <a href="{{route('get.detail.article', [$articleDetailPNext->a_slug])}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between">
                                                        <img src="{{pare_url_file($articleDetailPNext->a_avatar)}}" alt="{{$articleDetailPNext->a_avatar}}" class="img-fluid float-left">
                                                        <h5 class="mb-1" style="margin: 10px 10px 15px;">{{$articleDetailPNext->a_name}}</h5>
                                                        <small>Trang trước</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if(isset($articleDetailPrev))
                                    <div class="col-lg-6">
                                        <div class="blog-list-widget">
                                            <div class="list-group">
                                                <a href="{{route('get.detail.article', [$articleDetailPrev->a_slug])}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between">
                                                        <img src="{{pare_url_file($articleDetailPrev->a_avatar)}}" alt="{{$articleDetailPrev->a_avatar}}" class="img-fluid float-left">
                                                        <br>
                                                        <h5 class="mb-1" style="margin: 10px 10px 15px;">{{$articleDetailPrev->a_name}}</h5>
                                                        <small>Trang sau</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            <!-- end col -->

                                <!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                        <hr class="invis1">


                        <div class="custombox">
                            <br>
                            <h4 class="small-title"> Comments</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        <div class="media">
                                            <div id="fb-root"></div>
                                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=2744003585720579&autoLogAppEvents=1" nonce="2qxYr4Iu"></script>
                                            <div class="fb-comments" data-href="http://webshopping.com/{{$articleDetail->a_slug}}" data-numposts="5" data-width=""></div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        {{--                            <hr class="invis1">--}}

                        {{--                            <div class="custombox">--}}
                        {{--                                <h4 class="small-title">Leave a Reply</h4>--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-lg-12">--}}
                        {{--                                        @if(Auth::check())--}}
                        {{--                                            <a class="media-left" href="#">--}}
                        {{--                                                <img src="{{asset('tech-blogs/upload/author.jpg')}}" alt="" class="rounded-circle">--}}
                        {{--                                            </a>--}}
                        {{--                                            <div class="media-body">--}}
                        {{--                                                <h4 class="media-heading user_name"> {{ Auth::user()->email}}</h4>--}}
                        {{--                                            </div>--}}
                        {{--                                            <form class="form-wrapper">--}}
                        {{--                                                <textarea class="form-control" placeholder="Your comment"></textarea>--}}
                        {{--                                                <button type="submit" class="btn btn-primary">Submit Comment</button>--}}
                        {{--                                            </form>--}}
                        {{--                                        @endif--}}

                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="{{asset('tech-blogs/upload/banner_07.jpg')}}" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h3 class="widget-title">Bài viết nổi bật</h3>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @if(isset($articlesHot))
                                        @foreach($articlesHot as $aHot)
                                            <a href="{{route('get.detail.article', [$aHot->a_slug])}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="{{pare_url_file($aHot->a_avatar)}}" alt="{{$aHot->a_avatar}}" class="img-fluid float-left" style="margin: 0 0 25px;">
                                                    <h5 class="mb-1" >{{$aHot->a_name}}.</h5>
                                                    <small>{{\Carbon\Carbon::parse($aHot->created_at)->diffForHumans()}}</small>
                                                </div>
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div><!-- end blog-list -->
                        </div>


                        <div class="widget">
                            <h2 class="widget-title">Follow Us</h2>

                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button facebook-button">
                                        <i class="fa fa-facebook"></i>
                                        <p>27k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button twitter-button">
                                        <i class="fa fa-twitter"></i>
                                        <p>98k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button google-button">
                                        <i class="fa fa-google-plus"></i>
                                        <p>17k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button youtube-button">
                                        <i class="fa fa-youtube"></i>
                                        <p>22k</p>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end widget -->

                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="{{asset('tech-blogs/upload/banner_03.jpg')}}" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->

    </section>

@stop

