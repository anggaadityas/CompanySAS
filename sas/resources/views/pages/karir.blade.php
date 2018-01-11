@extends('layouts.template')


@section('content')

                
                <!-- Section -->
                <div id="careers_section" class="it_section content_section hide_text_shadow bg_gray3">
                    <div class="hm_no_overlay row_spacer">
                        <span class="bg_overlay_con"></span>
                        <div class="section_content container">
                            
                            <!-- Row -->
                            <div class="rows_container clearfix">
                                <div class="columns_con columns_normall clearfix">
                                    
                                    <div class="hm_columns show_xs show_sm show_md show_lg col-md-6 f_left">
                                        <div class="hm_column_out">
                                            <div class="hm_column_con clearfix col_padd1">
                                                
                                                <div class="main_title title_boxed no_border no_line align_left">
                                                    <h2 class="upper fs18 bold2">Apply For a Job</h2>
                                                </div>
                                                
                                                <div class="clear"></div>
                                                <div class="hm_divider divi_border1 divi_i_c divi_hi2 divi_space3"></div>
                                                
                                                <div class="hm_text_sc">
                                                    <p>Apply For a Job.
                                                </div>
                                                
                                                <div class="spacer30"></div>
                                                     
                                                <a class="lookup_btn main_button has_text_shadow no_three_d_btn no_box_shadow medium_btn f_none upper white_color no_border hov_light_btn" target="_self" href="https://sinergiadhikarya.co.id/pendaftaran" style="background-color:#dd3333;">Pendaftaran Karir</a>
                                                  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Column -->
                                    
                                    <!-- Column -->
                                    <div class="hm_columns show_xs show_sm show_md show_lg col-md-6 f_left">
                                        <div class="hm_column_out">
                                            <div class="hm_column_con clearfix col_padd1">
                                                
                                                <div class="main_title title_boxed no_border no_line align_left">
                                                    <h2 class="upper fs18 bold2">Jobs Opportunities</h2>
                                                </div>
                                                
                                                <div class="clear"></div>
                                                <div class="hm_divider divi_border1 divi_i_c divi_hi2 divi_space1"></div>
                                                
                                                <!-- Accordion  -->
                                                <div class="hm_accordion acc_bg ac_pm" data-type="toggle">
                                                    
                                                     @foreach($loker as $lok)
                                                    
                                                    <!-- Accordion Tab -->
                                                    <div class="hm_occ_container">
                                                        <span class="acc_title"><span class="acc_arr"></span> {{ $lok->judul_loker }}</span>
                                                        <div class="hm_occ_content">
                                                            <div class="acc_content">
                                                                
                                                                
                                                               
                                                                
                                                                <div class="hm_text_sc">
                                                                    <p> {{ $lok->judul_loker }}
                                                                </div>
                                                                
                                                                <div class="main_title title_boxed no_border align_left tt_space25 tb_space15">
                                                                    <h2 class="upper fs14 bold2">Requirements :</h2>
                                                                    {!! $lok->requirements !!}
                                                                </div>

                                                                
                                                                <div class="main_title title_boxed no_border align_left tt_space25 tb_space15">
                                                                    <h2 class="upper fs14 bold2">Job Description :</h2>
                                                                    {!! $lok->job_description !!}
                                                                </div>
                                                       
                                                                <a class="lookup_btn main_button has_text_shadow no_three_d_btn no_box_shadow medium_btn f_none upper white_color no_border hov_light_btn" target="_self" href="https://sinergiadhikarya.co.id/pendaftaran" style="background-color:#dd3333;">Apply Now</a>
                                                                
                                                                
                                                         
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Accordion Tab -->
                                                    
                                                          @endforeach
                                                    
                                                </div>
                                                <!-- Accordion  -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Column -->
                                    
                                </div>
                            </div>
                            <!-- End Row -->
                            
                        </div>
                    </div>
                </div>
                <!-- End Section -->

@endsection