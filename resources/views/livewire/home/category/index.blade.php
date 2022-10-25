<div style="margin-top: 100px">

    <div class="row">
        <div class="col-md-12">
            <a type="button" href="javascript:window.livewire.emit('homeNavChangePage', 'category_create')"
               style="float: right" class="btn btn-secondary btn-sm">Create</a>

        </div>

    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Created Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($Categories as $category)
            <tr>

                <th scope="row">{{$category->name}}</th>
                <td>{{$category->description}}</td>
                <td>{{$category->status}}</td>
                <td>{{$category->created_at}}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" href="javascript:window.livewire.emit('homeNavChangePage', 'category_create', {{$category->id}})">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="DeleteCategory({{$category->id}})">Delete</button>

                </td>
            </tr>

        @endforeach


        </tbody>
    </table>
</div>
