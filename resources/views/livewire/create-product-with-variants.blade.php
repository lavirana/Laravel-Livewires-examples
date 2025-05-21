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
<h4>Variants</h4>
<div class="row" >
    <div class="col-md-3" >
        <label for="">Name</label>
    </div>
    <div class="col-md-3" >
        <label for="">Price</label>
    </div>
    <div class="col-md-3" >
    <label for="">SKU:</label>
    </div>
    <div class="col-md-3" >
        <button type="button" class="btn btn-primary" wire:click="addVariant">+ Add Variant</button>
    </div>
</div>

    @foreach($variants as $index => $variant)
<div class="row mb-3" >
    <div class="col-md-3" >
        <input type="text" name="name" wire:model="variants.{{ $index }}.name" class="form-control" placeholder="Name" >
        @error("variants.{$index}.name")
        <span class="text-danger" >{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-3" >
        <input type="text" name="price" wire:model="variants.{{ $index }}.price" class="form-control" placeholder="Price">
        @error("variants.{$index}.price")
        <span class="text-danger" >{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-3" >
        <input type="text" name="sku" wire:model="variants.{{ $index }}.sku" class="form-control" placeholder="SKU">
        @error("variants.{$index}.sku")
        <span class="text-danger" >{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-3" >
        <button type="button" class="btn btn-danger" wire:click="removeVariant({{ $index }});">X</button>
    </div>
</div>
    @endforeach
</div>

    <button type="submit" class="btn btn-success mt-3" wire:loading.attr="disabled" >Submit</button>
    <button type="button" class="btn btn-danger mt-3" wire:click.prevent="resetForm" >Reset</button>

 </form>
</div>
