<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            
            <div class="flex items-center">

                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="/assets/php-elephant.svg" alt="Your Company">
                </div>

                <div class="block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page"  >Home</a>
                        <a href="/about" class="<?=  urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a href="/notes" class="<?=  urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Notes</a>
                        <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Contact</a>

                    </div>
                </div>

            </div>

            <div class="block">
                <div class="ml-4 flex items-center md:ml-6">

                    <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile-->
                    <div class="relative ml-3">
                        <div class="flex items-center gap-4">
                            <span class="font-medium txt-brand">
                               Hello, <?= $_SESSION['user']['name'] ?? 'Guest' ?> 
                            </span>
                        <?php if ( $_SESSION['user'] ?? false ) :  ?>  
                            <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="/assets/dror.png" alt="">
                                </button>
                                <a href="#" class="text-gray-300 font-medium">Logout</a>
                        <?php else : ?>
                            <a href="/register" class="text-gray-300 font-medium">Register</a>
                        <?php endif; ?>

                        </div>
                    </div>
                    <!-- end Profile -->
                </div>
            </div>
        
        </div>
    </div>
</nav>