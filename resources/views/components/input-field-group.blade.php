@props(['label' => false, 'name'])
<x-form-group>
    @if($label)
    <x-label class="mb-1">{{ $label }}</x-label>
    @endif
    <input name="{{ $name }}" class="my-1 w-full border border-gray-200 bg-gray-50 rounded focus:bg-white {{ invalid_class($name) }}" {{ $attributes }}>
    <x-invalid-feedback :field="$name"></x-invalid-feedback>
    @isset($formHelp)
    <small class="text-xs text-gray-600">{{ $formHelp ?? 'sdasd' }}</small>
    @endisset
</x-form-group>