<div x-data="{ fullscreenModal: false }" x-init="
    $watch('fullscreenModal', function(value){
    if(value === true){
    document.body.classList.add('overflow-hidden');
    }else{
    document.body.classList.remove('overflow-hidden');
    }
    })
    
" @keydown.escape="fullscreenModal=false">
{{$slot}}        

<template x-teleport="body">
            <div x-show="fullscreenModal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-y-0"
                x-transition:leave-end="translate-y-full" class="flex fixed inset-0 z-[99] w-screen h-screen bg-white">

                <nav class="flex flex-col w-full">
                    <div class="w-full h-[9.25rem] bg-menuButtonColorTop flex ">
                        <div class="w-[90%] mx-auto flex justify-between items-center">
                            <div>
                                <p class="text-white font-normal font-deca text-3xl">Bob Johns</p>
                            </div>
                            <img @click="fullscreenModal=false" class="flex-grow-0 w-8 h-8 cursor-pointer"
                                src="{{asset('images/close-menu.svg')}}" alt="Click to close menu">
                        </div>
                    </div>
                    <ul class="w-full grid grid-rows-[repeat(3,9.25rem)] overflow-auto list-none">
                        <li class="bg-menuButtonColor1 row-span-1">
                            <a class=" flex flex-col items-center justify-center gap-5 w-full h-full" href="/patchworkv101/public/">
                                <span class="font-deca text-3xl font-normal tracking-[1.12px] text-black">Dash
                                    Board</span>
                                <span class="font-deca text-base font-normal tracking-[1.12px] text-black">See your
                                    dashboard</span>
                            </a>
                        </li>
                        <li class="bg-menuButtonColor2 row-span-1 flex items-center justify-center">
                            <a class=" flex flex-col items-center justify-center gap-5 w-full h-full" href="/patchworkv101/public/courses">
                                <span class="font-deca text-3xl font-normal tracking-[1.12px] text-black">Courses</span>
                                <span class="font-deca text-base font-normal tracking-[1.12px] text-black">See all your
                                    courses</span>
                            </a>
                        </li>
                        <li class="bg-menuButtonColor3 row-span-1 flex items-center justify-center">
                            <a class=" flex flex-col items-center justify-center gap-5 w-full h-full" href="https://learn.bcit.ca/d2l/home">
                                <span class="font-deca text-3xl font-normal tracking-[1.12px] text-black">Learning
                                    Hub</span>
                                <span class="font-deca text-base font-normal tracking-[1.12px] text-black">Open a new
                                    tab to the Learning Hub</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Logout -->
                    <form method="POST" action="/patchworkv101/public/logout">
                        @csrf
                        <div class="h-[9.25rem] flex justify-center items-center">
                            <button type="submit"
                                class="text-lg font-bold text-white font-pop px-12  py-2 rounded-4xl w-fit bg-menuButtonColor2 hover:cursor-pointer">
                                Log out
                            </button>
                        </div>
                    </form>
                    <!--End: Logout -->
                </nav>
            </div>
        </template>
    </div>
    </div>