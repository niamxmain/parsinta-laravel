<x-app title="{{$title ?? 'Tasks Page'}}">
    <h3>Taks Hari Ini</h3>
    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="task" placeholder="Task Baru" required>
        <button type="submit">Submit</button>
    </form>
    <ul style="list-style-type: none;">
        @foreach ($tasks as $id => $task)
        <li>{{$id + 1}}. {{$task->task}}<a href="/tasks/{{$task->id}}/edit" style="color: green"> Edit</a><a href="/tasks/{{$task->id}}">Delete</a></li>
        @endforeach
    </ul>
</x-app>