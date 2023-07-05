<div x-data="{ fullscreenModal: false }" x-init="
    $watch('fullscreenModal', function(value){
    if(value === true){
    document.body.classList.add('overflow-hidden');
    }else{
    document.body.classList.remove('overflow-hidden');
    }
    })
" @keydown.escape="fullscreenModal=false">
        <button @click="fullscreenModal=true"
            class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Preview</button>
        <template x-teleport="body">
            <div x-show="fullscreenModal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-y-0"
                x-transition:leave-end="translate-y-full" class="flex fixed inset-0 z-[99] w-screen h-screen bg-white">

                <nav class="flex flex-col w-full">
                    <div class="w-full h-[9.25rem] bg-menuButtonColorTop flex">
                        <div class="w-full max-w-[20rem] mx-auto flex justify-between items-center">
                            <div>
                                <p class="text-white font-normal font-deca text-3xl">Bob Johns</p>
                            </div>
                            <img @click="fullscreenModal=false" class="flex-grow-0 w-8 h-8 cursor-pointer"
                                src="../img/close-menu.svg" alt="">
                        </div>
                    </div>
                    <ul class="w-full grid grid-rows-[repeat(4,9.25rem)] list-none">
                        <li class="bg-menuButtonColor1 row-span-1">
                            <a class=" flex flex-col items-center justify-center gap-5 w-full h-full" href="">
                                <span class="font-deca text-3xl font-normal tracking-[1.12px] text-black">Dash
                                    Board</span>
                                <span class="font-deca text-base font-normal tracking-[1.12px] text-black">See your
                                    dashboard</span>
                            </a>
                        </li>
                        <li class="bg-menuButtonColor2 row-span-1 flex items-center justify-center">
                            <a class=" flex flex-col items-center justify-center gap-5 w-full h-full" href="">
                                <span
                                    class="font-deca text-3xl font-normal tracking-[1.12px] text-black">Upcoming</span>
                                <span class="font-deca text-base font-normal tracking-[1.12px] text-black">See upcoming
                                    exams and assignments</span>
                            </a>
                        </li>
                        <li class="bg-menuButtonColor3 row-span-1 flex items-center justify-center">
                            <a class=" flex flex-col items-center justify-center gap-5 w-full h-full" href="">
                                <span class="font-deca text-3xl font-normal tracking-[1.12px] text-black">Courses</span>
                                <span class="font-deca text-base font-normal tracking-[1.12px] text-black">See all your
                                    courses</span>
                            </a>
                        </li>
                        <li class="bg-menuButtonColor4 row-span-1 flex items-center justify-center">
                            <a class=" flex flex-col items-center justify-center gap-5 w-full h-full" href="">
                                <span class="font-deca text-3xl font-normal tracking-[1.12px] text-black">Learning
                                    Hub</span>
                                <span class="font-deca text-base font-normal tracking-[1.12px] text-black">Open a new
                                    tab to the Learning Hub</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Logout -->
                    <div class="h-[9.25rem] flex justify-center items-center">
                        <p
                            class="text-lg font-bold text-white font-pop px-12  py-2 rounded-4xl w-fit bg-menuButtonColor2 hover:cursor-pointer">
                            Log out
                        </p>
                    </div>
                    <!--End: Logout -->
                </nav>
            </div>
        </template>
    </div>