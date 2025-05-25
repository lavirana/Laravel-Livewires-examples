<div wire:init="loadProducts" >
 <form wire:submit.prevent="submit">

 @session('success')
<div class="alert alert-success">{{ $value }}</div>
 @endsession

 <label for="">Product:</label>
 <select class="form-select" wire:model="pro_id" name="pro_id">
    <option>Select Product</option>
    @foreach($products as $product)
<option value="{{ $product->id }}">{{ $product->name }}</option>
    @endforeach
 </select>

<div class="mt-3">
<label for="">Images</label>
<input type="file" wire:model="images" multiple class="form-control">
@error('images') <span class="text-danger" >{{ $message }}</span> @enderror
</div>

<div class="mt-3">
 @if(!empty($imagesPreview))
        @foreach($imagesPreview as $value)
<img src="{{ $value }}" alt="" style="width: 200px; height: 100px; padding:5px">
        @endforeach
 @endif
</div>

    <button type="submit" class="btn btn-success mt-3" >Submit</button>

 </form>
</div>
