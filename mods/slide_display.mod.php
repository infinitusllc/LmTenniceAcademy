<main class="page-content">
    <section>
        <!-- Swiper -->
        <div class="swiper-container swiper-slider" data-height="853px" data-min-height="500px" data-autoplay="false">
            <div class="swiper-wrapper">
                <?php
                require_once "includes/slides.inc.php";
                $slides = getSlides($lang);
                $i = 1;
                foreach ($slides as $slide) {
                    $img = $slide['image_url']; ?>
                    <div class="swiper-slide" data-slide-bg="<?php echo $img; ?>" style="background-image: url('<?php echo $img; ?>');">
                        <div class="swiper-slide-caption">
                            <div class="container-np">
                                <div class="text-center slide-text-left text-lg-center">
                                    <div>
                                        <a href="<?php echo $slide['tour_url']; ?>"> <?php echo $slide['intro']; ?> </a>
                                    </div>
                                    <div>
                                        <?php echo $slide['description']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <!-- Slider Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <!-- END Swiper -->
        <div id="sc_down">
            <a href="#ex1"><div class="mouse"></div></a>
            <a href="#ex1" class="mouse-hover"><div class="mouse"></div></a>
        </div>
    </section>