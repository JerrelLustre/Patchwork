<header class="flex justify-between items-center mb-[3.625rem] mt-[2.25rem] w-[90%] mx-auto">
        <h1>
            <a href="/" title="Go to Patchwork homepage"><img src="{{asset('images/logo.svg')}}" alt="Patchwork"></a>
        </h1>
        <div class="flex gap-5 items-center">
            <!-- Light & Dark mode toggle -->
            <!-- <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <div
                    class="w-[56px] h-[25px] bg-white peer
                    peer-focus:outline-none 
                    peer-focus:ring-4 
                    peer-focus:ring-blue 

                    dark:border-gray 
                    dark:peer-focus:ring-white rounded-full  
                    dark:bg-white 

                    peer-checked:after:left-[31px] 
                    peer-checked:after:bg-brightRed
                    peer-checked:bg-blue 

                    after:content-[''] 
                    after:absolute 
                    after:top-[2px] 
                    after:left-[4px] 
                    after:bg-red
                    after:rounded-full 
                    after:h-[21px] 
                    after:w-[21px] 
                    after:transition-all 
                    
                    ">
                    <div class="absolute top-[3px] left-[4px] ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none">
                            <path fill="#FFFBFB" fill-rule="evenodd" d="M6.2.2c.2.2.3.5.2.7-.4 1-.6 2.1-.6 3.3a8 8 0 0 0 8 8c1.2 0 2.3-.2 3.3-.6a.6.6 0 0 1 .8.9A9.4 9.4 0 0 1 9.3 18 9.3 9.3 0 0 1 0 8.7C0 4.9 2.2 1.5 5.5 0c.3-.2.6-.1.7 0ZM4.7 2c-2 1.4-3.4 4-3.4 6.7a8 8 0 0 0 8 8 8 8 0 0 0 6.7-3.4l-2.2.2a9.3 9.3 0 0 1-9.3-9.3c0-.7 0-1.5.2-2.2Z" clip-rule="evenodd"/>
                        </svg>
                        
                    </div>
                    <div class="absolute top-[3px] left-[31px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="21" fill="none">
                            <g fill="#333" fill-rule="evenodd" clip-rule="evenodd" filter="url(#a)">
                                <path
                                    d="M13 0c.3 0 .6.3.6.6v2c0 .3-.3.5-.6.5a.6.6 0 0 1-.7-.6V.6c0-.3.3-.6.7-.6ZM6.6 2.6c.3-.3.7-.3 1 0l1.3 1.3c.2.3.2.7 0 1a1 1 0 0 1-1 0L6.7 3.4a.6.6 0 0 1 0-1Zm12.7 0c.2.2.2.6 0 .9l-1.4 1.3c-.2.3-.6.3-.9 0a.6.6 0 0 1 0-.9l1.4-1.3c.2-.3.6-.3.9 0ZM4 8.8c0-.3.3-.6.6-.6h2c.3 0 .6.3.6.6 0 .4-.3.6-.6.6h-2a.6.6 0 0 1-.6-.6Zm14.7 0c0-.3.3-.6.6-.6h2c.3 0 .6.3.6.6 0 .4-.3.6-.6.6h-2a.6.6 0 0 1-.6-.6Zm-9.8 4c.2.3.2.7 0 1L7.5 15c-.2.3-.6.3-.9 0a.6.6 0 0 1 0-.8L8 12.8c.2-.2.6-.2.9 0Zm8.1 0a1 1 0 0 1 1 0l1.3 1.4c.2.2.2.6 0 .8-.3.3-.7.3-1 0L17 13.7a.6.6 0 0 1 0-.9Zm-4 1.7c.3 0 .6.3.6.6V17c0 .3-.3.6-.6.6a.6.6 0 0 1-.7-.6v-2c0-.3.3-.6.7-.6Zm-.2-8.2a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5ZM9 8.8a3.8 3.8 0 1 1 7.6 0 3.8 3.8 0 0 1-7.6 0Z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </label> -->
            <!-- Menu -->
            <div @click="fullscreenModal=true" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="19" fill="none"><path fill="#7C95AA" fill-rule="evenodd" d="m0 1 1-1h31l1 1-1 2H1L0 1Zm0 9 1-2h31l1 2-1 1H1l-1-1Zm0 8 1-2h31l1 2-1 1H1l-1-1Z" clip-rule="evenodd"/></svg>
            </div>
        </div>
    </header>