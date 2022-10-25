<div>
    <h5 class="box-title text-primary" style="margin-top: 20px">
        Create Task
    </h5>
    <div class="row">

        <div class="col-md-12">
            <button class="btn btn-warning btn-xs float-right" style="float: right;margin-bottom: 20px" type="button"
                    wire:click="goBack">Back
            </button>

            <div class="form-group row">
                <label for="category_code" class="col-sm-3 col-form-label">Categories</label>
                <div class="col-sm-9">
                    <select name="task" wire:model="task.category_id" class="form-control">
                        <option value=''>Choose a Category</option>
                        @foreach($Categories as $category)
                            @if($category->status)
                                <option value={{ $category->id }}>{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('task.category_id')<small class="form-text text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="form-group row" style="margin-top: 10px">
                <label for="firstname" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input class="form-control{{ $errors->has('task.name') ? ' is-invalid' : '' }}" type="text"
                           placeholder="Name" wire:model="task.name">
                    @error('task.name')<small class="form-text text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="form-group row" style="margin-top: 10px">
                <label for="description" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <input class="form-control{{ $errors->has('task.description') ? ' is-invalid' : '' }}"
                           type="text" placeholder="description" wire:model="task.description">
                    @error('task.description')<small class="form-text text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="form-group row" style="margin-top: 10px">
                <label class="col-sm-3 col-form-label">Start Date</label>
                <div class="col-sm-9">
                    <input class="form-control{{ $errors->has('task.start_date') ? ' is-invalid' : '' }}" type="date"
                           placeholder="start_date" wire:model="task.start_date">
                    @error('task.start_date')<small class="form-text text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="form-group row" style="margin-top: 10px">
                <label class="col-sm-3 col-form-label">End Date</label>
                <div class="col-sm-9">
                    <input class="form-control{{ $errors->has('task.end_date') ? ' is-invalid' : '' }}" type="date" wire:model="task.end_date">
                    @error('task.end_date')<small class="form-text text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="form-group row" style="margin-top: 10px">
                <label class="col-sm-3 col-form-label">Hours</label>
                <div class="col-sm-9">
                    <input class="form-control{{ $errors->has('task.hours') ? ' is-invalid' : '' }}" type="text"
                           placeholder="hours" wire:model="task.hours">
                    @error('task.hours')<small class="form-text text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="form-group row" style="margin-top: 10px">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input class="form-check-input" type="checkbox"  wire:model="task.status">

                </div>
            </div>

            <div class="col-md-12" style="margin-top: 10px">
                <button class="btn btn-primary" style="float: right" wire:click="save">Save</button>
            </div>
        </div>
    </div>
</div>
