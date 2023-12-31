@props(['todo'])


<div class="col-span-1 w-full">
                <div class="rounded-3xl p-2.5  m-1 {{ $todo->course }}BgColor 
                @if ($todo->date >= date('Y-m-d') && $todo->date <= date('Y-m-d', strtotime('+5 days')))
                {{'upcomingBorder'}}
                @endif
                ">
                    <!-- Top Part (Tag & Edit Buttion) -->
                    <div class="flex justify-between items-center mb-5 ">
                        <!-- Label -->
                        <div class="text-xs text-white font-normal">
                            <p class="rounded-4xl px-4 {{ $todo->course }}TagColor font-pop">{{ $todo->course }}</p>
                        </div>
                        <!-- End: Label -->
                        <!-- Edit -->
                        <div class="w-5 h-5 object-fill">
                            <a href="./todos/edit/{{$todo->id}}"><img class="w-full h-full" src="{{asset('images/edit.svg')}}" alt=""></a>
                        </div>
                        <!-- End:Edit -->
                    </div>
                    <!-- End:Top Part (Tag & Edit Buttion) -->
                    
                    <!-- Title & Date -->
                    <div class=" mb-3 w-full">
                        <h3 class="text-base font-deca font-semibold mb-3 text-black hyphens-auto  break-words">{{ $todo->title }}</h3>
                        <p class=" text-sm font-pop ">{{ $todo->date}}  {{ $todo->time}}  </p>
                    </div>
                    <!-- End: Title & Date -->

                    <!-- CheckBox -->
                    <!-- <div class="flex hover:cursor-pointer items-center mb-5">
                        <img class="hover:cursor-pointer" src="{{asset('images/checkbox.svg')}}" alt="">
                        <p class="underline text-white font-normal text-xs font-pop ml-auto"> Mark as completed</p>
                    </div> -->
                    <!-- End:checkbox -->

                    <!-- Delete -->
                    <div class="border-white border-2 rounded-full w-8 h-8 mx-auto flex justify-center items-center">
                        <a href="./todos/delete/{{$todo->id}}"><img  src="{{asset('images/delete.svg')}}" alt=""></a>
                    </div>
                    <!-- End:Delete -->

                </div>
            </div>
            <!-- End: to-do list item -->