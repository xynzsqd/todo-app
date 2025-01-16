@extends('layouts.base')

@section('main')
    <div class="container flex justify-center items-center px-4 mx-auto">

        <div class="grow flex flex-col justify-center items-center p-20 rounded-xl shadow-2xl">

            <div class="w-2/3  mb-14">
                <x-form.form>
                    <div class="flex gap-3">
                        <x-form.input name="title" placeholder="Enter task name" class="flex-1"></x-form.input>
                        <x-action.button class="flex-none bg-neutral-700">Create</x-action.button>
                    </div>
                </x-form.form>
            </div>

            <div class="w-2/3 relative mb-14">
                <button
                    class="absolute -top-10 right-0 font-medium text-lg text-gray-500 hover:text-gray-800 transition-colors duration-200 cursor-pointer">Clear
                    completed
                </button>
                <ul class="flex flex-col gap-2">
                    @for ($i = 0; $i < 3; $i++)
                        <li>
                            <x-task.card title="title" id="{{ $i }}"></x-task.card>
                        </li>
                    @endfor
                </ul>
            </div>

            <div class="w-2/3">
                <x-form.form class="flex gap-3">
                    <x-form.select class="flex-1" name="" id=""
                        class="text-xl font-medium border-2 rounded-lg bg-slate-50 shadow-sm">
                    </x-form.select>
                    <x-form.input class="flex-1" name="title" placeholder="Search something..."></x-form.input>
                    <x-action.button class="flex-none">Apply</x-action.button>
                </x-form.form>
            </div>

        </div>

    </div>
@endsection
