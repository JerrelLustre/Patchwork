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
            @method('DELETE')    
            <div>
                <p>
                Are you sure to want to delete this item?
                </p>
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