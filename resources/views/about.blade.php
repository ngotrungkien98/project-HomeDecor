@extends('layouts.app')
@section('content')
<!-- About-->
<section class="page-section" id="about">
   <div class="container">
      <div class="text-center">
         <h2 class="section-heading text-uppercase">About</h2>
         <h3 class="section-subheading text-muted">Lets see how we work!</h3>
      </div>
      <ul class="timeline">
         <li>
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4>2009-2011</h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
               </div>
               <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
               </div>
            </div>
         </li>
         <li class="timeline-inverted">
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4>13 August 2020</h4>
                  <h4 class="subheading">We decided our job</h4>
               </div>
               <div class="timeline-body">
                  <p class="text-muted">mlem mlem</p>
               </div>
            </div>
         </li>
         <li>
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4>December 2012</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
               </div>
               <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
               </div>
            </div>
         </li>
         <li class="timeline-inverted">
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4>July 2014</h4>
                  <h4 class="subheading">Phase Two Expansion</h4>
               </div>
               <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
               </div>
            </div>
         </li>
         <li class="timeline-inverted">
            <div class="timeline-image">
               <h4>
                  Be Part
                  <br />
                  Of Our
                  <br />
                  Story!
               </h4>
            </div>
         </li>
      </ul>
   </div>
   <!-- Services-->
   <section class="page-section" id="services">
      <div class="container">
         <h2 class="text-center mt-0">At Your Service</h2>
         <hr class="divider my-4" />
         <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
               <div class="mt-5">
                  <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                  <h3 class="h4 mb-2">Sturdy Themes</h3>
                  <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
               <div class="mt-5">
                  <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                  <h3 class="h4 mb-2">Up to Date</h3>
                  <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
               <div class="mt-5">
                  <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                  <h3 class="h4 mb-2">Ready to Publish</h3>
                  <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
               <div class="mt-5">
                  <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                  <h3 class="h4 mb-2">Made with Love</h3>
                  <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>
@endsection
