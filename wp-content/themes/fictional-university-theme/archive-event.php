<?php 
    get_header();
    pageBanner(array(
        'title'=> 'Events',
        'subtitle' => 'All of our upcoming events',
    ));
?>

<div class="container container--narrow page-section">
    <?php
        while(have_posts()){
            the_post();
            get_template_part('template-parts/content-event');
        } 
    echo paginate_links();
    ?>
    <hr class="section-break"/>
    <p>See our past events <a href="<?php echo site_url('/past-events')?>"> here </a> </p>
</div>

<?php
    get_footer();
?>