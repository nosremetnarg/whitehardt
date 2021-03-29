<?php get_header(); ?>
<main id="content">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/CarCrash.jpg')?>);"></div>
        <div class="coverOverlayContainer">
            <div class="colorOverlay"></div>
        </div>      

    <div class="heroContentContainer">
          <h1 class="heroText">Lorem Ipsum Dolor Sit Amet</h1>
          <button class="btn">Contact us</button>
    </div>
      <div class="blueBanner">
         <h2 class="bannerTest">Smith & Smith Will Fight For You!</h2>
    
        </div>
    <div class="personalInjuryContainer">
        <h2 class="personalInjuryTitleText"><span class="graphicDesignLines">_____&nbsp&nbsp</span>Personal Injury Lawyers<span class="graphicDesignLines"> &nbsp&nbsp_____</span></h2>
        <div class="slipAndFallContainer">
            <div class="slipAndFallAttorneys grid-item">
                <h3 class="slipAndFallTitle">Slip & Fall Attorneys</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iste neque debitis illum eos reiciendis blanditiis quisquam enim, modi nulla itaque nihil magnam molestiae? Alias molestiae aspernatur cumque rem 
                officia? eos reiciendis blanditiis quisquam enim, modi nulla itaque nihil magnam molestiae? Alias Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iste neque debitis illum eos reiciendis blanditiis quisquam enim, modi nulla itaque nihil magnam molestiae? Alias molestiae aspernatur cumque rem 
                officia? eos reiciendis blanditiis quisquam enim, modi nulla itaque nihil magnam molestiae? Alias</p>
                <button class="btn injuryBtn">Contact us</button>
             </div>
            <div class="slipAndFallImageContainer grid-item">
            <img class="slipAndFallImage" src="<?php echo get_theme_file_uri('images/slipAndFall.jpg')?>)" alt="">
            </div>
        </div>
    </div>
    <div class="secondHeroContainer">
    <div class="page-banner__bg-image2" style="background-image: url(<?php echo get_theme_file_uri('images/powerline.jpg')?>);"></div>
    <div class="colorOverlay2"></div>  
    <div class="heroContentContainer2">
      
          <h1 class="heroText2">Amet Sit Dolor Ipsum Lorem</h1>
          <button class="btn">Contact us</button>
      </div>
    </div>
    </div>
    
</div>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

