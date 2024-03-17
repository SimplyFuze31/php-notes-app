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
                    <form action="#" class="space-y-4">
                        <div>
                            <label class="sr-only" for="name">Title</label>
                            <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Note title"
                                    type="text"
                                    id="name"
                            />
                        </div>

                        <div>
                            <label class="sr-only" for="message">Text</label>

                            <textarea
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Note text"
                                    rows="8"
                                    id="message"
                            ></textarea>
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