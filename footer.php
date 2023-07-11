<?php global $blog_name; ?>

<footer class="m-4">
    <div class="w-full max-w-screen-xl mx-auto md:py-8 p-4">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-chroma-fill"><?php echo $blog_name ?></span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-chroma-fill sm:mb-0">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-chroma-fill sm:mx-auto lg:my-8" />
        <span class="block text-sm text-chroma-fill sm:text-center">© <?php echo date("Y") ?> <?php echo $blog_name ?>™. All Rights Reserved.</span>
    </div>
</footer>

</section>

</body>
<?php wp_footer(); ?>

</html>