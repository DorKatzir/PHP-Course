
<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="max-w-2xl px-4 py-6 md:px-6 lg:px-8 xl:px-16">


        <div class="block py-5 px-5 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] md:py-10 md:px-20">

            <form method="POST" action="/note">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                
                <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                
                <!-- INPUT TEXTEREA -->
                <div class="mt-2">
                    <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $note['body'] ?></textarea>   
                </div>


                <div class="flex justify-end mt-6">
                    <!-- UPDATE BTN -->
                    <div class="">
                        <button type="submit"
                            class="inline-block rounded-lg bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-none transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">Update Note
                        </button>
                    

                    <!-- CANCEL BTN -->
                    
                        <a href="/notes"
                            class="inline-block rounded-lg bg-gray-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-none transition duration-150 ease-in-out hover:bg-gray-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">Cancel
                        </a>
                    </div>

                    <!-- Error -->
                    <?php if (isset($errors['body'])) : ?>
                        <span class="font-bold text-red-500 text-xs"><?= $errors['body'] ?></span>
                    <?php else : ?>
                        <span></span>
                    <?php endif; ?>

  

                </div>





            </form>

        </div>

        
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>

