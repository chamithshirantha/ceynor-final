<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
      <title>CEY-NOR | FOUNDATION LIMITED &amp; </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="{{ url('assets/images/ceynorlogo.png') }}">
      <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Sen:400,700,800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="{{ url('assets/css/themify-icons.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
      <link href="{{ url('assets/css/magicscroll.css') }}" rel="stylesheet" type="text/css" media="screen"/>
      <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
   </head>
<body>
    <header>
        <div class="header-inner hi-about-us">
            <div class="header-cont container-fluid">
              <div class="y-breadcrum clearfix wow fadeInDown " data-wow-delay=".9s">
                    <h1 class="y-heading">News & Feeds</h1> 
                   <ul class="text-center">
                     <li><a href="{{ route('home') }}">Home</a></li>
                     <li><span>News & Feeds</span></li>
                   </ul> 
              </div>
           </div>
        </div>
        @include('navbar')
    </header>
 
  
    <main class="y-inner_page m-0">
   

        <section id="y-single_info">
          <div class="y-single_info">
            <div class="container-fluid">
                <div class="y-single_info_inner y-section_content row m-0">
                    
                     
                      <div class="y-product_listing_side col-sm-12">
                        <div class="y-dest_list ">

                          @php
                          $table_data= App\Models\NewsandFeeds::all();

                          

                          @endphp

                          
                              @php
                                  $counter = 0;
                              @endphp


                        @foreach ($table_data as $row)

                        @if ($counter % 2 == 0)

                          <div class="y-dest_list_single row">
                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 pull-right wow fadeInLeft" data-wow-duration="1s">
                              <a href="#"><img src="uploads/news-feeds/{{ $row->image }}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="col-sm-7 wow fadeInRight" data-wow-duration="1s">
                              <div class="thm-h">
                                <h3>{{ $row->topic }}</h3> 
                                <h4>{{ $row->description_1 }}</h4>
                               </div> 
                                <ul>
                                  
                                  <li>{{ $row->description_2 }}</li>
                                  <li>{{ $row->description_3 }}</li> 
                                </ul>
                                
                            </div> 
                          </div>
                          @endif

                          @if ($counter % 2 == 1)
                          <div class="y-dest_list_single row"> 
                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 wow fadeInLeft" data-wow-duration="1s">
                              <a href="#"><img src="uploads/news-feeds/{{ $row->image }}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="col-sm-7 col-xs-12 pull-right wow fadeInRight" data-wow-duration="1s">
                                <div class="thm-h">
                                  <h3>{{ $row->topic }}</h3> 
                                  <h4>{{ $row->description_1 }}</h4> 
                                </div>
                                <ul>
                                  
                                  <li>{{ $row->description_2 }}</li>
                                  <li>{{ $row->description_3 }}</li> 
                                </ul>
                               
                            </div> 
                          </div>
                          @endif

                          @php
                          $counter++;
                          @endphp


                        @endforeach
                        <br>

                        </div> 
                      </div> 
                    
                </div>
            </div>
          </div>
        </section>       
    </main> 

    @include('footer')
       

    

    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ url('assets/js/magicscroll.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ url('assets/js/main.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>

</body>

</html>
