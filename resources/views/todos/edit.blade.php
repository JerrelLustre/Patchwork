@extends('layout')

@section('content')
<section>
<!-- Sub-heading -->
<div class="flex justify-between max-w-[20.9375rem] mx-auto mb-12 items">
    <h2 class="text-2xl font-base font-normal font-pop text-black dark:text-white">Edit</h2>
    <a href="/" title="Return to homepage"
    class="underline font-base font-normal font-pop text-black dark:text-white">Go Back</a>
</div>
<div class=" w-[276px] flex flex-col justify-center items-center mx-auto ">
    <!-- Create Form -->

        <form method="POST" action="/todos/edit/{{$todo->id}}" class="flex-col flex items-center flex-grow">
            @csrf
            @method('PUT')
            <div>
                <!-- "Is an assignment or exam?" input -->
                <label for="type" class="text-sm text-black dark:text-white font-pop">Is this an assignment or exam?</label>
                <select required
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5"
                    id="type" name="type">
                    <option value="assignment"<?php if($todo->type == 'assignment') echo 'selected'; ?>>Assignment</option>
                    <option value="exam" <?php if($todo->type == 'exam') echo 'selected'; ?>>Exam</option>
                </select>
                <!-- Assignment Course Input -->
                <label for="course" class="text-sm text-black dark:text-white font-pop">Please choose a course</label>
                <select
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5"
                    id="course" name="course" required>
                    <option value="onlineStore" <?php if($todo->course == 'onlineStore') echo 'selected'; ?>>Online Store</option>
                    <option value="nmOperation" <?php if($todo->course == 'nmOperation') echo 'selected'; ?>>NM Operation</option>
                    <option value="enterprise" <?php if($todo->course == 'enterprise') echo 'selected'; ?>>Enterprise</option>
                    <option value="portfolio2" <?php if($todo->course == 'portfolio2') echo 'selected'; ?>>Portfolio 2</option>
                    <option value="appDev2" <?php if($todo->course == 'appDev2') echo 'selected'; ?>>App Dev 2</option>
                    <option value="webScripting3" <?php if($todo->course == 'webScripting3') echo 'selected'; ?>>Web Scripting 3</option>
                    <option value="qualityAssurance" <?php if($todo->course == 'qualityAssurance') echo 'selected'; ?>>Quality Assurance</option>
                    <option value="internshipPrep" <?php if($todo->course == 'internshipPrep') echo 'selected'; ?>>Internship Prep</option>
                    <option value="careerPrep" <?php if($todo->course == 'careerPrep') echo 'selected'; ?>>Career Prep</option>
                </select>
                <!-- End:Assignment Course Input -->
                <!-- Assignment Name Input -->
                <label for="title" class="text-sm text-black dark:text-white font-pop">Assignment Title</label>
                <input type="text" id="title" name="title" required
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5"
                    placeholder="Title" value="{{$todo->title}}">
                    @error('title')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
                <!-- End: Assignment Name Input -->
                <!-- Due Date Input -->
                <label for="date" class="text-sm text-black dark:text-white font-pop">Assignment Due Date</label>
                <input type="date" id="date" name="date" required value="{{$todo->date}}"
                    class="mb-7 bg-menuButtonColor2 dark:bg-offWhite border font-pop placeholder-black placeholder-mr-4 pl-9 placeholder text-sm rounded-2xl block w-full p-2.5">
                    @error('date')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
                <!-- End:Due Date Input -->
                <!-- Time input -->
                <label for="time" class=" text-sm text-black dark:text-white font-pop">Assignment Due Time</label>
                <input type="time" id="time" name="time" required value="{{$todo->time}}"
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