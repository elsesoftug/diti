@php $editing = isset($resSection) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="section_name"
            label="Section Name"
            value="{{ old('section_name', ($editing ? $resSection->section_name : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
