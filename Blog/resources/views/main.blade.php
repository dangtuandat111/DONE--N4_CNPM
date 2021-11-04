@extends('master')

@section('Main')
<!-- Side-bar Here -->
<div class = "share-side-bar">
    <nav>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="fab fa-twitter" ></i><span>Twitter</span></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
        </ul>
    </nav>
</div>
<!-- Side-bar End Here -->

<!-- Blog Posts Here -->
<div class="blog-posts">
    <div class="container">

        <div class= "col-lg-12">
            <div class = "sidebar-item recent-posts">
                <div class ="sidebar-heading">
                    <h2>Recent Posts</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('Blog_resources/images/blog-post-01.jpg') }}" alt="" />
                                </div>
                                <div class="down-content">
                                    <span>TRAVEL</span>
                                    <a href="post-details.html"><h4>TODO: Tittle for Travel Blog</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">TODO: Date</a></li>
                                        <li><a href="#">TODO: Views</a></li>
                                        <li><a href="#">TODO: Comments</a></li>
                                    </ul>
                                    <p>
                                        Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed
                                        to re-distribute the template ZIP file on any template collection site for the download purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for
                                        more info. Thank you.
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Tags1</a>,</li>
                                                    <li><a href="#">Tags2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('Blog_resources/images/blog-post-02.jpg') }}" alt="" />
                                </div>
                                <div class="down-content">
                                    <span>Food</span>
                                    <a href="post-details.html"><h4>TODO: Tittle for Travel Food</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">TODO: Date</a></li>
                                        <li><a href="#">TODO: Views</a></li>
                                        <li><a href="#">TODO: Comments</a></li>
                                    </ul>
                                    <p>
                                        You can support us by contributing a little via PayPal. Please contact <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">TemplateMo</a> via Live Chat or Email. If you have any
                                        question or feedback about this template, feel free to talk to us. Also, you may check other CSS templates such as
                                        <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>,
                                        <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc.
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('Blog_resources/images/blog-post-01.jpg') }}" alt="" />
                                </div>
                                <div class="down-content">
                                    <span>TRAVEL</span>
                                    <a href="post-details.html"><h4>TODO: Tittle for Travel Blog</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">TODO: Date</a></li>
                                        <li><a href="#">TODO: Views</a></li>
                                        <li><a href="#">TODO: Comments</a></li>
                                    </ul>
                                    <p>
                                        Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed
                                        to re-distribute the template ZIP file on any template collection site for the download purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for
                                        more info. Thank you.
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Tags1</a>,</li>
                                                    <li><a href="#">Tags2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('Blog_resources/images/blog-post-02.jpg') }}" alt="" />
                                </div>
                                <div class="down-content">
                                    <span>Food</span>
                                    <a href="post-details.html"><h4>TODO: Tittle for Travel Food</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">TODO: Date</a></li>
                                        <li><a href="#">TODO: Views</a></li>
                                        <li><a href="#">TODO: Comments</a></li>
                                    </ul>
                                    <p>
                                        You can support us by contributing a little via PayPal. Please contact <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">TemplateMo</a> via Live Chat or Email. If you have any
                                        question or feedback about this template, feel free to talk to us. Also, you may check other CSS templates such as
                                        <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>,
                                        <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc.
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">Best Templates</a>,</li>
                                                    <li><a href="#">TemplateMo</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="main-button">
                        <a href="blog.html">View More Posts</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- View more Posts Here -->
        
        <!--  View more Posts ENd Here -->

         <!-- View Popular Post Here -->
        <div class= "col-lg-12">
            <div class = "sidebar-item recent-posts">
                <div class ="sidebar-heading" style = "margin-top:20px; padding-top:50px;">
                    <h2>Popular Posts</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row isotope">
                    <div class="col-md-4 col-xs-12 isotope-item">
                        <article class="article article-grid">
                            <div class="article-image pipdig_lazy" 
                            style = "background-image: url('Blog_resources/images/blog-post-01.jpg');"></div>
                            <div class="article-body">
                            <div class="article-icon">
                                <i class="ico-mains"></i>
                            </div>
                            <div class="article-category">
                                <ul>
                                <li> FEATURED-POST </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/recipes/mains"> Food </a>
                                </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/recipes"> Recipes </a>
                                </li>
                                </ul>
                            </div>
                            <h2 class="article-title">
                                <a href="https://www.thelondoner.me/2021/04/super-simple-healthy-fried-chicken.html"> Super Simple Healthy Fried Chicken </a>
                            </h2>
                            <div class="article-meta">
                                <ul>
                                <li> 28th April 2021 </li>
                                <li> Rosie </li>
                                </ul>
                            </div>
                            <div class="article-actions">
                                <a href="https://www.thelondoner.me/2021/04/super-simple-healthy-fried-chicken.html" class="btn hvr-sweep-to-bottom">View Post </a>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-xs-12 isotope-item">
                        <article class="article article-grid">
                            <div class="article-image pipdig_lazy" style = "background-image: url('Blog_resources/images/blog-post-01.jpg');"></div>
                            <div class="article-body">
                            <div class="article-icon">
                                <i class="ico-life"></i>
                            </div>
                            <div class="article-category">
                                <ul>
                                <li> MINI-POST </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/life"> Life </a>
                                </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/travel"> Travel </a>
                                </li>
                                </ul>
                            </div>
                            <h2 class="article-title">
                                <a href="https://www.thelondoner.me/2021/04/old-friends-new-places.html"> Old Friends, New Places </a>
                            </h2>
                            <div class="article-meta">
                                <ul>
                                <li> 20th April 2021 </li>
                                <li> Rosie </li>
                                </ul>
                            </div>
                            <div class="article-actions">
                                <a href="https://www.thelondoner.me/2021/04/old-friends-new-places.html" class="btn hvr-sweep-to-bottom">View Post </a>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-xs-12 isotope-item">
                        <article class="article article-grid">
                            <div class="article-image pipdig_lazy" 
                            style = "background-image: url('Blog_resources/images/blog-post-01.jpg');"></div>
                            <div class="article-body">
                            <div class="article-icon">
                                <i class="ico-mains"></i>
                            </div>
                            <div class="article-category">
                                <ul>
                                <li> FEATURED-POST </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/recipes/mains"> Food </a>
                                </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/recipes"> Travel </a>
                                </li>
                                </ul>
                            </div>
                            <h2 class="article-title">
                                <a href="https://www.thelondoner.me/2021/04/super-simple-healthy-fried-chicken.html"> Super Simple Healthy Fried Chicken </a>
                            </h2>
                            <div class="article-meta">
                                <ul>
                                <li> 28th April 2021 </li>
                                <li> Rosie </li>
                                </ul>
                            </div>
                            <div class="article-actions">
                                <a href="https://www.thelondoner.me/2021/04/super-simple-healthy-fried-chicken.html" class="btn hvr-sweep-to-bottom">View Post </a>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-xs-12 isotope-item">
                        <article class="article article-grid">
                            <div class="article-image pipdig_lazy" style = "background-image: url('Blog_resources/images/blog-post-01.jpg');"></div>
                            <div class="article-body">
                            <div class="article-icon">
                                <i class="ico-life"></i>
                            </div>
                            <div class="article-category">
                                <ul>
                                <li> MINI-POST </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/life"> Life </a>
                                </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/travel"> Travel </a>
                                </li>
                                </ul>
                            </div>
                            <h2 class="article-title">
                                <a href="https://www.thelondoner.me/2021/04/old-friends-new-places.html"> Old Friends, New Places </a>
                            </h2>
                            <div class="article-meta">
                                <ul>
                                <li> 20th April 2021 </li>
                                <li> Rosie </li>
                                </ul>
                            </div>
                            <div class="article-actions">
                                <a href="https://www.thelondoner.me/2021/04/old-friends-new-places.html" class="btn hvr-sweep-to-bottom">View Post </a>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-xs-12 isotope-item">
                        <article class="article article-grid">
                            <div class="article-image pipdig_lazy" 
                            style = "background-image: url('Blog_resources/images/blog-post-01.jpg');"></div>
                            <div class="article-body">
                            <div class="article-icon">
                                <i class="ico-mains"></i>
                            </div>
                            <div class="article-category">
                                <ul>
                                <li> FEATURED-POST </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/recipes/mains"> Food </a>
                                </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/recipes"> Travel </a>
                                </li>
                                </ul>
                            </div>
                            <h2 class="article-title">
                                <a href="https://www.thelondoner.me/2021/04/super-simple-healthy-fried-chicken.html"> Super Simple Healthy Fried Chicken </a>
                            </h2>
                            <div class="article-meta">
                                <ul>
                                <li> 28th April 2021 </li>
                                <li> Rosie </li>
                                </ul>
                            </div>
                            <div class="article-actions">
                                <a href="https://www.thelondoner.me/2021/04/super-simple-healthy-fried-chicken.html" class="btn hvr-sweep-to-bottom">View Post </a>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-xs-12 isotope-item">
                        <article class="article article-grid">
                            <div class="article-image pipdig_lazy" 
                            style = "background-image: url('Blog_resources/images/blog-post-01.jpg');"></div>
                            <div class="article-body">
                            <div class="article-icon">
                                <i class="ico-mains"></i>
                            </div>
                            <div class="article-category">
                                <ul>
                                <li> FEATURED-POST </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/recipes/mains"> Food </a>
                                </li>
                                <li>
                                    <a href="https://www.thelondoner.me/featured/recipes"> Travel </a>
                                </li>
                                </ul>
                            </div>
                            <h2 class="article-title">
                                <a href="https://www.thelondoner.me/2021/04/super-simple-healthy-fried-chicken.html"> Super Simple Healthy Fried Chicken </a>
                            </h2>
                            <div class="article-meta">
                                <ul>
                                <li> 28th April 2021 </li>
                                <li> Rosie </li>
                                </ul>
                            </div>
                            <div class="article-actions">
                                <a href="https://www.thelondoner.me/2021/04/super-simple-healthy-fried-chicken.html" class="btn hvr-sweep-to-bottom">View Post </a>
                            </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        
        <!--  View Popular Post End Here -->                        
    </div>
</div>
<!-- Blog Posts End Here -->

<!-- Email Regist Here -->
<div class="wrapper">
	<div class="container">
		<div class="columns form_container">
			<div class="column spooky_bg2">
			</div>
			<div class="column input_container">
                 <div class="subscribe-icon">
                    <i class="ico-mailbox"></i>
                </div>
				<h1 class="title is-1 has-text-black">Đăng kí để nhận bài viết mới</h1>
				<p class="has-text-black">*Tài khoản email được cung cấp chỉ phục vụ mục đích gửi thông báo bài viết. </p>
				<div class="mt-5">
                    <form method="post" action = "{{ url('/RegistEmail') }}">
                        <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                        <input type="text" name="" placeholder="Enter your Email" id="input"  >
                        <input type="submit" name="" value="SUBCRIBE" class="submit" >
                    </form>
				</div>
				<div class="mt-2 ml-2">
					<span id="error"></span>
				</div>
			</div>
			<div class="column is-half spooky_bg">
			</div>
		</div>
	</div>
</div>
<!-- Email Regist End Here -->

@stop()