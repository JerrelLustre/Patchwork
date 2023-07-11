@extends('layout')

@section('content')

<section>


<!-- Sub-heading -->
<div class="flex md:justify-center justify-between max-w-[20.9375rem] mx-auto mb-6">
    <h2 class="text-2xl font-base font-normal font-pop text-black dark:text-white">Courses</h2>
</div>

<!-- Course List -->
<div class="

w-fit
mx-auto
grid
grid-cols-[repeat(1,20.9375rem)] 
md:grid-cols-[repeat(2,20.9375rem)] 
lg:grid-cols-[repeat(3,20.9375rem)] 
">
    @foreach ($courses as $course)
    <!-- Course Item -->
    <div class="relative rounded-3xl col-span-1 px-1.5 pt-1.5 pb-2 h-[11.875rem] {{ $course['colorClass'] }}BgColor my-5 shadow-btn">
        <!-- Label -->
        <div class="text-base text-white font-normal w-fit absolute z-10 left-0 -top-2">
            <h2 class="rounded-4xl px-4 {{ $course['colorClass'] }}TagColor font-pop">{{ $course['title'] }}</h2>
        </div>
        <!-- End: label -->
        <!-- Image background -->
        <div class="absolute  inset-0  p-[inherit]">
            <img class="w-full h-full object-cover rounded-3xl" src="https://source.unsplash.com/random" alt="">
            <a class="absolute top-3 right-3 cursor-pointer "><img class="drop-shadow-card" src="../img/edit-image.svg" alt=""></a>
        </div>
        <!-- End: Image background -->
        <!-- Buttons -->
        <div class="absolute -bottom-4 right-0 flex gap-4">
            <a target="_blank" href="https://learn.bcit.ca/d2l/lms/dropbox/user/folders_list.d2l?ou={{ $course['linkID'] }}&isprv=0"  title="Open up D2L to see Course assignments"
            class="shadow-btn text-base font-semibold text-white font-deca px-4 py-2 rounded-3xl bg-menuButtonColor2 hover:cursor-pointer">
            Assignments
            </a>
            <a target="_blank" href="https://learn.bcit.ca/d2l/le/content/{{ $course['linkID'] }}/Home" title="Open up D2L to see Content"
            class="shadow-btn text-base font-semibold text-white font-deca px-4 py-2 rounded-3xl bg-menuButtonColorButton hover:cursor-pointer">
            Content
            </a>
        </div>
        <!-- End: Buttons -->
    </div>
    <!-- End: Course Item -->
    @endforeach
</div>
<!-- End: Course List -->
</section>
@endsection