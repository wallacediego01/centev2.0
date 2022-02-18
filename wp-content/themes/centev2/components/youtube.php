<?php
/**
 * Youtube
 * 
 * Add the component description here...
 * 
 * @package faveni
 */

?>
<div class="_youtube-video">
    <div class="youtube-video position-relative" data-video="<?= $video_id; ?>">
            <img 
                data-src='<?= $img['url']; ?>'
                alt='<?= $img['alt']; ?>'
                width='<?= $img['width']; ?>'
                height='<?= $img['height']; ?>' class='lozad'>
                 <div class="overlay"></div>
            <div class="play">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 49">
                    <g id="Grupo_301" data-name="Grupo 301" transform="translate(-0.356)">
                        <g id="Elipse_126" data-name="Elipse 126" transform="translate(0.356)" fill="none" stroke="#fff" stroke-width="4">
                            <circle cx="24.5" cy="24.5" r="24.5" stroke="none"/>
                            <circle cx="24.5" cy="24.5" r="22.5" fill="none"/>
                            </g>
                            <g id="Polígono_1" data-name="Polígono 1" transform="translate(35.489 14.659) rotate(90)" fill="#fff">
                            <path d="M 18.40060234069824 16.51147842407227 L 0.8575649857521057 16.51147842407227 L 9.629083633422852 1.015033602714539 L 18.40060234069824 16.51147842407227 Z" stroke="none"/>
                            <path d="M 9.629083633422852 2.030068397521973 L 1.715126037597656 16.01147842407227 L 17.54304122924805 16.01147842407227 L 9.629083633422852 2.030068397521973 M 9.629083633422852 0 L 19.25816345214844 17.01147842407227 L 3.814697265625e-06 17.01147842407227 L 9.629083633422852 0 Z" stroke="none" fill="#fff"/>
                        </g>
                    </g>
                </svg>
            </div>
    </div>
</div>
