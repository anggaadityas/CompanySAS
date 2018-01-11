@extends('layouts.template')


@section('content')
	
	<!-- Section -->
    <div class="content_section">
        <div class="container row_spacer clearfix">
            <div class="content">
                
                <div class="hm_columns col-md-6">
                    <div class="hm_column_con">
                        <div class="page404">
                            <span>404<span class="face404"></span></span>
                        </div>
                    </div>
                </div>
                
                <div class="hm_columns col-md-6">
                    <div class="hm_column_con">
                        <div class="error_desc404"><b>Oops!</b> We couldn&#039;t find the page you were looking for.</div>
                        <div class="on_the_center col_centered">
                            <div class="search_block large_search">
                                <form class="widget_search" method="get" action="#">
                                    <input class="serch_input" type="search" name="s" id="s" placeholder="Search For Other Pages" />
                                    <button type="submit" id="searchsubmit" class="search_btn"> <i class="ico-search9"></i> </button>
                                </form>
                            </div>
                        </div>
                        <div class="margin_t_e">
                            <a href="#" target="_self" class="send_button">Go To HomePage</a>
                        </div>
                    </div>
                </div>
                <!-- End Column --> 
                
            </div>
        </div>
    </div>
    <!-- End Section --> 
    


@endsection