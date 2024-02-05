
<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-2xl py-6 sm:px-6 lg:px-8">

    <form method="POST" action="">
        <div class="space-y-12">
            
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <span><?= empty($_POST['body']) ? '0' : strlen($_POST['body']) ?> / 200 </span>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Here's and idea for a note..."><?= $_POST['body'] ?? '' ?></textarea>

                            
                        </div>
                    </div>
                </div>
           
        </div>

        <div class="mt-2 flex items-center justify-between gap-x-6">
            <?php if (isset($errors['body'])) : ?>
                <span class="font-bold text-red-500 text-xs"><?= $errors['body'] ?></span>
            <?php else : ?>
                <span></span>
            <?php endif; ?>
            <!-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> -->
            <button type="submit" class="rounded-md bg-fuchsia-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-fuchsia-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-fuchsia-600">Save note</button>
        </div>
    </form>





        
    </div>
</main>

<?php require('partials/footer.php'); ?>

