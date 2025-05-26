<div class="mt-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select class="form-select" id="{{ $name }}" wire:model="{{ $model }}">
        <option>{{ $placeholder }}</option>
        @foreach($options as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>

    @error($model)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>