@props(['filter' => null])

<select {{ $attributes->class(['text-xl font-medium border-2 rounded-lg bg-slate-50 shadow-sm']) }}>
    <option value="all" {{$filter == 'all' ? 'selected' : ''}}>All</option>
    <option value="incompleted" {{$filter == 'incompleted' ? 'selected' : ''}}>Incompleted</option>
    <option value="completed" {{$filter == 'completed' ? 'selected' : ''}}>Completed</option>
    {{ $slot }}
</select>
