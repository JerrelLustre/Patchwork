@extends('layout')

@section('content')

    <section class="mt-[4rem] h-full w-[276px] flex flex-col justify-center items-center mx-auto ">
        <!-- Logo -->
        <div class="mb-10 "><img src="{{asset('/images/logo.svg')}}" alt="logo" class="w-[14rem] h-[3.25rem]"></div>
        <div class="mb-10"><img src="{{asset('/images/computer.svg')}}" alt="computer"></div>
        <form method="POST" action="/patchworkv101/public/user/authenticate" class="flex-col flex items-center flex-grow">
            @csrf
            <div>
            @error('email')
                    <p class="text-red text-xs font-pop">{{$message}} </p>
                @enderror
                <input type="email" value="{{old('email')}}" name="email" class="mb-7 bg-offWhite border font-pop placeholder-black placeholder-mr-4  pl-9 placeholder text-sm rounded-2xl block w-full p-2.5" placeholder="Email">

                <input type="password" value="" name="password" class="mt-2 bg-offWhite border font-pop placeholder-black placeholder-mr-4  pl-9 placeholder text-sm rounded-2xl block w-full p-2.5" placeholder="Password">
                <!-- <a href="#" class="w-full block mt-2 font-pop text-sm  font-medium text-black dark:text-white hover:underline ">forgot password?</a> -->
            </div>
            <div class="mt-8">
                <a href="/patchworkv101/public/signup" class="block font-pop text-sm text-center font-medium text-black dark:text-white underline ">Sign up for an account</a>
                <button type="submit" class="mt-4 text-xl py-[0.3125rem] px-[3.0625rem] bg-green rounded-xl font-pop font-bold text-white">Login</button>
            </div>
        </form>
    </section>

    @endsection