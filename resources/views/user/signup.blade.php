@extends('layout')

@section('content')

    <div class="mt-[4rem]  w-[17.25rem] flex flex-col justify-center items-center mx-auto ">
        <!-- Logo -->
        <div class="mb-[6.125rem] "><img src="{{asset('/images/logo.svg')}}" alt="logo" class="w-[14rem] h-[3.25rem]"></div>

        <form method="POST" action="/patchworkv101/public/user" class="flex-col flex items-center flex-grow">
            @csrf
            <div>
                <input type="email" required  value="{{old('email')}}" name="email" class="mb-7 bg-offWhite border font-pop placeholder-black placeholder-mr-4  pl-9 placeholder text-sm rounded-2xl block w-full p-2.5  " placeholder="email">
                @error('email')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
                <input type="text" required value="{{old('name')}}" name="name" class="mb-7 bg-offWhite border font-pop placeholder-black placeholder-mr-4  pl-9 placeholder text-sm rounded-2xl block w-full p-2.5  " placeholder="username">
                @error('name')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
                <input type="password" required value="" name="password" class="mb-7 bg-offWhite border font-pop placeholder-black placeholder-mr-4  pl-9 placeholder text-sm rounded-2xl block w-full p-2.5  " placeholder="password">
                @error('password')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
                <input type="password"  required  value="" name="password_confirmation" class="bg-offWhite border font-pop placeholder-black placeholder-mr-4  pl-9 placeholder text-sm rounded-2xl block w-full p-2.5  " placeholder="re-type password">
                @error('password_confirmation')
                    <p class="text-red text-xs mt-1 font-pop">{{$message}} </p>
                    @enderror
            </div>
            <div class="mt-8 flex flex-col justify-center">
                <a href="/patchworkv101/public/login" class="block font-pop text-sm text-center font-medium text-black dark:text-white underline ">Already have an account? <span class="text-menucolorbutton2">Login<span></a>
                <button type="submit" class="mt-4 text-xl py-[0.3125rem] px-[3.0625rem] bg-green rounded-xl font-pop font-bold text-white">Register</button>
            </div>
        </form>
    </div>

    @endsection