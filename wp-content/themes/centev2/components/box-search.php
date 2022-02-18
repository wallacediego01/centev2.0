<?php
/**
 * Box Search
 * 
 * Add the component description here...
 * 
 * @package centev
 */
?>

<div class="_box-search d-flex rounded transition ">
    <form action="<?= home_url( '/' ); ?>" method="get">
        <input type="text" placeholder="Pesquisar" name="s" value="<?php the_search_query(); ?>" class="search transition">
        
        <button type="submit" class="btn-search  bg-white text-black rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="19.231" height="19.616" viewBox="0 0 19.231 19.616">
                <g id="surface1" transform="translate(-0.109 0)">
                    <path id="Caminho_1" data-name="Caminho 1" d="M13.507,11.64a7.375,7.375,0,1,0-2.269,2.089l5.439,5.406a1.544,1.544,0,0,0,2.239-2.126c-.019-.02-.037-.038-.056-.056Zm-6.025.5a4.757,4.757,0,1,1,4.755-4.766,4.758,4.758,0,0,1-4.755,4.766Zm0,0" transform="translate(0 0)"/>
                </g>
            </svg>
        </button>
    </form>
</div>