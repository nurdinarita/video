@extends('layouts.main')

@section('content-wrapper')
<div id="content-wrapper">
    <div class="container-fluid pb-0">
       <div class="video-block section-padding">
          <div class="row">
             <div class="col-md-8">
                <div class="single-video-left">
                   <div class="single-video">
                      {{-- <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/8LWZSGNjuF0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
                      <video id="videoPlayer" controls autoplay width="100%" height="360" poster="{{ asset('storage/thumbnail/'.$play->thumbnail) }}">
                        <source src="{{ asset('storage/video/'.$play->directory) }}">
                      </video>
                   </div>
                   <div class="single-video-title box mb-3">
                      <h2>{{ $play->title }}</h2>
                      <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
                   </div>
                   <div class="single-video-author box mb-3">
                      <div class="float-right"><button class="btn btn-danger" type="button">Subscribe <strong>1.4M</strong></button> <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button></div>
                      <img class="img-fluid" src="{{ asset('img/s4.png') }}" alt="">
                      <p><a href="#"><strong>Osahan Channel</strong></a> <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span></p>
                      <small>Published on Aug 10, 2018</small>
                   </div>
                   <div class="single-video-info-content box mb-3">
                      <h6>Category :</h6>
                      <p>{{ ucwords($play->category) }}</p>
                      <h6>About :</h6>
                      <p>{{ ucwords($play->description) }}</p>
                      <h6>Tags :</h6>
                      <p class="tags mb-0">
                         <span><a href="#">Uncharted 4</a></span>
                         <span><a href="#">Playstation 4</a></span>
                         <span><a href="#">Gameplay</a></span>
                         <span><a href="#">1080P</a></span>
                         <span><a href="#">ps4Share</a></span>
                         <span><a href="#">+ 6</a></span>
                      </p>
                   </div>
                </div>
             </div>
             <div class="col-md-4">
                <div class="single-video-right">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="adblock">
                            <div class="img">
                               Google AdSense<br>
                               336 x 280
                            </div>
                         </div>
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
                            <h6>Up Next</h6>
                         </div>
                      </div>
                      <div class="col-md-12">
                        @foreach ($videos as $video)
                        <div class="video-card video-card-list">
                           <div class="video-card-image">
                              <a class="play-icon" href="{{ url('watch?v='.pathinfo($video->directory, PATHINFO_FILENAME)) }}"><i class="fas fa-play-circle"></i></a>
                              <a href="{{ url('watch?v='.pathinfo($video->directory, PATHINFO_FILENAME)) }}"><img class="img-fluid" src="{{ asset('storage/thumbnail/'.$video->thumbnail) }}" alt=""></a>
                              <div class="time">3:50</div>
                           </div>
                           <div class="video-card-body">
                              <div class="btn-group float-right right-action">
                                 <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                 </div>
                              </div>
                              <div class="video-title">
                                 <a href="{{ url('watch?v='.pathinfo($video->directory, PATHINFO_FILENAME)) }}">{{ $video->title }}</a>
                              </div>
                              <div class="video-page text-success">
                                 {{ ucwords($video->category) }}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                              </div>
                              <div class="video-view">
                                 1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                              </div>
                           </div>
                        </div>
                        @endforeach
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
                   <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://templatespoint.net/">TemplatesPoint</a>
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


<script>
// Mengakses elemen video
var video = document.getElementById('videoPlayer');

video.addEventListener('loadedmetadata', function() {
   var duration = video.duration;
   console.log('Durasi total video:', duration);
   
   // Mengetahui waktu saat ini
   var currentTime = video.currentTime;
   console.log('Waktu saat ini:', currentTime);
   
   video.play();
   // Mengetahui durasi video
   var duration = video.duration;
   console.log('Durasi video:', duration);

   // Menambahkan event listener untuk mengikuti perubahan waktu video
   video.addEventListener('timeupdate', function() {
   // Menampilkan waktu saat ini secara real-time
   console.log('Waktu saat ini:', video.currentTime);

   if(video.currentTime == duration){
      window.location.replace("{{ url('watch?n='.$play->directory) }}");
   }
   });


});





</script> 
@endsection