
<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main class="">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    
        <p class="mb-6"> 
            <a href="/notes" class="text-blue-500 hover:underline"> 
                &larr; go back
            </a>
        </p>

        <div class="block break-all rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
            <p class="mb-4 text-base text-neutral-600">
                <?= htmlspecialchars($note['body']) ?>
            </p>
            
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>

