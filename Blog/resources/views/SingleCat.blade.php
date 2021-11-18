@extends('master')
@section ('Title', 'Travel')
@section('Main')

@if(session('thongbao')) 
  <div class="alert alert-success">
    <span class="closebtn">&times;</span>  
    <strong>Thông báo!</strong><br>
    {{session('thongbao')}}
  </div>
@endif

@if(count($errors) > 0) 
  <div class="alert">
    <span class="closebtn">&times;</span>  
    <strong>Lỗi!</strong><br>
    @foreach ($errors->all() as $error)
      {{ $error }}
    @endforeach
  </div>
@endif

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

<div class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row" id="postShow">
            @foreach($posts as $post)
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{ asset('Blog_resources/images/assets/images/thumbnail/'.$post->Thumbnail) }}" alt="">
                </div>
                <div class="down-content">
                  <span>
                    @foreach($cats as $cat) 
                        @if ($cat->id == $post->Id_Category)
                            <?php  echo 'Category:'.$cat->Title ;?>
                        @endif
                    @endforeach
                  </span>
                  <a href="{{ url('/BlogDetail/'.$post->Slug) }}">
                    <h4><?php  echo 'Post name:'.$post->Title ;?></h4>
                  </a>
                  <ul class="post-info">
                    <li>
                      <a><?php  echo 'Date: '.\Carbon\Carbon::parse($post->Created_at)->format('d/m/Y') ;?></a>
                    </li>
                    <li>
                      <a><?php  echo 'Views: '.$post->views ;?></a>
                    </li>
                    <li>
                      <a>
                        @foreach($cmts as $cmt) 
                            @if($cmt[0] == $post->Id_Category) 
                                <?php  echo 'Comments:'.$cmt[1];?>
                            
                            @endif
                        
                        @endforeach</a>
                    </li>
                  </ul>
                  <p> <?php  echo 'Summary:<br> '.$post->Summary ;?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li>
                            <i class="fa fa-tags"></i>
                          </li>
                          @foreach($tags as $tag) 
                              @if ($tag->id == $post->Id_Tag)
                                  <?php  echo 'Tags:'.$tag->Title ;?>
                              @endif
                          @endforeach
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
            <nav aria-label="Page navigation example" id="pagination">
              {{ $posts->links() }}
           </nav>
          </div>
        </div>
      </div>

      <div class="col-lg-4" style = "max-width: 25%;">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item search">
                <form id="search_form" name="gs" method="GET">
                  <input type="text" name="searchText" class="searchText" placeholder="Type to search..." >
                </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item tags">
                <div class="sidebar-heading">
                  <h2>Tag Name</h2>
                </div>
                <div class="content">
                  <ul>
                    @foreach($tags as $tag) 
                      <li id=<?php  echo "tagName".$tag->Title ;?> value=<?php  echo "tagName".$tag->Title ;?>>
                        <a >
                          <?php  echo $tag->Title ;?>
                        </a>
                      </li>
                    @endforeach
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
@endsection()

@section('Script')
<script>

  var chosenTag ='';
  var TravelActive = document.getElementsByClassName("nav-item");
  TravelActive[0].className = "classname";
  TravelActive[0].className = "nav-item active";


  $("#search_form").submit(function (e) {
    e.preventDefault();
    var searchText = $('input[name=searchText]').val();
    $.ajax({
      type: 'get',
      url: "{{url('/Filter')}}",
      data: 'searchText=' + searchText,
      success:function(response) {
        $("#postShow").html(response);
      },
      
      // error :function(response) {
      //   $("body").append("<div class='alert alert-danger' id = 'alert' onmouseover='HideMess();'>  <strong>Lỗi!</strong><br> Sign in to use this feature </div> ");
      // },
      statusCode: {
        404: function() {
          return abort(404);
        },
        500: function() {
          $("body").append("<div class='alert alert-danger' id = 'alert' onmouseover='HideMess();'>  <strong>Lỗi!</strong><br> Error 500 </div> ");
        }
      }
    });
  });

  $("li[id*='tagName']").click(function (e) {
    e.preventDefault();
    var tag = $(this).attr("value");  
    $("li[id*='tagName']").css({'color': '#aaa', 'backgroundColor': 'white', 'border-color': '#eee'})
    $("li[id*='tagName']").children().css({'color': '#aaa'});
    $(this).css({"backgroundColor" : '#f48840', 'border-color:': '#f48840','color': 'white'});
    $(this).children().css({'color': 'white'});
    
    var tag = $(this).attr("value").slice(7);
    chosenTag = tag;
    console.log(tag);
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: "{{url('/FilterTag')}}",
      data: 'tag=' + tag,
      success:function(response) {
        $("#postShow").html(response);
      },
      statusCode: {
        404: function() {
          return abort(404);
        },
        500: function() {
          $("body").append("<div class='alert alert-danger' id = 'alert' onmouseover='HideMess();'>  <strong>Lỗi!</strong><br> Error 500 </div> ");
        }
      }
    });
  });

  function HideMess() {
  }


</script>
@stop() 