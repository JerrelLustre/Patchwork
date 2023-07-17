@extends('layout')

@section('content')
<section>
    @include('partials._greeting')



        <!-- Sub-heading -->
        <div class="flex justify-between max-w-[20.9375rem] mx-auto mb-1 mt-4">
            <h2 class="text-2xl font-base font-normal font-pop text-black dark:text-white">Upcoming</h2>
            <a href="./todos/create"><img src="{{asset('images/add-todo.svg')}}" alt=""></a>
        </div>
        <!-- End:Sub-heading -->
                <!-- Filter -->
                <div class="w-full justify-between flex gap-2.5 mb-10 mt-4 max-w-[20.9375rem] mx-auto">
            <a  href="./?type=assignment"
                class="text-base font-semibold text-white font-deca px-4 py-2 rounded-4xl bg-menuButtonColor1 hover:cursor-pointer">
                Assignments
            </a>
            <a  href="./?type=exam"
                class="text-base font-semibold text-white font-deca px-4 py-2 rounded-4xl bg-menuButtonColor1 hover:cursor-pointer">
                Exams
            </a>
            <a  href="./"
                class="text-base uppercase font-semibold text-white font-deca px-4 py-2 rounded-4xl bg-menuButtonColor2 hover:cursor-pointer">
                All
            </a>
        </div>
        <!-- End: Filter -->
        <!-- To-do list -->
        <div class=" 
        grid-cols-[repeat(2,11.625rem)] 
        md:grid-cols-[repeat(3,11.625rem)] 
        lg:grid-cols-[repeat(4,11.625rem)] 
        grid gap-x-1.5 gap-y-3 w-fit mx-auto">
        @foreach ($todos as $todo)
            <x-todo-card :todo="$todo" />
        @endforeach
        </div>
        <!-- End: To-Do List -->
    </section>
    @endsection