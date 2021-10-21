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
<div class="blog-posts">
    <div class="container">
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
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('Blog_resources/images/blog-post-03.jpg') }}" alt="" />
                                </div>
                                <div class="down-content">
                                    <span>Photograph</span>
                                    <a href="post-details.html"><h4>TODO: Tittle for Travel Photograph</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">TODO: Date</a></li>
                                        <li><a href="#">TODO: Views</a></li>
                                        <li><a href="#">TODO: Comments</a></li>
                                    </ul>
                                    <p>
                                        Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat
                                        sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">HTML CSS</a>,</li>
                                                    <li><a href="#">Photoshop</a></li>
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
                                    <img src="{{ asset('Blog_resources/images/blog-post-03.jpg') }}" alt="" />
                                </div>
                                <div class="down-content">
                                <span>Vehicle</span>
                                    <a href="post-details.html"><h4>TODO: Tittle for Travel Vehicle</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">TODO: Date</a></li>
                                        <li><a href="#">TODO: Views</a></li>
                                        <li><a href="#">TODO: Comments</a></li>
                                    </ul>
                                    <p>
                                        Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat
                                        sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">HTML CSS</a>,</li>
                                                    <li><a href="#">Photoshop</a></li>
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
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('Blog_resources/images/blog-post-03.jpg') }}" alt="" />
                                </div>
                                <div class="down-content">
                                    <span>Photograph</span>
                                    <a href="post-details.html"><h4>TODO: Tittle for Travel Photograph</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">TODO: Date</a></li>
                                        <li><a href="#">TODO: Views</a></li>
                                        <li><a href="#">TODO: Comments</a></li>
                                    </ul>
                                    <p>
                                        Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat
                                        sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">HTML CSS</a>,</li>
                                                    <li><a href="#">Photoshop</a></li>
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
                                    <img src="{{ asset('Blog_resources/images/blog-post-03.jpg') }}" alt="" />
                                </div>
                                <div class="down-content">
                                <span>Vehicle</span>
                                    <a href="post-details.html"><h4>TODO: Tittle for Travel Vehicle</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">TODO: Date</a></li>
                                        <li><a href="#">TODO: Views</a></li>
                                        <li><a href="#">TODO: Comments</a></li>
                                    </ul>
                                    <p>
                                        Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat
                                        sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">HTML CSS</a>,</li>
                                                    <li><a href="#">Photoshop</a></li>
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
                        <a href="blog.html">View All Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

<div class="wrapper">
	<div class="container">
		<div class="columns form_container">
			<div class="column spooky_bg2">
			</div>
			<div class="column input_container">
				<h1 class="title is-1 has-text-black">Đăng kí để nhận bài viết mới</h1>
				<h2 class="subtitle is-4"><br></h2>
				<p class="has-text-black">*Tài khoản email được cung cấp chỉ phục vụ mục đích gửi thông báo bài viết. </p>
				<div class="mt-5">
					<input type="text" name="" placeholder="Enter your Email" id="input"  >
					<input type="submit" name="" value="Join Me In" class="submit">
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

@stop()