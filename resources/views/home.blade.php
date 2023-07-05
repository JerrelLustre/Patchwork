@extends('layout')

@section('content')
<section>
    @include('partials._greeting')



        <!-- Sub-heading -->
        <div class="flex justify-between max-w-[20.9375rem] mx-auto mb-1">
            <h2 class="text-2xl font-base font-normal font-pop text-black dark:text-white">Upcoming</h2>
            <a href="#"><img src="{{asset('images/add-todo.svg')}}" alt=""></a>
        </div>
        <!-- End:Sub-heading -->
                <!-- Filter -->
                <div class="w-full justify-between flex gap-2.5 mb-10 mt-4 max-w-[20.9375rem] mx-auto">
            <p
                class="text-base font-semibold text-white font-deca px-4 py-2 rounded-4xl bg-menuButtonColor1 hover:cursor-pointer">
                Assignments
            </p>
            <p
                class="text-base font-semibold text-white font-deca px-4 py-2 rounded-4xl bg-menuButtonColor1 hover:cursor-pointer">
                Exams
            </p>
            <p
                class="text-base uppercase font-semibold text-white font-deca px-4 py-2 rounded-4xl bg-menuButtonColor2 hover:cursor-pointer">
                All
            </p>
        </div>
        <!-- End: Filter -->
        <!-- To-do list -->
        <div class=" 
        grid-cols-[repeat(2,11.625rem)] 
        md:grid-cols-[repeat(3,11.625rem)] 
        lg:grid-cols-[repeat(4,11.625rem)] 
        grid gap-x-1.5 gap-y-3 w-fit mx-auto">
        @foreach ($todos as $todo)
            <!-- To-do list item -->
            <div class="col-span-1 ">
                <div class="rounded-3xl p-2.5  m-1 border bg-enterpriseBgColor">
                    <!-- Top Part (Tag & Edit Buttion) -->
                    <div class="flex justify-between items-center mb-5 ">
                        <!-- Label -->
                        <div class="text-xs text-white font-normal">
                            <p class="rounded-4xl px-4 bg-enterpriseTagColor font-pop">{{ $todo->title }}</p>
                        </div>
                        <!-- End: Label -->
                        <!-- Edit -->
                        <div class="w-5 h-5 object-fill">
                            <a href="#"><img class="w-full h-full" src="{{asset('images/edit.svg')}}" alt=""></a>
                        </div>
                        <!-- End:Edit -->
                    </div>
                    <!-- End:Top Part (Tag & Edit Buttion) -->
                    
                    <!-- Title & Date -->
                    <div class=" mb-3">
                        <h3 class="text-base font-deca font-semibold mb-3 text-black">{{ $todo->course }}</h3>
                        <p class=" text-sm font-pop ">{{ $todo->due}} </p>
                    </div>
                    <!-- End: Title & Date -->

                    <!-- CheckBox -->
                    <div class="flex hover:cursor-pointer items-center mb-5">
                        <img class="hover:cursor-pointer" src="{{asset('images/checkbox.svg')}}" alt="">
                        <p class="underline text-white font-normal text-xs font-pop ml-auto"> Mark as completed</p>
                    </div>
                    <!-- End:checkbox -->

                    <!-- Delete -->
                    <div class="border-white border-2 rounded-full w-8 h-8 mx-auto flex justify-center items-center">
                        <a href="#"><img  src="{{asset('images/delete.svg')}}" alt=""></a>
                    </div>
                    <!-- End:Delete -->

                </div>
            </div>
            <!-- End: to-do list item -->
        @endforeach
        </div>
        <!-- End: To-Do List -->
    </section>
@endsection