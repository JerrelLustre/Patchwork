@extends('layout')

@section('content')
<section>
<!-- Sub-heading -->
<div class="flex justify-between max-w-[20.9375rem] mx-auto mb-12 items">
    <h2 class="text-2xl font-base font-normal font-pop text-black dark:text-white">Upcoming</h2>
    <a href="/" title="Return to homepage"
    class="underline font-base font-normal font-pop text-black dark:text-white">Go Back</a>
</div>
<div class=" w-[276px] flex flex-col justify-center items-center mx-auto ">
    <!-- Create Form -->

        <form method="Post" action="/todos" class="flex-col flex items-center flex-grow">
            @csrf
            <div>
                <!-- "Is an assignment or exam?" input -->
                <label for="type" class="text-sm text-black dark:text-white font-pop">Is this an assignment or exam?</label>
                <select required
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5"
                    id="type" name="type">
                    <option value="assignment">Assignment</option>
                    <option value="exam">Exam</option>
                </select>
                <!-- Assignment Course Input -->
                <label for="course" class="text-sm text-black dark:text-white font-pop">Please choose a course</label>
                <select
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5"
                    id="course" name="course" required>
                    <option value="onlineStore">Online Store</option>
                    <option value="nmOperation">NM Operation</option>
                    <option value="enterprise">Enterprise</option>
                    <option value="portfolio2">Portfolio 2</option>
                    <option value="appDev2">App Dev 2</option>
                    <option value="webScripting3">Web Scripting 3</option>
                    <option value="qualityAssurance">Quality Assurance</option>
                    <option value="internshipPrep">Internship Prep</option>
                    <option value="careerPrep">Career Prep</option>
                </select>
                <!-- End:Assignment Course Input -->
                <!-- Assignment Name Input -->
                <label for="title" class="text-sm text-black dark:text-white font-pop">Assignment Title</label>
                <input type="text" id="title" name="title" required
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5"
                    placeholder="Title">
                    @error('title')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
                <!-- End: Assignment Name Input -->
                <!-- Due Date Input -->
                <label for="date" class="text-sm text-black dark:text-white font-pop">Assignment Due Date</label>
                <input type="date" id="date" name="date" required
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5">
                    @error('date')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
                <!-- End:Due Date Input -->
                <!-- Time input -->
                <label for="time" class=" text-sm text-black dark:text-white font-pop">Assignment Due Time</label>
                <input type="time" id="time" name="time" required
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5">
                    @error('time')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
                <!-- End: Time input -->
            </div>
            <!-- Submit btn -->
            <div class="mt-auto">
                <button type="submit"
                    class="mt-4 text-xl py-[0.3125rem] px-[3.0625rem] bg-green rounded-xl font-pop font-bold text-white">Save</button>
            </div>
            <!-- End: Submit btn -->
        </form>
        <!-- End Create Form -->
    </div>
</section>
@endsection