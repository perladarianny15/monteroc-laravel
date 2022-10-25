<div style="margin-top: 100px">

    <div class="row">
        <div class="col-md-12">
            <a type="button" href="javascript:window.livewire.emit('homeNavChangePage', 'task_create')"
               style="float: right" class="btn btn-secondary btn-sm">Create</a>

        </div>

    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Hours</th>
            <th scope="col">Created Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($Tasks as $task)
            <tr>
                <th scope="row">{{$task->name}}</th>
                <td>{{$task->description}}</td>
                <td>{{$task->start_date}}</td>
                <td>{{$task->end_date}}</td>
                <td>{{$task->hours}}</td>
                <td>{{$task->status}}</td>
                <td>{{$task->created_at}}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" href="javascript:window.livewire.emit('homeNavChangePage', 'task_create', {{$task->id}})">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="DeleteTask({{$task->id}})">Delete</button>
                </td>
            </tr>

        @endforeach


        </tbody>
    </table>
</div>
