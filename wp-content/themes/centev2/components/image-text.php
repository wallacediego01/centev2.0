<?php
/**
 * Image Text
 * 
 * Add the component description here...
 * 
 * @package carcara
 */
?>

<div class="_image-text  mt-8<?= isset($section_class) ? $section_class : ""; ?>">

    <div class='container'>
        <div class='row  align-items-center '>
                    <div class="col-lg-12">
                        <h2 class="text-white text-center mt-10 mb-10 mb-lg-2"> <?= $title ?> </h2>
                    </div>
                <div class='col-lg-6'>
                    <div class="box_video">
                        <?php
                            Utils::get_template( 'components/youtube', array(
                                'video_id' => $id_video,
                                'img'      => $img
                            ) ); ?>
                    </div>
                </div>
                <div class='col-lg-6'>
                    <div class="box_content my-6 my-lg-8">
                        <p class=" text-white pt-8 px-4 ">
                              <?= $description ?>   
                        </p> 
                        <a 
                            href="<?= $link['url']; ?>" 
                            targe="<?= $link['target'] ? "_blank" : ""; ?>" 
                            class="btn btn-gradient-azul transition rounded px-6 py-2 mt-2 mb-8"> 
                             Saiba Mais
                        </a>  
                    </div>
                </div>
        </div>
    </div>

</div>