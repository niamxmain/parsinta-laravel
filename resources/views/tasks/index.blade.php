<x-app title="{{$title ?? 'Tasks Page'}}">
    <h3>Taks Hari Ini</h3>
    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="newTask" placeholder="Task Baru">
        <button type="submit">Submit</button>
    </form>
    <ul style="list-style-type: none;">
        @foreach ($tasks as $id => $task)
        <li>{{$id + 1}}. {{$task->tugas}}<a href="/tasks/{{$task->id}}/edit" style="color: green"> Edit</a><a href="/tasks/{{$task->id}}">Delete</a></li>
        @endforeach
    </ul>
</x-app>