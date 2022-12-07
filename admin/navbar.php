<div class="grid md:grid-cols-11"> 
    
    <!-- navigation bar div  -->
    <div class="bg-stone-900 md:bg-stone-700  md:col-span-2 md:flex md:justify-start md:h-full">

    <!-- navigation bar -->
    <nav class="text-left">

        <!-- div for naigation bar content -->
        <div class="flex justify-between items-center pt-4 pl-6 md:pt-6 text-white md:hidden">

            <h1 class="font-bold uppercase text-lg"> 
                <a href="#" class="hover:text-gray-400">Bloomers</a>
            </h1>

            <!-- div for navigation dropdown menu -->
            <div class="px-6 cursor-pointer" id="dd_menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        
        <div class="px-6 py-3">
            <ul class=" mt-2 hidden md:block text-white font-medium" id="menu">     
                

                <!--including searchbar in hamburger dropdown menu  -->
                <li class="py-2 md:hidden">

                    <!--position seach button relative to serach box  -->
                    <div class="relative">

                        <!-- div for search bar -->
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                            <!-- inserting search  icon   -->
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>

                        <!-- search input text box -->
                        <input type="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>

                        <!-- search submit button -->
                        <input type="submit" value="Search" name="dd_search" id="dd_Ssubmit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">
                    </div>
                </li>    

                <li class="hover:text-stone-400 py-1">
                    <a href="index.php" class=" border-primary">
                        
                        <!--were going to have icons in here.
                        span incase we want to style it seperate from icons  -->
                        <i class="fa-solid fa-house mr-1"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="py-2">
                    <a href="#" class="text-stone-300">
                        <!--were going to have icons in here.
                        span incase we want to style it seperate from icons  -->
                        <i class="fa-solid fa-circle-plus mr-1"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li class="py-2">
                    <a href="brand_form.php" class="hover:text-stone-400">
                        <!--were going to have icons in here.
                        span incase we want to style it seperate from icons  -->
                        <i class="fa-solid fa-circle-plus mr-1"></i>
                        <span>Brand</span>
                    </a>
                </li>
                <li class="py-2">
                    <a href="products_form.php" class="hover:text-stone-400">
                        <!--were going to have icons in here.
                        span incase we want to style it seperate from icons  -->
                        <i class="fa-solid fa-circle-plus mr-1"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li class="py-1">
                    <a href="advice_form.php" class="hover:text-stone-400">
                        <!--were going to have icons in here.
                        span incase we want to style it seperate from icons  -->
                        <i class="fa-solid fa-circle-question mr-1"></i>                       
                        <span>Advice</span>
                    </a>
                </li>
                <li class="py-1">
                    <a href="#" class="hover:text-stone-400">
                        <!--were going to have icons in here.
                        span incase we want to style it seperate from icons  -->
                        <i class="fa-solid fa-arrow-right-arrow-left mr-1"></i>                     
                        <span>Orders</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
    </div>
</div>    
<!-- END OF NAV DIV -->