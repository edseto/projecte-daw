<label class="btn btn-outline-primary {{ $class ?? '' }}">
    <input type="radio"
           id="{{ $id }}"
           name="{{ $name }}"
           aria-label="{{ $label }}"
           value="{{ $value }}"
           checked="{{ $attributes->has('checked') ?? false }}"
    >
    {{ $label }}
</label>
