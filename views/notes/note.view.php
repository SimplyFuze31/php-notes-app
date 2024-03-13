<?php require view('partials/head.php')?>
<?php require view('partials/header.php')?>


    <div class="grid md:grid-cols-1 gap-4 lg:grid-cols-4  md:gap-8">

        <div></div>
        <div class="h-32 rounded-lg col-span-2">

            <h1 class=""> <?= $note['title']?></h1>

            <p><?= $note['note_text']?></p>
        </div>
        <div></div>
    </div>




<?php require view('partials/footer.php')?>