<?php
/**
 * Cursos
 * 
 * Add the component description here...
 * 
 * @package centev
 */
?>

<div class="_cursos pt-6 pb-10">

<div class="container">
        <div class="row">
            <div class="col-lg-4">
                    <div class="titulo_servs pt-4">
                        <?php Utils::get_template( 'components/title-text', [
                            'title' => "Cursos",
                            'logo' => Utils::get_image_asset( 'mini-logo.svg' ),
                            'class' => "text-center"
                            ] ); ?>
                    </div>
                <div class="texto text-left pt-4 pb-4">
                    <p>
                         <?=$description?>
                    </p>
                </div>

                <a 
                    href="" 
                    class="undecorated-link text-center text-white ">
                    Saiba Mais
                </a>
            </div> 
             
                <div class="col-lg-4 ">
                    <?php Utils::get_template( 'components/card-serv', array(
                        'image'=> Utils::get_image_asset( 'note.svg' ),
                        'sub_title'=> "Título do Curso",
                        'sub_text' => "Nam vestibulum dui nec dui euismod, a congue nulla convallis. Donec quis faucibus purus."
                    ) ); ?>
                </div>
                <div class="col-lg-4 ">
                    <?php Utils::get_template( 'components/card-serv', array(
                        'image'=> Utils::get_image_asset( 'note.svg' ),
                        'sub_title'=> "Título do Curso",
                        'sub_text' => "Nam vestibulum dui nec dui euismod, a congue nulla convallis. Donec quis faucibus purus."
                    ) ); ?>
                </div>
               
            
            
        </div>
    </div>

</div>