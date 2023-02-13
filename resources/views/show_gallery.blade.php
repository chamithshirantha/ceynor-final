<!DOCTYPE html>
<html lang="en">
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
   <body >
      <a href="#" id="back-to-top" title="Back to top"><img class="arrow-up " src="assets/images/a.svg"></a>
      <div id="main-3">
         <header>
            <div class="header-inner hi-about-us">
                <div class="header-cont container-fluid">
                  <div class="y-breadcrum clearfix wow fadeInDown " data-wow-delay=".9s">
                        <h1 class="y-heading">Our Gallery</h1> 
                       <ul class="text-center">
                         <li><a href="{{ route('home') }}">Home</a></li>
                         <li><span>Our Gallery</span></li>
                       </ul> 
                  </div>
               </div>
            </div>
          
            @include('navbar')
          
         </header>
         <main>
            <section class="main-section explore-section " >
               <div class="container-fluid">
                  <div class="row">

                    @php
                    $table_data= App\Models\Gallery::all();

                    

                    @endphp

                    
                        @php
                            $counter = 0;
                        @endphp


                        @foreach ($table_data as $row)

                        
                            @if ($counter % 2 == 0)
                            <div class="col-md-6 p-0">
                                <div class="explore_box exb-type-2">
                            @endif
                            <a href="#">
                                <img class="img-fluid" src="uploads/gallery/{{ $row->image }}">
                                {{-- <img class="img-fluid-i" src="/ceynor/assets/images/ceynorlogo.png"> --}}
                                <div class="thm-h thm-h-3 text-center">
                                   
                                </div>
                             </a>
                            @if ($counter % 2 == 1)
                                </div>
                            </div>
                            @endif
                            @php
                                $counter++;
                            @endphp

                        @endforeach
                    

                    {{-- @foreach ($image as $item)

                    <div class="col-md-6 p-0">
                        <div class="explore_box exb-type-2">
                           <a href="#">
                              <img class="img-fluid" src="uploads/gallery/{{ $item->image }}">
                              <img class="img-fluid-i" src="assets/images/ex-i-1.png">
                              <div class="thm-h thm-h-3 text-center">
                                 <h4>Destinations</h4>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6 p-0">
                        <div class="explore_box exb-type-2">
                           <a href="#">
                              <img class="img-fluid" src="uploads/gallery/{{ $item->image }}">
                              <img class="img-fluid-i" src="assets/images/ex-i-1.png">
                              <div class="thm-h thm-h-3 text-center">
                                 <h4>Destinations</h4>
                              </div>
                           </a>
                        </div>
                     </div>
                        
                    @endforeach --}}

                    
                     {{-- <div class="col-md-6 p-0">
                        <div class="explore_box exb-type-2">
                           <a href="#">
                              <img class="img-fluid" src="assets/images/ex-2.png">
                              <img class="img-fluid-i" src="assets/images/ex-i-3.png">  
                              <div class="thm-h thm-h-3 text-center">
                                 <h4>Management</h4>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6 p-0">
                        <div class="explore_box exb-1 exb-type-1">
                           <a href="#">
                              <img class="img-fluid" src="assets/images/ex-4.png">
                              <div class="thm-h thm-h-3 ">
                                 <h4>Experience</h4>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6 p-0">
                        <div class="explore_box exb-type-2">
                           <a href="#">
                              <img class="img-fluid" src="assets/images/ex-2.png">
                              <img class="img-fluid-i" src="assets/images/ex-i-1.png">
                              <div class="thm-h thm-h-3 text-center">
                                 <h4>Destinations</h4>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6 p-0">
                        <div class="explore_box exb-type-2">
                           <a href="#">
                              <img class="img-fluid" src="assets/images/ex-2.png">
                              <img class="img-fluid-i" src="assets/images/ex-i-2.png">
                              <div class="thm-h thm-h-3 text-center">
                                 <h4>News & Events</h4>
                              </div>
                           </a>
                        </div>
                     </div> --}}

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
    <script src="{{ url('assets/js/jquery.paroller.min.js') }}"></script> 
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <script src="{{ url('assets/js/tilt.jquery.min.js') }}"></script>
   </body>
</html>

