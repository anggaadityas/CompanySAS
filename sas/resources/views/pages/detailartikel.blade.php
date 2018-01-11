@extends('layouts.template')


@section('content')
 <div class="content_section">
        <div class="hm_main_content content clearfix">
            
            <!-- Content Block -->
            <div class="hm_columns content_block col-md-9 f_left row_spacer">
                <div class="entry-content">

                    <!-- Section -->
                    <div class="it_section content_section hide_text_shadow">
                        <div class="hm_no_overlay" data-speed="0.1">
                            <span class="bg_overlay_con"></span>
                            <div class="section_content container">
                               
                                <div class="hm_columns hm_image_sc centered col-md-12">
                                    <div class="hm_column_out">
                                        <div class="hm_column_con"><img alt="" src="../../SAS/sas/public/artikel/{{ $detart[0]->images_artikel }}"></div>
                                    </div>
                                </div>
                                
                                <div class="spacer30"></div>
                                <div class="main_title title_boxed no_border align_left">
                                    <h2 class="bold1 fs20">{{ $detart[0]->nama_artikel }}</h2>
                                </div>
                                
                                <div class="hm_text_sc">
                                    {!! $detart[0]->isi_artikel !!}
                                </div>
                                                    
                            </div>
                        </div>
                    </div>
                    <!-- End Section -->
                    
                </div>
            </div>
            <!-- End Content Block -->
            
            <!-- SideBar -->
            <aside id="sidebar" class="hm_columns col-md-3 right_sidebar row_spacer">
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
                        <h6 class="widget_title">Categories</h6>
                        <ul class="cat_list_widget">
                            <li><a href="#">Training</a> </li>
                            <li><a href="#">Event</a> </li>
                            <li><a href="#">Kegiatan</a> </li>
                        </ul>
                    </div>
                    
                 
                    <div class="widget_block posts_slider_widget">
                        <h6 class="widget_title">Posts Slider</h6>
                        <div class="related_slider_widget centered">
                            <div class="related_posts_slide">
                                <div class="related_img_con">
                                    <a href="#" class="related_img">
                                        <img alt="Vimeo Video Post" src="img/mazz-450x290.jpg">
                                        <span class="hm_format_i"><i class="ico-video-camera"></i></span>
                                    </a>
                                </div>
                                <a class="related_title" href="#">Vimeo Video Post</a>
                            </div>
                            <div class="related_posts_slide">
                                <div class="related_img_con">
                                    <a href="#" class="related_img">
                                        <img alt="Easy to Customize" src="img/blog-post2-450x290.jpg">
                                        <span class="hm_format_i"><i class="ico-gallery"></i></span>
                                    </a>
                                </div>
                                <a class="related_title" href="#">Easy to Customize</a>
                            </div>
                            <div class="related_posts_slide">
                                <div class="related_img_con">
                                    <a href="#" class="related_img">
                                        <img alt="Step Into The Light" src="img/blog-post18-450x290.jpg">
                                        <span class="hm_format_i"><i class="ico-gallery"></i></span>
                                    </a>
                                </div>
                                <a class="related_title" href="#">Step Into The Light</a>
                            </div>
                            <div class="related_posts_slide">
                                <div class="related_img_con">
                                    <a href="#" class="related_img">
                                        <img alt="Best User Interface" src="img/work_space_1-450x290.jpg">
                                        <span class="hm_format_i"><i class="ico-image4"></i></span>
                                    </a>
                                </div>
                                <a class="related_title" href="#">Best User Interface</a>
                            </div>
                            <div class="related_posts_slide">
                                <div class="related_img_con">
                                    <a href="#" class="related_img">
                                        <img alt="Clean and simple Design" src="img/blog-post6-450x290.jpg">
                                        <span class="hm_format_i"><i class="ico-video-camera"></i></span>
                                    </a>
                                </div>
                                <a class="related_title" href="#">Clean and simple Design</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </aside>
            <!-- End SideBar -->
            
        </div>

@endsection