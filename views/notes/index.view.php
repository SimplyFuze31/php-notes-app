<?php require '/var/www/notes.nl/views/partials/head.php'?>
<?php require '/var/www/notes.nl/views/partials/header.php'?>


    <div class="grid md:grid-cols-1 gap-4 lg:grid-cols-4  md:gap-8">

        <div></div>
        <div class="h-32 rounded-lg col-span-2">

            <a
                    class="mb-4 inline-flex items-center gap-2 rounded border border-green-500 pe-3 text-green-600 hover:bg-green-500 hover:text-white focus:outline-none focus:ring active:bg-green-700"
                    href="#"
            >
                <svg viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                     xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                     width="48" height="48">
                    <path d="M12 6V18" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6 12H18" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-sm font-medium"> Create note </span>


            </a>
            <?php for ($i = 0; $i < 5 ; $i++){
                require 'views/partials/note_item.php';
            }
            ?>



        </div>
        <div></div>
    </div>




<?php require '/var/www/notes.nl/views/partials/footer.php'?>