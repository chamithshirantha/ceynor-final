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
      <link href="assets/css/magicscroll.css" rel="stylesheet" type="text/css" media="screen"/>
      <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
   </head>
<body>
    <header>
        <div class="header-inner hi-about-us">
            <div class="header-cont container-fluid">
              <div class="y-breadcrum clearfix wow fadeInDown " data-wow-delay=".9s">
                    <h1 class="y-heading">View More Details</h1> 
                   <ul class="text-center">
                     <li><a href="{{ route('home') }}">Home</a></li>
                     <li><span>View More Details</span></li>
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
                          

                          <div class="y-dest_list_single row"> 
                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 wow fadeInLeft" data-wow-duration="1s">
                              <a href="#"><img src="../uploads/passengerboats/{{ $pb->image }}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="col-sm-7 col-xs-12 pull-right wow fadeInRight" data-wow-duration="1s">
                                <div class="thm-h">
                                  <h3>{{ $pb->boat_name }}</h3> 
                                  <h5 style="text-align: justify">{{ $pb->short_description }}</h5> 
                                </div>
                                <div class="container">
                                  <div class="row">
                                    <div class="col">
                                      <ul>
                                        @if (!empty($pb->length))
                                        <li>Length : {{ $pb->length }}</li>
                                        @else
                                        @endif
                                        @if (!empty($pb->beam))
                                        <li>Beam : {{ $pb->beam }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->draft))
                                        <li>Draft : {{ $pb->draft }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->main_hull_beam))
                                        <li>Main Hull Beam : {{ $pb->main_hull_beam }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->fuel))
                                        <li>Fuel : {{ $pb->fuel }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->water))
                                        <li>Water : {{ $pb->water }}</li>
                                        @else  
                                        @endif
                                      </ul>
                                    </div>
                                    <div class="col">
                                      <ul>
                                        @if (!empty($pb->seating_capacity))
                                        <li>Seating Capacity : {{ $pb->seating_capacity }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->speed))
                                        <li>Speed : {{ $pb->speed }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->beds))
                                        <li>Beds : {{ $pb->beds }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->hull_type))
                                        <li>Hull Type : {{ $pb->hull_type }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->fish_hold_capacity))
                                        <li>Fish Hold Capacity : {{ $pb->fish_hold_capacity }}</li>
                                        @else  
                                        @endif
                                        @if (!empty($pb->price))
                                        <li>price : {{ $pb->price }}</li>
                                        @else  
                                        @endif
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                                
                                <a href="" class="read-more button-fancy -color-1 ">
                                  <span class="btn-arrow"></span>
                                  <span class="twp-read-more text">Order Now</span>
                                </a>
                            </div> 
                          </div>
                         
                      </div> 
                    
                    <div class="y-pagination row clearfix">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                         
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
