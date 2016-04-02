<?php
/*
 * Template name: Página HOME
 * */
?>

<?php get_header(); ?>

<?php
$depoimentoDest = get_post_meta($post->ID, 'depoimento_destaque');
$depoimentoDest02 = get_post_meta($post->ID, 'depoimento_destaque_02');




$depoimentoData = new WP_Query(array('p' => $depoimentoDest[0], 'post_type' => 'depoimento'));
$resul['depoimento'] = $depoimentoData->posts[0];
$resul['depoimento']->custon = get_post_custom($depoimentoDest[0]);

$depoimentoData = new WP_Query(array('p' => $depoimentoDest02[0], 'post_type' => 'depoimento'));
$resul['depoimento02'] = $depoimentoData->posts[0];
$resul['depoimento02']->custon = get_post_custom($depoimentoDest02[0]);



$attr = array(
    'class' => "img-responsive",
);

$thumb = get_the_post_thumbnail($depoimentoDest[0], 'large', $attr);
$imageReserva = get_template_directory_uri() . '/img/home_video01.png';
$imageReserva = '<img src="' . $imageReserva . '" class="img-responsive wp-post-image">';
$resul['depoimento']->image = ($thumb) ? $thumb : $imageReserva;

$videoDest01 = get_post_meta($post->ID, 'video_destaque_01');
$video01Data = new WP_Query(array('p' => $videoDest01[0], 'post_type' => 'videos'));
$resul['video01'] = $video01Data->posts[0];
$resul['video01']->custon = get_post_custom($videoDest01[0]);

$videoId = $resul['video01']->custon['Vimeo-clip'][0];
$resul['video01']->video = prepareVideo($videoId, 1020, null);


$videoDest02 = get_post_meta($post->ID, 'video_destaque_02');
$video02Data = new WP_Query(array('p' => $videoDest02[0], 'post_type' => 'videos'));
$resul['video02'] = $video02Data->posts[0];
$resul['video02']->custon = get_post_custom($videoDest02[0]);

$videoId = $resul['video02']->custon['Vimeo-clip'][0];
$resul['video02']->video = prepareVideo($videoId, 1020, null);
?>

<style>
video#bgvid {
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: 100%;
        z-index: -100;
        background:  url(<?php echo get_template_directory_uri(); ?>/img/set_home_img.png) no-repeat;
        background-size: cover;
        -webkit-transition: 1s opacity;
        transition: 1s opacity;

}

@media screen and (max-width: 991px) {
    .header { 
        background: url(<?php echo get_template_directory_uri(); ?>/img/set_home_img.png) #000 ;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: right -124px bottom 275px  ;
        background-size: cover;
        height: 300px;
        top: 0px;
    }
    #bgvid { display: none; }
}

</style>


<div class="home container-fluid">

    <div class="header row">

        <video autoplay loop poster="<?php echo get_template_directory_uri(); ?>/img/set_home_img.png" id="bgvid">
            <source src="<?php echo get_template_directory_uri(); ?>/videos/set_home_img.mov" type="video/mov"> 
            <source src="<?php echo get_template_directory_uri(); ?>/videos/set_home.mp4" type="video/mp4">
        </video>

        <img 
            id="seta-destaque" 
            class="icone-social"
            data-alt-src="<?php echo get_template_directory_uri(); ?>/img/seta_hover@2x.png"
            src="<?php echo get_template_directory_uri(); ?>/img/seta_up@2x.png"
            >

        <div class="col-sm-10 col-sm-offset-1 text">
            <div class="hr"></div>	
            <p><?php the_field('texto_principal') ?></p>
            <div class="hr"></div>
        </div>

    </div>
    
     
    
    

    <div class="video row">


        <div class="col-md-6 col-xs-12 videos  pdf-thumb-box">
            <a 
                href="#"  
                data-toggle="modal" 
                data-target="#videoModal" 
                class="openVideo"
                data-theVideo='<?php echo $resul['video01']->video->html ?>'
                >
                <div class="pdf-thumb-box-overlay"><span class="fa-stack fa-lg">
                    </span>
                </div>
                <div 
                    class="_img ld1" 
                    style="background-image:url('<?php echo $resul['video01']->video->thumbnail_url; ?>');" >
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/play.png" class="img-not" />
            </a>

        </div>
        <div class="col-md-6 col-xs-12 videos pdf-thumb-box">
            <a 
                href="#"  
                data-toggle="modal" 
                data-target="#videoModal" 
                class="openVideo"
                data-theVideo='<?php echo $resul['video02']->video->html ?>'
                >

                <div class="pdf-thumb-box-overlay"><span class="fa-stack fa-lg">
                    </span>
                </div>

                <div 
                    class="_img ld2" 
                    style="background-image:url('<?php echo $resul['video02']->video->thumbnail_url; ?>');" >
                </div>	
                <img src="<?php echo get_template_directory_uri(); ?>/img/play.png" class="img-not" />
            </a>
            <a href="<?php echo get_page_link(14) ?>" class="bt_outros"><span>+</span> Vídeos</a>
        </div>


    </div>
    
    <div class="depoimento row ">

        <div class="col-sm-12 col-md-6 dep_esquerda ">
            <p class="limita" ><?php echo $resul['depoimento']->custon['depoimento'][0]; ?></p>
            <div class="hr"></div>
            <cite title="<?php echo $resul['depoimento']->post_title; ?>"><?php echo $resul['depoimento']->post_title; ?></cite>
            
        </div>
        <div class="col-sm-12 col-md-6 dep_direita ">
            <p class="limita" ><?php echo $resul['depoimento02']->custon['depoimento'][0]; ?></p>
            <div class="hr"></div>
            <cite title="<?php echo $resul['depoimento02']->post_title; ?>"><?php echo $resul['depoimento02']->post_title; ?></cite>
            <a href="<?php echo get_page_link(10) ?>" class="bt_outros"><span>+</span> Depoimentos</a>
        </div>

    </div>
    

    <div class="about row">

        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-xs-12 style">
            <p><?php the_field('titulo_segundo_texto') ?></p>
            <div class="hr"></div>
            <div class="text-about-wrapper">
                <p class="first-letter"></p>
                <p class="text-about-section"><?php the_field('texto_secundario') ?></p>
            </div>
        </div>

    </div>


   



</div>


<?php get_footer(); ?>
