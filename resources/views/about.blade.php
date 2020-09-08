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
                  <h4>2020-2020</h4>
                  <h4 class="subheading">Our Website Beginnings</h4>
               </div>
               <div class="timeline-body">
                  <p class="text-muted">Hello and welcome to HomeDecor, the place to find the best Decor for every taste and occasion. We thoroughly check the quality of our goods, working only with reliable suppliers so that you only receive the best quality product.
                </p>
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
                  <p class="text-muted">
                    We at HomeDecor believe in high quality and exceptional customer service. But most importantly, we believe shopping is a right, not a luxury, so we strive to deliver the best products at the most affordable prices, and ship them to you regardless of where you are located.</p>
               </div>
            </div>
         </li>
         <li>
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4>August 2020</h4>
                  <h4 class="subheading">Our founding</h4>
               </div>
               <div class="timeline-body">
                  <p class="text-muted">At HomeDecor, our aim is to offer you HomeDecor that show you that we really care! Not only have we got the trendiest HomeDecor, but we can also guarantee that they are of the finest quality</p>
               </div>
            </div>
         </li>
         <li class="timeline-inverted">
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4>August 2020</h4>
                  <h4 class="subheading">Early growth & funding</h4>
               </div>
               <div class="timeline-body">
                  <p class="text-muted">The interests of our customers are always the top priority for us, so we hope you will enjoy our products as much as we enjoy making them available to you.</p>
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