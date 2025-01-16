<select name="category" id="category" class="text-xl font-medium border-2 rounded-lg bg-slate-50 shadow-sm">
    <option value="all">All</option>
    <option value="incompleted">Incompleted</option>
    <option value="completed">Completed</option>
    {{$slot}}
</select>
