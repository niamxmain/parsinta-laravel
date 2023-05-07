<x-app title="{{$title ?? 'Tasks Page'}}">
    <h3>Taks Hari Ini</h3>
    <form action="/tasks/{{$task->id}}" method="post">
        @method('put')
        @csrf
        <input type="text" name="task" value="{{$task->task}}">
        <button type="submit">Update</button>
    </form>
</x-app>