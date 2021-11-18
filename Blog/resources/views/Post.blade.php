@extends('master')
@section ('Title', 'Travel')
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

<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post detail">
                                <div class="blog-thumb">
                                    <img src="{{ asset('Blog_resources/images/assets/images/thumbnail/'.$posts[0]->Thumbnail) }}" alt="" style = "border:none;">
                                </div>
                                <div class="down-content" style = "border:none;">
                                    <a href="post-details.html"><h4>Aenean pulvinar gravida sem nec</h4></a>
                                    
                                    <?php 
                                        echo $html;
                                    ?>
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="sidebar-item comments">
                            <div class="sidebar-heading">
                                <h2>4 comments</h2>
                            </div>
                                <div class="content">
                                    <ul>
                                    <li>
                                        <div class="author-thumb">
                                        <img src="assets/images/comment-author-01.jpg" alt="">
                                        </div>
                                        <div class="right-content">
                                        <h4>Charles Kate<span>May 16, 2020</span></h4>
                                        <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                                        </div>
                                    </li>
                                    <li class="replied">
                                        <div class="author-thumb">
                                        <img src="assets/images/comment-author-02.jpg" alt="">
                                        </div>
                                        <div class="right-content">
                                        <h4>Thirteen Man<span>May 20, 2020</span></h4>
                                        <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author-thumb">
                                        <img src="assets/images/comment-author-03.jpg" alt="">
                                        </div>
                                        <div class="right-content">
                                        <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                                        <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                                        </div>
                                    </li>
                                    <li class="replied">
                                        <div class="author-thumb">
                                        <img src="assets/images/comment-author-02.jpg" alt="">
                                        </div>
                                        <div class="right-content">
                                        <h4>Thirteen Man<span>May 22, 2020</span></h4>
                                        <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop() 