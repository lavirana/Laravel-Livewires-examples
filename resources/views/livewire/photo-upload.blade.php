<div>

<form wire:submit.prevent="submit">

@session("success")
<div class="alert alert-success">
    {{ $value }}
</div>
@endsession


@session("error")
<div class="alert alert-danger">
    {{ $value }}
</div>
@endsession


@if($photo)
Photo Preview:
<img src="{{ $photo->temporaryUrl() }}"  width="400px"><br>
@endif
    <input type="file" name="photo" class="form-control" wire:model="photo">
        @error("photo")
            <p class="text-danger">{{ $message }}</p> 
        @enderror
    <button class="btn btn-success mt-3" >submit</button>
</form>

</div>
