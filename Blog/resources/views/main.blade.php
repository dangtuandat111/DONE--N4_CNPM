@extends('master')

@section('Main')

<!-- Message here -->
@if(session('thongbao')) 
  <div class="alert alert-success " id = "alert" onmouseover="HideMess();">
    <span class="closebtn" id>&times;</span>  
    <strong>Thông báo!</strong><br>
    {{session('thongbao')}}
  </div>
@endif

@if(count($errors) > 0) 
  <div class="alert alert-danger" id = "alert" onmouseover="HideMess();">  
    <strong>Lỗi!</strong><br>
    @foreach ($errors->all() as $error)
      {{ $error }}
    @endforeach
  </div>
@endif
<!-- End Message here -->

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
                        @foreach($recent_posts as $recent_post)
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('Blog_resources/images/assets/images/thumbnail/'.$recent_post->Thumbnail) }}" alt="" />
                                </div>
                                <div class="down-content">
                                    <span>
                                    @foreach($cats as $cat) 
                                        @if ($cat->id == $recent_post->Id_Category)
                                            <?php  echo 'Category:'.$cat->Title ;?>
                                        @endif
                                    @endforeach
                                    </span>
                                    <a href="post-details.html"><h4><?php  echo 'Posts name:'.$recent_post->Title ;?></h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">
                                            <?php  echo 'Date: '.\Carbon\Carbon::parse($recent_post->Created_at)->format('d/m/Y') ;?>
                                        </a></li>
                                        <li><a href="#">
                                            <?php  echo 'Views: '.$recent_post->views ;?>
                                        </a></li>
                                        <li><a href="#">
                                        @foreach($cmts as $cmt) 
                                            @if($cmt[0] == $recent_post->Id_Category) 
                                                <?php  echo 'Comments:'.$cmt[1];?>
                                            
                                            @endif
                                        
                                        @endforeach
                                        </a></li>
                                    </ul>
                                    <p>
                                        <?php  echo 'Summary:<br> '.$recent_post->Summary ;?>
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">
                                                    @foreach($tags as $tag) 
                                                        @if ($tag[0] == $recent_post->Id_Tag)
                                                            <?php  echo 'Tags:'.$tag[1] ;?>
                                                        @endif
                                                    @endforeach
                                                    </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach()
                    </div>
                </div>
                <!-- <div class="col-lg-12">
                    <div class="main-button">
                        <a href="blog.html">View More Posts</a>
                    </div>
                </div> -->
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
                    @foreach($popular_posts as $popular_post)
                    <div class="col-md-4 col-xs-12 isotope-item">
                        <article class="article article-grid">
                            <div class="article-image pipdig_lazy" 
                            style = "background-image: url('<?php echo 'Blog_resources/images/assets/images/thumbnail/'.$popular_post->Thumbnail?>'); "></div>
                            <div class="article-body">
                            <div class="article-icon">
                                <i class="ico-travel"></i>
                            </div>
                            <div class="article-category">
                                <ul>
                                    <li> CATEGORI </li>
                                    <li>
                                        <a href="#"> 
                                        @foreach($cats as $cat) 
                                            @if ($cat->id == $popular_post->Id_Category)
                                                <?php  echo $cat->Title ;?>
                                            @endif
                                        @endforeach
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="article-title">
                                <a href="#"> <?php  echo $popular_post->Title ;?> </a>
                            </h2>
                            <div class="article-meta">
                                <ul>
                                <li> <?php  echo \Carbon\Carbon::parse($popular_post->Created_at)->format('j-F-Y') ;?> </li>
                                <li> Rosie </li>
                                </ul>
                            </div>
                            <div class="article-actions">
                                <a href="#" class="btn hvr-sweep-to-bottom">View Post </a>
                            </div>
                            </div>
                        </article>
                    </div>
                    @endforeach()
                   
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
				<h1 class="title is-1 has-text-black">Subcribe for more Post</h1>
				<p class="has-text-black">*We've just use your Email to send notification only. </p>
				<div class="mt-5">
                    <form method="post" action = "{{ url('/RegistEmail') }}">
                        <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                        <input type="text" name="Email" placeholder="Enter your Email" id="inputEmail" required >
                        <input type="submit"  value="SUBCRIBE" class="submit" id= "submit">
                    </form>
				</div>
			</div>
			<div class="column is-half spooky_bg">
			</div>
		</div>
	</div>
</div>
<!-- Email Regist End Here -->
@endsection

@section('Script')
<script>
    function HideMess() {
        $('#alert').fadeOut(1500);
    }
        
</script>

@stop()