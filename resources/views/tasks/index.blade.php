<x-app title="{{$title ?? 'Tasks Page'}}">
    <div class="container-fluid">
        <h3>Taks Hari Ini</h3>
        <div class="row">
            <form action="/tasks" method="post">
                @csrf
                <div class="mb-3">
                    <label for="task" class="form-label">Add New Task</label>
                    <input type="text" name="task" placeholder="Task Baru" required class="form-control" id="task" aria-describedby="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <ul style="list-style-type: none;">
            @foreach ($tasks as $id => $task)
            <li>{{$id + 1}}. {{$task->task}}<a href="/tasks/{{$task->id}}/edit" style="color: green"> Edit</a><a href="/tasks/{{$task->id}}">Delete</a></li>
            @endforeach
        </ul>
    </div>
</x-app>