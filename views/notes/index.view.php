
<?php require('views/partials/head.php'); ?>
<?php require('views/partials/nav.php'); ?>
<?php require('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">

            <?php foreach($notes as $note): ?>
                <div class="transition duration-300 ease-in-out bg-white px-4 py-2 m-2 rounded-lg shadow-[rgba(0,0,0,0.1)] shadow-sm hover:shadow-lg">
                    <a href="./note?id=<?= $note['id'] ?>" class="block text-gray-600 truncate">
                        <?= htmlspecialchars($note['body']) ?> 
                    </a>  
                </div> 
            <?php endforeach; ?>  

            
        </div>


        <div class="py-6 m-2">
            <a href="/notes/create"
                type="button"
                class="inline-block rounded-lg bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">Create Note
            </a>
            
        </div>

    </div>
</main>

<?php require('views/partials/footer.php'); ?>

