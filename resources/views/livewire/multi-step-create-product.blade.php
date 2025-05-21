<div class="p-4">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3">
                <a href="#step-1" type="button" class="btn btn-circle {{ $this->step >= 1 ? 'btn-active' : '' }}">1</a>
                <p><small>Basic Info.</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-2" type="button" class="btn btn-circle {{ $this->step >= 2 ? 'btn-active' : '' }}">2</a>
                <p><small>Photo</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-3" type="button" class="btn btn-circle {{ $this->step >= 3 ? 'btn-active' : '' }}">3</a>
                <p><small>Price Info.</small></p>
            </div>
        </div>
    </div>


    @if($step === 1)
    <div class="details mt-3">
        <h5>Basic Info.</h5>

        <div class="mt-3">
            <label>Name:</label>
            <input type="text" class="form-control" wire:model="name">
            @error("name")  <span class="text-danger" >{{ $message }}</span>   @enderror
        </div>

        <div class="mt-3">
            <label>Details:</label>
            <textarea type="text" class="form-control" wire:model="details"></textarea>
            @error("details")  <span class="text-danger" >{{ $message }}</span>   @enderror
        </div>
        
        <div class="mt-3 d-md-flex justify-content-md-end" >
         <button type="button" class="btn btn-success" wire:click="nextStep">Next</button>
        </div>
    </div>
    @endif

    @if($step === 2)
    <div class="details mt-3">
        <h5>Photo</h5>

        <div class="mt-3">
            <label>Choose Image:</label>
            <input type="file" class="form-control" wire:model="image">
            @error("image")  <span class="text-danger" >{{ $message }}</span>   @enderror

            @if($image)
                <img src="{{ $image->temporaryUrl() }}" class="mt-4" style="width:150px; height:100px" alt="">
            @endif
        </div>
        
        <div class="mt-3 d-md-flex justify-content-md-end" >
         <button type="button" class="btn btn-danger" wire:click="previousStep">Previous</button>
         <button type="button" class="btn btn-success" wire:click="nextStep">Next</button>
        </div>
    </div>
    @endif

    @if($step === 3)
    <div class="price mt-3">
        <h5>Basic Info.</h5>

        <div class="mt-3">
            <label>Price:</label>
            <input type="number" class="form-control" wire:model="price">
            @error("price")  <span class="text-danger" >{{ $message }}</span>   @enderror
        </div>

        <div class="mt-3">
            <label>Quantity:</label>
            <input type="number" class="form-control" wire:model="quantity">
            @error("quantity")  <span class="text-danger" >{{ $message }}</span>   @enderror
        </div>
        
        <div class="mt-3 d-md-flex justify-content-md-end" >
        <button type="button" class="btn btn-danger" wire:click="previousStep">Previous</button>
         <button type="button" class="btn btn-success" wire:click="submit">Submit</button>
        </div>
    </div>
    @endif
</div>
