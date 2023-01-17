<?php require(view.'include/header.php') ;

?>

<body>
    <?php require(view.'include/navbar.php') ?>


    <!-- end nav -->

    <div class="cover mb-lg-5">
        <img class="img-cover"
            src=" https://images.pexels.com/photos/3601425/pexels-photo-3601425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
            alt="">
        <div class="offer text-center">
            <h1>OFFERS 30%</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quis iusto doloremque ducimus
                molestias quos voluptate, corrupti sit quasi quod voluptates itaque enim non. Expedita nemo dicta id
                corporis consequatur!</p>
        </div>
        <a class="btn text-light book" href="<?php url('booking/index') ?>">BOOK NOW </a>
    </div>



    




    <h1 class="h2">The Best Place</h1>
    <section class="  align-items-center bg-light     container-fluide    ">
    
    
      
        <div class="row gap-5 p-4 w-100 mb-5    justify-content-center ">
            
            <div class="col-lg-3 cards col-md-6">
                <div class="team-item">
                    <div class="team-image">
                        <img class="image-team" src="<?php url('Public/IMAGE2/image1.jpg') ?>" alt="Image">
                    </div>
                    <div class="place-content">
                        <h3>BALI</h3>
                        <p>Top Place</p>
                    </div>
                </div>
            </div>
            <!-- --------------- -->

            <div class="col-lg-3 cards  col-md-6">
                <div class="team-item">
                    <div class="team-image">
                        <img class="image-team" src="<?php url('Public/IMAGE2/image1.jpg') ?>" alt="Image">
                    </div>
                    <div class="place-content">
                        <h3>MALDIVE</h3>
                        <p>Top Place</p>
                    </div>
                </div>
            </div>
            <!-- -------------- -->
            <div class="col-lg-3 cards  col-md-6">
                <div class="team-item">
                    <div class="team-image">
                        <img class="image-team" src="<?php url('Public/IMAGE2/image1.jpg') ?>" alt="Image">
                    </div>
                    <div class="place-content">
                        <h3>MONACO</h3>
                        <p>Top Place</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 cards  col-md-6">
                <div class="team-item">
                    <div class="team-image">
                        <img class="image-team" src="<?php url('Public/IMAGE2/image1.jpg') ?>" alt="Image">
                    </div>
                    <div class="place-content">
                        <h3>VENICE</h3>
                        <p>Top Place</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 cards  col-md-6">
                <div class="team-item">
                    <div class="team-image">
                        <img class="image-team" src="<?php url('Public/IMAGE2/image1.jpg') ?>" alt="Image">
                    </div>

                    <div class="place-content ">
                        <h3>MIAMI</h3>
                        <p>Top Place</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 cards col-md-6">
                <div class="team-item">
                    <div class="team-image">
                        <img class="image-team" src="<?php url('Public/IMAGE2/image1.jpg') ?>" alt="Image">
                    </div>
                    <div class="place-content">
                        <h3>BARCELONA</h3>
                        <p>Top Place</p>
                    </div>
                </div>
            </div>
            <!-- ---------------------- -->
    </section>

    <section id="cta" class="cta mb-lg-5">
        <div class="container aos-init aos-animate" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center"> <a class="cta-btn align-middle" href="<?php url('booking') ?>">Book Now</a></div>
            </div>
        </div>
    </section>

     <h1 class="h2">THE BEST OFFERS</h1>
    <section class="d-flex bg-light flex-column pt-2 align-items-center ">
        
        <div class="container  mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
          <?php foreach ($cruises as $row){ ?>
            
            <div data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">

            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                  <img class="img-fluid img-responsive h-100 product-image" src="<?php url('Public/IMAGE2/'.$row['image']) ?>">
                </div>
                <div class="col-md-6 mt-1">
                <div class="card-body ">
        <h2 class="card-title"><?php echo $row['name'] ?></h2>
        <div class="d-flex flex-row">
                        <div class="ratings  mr-2"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star"></i></div><span>123</span>
                    </div>
        <p class="card-text text-truncate"><?php echo $row['description'] ?></p>
       
       <p><i> Start From*</i></p>
      <div class="d-flex gap-4">
   <div class="d-flex">
   <i class="fa-solid fa-location-dot text-danger"></i>
    <p><?php echo $row['port_departeure'] ?></p>
   </div>
  
   <div class="d-flex ">
   <i class="fa-solid fa-ship text-danger"></i>
    <p><?php echo strtoupper($row['shipname'])?></p>
   </div>
  </div>
   
      
</div>
            </div> 
            
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">PERSON/<?php echo $row['price'] ?>$</h4>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4">
                     
                      <button class="btn btn-primary btn-sm mt-2" type="button">Reserv Now</button></div>
                </div>
            </div>
              <?php } ?>
            </div>
        </div>
    </div>
</div>
    </section>



  


    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

  
        <!-- """""""""""""""""""""""""""""""""""""""""""""""""""""""""""""" -->
        <h1  class=" h2 ">What you get</h1>

       <section class="d-flex mb-4 sides position-relative" style="height:98vh;">
        <div style="background-color:#F1F0E8; width:899px">
        </div>

        <div class="blue-side" style="background-color:#004085; width:364px">
        </div>


        <div style="height:90vh;" class=" d-flex flex-wrap  gap-5 items">

        <div data-aos="fade-right">
            <div class="d-flex icons-home">

                <div style="width:270px" class="row mt-5 flex-column ">

                    <div class="d-flex gap-1">
                        <svg class="svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3V256c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H96V77.3zM32 352v16c0 28.4 12.4 54 32 71.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V464H384v16c0 17.7 14.3 32 32 32s32-14.3 32-32V439.6c19.6-17.6 32-43.1 32-71.6V352H32z" />
                        </svg>
                        <div class="d-flex flex-column">
                            <H5>BATHROOM</H5>
                            <p>
                            <pre>Lorem ipsum dolor 
 sit amet consectetur
</pre>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi svg2 bi-tv" viewBox="0 0 16 16">
                            <path
                                d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                        </svg>
                        <div class="d-flex flex-column">
                            <H5>TV</H5>
                            <p>
                            <pre>Lorem ipsum dolor 
 sit amet consectetur
</pre>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi svg2 bi-router" viewBox="0 0 16 16">
                            <path
                                d="M5.525 3.025a3.5 3.5 0 0 1 4.95 0 .5.5 0 1 0 .707-.707 4.5 4.5 0 0 0-6.364 0 .5.5 0 0 0 .707.707Z" />
                            <path
                                d="M6.94 4.44a1.5 1.5 0 0 1 2.12 0 .5.5 0 0 0 .708-.708 2.5 2.5 0 0 0-3.536 0 .5.5 0 0 0 .707.707ZM2.5 11a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm4.5-.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2.5.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm1.5-.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Z" />
                            <path
                                d="M2.974 2.342a.5.5 0 1 0-.948.316L3.806 8H1.5A1.5 1.5 0 0 0 0 9.5v2A1.5 1.5 0 0 0 1.5 13H2a.5.5 0 0 0 .5.5h2A.5.5 0 0 0 5 13h6a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5h.5a1.5 1.5 0 0 0 1.5-1.5v-2A1.5 1.5 0 0 0 14.5 8h-2.306l1.78-5.342a.5.5 0 1 0-.948-.316L11.14 8H4.86L2.974 2.342ZM14.5 9a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h13Z" />
                            <path d="M8.5 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                        </svg>
                        <div class="d-flex flex-column">
                            <H5>FREE WIFI</H5>
                            <p>
                            <pre>Lorem ipsum dolor 
 sit amet consectetur
.</pre>
                            </p>
                        </div>
                    </div>

                </div>


                <!-- éééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééééé -->
                <div style="width:270px" class="row mt-5 flex-column ">

                    <div class="d-flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi svg2 bi-safe" viewBox="0 0 16 16">
                            <path
                                d="M1 1.5A1.5 1.5 0 0 1 2.5 0h12A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 1 14.5V13H.5a.5.5 0 0 1 0-1H1V8.5H.5a.5.5 0 0 1 0-1H1V4H.5a.5.5 0 0 1 0-1H1V1.5zM2.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5h-12z" />
                            <path
                                d="M13.5 6a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zM4.828 4.464a.5.5 0 0 1 .708 0l1.09 1.09a3.003 3.003 0 0 1 3.476 0l1.09-1.09a.5.5 0 1 1 .707.708l-1.09 1.09c.74 1.037.74 2.44 0 3.476l1.09 1.09a.5.5 0 1 1-.707.708l-1.09-1.09a3.002 3.002 0 0 1-3.476 0l-1.09 1.09a.5.5 0 1 1-.708-.708l1.09-1.09a3.003 3.003 0 0 1 0-3.476l-1.09-1.09a.5.5 0 0 1 0-.708zM6.95 6.586a2 2 0 1 0 2.828 2.828A2 2 0 0 0 6.95 6.586z" />
                        </svg>
                        <div class="d-flex flex-column">
                            <H5>SAVE</H5>
                            <p>
                            <pre>Lorem ipsum dolor 
 sit amet consectetur
</pre>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi svg2 bi-fan" viewBox="0 0 16 16">
                            <path
                                d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0 0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668Zm0 5c0 .073-.004.146-.012.217 1.018-.019 2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944 2.346-1.656 3.079.277.343.442.78.442 1.254Zm-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535 2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8 10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216 2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6 8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37 8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8Zm-3.347-.632c1.267-.34 2.498-.355 3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06 4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" />
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14Zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16Z" />
                        </svg>
                        <div class="d-flex flex-column">
                            <H5>CLIMATISATION</H5>
                            <p>
                            <pre>Lorem ipsum dolor 
 sit amet consectetur
</pre>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi svg2 bi-boombox" viewBox="0 0 16 16">
                            <path
                                d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm7.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm1.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm-7-1a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm5.5 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                            <path
                                d="M11.5 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm0-1a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM5 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                            <path
                                d="M7 10.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-1 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                            <path
                                d="M14 0a.5.5 0 0 1 .5.5V2h.5a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12.5V.5A.5.5 0 0 1 14 0ZM1 3v3h14V3H1Zm14 4H1v7h14V7Z" />
                        </svg>
                        <div class="d-flex flex-column">
                            <H5>MUSIC</H5>
                            <p>
                            <pre>Lorem ipsum dolor 
 sit amet consectetur
</pre>
                            </p>
                        </div>
                    </div>







                </div>

            </div>
          </div>
          <div data-aos="fade-left">
            <div class="mt-4 border-img">
                <img class="img-svgs" src="http://lamaro.like-themes.com/wp-content/uploads/2018/12/benefits-img.jpg"
                    alt="">
            </div>
          </div>

        </div>


    </section>



<section id="counter" class="counter ">
            <div class="main_counter_area">
                <div class="overlay p-y-3">
                    <div class="container ">
                        <div class="row">
                            <div class="main_counter_content text-center white-text wow fadeInUp row">
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                    <i class="fa-solid fa-location-dot m-b-1"></i>
                                        <h2 class="statistic-counter">80</h2>
                                        <span></span>
                                        <p>Destination</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa-solid fa-face-smile m-b-1"></i>
                                        <h2 class="statistic-counter">1000</h2>
                                        <p>Satisfied</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa-solid fa-anchor m-b-1"></i>
                                        <h2 class="statistic-counter">80</h2>
                                        <p>Port</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                    <i class="fa-solid fa-ship m-b-1"></i>
                                        <h2 class="statistic-counter">20</h2>
                                        <p>Ships</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>








    <!-- FOOTER -->
    <?php require(view.'include/footer.php') ?>