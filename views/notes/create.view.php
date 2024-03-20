<?php require view('partials/head.php') ?>
<?php require view('partials/header.php') ?>


<div class="grid md:grid-cols-1 gap-4 lg:grid-cols-4  md:gap-8">

    <div></div>
    <div class="h-32 rounded-lg col-span-2">

        <a href="/notes" class="hover:underline mb-3">
            Back to notes
        </a>

        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">

            <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                <form class="space-y-4" method="post">
                    <div>
                        <label class="sr-only" for="title">Title</label>
                        <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Note title"
                                type="text"
                                id="title"
                                required
                                name="title"
                                value="<?= $_POST['title'] ?? ''?>"
                        />
                        <p class="text-red-500 text-sm"><?=$errors['title'] ?? '' ?></p>
                    </div>

                    <div>
                        <label class="sr-only" for="note_text">Text</label>

                        <textarea

                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Note text"
                                rows="8"
                                id="note_text"
                                required
                                name="note_text"
                        ><?= $_POST['note_text'] ?? ''?></textarea>
                        <p class="text-red-500 text-sm"><?=$errors['note_text'] ?? '' ?></p>
                    </div>

                    <div>
                        <label for="create_date"></label>
                        <input id="create_date" name="create_date"  type="text" hidden value="<?= date("Y-m-d")?>">

                    </div>

                    <div class="mt-4">
                        <button
                                type="submit"
                                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                        >
                            <?=$heading?> note
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div></div>


<?php require view('partials/footer.php') ?>
