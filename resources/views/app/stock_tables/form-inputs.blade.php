@php $editing = isset($stockTable) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="item_name"
            label="Item Description"
            value="{{ old('item_name', ($editing ? $stockTable->item_name : '')) }}"
            minlength="3"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.textarea
            name="unit"
            label="Units"
            minlength="2"
            maxlength="255"
            required
            >{{ old('unit', ($editing ? $stockTable->unit : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="category"
            label="Category"
            value="{{ old('category', ($editing ? $stockTable->category : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="buying_price"
            label="Buying Price"
            value="{{ old('buying_price', ($editing ? $stockTable->buying_price : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.number
            name="quantity"
            label="Quantity"
            value="{{ old('quantity', ($editing ? $stockTable->quantity : '')) }}"
            max="255"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.textarea
            name="description"
            label="Description"
            maxlength="255"
            required
            >{{ old('description', ($editing ? $stockTable->description : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
