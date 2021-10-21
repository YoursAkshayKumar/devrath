<!-- Breadcrumb Wrapper -->
<!-- <div class="breadcrumb-wrapper">
    <div class="images-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h1>Gallery</h1>
                </div>
                <div class="page-breadcrumb-inner">
                    <div class="page-breadcrumb">
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="javascript:void(0);">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <?php
if (!empty($galleries)) {
?> -->
    <!-- <section id="gallery" class="inner-page-wrapper gallery-wrapper">
        <div class="gallery-content">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($galleries as $gallery) {
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 no-padd">
                            <div class="sb-photo">
                                <img src="<?php echo base_url(); ?>/assets/frontend/images/gallery/<?php echo $gallery->file_path; ?>" alt="" class="img-fluid">
                                <div class="photo-overlay">
                                    <div class="overlay-content">
                                        <div class="zoom-icon"> <a href="<?php echo base_url(); ?>/assets/frontend/images/gallery/<?php echo $gallery->file_path; ?>"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
                                        <h2><?php echo $gallery->title; ?></h2>
                                        <span><?php echo $gallery->description; ?></span>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
<?php
}
?> -->



        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Gallery 3</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->
        
        <!-- GALLERY -->
        <section class="section_page-gallery">
            <div class="container">
                <div class="gallery gallery-3">
                    <h1 class="element-invisible">Gallery</h1>
                    <!-- FILTER -->
                    <div class="gallery-cat text-center">
                        <ul class="list-inline">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                            <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                            <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                            <li><a href="#" data-filter=".dining">DINING</a></li>
                        </ul>
                    </div>
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">
                        <div class="row">
                            <div class="gallery-isotope col-4">

                                <!-- ITEM SIZE -->
                                <div class="item-size"></div>
                                <!-- END / ITEM SIZE -->

                                <!-- ITEM -->
                                <div class="item-isotope larger suite bathroom dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-1.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->  

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->  
                                
                                <!-- ITEM -->
                                <div class="item-isotope ground suite dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM --> 
                                
                                <!-- ITEM -->
                                <div class="item-isotope ground suite bathroom">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope suite bathroom dining">
                                    <div class="gallery_item">
                                        <a href="https://www.youtube.com/watch?v=RnjZ6IhkR40" class="mfp-iframe">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <span class="icon"><i class="fa lotus-icon-media-play"></i></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground suite dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground suite bathroom">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope larger ground bathroom dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-1.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope suite bathroom dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope larger suite bathroom dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-1.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->  

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->  
                                
                                <!-- ITEM -->
                                <div class="item-isotope ground suite dining">
                                    <div class="gallery_item">
                                        <a href="https://www.youtube.com/watch?v=RnjZ6IhkR40" class="mfp-iframe">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <span class="icon"><i class="fa lotus-icon-media-play"></i></span>
                                    </div>
                                </div>
                                <!-- END / ITEM --> 
                                
                                <!-- ITEM -->
                                <div class="item-isotope ground suite bathroom">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope suite bathroom dining">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>/assets/devrath/images/gallery/popup/img-1.jpg" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>/assets/devrath/images/gallery/page-3/img-2.jpg" alt="">
                                        </a>
                                        <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            </div>
                        </div>

                    </div>
                    <!-- GALLERY CONTENT -->

                </div>
            </div>       
        </section>
        <!-- END / GALLERY -->


