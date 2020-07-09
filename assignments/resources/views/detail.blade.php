
    @include('partials/header')
    <style>
        body{
            color:white;
        }
        .container {
            max-width:2000px !important;
        }
        img{
            border:7px solid white;
        }
        h5{
            background-color: transparent;
            color:#444;
        }

        .card {
            flex-direction: column;
            border:none;
            border-radius:0;
        }
        .card-body{
            color:#444;
        }
        h6{
            font-weight: bold;
            color:black;
        }
        .bought{
            padding: 60px;
        }
        .card-footer{
            background-color: transparent;
        }
        .card-text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp:4; /* number of lines to show */
            -webkit-box-orient: vertical;
        }
        .bought-card{
            border:1px solid black;
        }
        .detail-wrapper {
            width:80%;
            margin:0 auto;
        }
        .detail-row{
            justify-content: center;
        }
        .title-row{
            display: flex;
            flex-direction: column;
            margin-left: 22px;
        }
    </style>
    
    <div class="container detail-wrapper my-5 py-5 z-depth-1">

     <!-- Section heading -->
        <div class="detail-row title-row">
            <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
            <strong>{{$game->title}}</strong>
            </h2>

            <h3 class="h3-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
            <span class="text-left badge badge-danger product mb-1 ml-xl-0 ">{{$game->category->name}}</span>
            </h3>

            <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
            <span class="red-text font-weight-bold">
                <p style="font-size:16px; margin:0"><strong>Rating: {{$game->rating}}</strong></p>
                <p style="font-size:13px;">{{$game->year}}</p>
            </span>
            </h3>

        </div>
          <!-- /Section heading -->

      <!--Section: Content-->
      <section class="text-center">

       


        <div class="row detail-row">

          <div class="col-lg-6">

            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

              <!--Slides-->
              <div class="carousel-inner text-center text-md-left" role="listbox">
                <div class="carousel-item active">
                  <img src="/storage/images/{{$game->featured_image}}"
                    alt="First slide" class="img-fluid">
                </div>
                
              </div>
              <!--/.Slides-->

            

            </div>
            <!--/.Carousel Wrapper-->

          </div>

          <div class="col-lg-5 text-center text-md-left">

            
             
            </h3>

            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                
            
              <!-- Accordion card -->
              <div class="card">
                
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">
                    <h5 class="mb-0">
                      Description
                      <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    {!! $game->body !!}
                  </div>
                </div>
              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo2">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                    aria-expanded="false" aria-controls="collapseTwo2">
                    <h5 class="mb-0">
                      Details
                      <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    <div class="tech-specs__pivot-menus">
                  <div class="tech-specs__menu-header">
                    <h6 style="font-weight:bold !important;"><strong>Genre</strong></h6>
                  </div>
                  <ul>
                    <li class="tech-specs__menu-items" style="direction:ltr">{{$game->category->name}}</li>
                    
                  </ul>
                  <div class="tech-specs__menu-header">
                    <h6 style="font-weight:bold !important;"><strong>Audio</strong></h6>
                  </div>
                    <ul>
                      <li class="tech-specs__menu-item-name">{{$game->title}}</li>
                        <li class="tech-specs__menu-items">Spanish (Latin America)</li>
                        <li class="tech-specs__menu-items">English</li>
                        <li class="tech-specs__menu-items">Portuguese (Brazil)</li>
                        <li class="tech-specs__menu-items">French</li>
                    </ul>
                  <div class="tech-specs__menu-header">
                    Subtitles
                  </div>
                    <ul>
                      <li class="tech-specs__menu-item-name">The Art of The {{$game->title}}</li>
                        <li class="tech-specs__menu-items">Spanish (Latin America)</li>
                        <li class="tech-specs__menu-items">English</li>
                        <li class="tech-specs__menu-items">Portuguese (Brazil)</li>
                        <li class="tech-specs__menu-items">French</li>
                    </ul>
                    <ul>
                      <li class="tech-specs__menu-item-name">The {{$game->title}} Original Soundtrack</li>
                        <li class="tech-specs__menu-items">Spanish (Latin America)</li>
                        <li class="tech-specs__menu-items">English</li>
                        <li class="tech-specs__menu-items">Portuguese (Brazil)</li>
                        <li class="tech-specs__menu-items">French</li>
                    </ul>
                    <ul>
                      <li class="tech-specs__menu-item-name">The {{$game->title}}</li>
                        <li class="tech-specs__menu-items">Spanish (Latin America)</li>
                        <li class="tech-specs__menu-items">English</li>
                        <li class="tech-specs__menu-items">Portuguese (Brazil)</li>
                        <li class="tech-specs__menu-items">French</li>
                    </ul>
                  <div class="tech-specs__menu-header">
                    File Size
                  </div>
                  <div class="tech-specs__menu-items">
                    84.01 GB
                  </div>

                <div id="ember970" class="__desktop-presentation__product-detail__details-list__23fd5 ember-view"><!----></div>
              </div>
                  </div>
                </div>
              </div>
              <!-- Accordion card -->
            <button class="mt-3 btn btn-primary">Add to Cart</button>
      
            <!--/.Accordion wrapper-->

     

          </div>

        </div>

      </section>
      <!--Section: Content-->

      <section class="bought">
          <h2 class="mt-3">People who bought this also bought:</h2>
          <hr style="color:white;background:white">
          <div class="row">


          @foreach($games as $single)
          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-4">
            <!-- Card -->
            <div class="card bought-card card-cascade narrower card-ecommerce">
              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img src="/images/{{$single->featured_image}}" class="card-img-top" alt="sample photo">
                <a>
                  <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
              </div>
              <!-- Card image -->
              <!-- Card content -->
              <div class="card-body card-body-cascade text-center pb-3">
                <!-- Title -->
                <h5 class="card-title mb-1">
                  <strong>
                    <a href="/{{$single->id}}/detail">{{$single->title}}</a>
                  </strong>
                </h5>
               
                <!-- Description -->
                <p class="card-text">{{$single->abstract}}
                </p>
                <!-- Card footer -->
                <div class="card-footer px-1">
                  <span class="float-left font-weight-bold">
                    <strong>69.99$</strong>
                  </span>
                  <span class="float-right">
                    <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                      <i class="fas fa-shopping-cart grey-text ml-3"></i>
                    </a>
                    <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                      <i class="fas fa-heart grey-text ml-3"></i>
                    </a>
                  </span>
                </div>
              </div>
              <!-- Card content -->
            </div>
            <!-- Card -->
          </div>
          <!-- /Grid column -->
          @endforeach

         
        </div>
      </section>


</div>
    
@include('partials/footer')