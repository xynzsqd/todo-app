<div class="flex justify-between items-center py-4 px-6 border rounded-xl shadow-md">
    <label for="{{$id}}" class="flex items-center text-2xl font-medium gap-2 cursor-pointer"><input type="checkbox"
            id="{{$id}}"
            class="h-6 w-6 rounded-md text-neutral-800 border-2 focus:ring-offset-0 focus:ring-neutral-800 cursor-pointer">
        {{$title}}</label>
    <x-action.button class="bg-red-700 hover:bg-red-900">Delete</x-action.button>
</div>
