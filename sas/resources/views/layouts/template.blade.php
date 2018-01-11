

    @include('layouts.header')

    <!-- page content -->
    
        <div class="content_section">
        <div class="hm_main_content full_content clearfix">
            <div class="entry-content">
            
            @yield('content')

                 
            </div>
        </div>
    </div>
        <!-- /page content -->

  
    @include('layouts.footer')