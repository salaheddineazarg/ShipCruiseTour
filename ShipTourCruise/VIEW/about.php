<?php require(view.'include/header.php') ?>

<body>
    <?php require(view.'include/navbar.php') ?>


    <div class="cover">
        <img class="img-cover" src="https://images.pexels.com/photos/1430672/pexels-photo-1430672.jpeg" alt="">

    </div>



    <section class="d-flex mt-4 flex-column cards align-items-center  gap-4">
        <h1 class="h2">WHY CHOOSE US?</h1>

        <div class="row gap-5 w-100 mb-5  justify-content-center ">
            <div class="card col-md-3 text-center" >
                <div class="about-i">
                    <i class="fa-brands fa-superpowers"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Perfect Planning</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
            </div>
            <div class="card  col-md-3 text-center" ">
                <div class="about-i">
                    <i class="fa-solid fa-paw"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Secure Venues</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
            </div>
            <div class="card col-md-3 text-center" >
                <div class="about-i">
                    <i class="fa-brands fa-superpowers"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Beautiful Memories</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
            </div>

        </div>
    </section>
 

    <section class="bg-light">


    <h2 class="h2">Testimonials</h2>
    <div id="carouselExampleIndicators" class="carousel1 carousel-fade slide" data-bs-ride="carousel1">
        <!-- Carousel indicators -->
        <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                   aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                   aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                   aria-label="Slide 3"></button>
           </div>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="img-box">
                  <img
                        src="http://lamaro.like-themes.com/wp-content/uploads/2018/02/sailor_04-340x340.jpg" alt="">
                </div>
                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam
                    faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus,
                    volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                <p class="overview"><b>Michael Holz</b>CAPITANE</p>
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <div class="img-box">
                  <img
                        src="http://lamaro.like-themes.com/wp-content/uploads/2018/02/sailor_07-340x340.jpg" alt="">
                </div>
                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                    varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.
                    Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                <p class="overview"><b>Paul Wilson</b>CAPITANE</p>
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <div class="img-box"><img
                        src="https://htmldesigntemplates.com/html/yatra/bootstrap5/images/testemonial1.jpg" alt="">
                </div>
                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi
                    suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis.
                    Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.
                </p>
                <p class="overview"><b>Antonio Moreno</b>Capitane </p>
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
           </button>
    </div>


</section>

    <!-- <section class="container a d-flex mt-4 flex-column align-items-center  gap-4">
<h1 class="">OUR TEAM</h1>
<div class="row cards-team p-4">
<div class="col-lg-3 col-md-6">
<div class="team-item">
<div class="team-image">
<img class="image-team" src="https://htmldesigntemplates.com/html/yatra/bootstrap5/images/testemonial1.jpg" alt="Image">
</div>
<div class="team-content">
<h3>Peter Parker</h3>
<p>Tour Advisor</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="team-item">
<div class="team-image">
<img class="image-team" src="http://lamaro.like-themes.com/wp-content/uploads/2018/02/sailor_07-340x340.jpg" alt="Image">
</div>
<div class="team-content">
<h3>Peter Parker</h3>
<p>Tour Advisor</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="team-item">
<div class="team-image">
<img class="image-team" src="http://lamaro.like-themes.com/wp-content/uploads/2018/02/sailor_04-340x340.jpg" alt="Image">
</div>
<div class="team-content">
<h3>Peter Parker</h3>
<p>Tour Advisor</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="team-item">
<div class="team-image">
<img class="image-team" src="https://htmldesigntemplates.com/html/yatra/bootstrap5/images/testemonial2.jpg" alt="Image">
</div>
<div class="team-content">
<h3>Peter Parker</h3>
<p>Tour Advisor</p>
</div>
</div>
</div>
</div>
</section> -->


    <section class="mt-xl-5 mt-sm-0 mb-xl-5  mb-sm-0">
        <div class=" mb-4 mt-3 cards2 p-5 w-100 ">
            <div class="card cardoffer shadow mx-auto   mb-3" style="max-width: 80%; 
height:300px;">
                <div class="row h-100 ">
                    <div class="col-md-4">
                        <img src="https://modactivity.travelerwp.com/wp-content/uploads/2022/05/Rectangle-7-min.png"
                            class="img-fluid  h-100 imagecard rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 justify-content-between ">
                        <div class="card-body mb-xl-5 mb-sm-0 text-center">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>

                        </div>
                        <div class="d-flex gap-3">
                            <input type="email" placeholder="Email Addresse" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                            <button class="btn bg-primary text-light">Subscript</button>
                        </div>
                    </div>

                </div>
    </section>

    <?php require(view.'include/footer.php') ?>