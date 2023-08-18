<div class="form-group {{ $col ?? '' }}">
    <label for="{{ $name ?? '' }}">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" class="form-control" name="{{ $name ?? '' }}" id="{{ $name ?? '' }}">
</div>
