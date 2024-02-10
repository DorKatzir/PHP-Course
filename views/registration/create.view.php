
<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>


<main>
    <div class="max-w-2xl px-4 py-6 md:px-6 lg:px-8 xl:px-16">

        <!-- Register  Start -->
       <div class="block py-5 px-5 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] md:py-10 md:px-20">

        <div class="sm:w-full sm:max-w-sm">
            <h2 class="text-2xl leading-9 tracking-tight text-gray-900">Register for a new account</h2>
        </div>

        <div class="mt-6 sm:w-full sm:max-w-sm">
            <!-- FORM START -->
            <form class="space-y-4" action="/register" method="POST">


                
                <!-- NAME -->
                <div>
                    <div class="flex items-center">
                        <!-- <label for="name" class="block text-sm font-medium leading-6 text-gray-900">User Name</label> -->
                        <!-- NAME ERROR message -->
                        <div class="">
                            <?php if (isset($errors['name'])) : ?>
                                <span class="font-bold text-red-500 text-xs"><?= $errors['name'] ?></span>
                            <?php else : ?>
                                <span></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="mt-2">
                    <input id="name" name="name" type="text" autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="User Name" value="<?= $_POST['name'] ?? '' ?>">
                    </div>
                </div>

                <!-- EMAIL -->
                <div>
                    <div class="flex items-center justify-between">
                        <!-- <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label> -->
                        <!-- email ERROR message -->
                        <div class="text-left">
                            <?php if (isset($errors['email'])) : ?>
                                <span class="font-bold text-red-500 text-xs"><?= $errors['email'] ?></span>
                            <?php else : ?>
                                <span></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address" value="<?= $_POST['email'] ?? '' ?>">
                    </div>
                </div>

                <!-- PASSWORD -->
                <div>
                    <div class="flex items-center justify-between">
                        <!-- <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label> -->
                        <!-- password ERROR message -->
                        <div class="text-left">
                            <?php if (isset($errors['password'])) : ?>
                                <span class="font-bold text-red-500 text-xs"><?= $errors['password'] ?></span>
                            <?php else : ?>
                                <span></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Password">
                    </div>
                </div>

                <!-- SUBMIT -->
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>

            </form>
            <!-- FORM END -->



            <p class="mt-10 text-right text-sm text-gray-500">
            Already have an account?
            <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
            </p>
            
        </div>
       </div>
        <!-- Register  End -->
            
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>

