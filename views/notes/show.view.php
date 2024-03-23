<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>


    <div class="grid md:grid-cols-1 gap-4 lg:grid-cols-4  md:gap-8">

        <div></div>
        <div class="h-32 rounded-lg col-span-2">

            <a href="/notes" class="hover:underline mb-3">
                Back to notes
            </a>

            <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">

                <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">

                        <div class="space-y-4" >
                            <div>
                                <label class="sr-only" for="title">Title</label>
                                <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Note title"
                                        type="text"
                                        id="title"
                                        name="title"
                                        value="<?= htmlspecialchars($note['title']) ?>"
                                        form="update_form"
                                />
                                <p class="text-sm text-red-500"><?= $errors['title'] ?? '' ?></p>
                            </div>

                            <div>
                                <label class="sr-only" for="note_text">Text</label>

                                <textarea
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Note text"
                                        rows="8"
                                        id="note_text"
                                        name="note_text"
                                        form="update_form"
                                ><?= htmlspecialchars($note['note_text']) ?></textarea>
                                <p class="text-sm text-red-500"><?= $errors['note_text'] ?? '' ?></p>
                                <input type="hidden" name="note_id" form="update_form"  value="<?= $note['id'] ?>">
                                <input type="hidden" name="note_id" form="delete_form" value="<?= $note['id'] ?>">

                            </div>
                            <input
                                    type="submit"
                                    class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                                    form="update_form"

                                    value="Save note"
                            />

                            <input
                                    type="submit"
                                    class="inline-block w-full rounded-lg bg-red-500 px-5 py-3 font-medium text-white sm:w-auto"
                                    form="delete_form"
                                    value="Delete note"
                            />
                        </div>


                </div>

                <form id="update_form" action="/note" method="post">
                    <input hidden name="__method" value="PATCH">
                </form>

                <form id="delete_form" action="/note" method="post">
                    <input name="__method" hidden value="DELETE"/>
                </form>
            </div>
        </div>
    </div>
    <div></div>


<?php view('partials/footer.php') ?>