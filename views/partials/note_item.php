<a
        href="/note?id=<?=$note['id']?>"
        class="relative block overflow-hidden rounded-lg border border-gray-100 p-4 sm:p-6 lg:p-8"
>
    <div class="sm:flex sm:justify-between sm:gap-4">
        <div>
            <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                <?=$note['title']?>
            </h3>

     <p class="mt-1 text-xs font-medium text-gray-600">By <?= $note['first_name'].' '.$note['last_name']?></p>
        </div>

    </div>

    <div class="mt-4">
        <p class="text-pretty text-sm text-gray-500">
            <?=$note['note_text']?>
        </p>
    </div>

    <dl class="mt-6 flex gap-4 sm:gap-6">
        <div class="flex flex-col">
            <dt class="text-sm font-medium text-gray-600">Published</dt>
            <dd class="text-xs text-gray-500"><?= date_format(date_create($note['create_date']), "d F Y")?></dd>
        </div>

    </dl>
</a>
