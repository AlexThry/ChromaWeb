<?php get_header(); ?>

<?php $bg_image_url = wp_get_attachment_image_src(12, 'full')[0]; ?>

<div class="py-10 bg-opacity-20" style="background-image: url(<?php echo $bg_image_url ?>)">
    <div class="flex flex-col border rounded border-chroma-fill mx-10 md:mx-20 md:my-10 px-10 py-5 md:px-20 md:py-10 items-center">
        <div class="flex flex-col transition duration-75">
            <a href="#" class="flex items-center transition duration-75 mb-4 group">
                <h1 class="text-2xl font-bold group-hover:text-black transition duration-150">
                    Transformez vos idées en réalité
                </h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2 transition ease-out duration-150 group-hover:text-black group-hover:translate-x-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
            <p class="">
                Découvrez mes services de création de sites WordPress personnalisés qui répondent parfaitement à vos besoins.
                Je vous propose une gamme d'options variées et des forfaits modulaires pour vous offrir une solution sur mesure.
                Ensemble, nous pouvons donner vie à votre vision et créer un site web exceptionnel qui représente votre identité unique.
            </p>
        </div>
        
        <div class="flex mr-6 mt-4">
            <a href="#" class="md:flex mx-2 justify-center text-lg tracking-tight border border-chroma-fill py-2 hidden md:px-4 lg:px-6 rounded hover:bg-chroma-bg transition duration-75 font-extrabold">En voir plus</a>
            <a href="#" class="md:flex mx-2 justify-center text-lg tracking-tight border border-chroma-fill bg-chroma-fill text-white py-2 hidden md:px-4 lg:px-6 rounded hover:bg-chroma-bg hover:text-chroma-fill transition duration-75 font-extrabold">Contactez-moi</a>
        </div>
    </div>
</div>

<section class="flex flex-col m-10 ">
    <h1 class="font-bold text-3xl text-chroma-fill">
        Mes Projets
    </h1>
    <hr class="my-6 border-chroma-fill w-full sm:mx-auto lg:my-8 z-10 mb-4"/>

</section>

<?php get_footer(); ?>