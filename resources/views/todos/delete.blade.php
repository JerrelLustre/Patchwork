@extends('layout')

@section('content')
<section>
<!-- Sub-heading -->
<div class="flex justify-between max-w-[20.9375rem] mx-auto mb-12 items">
    <h2 class="text-2xl font-base font-normal font-pop text-black dark:text-white">Delete</h2>
    <a href="/" title="Return to homepage"
    class="underline font-base font-normal font-pop text-black dark:text-white">Go Back</a>
</div>
<div class=" w-[276px] flex flex-col justify-center items-center mx-auto ">
    <!-- Create Form -->

        <form method="POST" action="/patchworkv101/public/todos/delete/{{$todo->id}}" class="flex-col flex items-center flex-grow">
            @csrf
            @method('DELETE')    
            <div>
                <p class="text-lg font-pop text-center dark:text-white">
                Are you sure to want to delete this item?
                </p>
            </div>
            <!-- Submit btn -->
            <div class="mt-auto">
                <button type="submit"
                    class="mt-4 text-xl py-[0.3125rem] px-[3.0625rem] bg-menuButtonColor2 rounded-xl font-pop font-bold text-white">Delete</button>
            </div>
            <!-- End: Submit btn -->
        </form>
        <!-- End Create Form -->
    </div>
</section>
@endsection