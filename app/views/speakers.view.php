<?php require('partials/head.php'); ?>

<div class="container bg-white px-20 py-10 rounded-lg my-5">
    <table class="flex flex-wrap">
        <caption class="flex text-4xl font-bold mb-6 basis-full justify-center">Speakers</caption>
        <tbody class="flex flex-wrap basis-full">
            <?php foreach ($users as $user) : ?>
                <tr class="flex basis-full border-b border-gray-300 py-3">
                    <td class="basis-1/5 mr-4 my-auto"><img src="data:image/jpg;base64,<?= base64_encode($user->photo) ?>"></td>
                    <td class="basis-1/5 my-auto text-lg"><?= $user->firstName; ?></td>
                    <td class="basis-1/5 my-auto text-lg"><?= $user->lastName; ?></td>
                    <td class="basis-full my-auto text-lg"><?= $user->title; ?></td>
                    <td class="basis-1/5 my-auto text-lg"><?= $user->date; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require('partials/footer.php'); ?>
