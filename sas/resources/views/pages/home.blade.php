@extends('layouts.template')


@section('content')

<div id="rev_slider_41_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="websitebuilder-slider1" data-source="gallery" style="margin:0px auto;background-color:#e0dddb;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.3.1.5 fullwidth mode -->
                    <div id="rev_slider_41_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.1.5">
                       <ul> 
                         <!-- SLIDE  -->
                         @foreach($slider as $slid)
                         <li data-index="rs-161" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="public/assets/img/revslider/rev-thumb8-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                              <!-- MAIN IMAGE -->
                              <img src="../SAS/sas/public/slider/{{ $slid->images_slider }}"  alt="" title="slide-6"  width="1920" height="1280" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                              <!-- LAYERS -->
                         </li>
                         @endforeach
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
                <br/>


                <!-- Artikel -->
  
                <!-- Section -->
                <div id="intro" class="it_section content_section hide_text_shadow">
                    <div class="hm_no_overlay row_spacer">
                        <span class="bg_overlay_con"></span>
                        <div class="section_content container">
                            
                            <!-- Row -->
                            <div class="rows_container clearfix">
                                <div class="columns_con columns_normall clearfix">
                                    
                                    <!-- Column -->
                                    <div class="hm_columns show_xs show_sm show_md show_lg col-md-12 f_left">
                                        <div class="hm_column_out">
                                            <div class="hm_column_con clearfix col_padd1 column_spacer3">
                                                
                                               <div class="small_title centered has_border full_grad_line">
                                <span class="small_title_con default_boc">
                                    <span class="s_text upper default_txc fs20 bold3">QUALITY SERVICE</span>
                                </span>
                            </div>
                                                
                                <div class="clear"></div>
                                                <div class="hm_divider divi_border1 divi_centered divi_i_c divi_mid2 default_bgc default_boc divi_hi2 divi_space1"></div>
                                                
                                                
                                        </div>
                                    </div>
                                    <!-- End Column -->

                                @foreach($artikel as $art)
                                    
                                    <div class="hm_columns show_xs show_sm show_md show_lg col-md-4 f_left">
                                        <div class="hm_column_out">
                                            <div class="hm_column_con clearfix col_padd1">
                                                
                                                <div class="hm_columns hm_image_sc f_none col-md-rand">
                                                    <div class="hm_column_out">
                                                        <div class="hm_column_con"><img alt="" src="../SAS/sas/public/artikel/{{ $art->images_artikel }}" class="img_b_space1 radius3"></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="main_title title_boxed no_border no_line align_left tb_space5">
                                                    <h2 class="upper fs18 bold2">{{ $art->nama_artikel }}</h2>
                                                </div>
                                                
                                                <div class="clear"></div>
                                                <div class="hm_divider divi_border1 divi_i_c divi_space9"></div>
                                                
                                                <div class="hm_text_sc">
                                                 {{ substr(strip_tags($art->isi_artikel),0,80) }}
                                                    {{ strlen(strip_tags($art->isi_artikel)) > 300 ? "..." : "" }} 
                                                </div>
                                                
                                                <a class="lookup_btn main_button no_text_shadow no_three_d_btn no_box_shadow medium_btn f_none no_margin_r border2 bg_white btn_padd9 upper fs13 bold2 btn_fill7" target="_self" href="{{ url($art->slug) }}">Read More</a>
                                              
                                            </div>
                                            <br/>
                                        </div>
                                    </div>



                            @endforeach

                                        
                                </div>
                            </div>
                            <!-- End Row -->
                            
                        </div>
                    </div>
                </div>
                <!-- End Section -->


          

       
                            
                        </div>
                    </div>
                </div>
                <!-- End Section -->
                


@endsection