@extends('layouts.template')


@section('content')

<div class="content_section page_title default">
        <div class="content clearfix">
            <div class="breadcrumbs"><a href="#">Home</a> <span class="crumbs-spacer">/</span><span class="current">Artikel</span></div>
        </div>
    </div>
    <!-- End Page Title -->

        <div class="content_section">
        <div class="content clearfix">
           <div class="hm_columns content_block col-md-9 f_right row_spacer">
              
               <div class="content hm_blog_list clearfix">
                   
                @foreach($artikel as $key => $art)

                   <!-- Post Block -->
                   <div class="blog_grid_block clearfix">
                       <div class="feature_inner">
                           <div class="feature_inner_corners"> <a href="../SAS/sas/public/artikel/{{ $art->images_artikel }}" class="img_popup"> <img src="../SAS/sas/public/artikel/{{ $art->images_artikel }}" alt="Best User Interface"> <span class="hm_plus_i"><i class="ico-plus10 hm_iii"></i></span> </a> </div>
                       </div>
                       <div class="blog_grid_con">
                           <h6 class="title"><a href="#">{{ $art->nama_artikel }}</a></h6>
                           
                           <span class="meta"> 
                               <span class="meta_part"><span>Mei 1, 2017</span></span>
                               <span class="meta_part"><span>In <span><a href="#">Culture</a></span></span></span>
                               <span class="meta_part"><span>By <a href="#">Admin</a></span></span>
                           </span>
                           
                           <div class="entry-content hm_exp_con">
                               
                                    {{ substr(strip_tags($art->isi_artikel),0,80) }}
                                                    {{ strlen(strip_tags($art->isi_artikel)) > 300 ? "..." : "" }} 
                           </div>
                           
                           
                            <a class="lookup_btn main_button no_text_shadow no_three_d_btn no_box_shadow small_btn f_none border2" target="_self" href="{{ url($art->slug) }}">READ MORE</a>
                           
                           
                       </div>
                   </div><!-- End Post Block -->

                   @endforeach

                    
                                
            {{ $artikel->links('vendor.pagination.custom') }}
                   
               </div>
               
               
           </div>


      <!-- SideBar -->
            <aside id="sidebar" class="hm_columns col-md-3 left_sidebar row_spacer">
                <div class="hm_column_con">
                    
                    <div class="widget_block widget_search">
                        <div class="search_block">
                            <form class="searchform" method="get">
                                <input class="serch_input" type="search" name="s" id="s" placeholder="Search..." />
                                <button type="submit" id="searchsubmit" class="search_btn animate"><i class="ico-search9"></i></button>
                                <div class="clear"></div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                    
                    <div class="widget_block widget_categories">
                        <h6 class="widget_title">Kategori</h6>
                        <ul class="cat_list_widget">
                            <li><a href="#">Trainning</a></li>
                            <li class="cat-item cat-item-13"><a href="#">Event</a></li>
                            <li><a href="#">Kegiatan</a></li>
                    </div>

                    
                    <div class="widget_block posts_slider_widget">
                        <h6 class="widget_title">Posts Slider</h6>
                        <div class="related_slider_widget centered">

                            <div class="related_posts_slide">
                                <div class="related_img_con">
                                    <a href="#" class="related_img">
                                        <img alt="Vimeo Video Post" src="public/assets/img/blog-post8-1920x1280.jpg">
                                        <span class="hm_format_i"><i class="ico-video-camera"></i></span>
                                    </a>
                                </div>
                                <a class="related_title" href="#">Vimeo Video Post</a>
                            </div>

                            <div class="related_posts_slide">
                                <div class="related_img_con">
                                    <a href="#" class="related_img">
                                        <img alt="Easy to Customize" src="public/assets/img/blog-post2-450x290.jpg">
                                        <span class="hm_format_i"><i class="ico-gallery"></i></span>
                                    </a>
                                </div>
                                <a class="related_title" href="#">Easy to Customize</a>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </aside>
            <!-- End SideBar -->
            
        </div>
    </div>
                

@endsection