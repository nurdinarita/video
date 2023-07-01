@extends('layouts.main')

@section('content-wrapper')
<div id="content-wrapper">
   <div class="container-fluid pb-0">
      <div class="top-mobile-search">
         <div class="row">
            <div class="col-md-12">   
               <form class="mobile-search">
                  <div class="input-group">
                    <input type="text" placeholder="Search for..." class="form-control">
                      <div class="input-group-append">
                        <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                      </div>
                  </div>
               </form>   
            </div>
         </div>
      </div>
      <div class="top-category section-padding mb-4">
         <div class="row">
            <div class="col-md-12">
               <div class="main-title">
                  <div class="btn-group float-right right-action">
                     <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                     </div>
                  </div>
                  <h6>Channels Categories</h6>
               </div>
            </div>
            <div class="col-md-12">
               <div class="owl-carousel owl-carousel-category">
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s1.png" alt="">
                           <h6>Your Life</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s2.png" alt="">
                           <h6>Unboxing Cool</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s3.png" alt="">
                           <h6>Service Reviewing</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s4.png" alt="">
                           <h6>Gaming <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span></h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s5.png" alt="">
                           <h6>Technology Tutorials</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s6.png" alt="">
                           <h6>Singing</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s7.png" alt="">
                           <h6>Cooking</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s8.png" alt="">
                           <h6>Traveling</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s1.png" alt="">
                           <h6>Education</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s2.png" alt="">
                           <h6>Noodles, Sauces & Instant Food</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s3.png" alt="">
                           <h6>Comedy <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span></h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="category-item">
                        <a href="#">
                           <img class="img-fluid" src="img/s4.png" alt="">
                           <h6>Lifestyle Advice</h6>
                           <p>74,853 views</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <div class="video-block section-padding">
         <div class="row">
            <div class="col-md-12">
               <div class="main-title">
                  <div class="btn-group float-right right-action">
                     <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                     </div>
                  </div>
                  <h6>New Uploaded</h6>
               </div>
            </div>
            @foreach ($videos as $video)
            <div class="col-xl-3 col-sm-6 mb-3">
               <div class="video-card">
                  <div class="video-card-image">
                     <a class="play-icon" href="{{ url('watch?v='.pathinfo($video->directory, PATHINFO_FILENAME)) }}"><i class="fas fa-play-circle"></i></a>
                     <a href="{{ url('watch?v='.pathinfo($video->directory, PATHINFO_FILENAME)) }}"><img class="img-fluid" src="{{ asset('storage/thumbnail/'.$video->thumbnail) }}" alt=""></a>
                     <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                     <div class="video-title">
                        <a href="#">{{ $video->title }}</a>
                     </div>
                     <div class="video-page text-success">
                        {{ ucwords($video->category) }}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                     </div>
                     <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            
         </div>
      </div>
      <hr class="mt-0">
      <div class="video-block section-padding">
         <div class="row">
            <div class="col-md-12">
               <div class="main-title">
                  <div class="btn-group float-right right-action">
                     <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                     </div>
                  </div>
                  <h6>Popular Channels</h6>
               </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
               <div class="channels-card">
                  <div class="channels-card-image">
                     <a href="#"><img class="img-fluid" src="img/s1.png" alt=""></a>
                     <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                  </div>
                  <div class="channels-card-body">
                     <div class="channels-title">
                        <a href="#">Channels Name</a>
                     </div>
                     <div class="channels-view">
                        382,323 subscribers
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
               <div class="channels-card">
                  <div class="channels-card-image">
                     <a href="#"><img class="img-fluid" src="img/s2.png" alt=""></a>
                     <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                  </div>
                  <div class="channels-card-body">
                     <div class="channels-title">
                        <a href="#">Channels Name</a>
                     </div>
                     <div class="channels-view">
                        382,323 subscribers
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
               <div class="channels-card">
                  <div class="channels-card-image">
                     <a href="#"><img class="img-fluid" src="img/s3.png" alt=""></a>
                     <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-secondary btn-sm">Subscribed <strong>1.4M</strong></button></div>
                  </div>
                  <div class="channels-card-body">
                     <div class="channels-title">
                        <a href="#">Channels Name <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle"></i></span></a>
                     </div>
                     <div class="channels-view">
                        382,323 subscribers
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
               <div class="channels-card">
                  <div class="channels-card-image">
                     <a href="#"><img class="img-fluid" src="img/s4.png" alt=""></a>
                     <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                  </div>
                  <div class="channels-card-body">
                     <div class="channels-title">
                        <a href="#">Channels Name</a>
                     </div>
                     <div class="channels-view">
                        382,323 subscribers
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
   <!-- Sticky Footer -->
   <footer class="sticky-footer">
      <div class="container">
         <div class="row no-gutters">
            <div class="col-lg-6 col-sm-6">
               <p class="mt-1 mb-0"><strong class="text-dark">Vidoe</strong>. 
                  <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://www.templatespoint.net/">Templates Point</a>
                  </small>
               </p>
            </div>
            <div class="col-lg-6 col-sm-6 text-right">
               <div class="app">
                  <a href="#"><img alt="" src="img/google.png"></a>
                  <a href="#"><img alt="" src="img/apple.png"></a>
               </div>
            </div>
         </div>
      </div>
   </footer>
</div>
@endsection