@props(['isCompleted'])

<div class="flex justify-between items-center py-4 px-6 border rounded-xl shadow-md">

    <div class="flex items-center gap-2">
        <input type="checkbox" id="{{ $id }}" {{$isCompleted ? 'checked' : ''}}
            class="h-6 w-6 peer rounded-md text-neutral-800 border-2 focus:ring-offset-0" name="isCompleted">
        <label for="{{ $id }}" class="peer-checked:line-through text-2xl font-medium gap-2 cursor-pointer">
            {{ $title }}
        </label>
    </div>

    <x-action.button class="bg-red-700 hover:bg-red-900">Delete</x-action.button>

</div>
