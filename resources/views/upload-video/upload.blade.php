@extends('layouts.main')

@section('content-wrapper')
<div id="content-wrapper">
   <div class="container-fluid pt-5 pb-5">
      <div class="row">
         <div class="col-md-8 mx-auto text-center upload-video pt-5 pb-5">
            <form action="#" class="upload-form">
               @csrf
               <input class="file-input" type="file" name="video" hidden>
               <h1><i class="fas fa-file-upload text-primary"></i></h1>
               <h4 class="mt-5">Select Video files to upload</h4>
               <p class="land">or drag and drop video files</p>
            </form>
            <div class="mt-4">
               <section class="progress-area"></section>
               <section class="uploaded-area"></section>
               {{-- <a class="btn btn-outline-primary" href="upload-video.html">Upload Video</a> --}}
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
const form = document.querySelector("form.upload-form"),
fileInput = document.querySelector(".file-input"),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".uploaded-area");

form.addEventListener("click", () =>{
  fileInput.click();
});

fileInput.onchange = ({target})=>{
  let file = target.files[0]; //getting file [0] this means if user has selected multiple files then get first one only
  if(file){
    let fileName = file.name; //getting file name
    if(fileName.length >= 12){ //if file name length is greater than 12 then split it and add ...
      let splitName = fileName.split('.');
      fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
    }
    uploadFile(fileName); //calling uploadFile with passing file name as an argument
  }
}

// file upload function
function uploadFile(name){
  let xhr = new XMLHttpRequest(); //creating new xhr object (AJAX)
  xhr.open("POST", "{{ url('/upload-video') }}"); //sending post request to the specified URL
  xhr.upload.addEventListener("progress", ({loaded, total}) =>{ //file uploading progress event
    let fileLoaded = Math.floor((loaded / total) * 100);  //getting percentage of loaded file size
    let fileTotal = Math.floor(total / 1000); //gettting total file size in KB from bytes
    let fileSize;
    // if file size is less than 1024 then add only KB else convert this KB into MB
    (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
    let progressHTML = `<div class="content">
                     <div class="details">
                        <span class="name">${name} • Uploading</span>
                        <span class="percent">${fileLoaded}%</span>
                     </div>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"   aria-valuemin="0" aria-valuemax="100" style="width: ${fileLoaded}%"></div>
                     </div>
                  </div>`;
    // uploadedArea.innerHTML = ""; //uncomment this line if you don't want to show upload history
    uploadedArea.classList.add("onprogress");
    progressArea.innerHTML = progressHTML;
    if(loaded == total){
      progressArea.innerHTML = "";
      let uploadedHTML = `<div class="content upload">
                              <div class="details">
                                <span class="name">${name} • Uploaded</span>
                                <span class="percent">${fileSize}</span>
                              </div>
                            </div>
                            <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"   aria-valuemin="0" aria-valuemax="100" style="width: ${fileLoaded}%"></div>
                     </div>
                     <a class="btn btn-outline-primary mt-2" href="{{ url('upload-video/detail') }}">Next Step</a>
                     `;
      uploadedArea.classList.remove("onprogress");
      uploadedArea.innerHTML = uploadedHTML; //uncomment this line if you don't want to show upload history
      // uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML); //remove this line if you don't want to show upload history
    }
  });
  let data = new FormData(form); //FormData is an object to easily send form data
  xhr.send(data); //sending form data
}
// location.replace("{{ url('/upload-video/detail') }}");
</script>
@endsection