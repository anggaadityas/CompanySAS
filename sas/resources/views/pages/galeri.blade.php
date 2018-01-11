@extends('layouts/template')


@section('content')


     <!-- Section -->
                <div class="it_section content_section hide_text_shadow">
                    <div class="hm_no_overlay row_spacer3">
                        <span class="bg_overlay_con"></span>
                        <div class="section_content container">
                            
                            <!-- Filter -->
                            <div class="hm_filter_con">
                                <div class="hm_filter_wrapper project_text_nav grid_porto boxed_portos three_blocks has_sapce_portos nav_no_nums  porto_simple_title filter_text_but">
                                    
                                    <div id="options" class="sort_options clearfix filter_bordered">
                                        <ul data-option-key="filter" class="option-set clearfix" id="filter-by">
                                            <li><a data-option-value="*" class="selected" href="#"><span>All</span><span class="num"></span></a></li>
                                            <li><a data-option-value=".1" href="#"><span>Quality Service</span><span class="num"></span></a></li>
                                            <li><a data-option-value=".2" href="#"><span>Trainning</span><span class="num"></span></a></li>
                                            <li><a data-option-value=".3" href="#"><span>Event</span><span class="num"></span></a></li>
                                            <li><a data-option-value=".4" href="#"><span>Kegiatan</span><span class="num"></span></a></li>
                                        </ul>
                                        <div class="sort_list"> 
                                            <a href="#" class="sort_selecter"> 
                                                <span class="text">Sort By</span> 
                                                <span class="arrow"><i class="ico-chevron-down3"></i></span>
                                            </a>
                                            <ul data-option-key="sortBy" class="option-set clearfix" id="sort-by">
                                                <li><a data-option-value="name" href="#"><span class="text">Names</span></a></li>
                                            </ul>
                                        </div>
                                        <ul data-option-key="sortAscending" class="option-set clearfix" id="sort-direction">
                                            <li><a class="selected" data-option-value="true" href="#"> <span><i class="ico-chevron-up2"></i></span></a> </li>
                                            <li><a data-option-value="false" href="#"> <span><i class="ico-chevron-down2"></i></span></a> </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="hm_filter_wrapper_con filter_margin1">

                                    @foreach($galeri as $gal)

                                        <div class="filter_item_block {{ $gal->id_kategori }}">
                                            <div class="porto_block">
                                                <div class="porto_type">
                                                    <a class="img_popup" href="../SAS/sas/public/galery/{{ $gal->images_galery }}">
                                                        <img src="../SAS/sas/public/galery/{{ $gal->images_galery }}" alt="Business Card">
                                                        <span class="hm_plus_i"><i class="ico-plus10"></i></span>
                                                    </a>
                                                </div>
                                                <div class="porto_desc">
                                                    <a href="#">
                                                        <h6 class="name">{{ $gal->nama_galery }}</h6>
                                                    </a>
                                                    <div class="porto_meta hide_comm_like_date clearfix">
                                                        <span class="porto_nums"> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach
                                       

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Section -->


@endsection