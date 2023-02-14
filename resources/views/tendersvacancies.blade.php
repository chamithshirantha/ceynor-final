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
    <!-- CSS:: RESPONSIVE TABS --> 
    <link rel='stylesheet' href="{{ url('assets/css/tabs.css') }}" type='text/css'> 
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <link href="{{ url('assets/css/magicscroll.css" rel="stylesheet') }}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
 </head>

<body>
  <header>
    <div class="header-inner hi-about-us mb-0">
        <div class="header-cont container-fluid">
          <div class="y-breadcrum clearfix wow fadeInDown " data-wow-delay=".9s">
                <h1 class="y-heading">Tenders / Vacancies</h1> 
               <ul class="text-center">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li><span>Tenders / Vacancies</span></li>
               </ul> 
          </div>
       </div>
    </div> 
    @include('navbar')
    
    </header>
    <main class="y-inner_page">
 
        <section id="y-single_info">
          <div class="y-single_info">
            <div class="container-fluid">
                <div class="row m-0 y-single_info_inner y-section_content">

                     
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                        </p>
                        <p>
                           in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                        </p>
                      </div>
                     
                </div> 
                <div class="y-single_details ">

                      <div id="accordion">
                        <div class="card">
                          <div class="card-header">
                            <a class="card-link no_scroll_f" data-toggle="collapse" href="#collapseOne">
                              <h2><span class="ti-anchor"></span> Tenders</h2> 
                              
                            </a>
                          </div>
                          <div id="collapseOne" class="collapse show" >
                            <div class="card-body">
                              <div class="tender">

                                @php
                                $data= App\Models\TendersandVacancies::all();
                                @endphp



                                @foreach ($data as $item)
                                @if ($item->type == 'tenders')
                                <h4>{{ $item->topic }}</h4>
                                <p>{{ $item->description_1 }}</p>
                                <ul>
                                  <li>{{ $item->description_2 }}</li>
                                  <li>{{ $item->description_3 }}</li>
                                </ul>
                                <a href="uploads/tenders-vacancies/{{ $item->file }}" target="_blank">Attachment</a>
                                <br>
                                @endif
                                
                                @endforeach
                                
                                
                              </div>
                              <hr>

                              
                             
                              
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <a class="collapsed card-link no_scroll_f" data-toggle="collapse" href="#collapseTwo">
                              <h2><span class="ti-anchor"></span> Vacancies</h2> 
                              
                            </a>
                          </div>
                          <div id="collapseTwo" class="collapse show" >
                            <div class="card-body">
                              
                              @foreach ($data as $item)
                              @if ($item->type == 'vacancies')
                              <h4>{{ $item->topic }}</h4>
                              <p>{{ $item->description_1 }}</p>
                                <ul>
                                  <li>{{ $item->description_2 }}</li>
                                  <li>{{ $item->description_3 }}</li>
                                </ul>
                                <a href="uploads/tenders-vacancies/{{ $item->file }}" target="_blank">Attachment</a>
                                <br>
                              @endif
                                
                              @endforeach

                              <hr>
                            </div>
                            
                          </div>
                        </div>
                  
                  
                </div>
            </div>

          </div>
        </section> 
        </main>

        @include('footer')
        
  

    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/js/magicscroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
</body>

</html>
