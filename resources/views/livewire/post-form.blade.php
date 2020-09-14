<div class="container">
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" wire:model="title" class="form-control" id="title" aria-describedby="titleHelp"
                placeholder="Enter Title">
        </div>
        @error('title')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <div class="form-group">
            <label for="content">Content</label>
            <textarea wire:model="content" class="form-control" id="content" rows="3"
                placeholder="write description"></textarea>
        </div>

        @error('content')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <br>
</div>
