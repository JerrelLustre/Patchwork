        <!-- Greeting -->
        <div class="max-w-[20.9375rem] mx-auto">
            <div class="mb-5">
                <h1 class="text-2xl font-deca font-semibold mt-10 text-[#000] dark:text-white">Welcome Back,
                    People!</h1>
                <p class="text-base font-normal font-pop text-black dark:text-noticeColorlight mt-2">{{date('l jS \of F Y h:i:s A')}}</p>
            </div>
            @if($count > 0)
            <!-- Notice list -->
            <ul class="text-noticeColo text-base dark:text-white font-pop flex flex-col gap-2  mt-5 mb-8">
                <li class="flex items-center">
                    <div class="relative left-0 w-4 h-4 bg-[#EC6B6B] rounded-full mr-2"></div>
                    <p>You have {{$count}} item coming up</p>
                </li>
            </ul>
            <!-- End: Notice List -->
            @endif
        </div>
        <!-- End: Greeting -->

        