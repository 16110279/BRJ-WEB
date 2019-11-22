     @extends('layouts/main')
     @section('title','Bikin Rumah Jogja')
     @section('container')

     <div class="ftco-blocks-cover-1">
         <div class="ftco-cover-1 overlay" style="background-image: url('web/images/hero_1.jpg')">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-lg-5">
                         <h1 class="line-bottom">Solusi property masa kini</h1>
                     </div>
                     <div class="col-lg-5 ml-auto">

                     </div>
                 </div>
             </div>
         </div>
     </div>


     <div class="site-section">
         <div class="container">
             <div class="row">
                 <div class="col-md-5 pr-md-5 mr-auto">
                     <h2 class="line-bottom">Ingin mempunyai rumah atau property? </h2>
                     <p>Diskusikan bersama kami, semua itu bukan hanya mimpi </p>
                 </div>
                 <div class="col-md-6">
                     <div class="quick-contact-form bg-white">
                         <h2>Konsultasikan pada kami</h2>
                         <form action="/create" method="POST">
                             @csrf
                             <div class="form-group">
                                 <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama" value="{{old('username')}}">
                                 @error('nama')
                                 <div class="invalid-feedback">
                                     {{ $message }}
                                 </div>
                                 @enderror
                             </div>

                             <div class="form-group">
                                 <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                                 @error('email')
                                 <div class="invalid-feedback">
                                     {{ $message }}
                                 </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="No Telp" value="{{old('no_telp')}}">
                                 @error('no_telp')
                                 <div class="invalid-feedback">
                                     {{ $message }}
                                 </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <textarea class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi" name="spesifikasi" placeholder="Spesifikasi Rumah Yang Diinginkan" value="{{old('spesifikasi')}}"></textarea>
                                 @error('spesifikasi')
                                 <div class="invalid-feedback">
                                     {{ $message }}
                                 </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <input type="text" id="dana" name="dana" class="form-control @error('dana') is-invalid @enderror" placeholder="Dana"  value="{{old('dana')}}">
                                 @error('dana')
                                 <div class="invalid-feedback">
                                     {{ $message }}
                                 </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <input type="submit" value="Kirim" class="btn btn-primary px-5">
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="site-section" style="background-color: #dedffe;">
         <div class="container">
             <div class="row align-items-stretch">
                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="service-2 h-100">
                         <div class="svg">
                             <img src="web/images/flaticon/svg/001-renovation.svg" alt="Image" class="">
                         </div>

                         <h3><span>Renovation</span></h3>
                         <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

                     </div>
                 </div>
                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="service-2 h-100">
                         <div class="svg">
                             <img src="web/images/flaticon/svg/002-shovel.svg" alt="Image" class="">
                         </div>

                         <h3><span>Finishing</span></h3>
                         <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

                     </div>
                 </div>
                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="service-2 h-100">
                         <div class="svg">
                             <img src="web/images/flaticon/svg/003-bulldozer.svg" alt="Image" class="">
                         </div>

                         <h3><span>Building Construction</span></h3>
                         <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

                     </div>
                 </div>


                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="service-2 h-100">
                         <div class="svg">
                             <img src="web/images/flaticon/svg/004-house-plan.svg" alt="Image" class="">
                         </div>

                         <h3><span>House Build</span></h3>
                         <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

                     </div>
                 </div>
                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="service-2 h-100">
                         <div class="svg">
                             <img src="web/images/flaticon/svg/005-fence.svg" alt="Image" class="">
                         </div>

                         <h3><span>Fence Construction</span></h3>
                         <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

                     </div>
                 </div>
                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="service-2 h-100">
                         <div class="svg">
                             <img src="web/images/flaticon/svg/006-wheelbarrow.svg" alt="Image" class="">
                         </div>

                         <h3><span>Bridge Construct</span></h3>
                         <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

                     </div>
                 </div>

             </div>
         </div>
     </div>




     <div class="site-section">
         <div class="container">
             <div class="row mb-4">

                 <div class="col-md-4 mx-auto">
                     <h2 class="line-bottom text-center">Our Projects</h2>
                 </div>

             </div>

             <div class="row">
                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="project-item">

                         <img src="web/images/img_1.jpg" alt="Image" class="img-fluid">

                         <div class="project-item-overlay">
                             <a class="category" href="#">Renovate</a>


                             <a href="#" class="project-title"><span>Renovate the house</span></a>
                         </div>

                     </div>
                 </div>

                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="project-item">

                         <img src="web/images/img_2.jpg" alt="Image" class="img-fluid">

                         <div class="project-item-overlay">
                             <a class="category" href="#">Renovate</a>


                             <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                         </div>

                     </div>
                 </div>

                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="project-item">

                         <img src="web/images/img_3.jpg" alt="Image" class="img-fluid">

                         <div class="project-item-overlay">
                             <a class="category" href="#">Renovate</a>


                             <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                         </div>

                     </div>
                 </div>

                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="project-item">

                         <img src="web/images/img_4.jpg" alt="Image" class="img-fluid">

                         <div class="project-item-overlay">
                             <a class="category" href="#">Renovate</a>


                             <a href="#" class="project-title"><span>Renovate the house</span></a>
                         </div>

                     </div>
                 </div>

                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="project-item">

                         <img src="web/images/img_1.jpg" alt="Image" class="img-fluid">

                         <div class="project-item-overlay">
                             <a class="category" href="#">Renovate</a>


                             <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                         </div>

                     </div>
                 </div>

                 <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                     <div class="project-item">

                         <img src="web/images/img_2.jpg" alt="Image" class="img-fluid">

                         <div class="project-item-overlay">
                             <a class="category" href="#">Renovate</a>


                             <a href="#" class="project-title"><span>Renovate the house 2</span></a>
                         </div>

                     </div>
                 </div>



             </div>
         </div>
     </div>

     @endsection