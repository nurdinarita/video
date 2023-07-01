@extends('layouts.main')

@section('content-wrapper')
<div id="content-wrapper">
   <div class="container-fluid upload-details">
   <form action="{{ url('upload-video/upload') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
         <div class="col-lg-12">
            <div class="main-title">
               <h6>Complete Video Details</h6>
            </div>
         </div>
         <div class="col-lg-3">
             <input type="hidden" name="directory" value="{{ $tempVid->directory }}">
            <div class="imgplace">
                <video width="100%" height="100%" controls>
                    <source src="{{ asset('storage/temp-video/'. $tempVid->directory) }}" type="video/mp4">
                  </video>
            </div>
         </div>
         <div class="col-lg-9">
            <div class="osahan-title">{{ $tempVid->title }}</div>
            <div class="osahan-size">102.6 MB . 2:13 MIN Uploaded</div>
            <div class="osahan-progress">
               <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100"   aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
               </div>
               <div class="osahan-close">
                  <a href="#"><i class="fas fa-times-circle"></i></a>
               </div>
            </div>
            {{-- <div class="osahan-desc">Your Video is still uploading, please keep this page open until it's done.</div> --}}
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-lg-12">
            <div class="osahan-form">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="video_thumbnail">Video Thumbnail</label>
                        <input type="file" id="video_thumbnail" name="thumbnail" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="video_title">Video Title</label>
                        <input type="text" placeholder="Video Title" id="video_title" name="title" value="{{ $tempVid->title }}" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="description">Video Description</label>
                        <textarea rows="3" id="description" name="description" class="form-control" placeholder="Please Write Video Description"></textarea>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3">
                     <div class="form-group">
                        <label for="privacy">Privacy Settings</label>
                        <select id="privacy" class="custom-select" name="privacy">
                           <option value="1">Public</option>
                           <option value="0">Private</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row ">
                  <div class="col-lg-12">
                     <div class="main-title">
                        <h6>Category ( you can select upto 6 categories )</h6>
                     </div>
                  </div>
               </div>
               <div class="row category-checkbox">
                  <!-- checkbox 1col -->
                  <div class="col-lg-2 col-xs-6 col-4">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="adventure" name="category" value="Adventure">
                        <label class="custom-control-label" for="adventure">Adventure</label>
                     </div>
                  </div>
                  <!-- checkbox 2col -->
                  <div class="col-lg-2 col-xs-6 col-4">

                  </div>
                  <!-- checkbox 3col -->
                  <div class="col-lg-2 col-xs-6 col-4">
                     
                  </div>
                  <!-- checkbox 1col -->
                  <div class="col-lg-2 col-xs-6 col-4">
                     
                  </div>
                  <!-- checkbox 2col -->
                  <div class="col-lg-2 col-xs-6 col-4">

                  </div>
                  <!-- checkbox 3col -->
                  <div class="col-lg-2 col-xs-6 col-4">
                     
                  </div>
               </div>
            </div>
            <div class="osahan-area text-center mt-3">
               <button class="btn btn-outline-primary">Save Changes</button>
            </div>
            <hr>
            {{-- <div class="terms text-center">
               <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
               <p class="hidden-xs mb-0">Ipsum is therefore always free from repetition, injected humour, or non</p>
            </div> --}}
         </div>
      </div>
   </form>
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
@endsection