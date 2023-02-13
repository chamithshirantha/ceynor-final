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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>

<body>
  <header>
  <div class="header-inner hi-about-us mb-0">
      <div class="header-cont container-fluid">
        <div class="y-breadcrum clearfix wow fadeInDown " data-wow-delay=".9s">
              <h1 class="y-heading">Fishing Boats</h1> 
             <ul class="text-center">
               <li><a href="{{ route('home') }}">Home</a></li>
               <li><span>Fishing Boats</span></li>
             </ul> 
        </div>
     </div>
  </div> 
  @include('navbar')
</header>

    <main class="y-inner_page"> 
      
        <section id="fishing-boats" id="y-single_info">
          <div class="y-single_info">
            <div class="container-fluid">
                <div class=" y-single_info_inner y-section_content">
                          <div class="y-product_listing y-product_listing_side row m-0 ">

                            @foreach ($boats as $item)

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="y-yacht_intro_img">
                                {{-- <a href="charter_single.html"><img src="{{ asset('assets/images/boat1.jpg') }}" style="width: 800px; 594px;"  class="img-fluid" alt=""></a> --}}
                                <a href=""><img src="../uploads/fishingboats/{{ $item->image }}" style="width: 800px; 594px;"  class="img-fluid" alt=""></a>
                              </div>
                              <div class="y-yacht_intro">
                                <a href="">{{ $item->boat_name }}</a>
                                <ul>
                                   <li><img src="{{ url('assets/images/icon_04.png') }}" alt="">Length : {{ $item->length }}</li>
                                   <li><img src="{{ url('assets/images/bed.png') }}" alt="">  Beds : {{ $item->beds }}</li>
                                </ul> 
                                
                                <a href="{{ route('viewmore_fb',$item->id) }}" class="read-more button-fancy -color-1"><span class="btn-arrow"></span><span class="twp-read-more text">More Details</span></a>
                              </div> 
                            </div> 
                                
                            @endforeach
                             

{{--                              
                             <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                               <div class="y-yacht_intro_img">
                                 <a href="charter_single.html"><img src="{{ asset('assets/images/boat2.jpg') }}" style="width: 800px; 594px;" class="img-fluid" alt=""></a>
                               </div>
                               <div class="y-yacht_intro">
                                 <a href="charter_single.html">Longliner - 'Kio' (49 1/2ft - 55ft)</a>
                                 <ul>
                                    <li><i class="ti-key"></i> Capacity</li>
                                    <li><img src="{{ asset('assets/images/bed.png') }}" alt=""> Length: 3 </li>
                                 </ul> 
                                 
                                 <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="read-more button-fancy -color-1"><span class="btn-arrow"></span><span class="twp-read-more text">Order Now</span></a>
                               

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        ...
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                               </div> 
                             </div>  --}}



                             
                             {{-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                               <div class="y-yacht_intro_img">
                                 <a href="charter_single.html"><img src="{{ asset('assets/images/boat4.jpg') }}" style="width: 800px; 594px;" class="img-fluid" alt=""></a>
                               </div>
                               <div class="y-yacht_intro">
                                 <a href="charter_single.html">Multiday Fishing Boat (42ft)</a>
                                 <ul>
                                    <li><i class="ti-key"></i> Capacity</li>
                                    <li><img src="{{ asset('assets/images/bed.png') }}" alt=""> Length: 3 </li>
                                 </ul> 
                                 
                                 <a href="#" class="read-more button-fancy -color-1"><span class="btn-arrow"></span><span class="twp-read-more text">Order Now</span></a>
                               </div> 
                             </div>  --}}
                             
                             
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
    <script src="{{ url('assets/js/custom.js')}}"></script>
</body>

</html>
