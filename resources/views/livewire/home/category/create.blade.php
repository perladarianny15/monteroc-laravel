<div>
    <h5 class="box-title text-primary">
        Create Category
    </h5>
    <div class="row">

        <div class="col-md-12">
            <button class="btn btn-warning btn-xs float-right" style="float: right;margin-bottom: 20px" type="button" wire:click="goBack">Back</button>

            <div class="form-group row" style="margin-top: 10px">
                <label for="firstname" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input class="form-control{{ $errors->has('category.name') ? ' is-invalid' : '' }}" type="text"
                           placeholder="Name" wire:model="category.name">
                    @error('category.name')<small class="form-text text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="form-group row" style="margin-top: 10px">
                <label for="description" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <input class="form-control{{ $errors->has('category.description') ? ' is-invalid' : '' }}"
                           type="text" placeholder="description" wire:model="category.description">
                    @error('category.description')<small class="form-text text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="form-group row" style="margin-top: 10px">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input class="form-check-input" type="checkbox"  wire:model="category.status">
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 10px">
                <button class="btn btn-primary" style="float: right" wire:click="save">Save</button>
            </div>
        </div>
    </div>
</div>
