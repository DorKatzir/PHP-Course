
<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 grid-rows-3 gap-4 sm:grid-cols-3">

            <?php foreach($notes as $note): ?>
                <a href="./note?id=<?= $note['id'] ?>" class="text-blue-500">
                    <div class="text-gray-700 bg-white px-4 py-2 m-2 rounded-lg truncate shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] transition duration-500 ease-in-out hover:shadow-none hover:bg-fuchsia-200">
                        <?= htmlspecialchars($note['body']) ?> 
                    </div> 
               </a>  
            <?php endforeach; ?>  

            
        </div>
        <div class="py-6 m-2">
            <!-- <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a> -->
            <a href="/notes/create" class="rounded-lg bg-fuchsia-600 px-3 py-2 text-sm font-semibold text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-fuchsia-600 transition duration-300 ease-in-out shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] hover:shadow-none">Create Note</a>
            
        </div>

    </div>
</main>

<?php require('partials/footer.php'); ?>

