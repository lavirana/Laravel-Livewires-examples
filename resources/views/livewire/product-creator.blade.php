<div>
 <form wire:submit.prevent="submit">

 <label for="">Name:</label>
    <input type="text" class="form-control" wire:model="name">
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

    <button type="submit" class="btn btn-success mt-3" >Submit</button>
 </form>
</div>
