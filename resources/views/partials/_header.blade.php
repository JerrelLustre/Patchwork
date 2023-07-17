@auth
<header class="flex justify-between items-center mb-[3.625rem] mt-[2.25rem] w-[90%] mx-auto">
        <h1>
            <a href="/" title="Go to Patchwork homepage"><img src="{{asset('images/logo.svg')}}" alt="Patchwork"></a>
        </h1>
        <div class="flex gap-5 items-center">
            <!-- Menu -->
            <div @click="fullscreenModal=true" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="19" fill="none"><path fill="#7C95AA" fill-rule="evenodd" d="m0 1 1-1h31l1 1-1 2H1L0 1Zm0 9 1-2h31l1 2-1 1H1l-1-1Zm0 8 1-2h31l1 2-1 1H1l-1-1Z" clip-rule="evenodd"/></svg>
            </div>
        </div>
    </header>
    @endauth