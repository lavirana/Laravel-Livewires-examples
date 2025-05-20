<div wire:init="loadCategories" >
 <form wire:submit.prevent="submit">

 <label for="">Category:</label>
 <select class="form-select" wire:model="category">
    <option>Select Category</option>
    @foreach($categories as $category)
<option value="{{ $category->name }}">{{ $category->name }}</option>
    @endforeach
 </select>

 <label for="">Name:</label>
    <input type="text" class="form-control" wire:model="name" wire:dirty.class="is-invalid" wire:dirty:class.remove="is-invalid">
        @error("name")
        <p class="text-danger">{{ $message }}</p>
        @enderror
    <label for="">Price:</label>
    <input type="text" class="form-control" wire:model="price">
            @error("price")
            <p class="text-danger">{{ $message }}</p> 
            @enderror
    <label for="">Detail:</label>
    <textarea name="" id="" class="form-control" wire:model="detail"></textarea>
    @error("detail")
        <p class="text-danger">{{ $message }}</p> 
        @enderror

    <button type="submit" class="btn btn-success mt-3" wire:loading.attr="disabled" >Submit</button>
    <button type="button" class="btn btn-danger mt-3" wire:click.prevent="resetForm" >Reset</button>

    <div wire:loading >
        Product loading..
    </div>
    <div wire:dirty>
        Unsaved data
    </div>

 </form>
</div>
