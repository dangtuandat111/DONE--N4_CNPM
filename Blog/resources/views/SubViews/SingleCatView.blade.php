
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
        <a href="post-details.html">
        <h4><?php  echo 'Post name:'.$post->Title ;?></h4>
        </a>
        <ul class="post-info">
        <li>
            <a href="#"><?php  echo 'Date: '.\Carbon\Carbon::parse($post->Created_at)->format('d/m/Y') ;?></a>
        </li>
        <li>
            <a href="#"><?php  echo 'Views: '.$post->views ;?></a>
        </li>
        <li>
            <a href="#">
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

<script>
    $('#pagination a').on('click', function(e){
        var searchText = $("input[name=searchText]").val();
        var url = $(this).attr('href');
        var page = url.split('page=')[1];
        console.log('Page:'+page);
        console.log('Search: '+searchText);
        console.log('Tag: '+chosenTag);
        e.preventDefault();
        if(searchText == '') {
            $.ajax({
                type: 'get',
                dataType: 'html',
                url: "{{url('/FilterTag')}}",
                data: 'tag=' + chosenTag +'&page='+page,
                success:function(response) {
                    $("#postShow").html(response);
                },
                error :function(response) {
                    $("body").append("<div class='alert alert-danger' id = 'alert' onmouseover='HideMess();'>  <strong>Lỗi!</strong><br> Sign in to use this feature </div> ");
                }
            });
        }
        // var url = $(this).attr('href');
        // console.log(url);
        // var page = url.split('page=')[1];
        // console.log(page);
        // $.get('filter?md='+md+'&sy='+sy+'&dh='+dh+'&kind='+kind+'&page='+page,function(response) {
        // //console.log("a");
        //     $("#row").html(response); // 
        // },'html');
    });

</script>