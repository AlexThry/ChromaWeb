<?php get_header(); ?>


<div class="py-10 bg-opacity-20" style="background-image: url(<?php echo get_field('bg-image') ?>)">
    <div class="flex flex-col border rounded-xl backdrop-blur border-chroma-fill mx-10 md:mx-20 md:my-10 px-10 py-10 md:px-20 md:py-20 items-center">
        <div class="flex flex-col transition duration-75">
            <a href="#" class="flex items-center transition duration-75 mb-4 group">
                <h1 class="text-2xl font-bold transition duration-75">
                    <?php echo get_field('hero-label') ?>
                </h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2 transition ease-out duration-75 group-hover:text-black group-hover:translate-x-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
            <p class="flex text-justify">
                <?php echo get_field('hero-desc') ?>
            </p>
        </div>

        <div class="flex mr-6 mt-4">
            <a href="#" class="flex mx-2 justify-center text-lg tracking-tight border border-chroma-fill py-2 px-2 md:px-6 rounded transition duration-75 font-extrabold hover:bg-chroma-fill hover:text-white">En voir plus</a>
            <a href="#" class="flex mx-2 justify-center text-lg tracking-tight border border-chroma-fill py-2 px-2 md:px-6 rounded transition duration-75 font-extrabold bg-chroma-fill text-white hover:bg-transparent hover:text-chroma-fill">Contactez-moi</a>
        </div>
    </div>
</div>

<section class="flex flex-col m-10">
    <?php
    $home_page_projects = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'projects',
        'orderby' => 'date',
        'order' => 'DESC'
    ));
    ?>
    <h1 class="font-bold text-3xl text-chroma-fill">
        Mes Projets
    </h1>
    <hr class="my-6 border-chroma-fill w-full sm:mx-auto lg:my-8 z-10 mb-4" />

    <div class="mx-5 sm:mx-10 lg:mx-20 flex flex-col">
        <?php
        $project_id = 1;
        while ($home_page_projects->have_posts()) :
            $home_page_projects->the_post();
            $project_image_url = get_field('project-image');
        ?>
            <div id="project-<?php echo $project_id ?>" class="my-6 relative opacity-0 transition duration-1000">
                <a href="<?php the_permalink() ?>">
                    <h1 class="mb-2 text-chroma-fill font-bold text-3xl lg:text-4xl hover:underline"><?php the_title() ?></h1>
                </a>
                <a href="<?php the_permalink() ?>" class="group/large">
                    <div class="flex h-96 justify-center items-center transition duration-150 rounded-xl shadow-lg overflow-hidden">
                        <img src="<?php echo $project_image_url ?>" alt="" class="block w-full h-full object-cover shrink-0">
                    </div>

                    <div class="flex opacity-0 absolute h-96 bottom-0 backdrop-brightness-50 group-hover/large:opacity-100 w-full transition duration-150 rounded-xl justify-center items-center">
                        <div class="flex justify-center items-center group/small">
                            <h1 class="font-bold text-white text-4xl">Voir le Projet</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ml-2 text-white group-hover/small:translate-x-2 transition duration-75">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <?php $project_id++; ?>



        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <a href="<?php echo site_url('blog') ?>" class="flex items-center group mt-8">
            <h1 class="font-extrabold text-2xl group-hover:unde">
                En voir plus
            </h1>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2 transition ease-out duration-75 group-hover:text-black group-hover:translate-x-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </a>

        <h1 class="font-bold text-3xl text-chroma-fill mt-10">
            À propos de moi
        </h1>
        <hr class="my-6 border-chroma-fill w-full sm:mx-auto lg:my-8 z-10 mb-4" />

        <section>
            <div class="flex flex-col md:flex-row md:my-4items-center mt-2 mx-8">
                <img src="<?php echo get_field('my-pic') ?>" alt="Photo de moi" class="h-40 w-40 rounded-full">

                <p class="flex justify-center text-justify text-chroma-fill p-5 font-medium text-lg mx-6">
                    <?php echo get_field('my-desc') ?>
                </p>
            </div>


        </section>
    </div>





</section>

<?php get_footer(); ?>