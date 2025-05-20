<div>
 <form wire:submit.prevent="submit">

 <label for="">Category:</label>
 <select class="form-select select2-cat" wire:model="category">
    <option>Select Category</option>
    @foreach($categories as $category)
<option value="{{ $category->name }}">{{ $category->name }}</option>
    @endforeach
 </select>


    <button type="submit" class="btn btn-success mt-3" wire:loading.attr="disabled" >Submit</button>

 </form>
</div>

@script

<script text="text/javascript">
    document.addEventListener('livewire:intialized',function(){
        function loadJavascript(){
            $(".select2-cat").select2().on("change",function(){
                $wire.set("category_ids", $this.val());
            });
        }
        loadJavascript();

        Livewire.hook('morphed', () => {
            loadJavascript();
        })
    })

 
</script>

@endscript
