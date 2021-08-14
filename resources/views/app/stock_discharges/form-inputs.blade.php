@php $editing = isset($stockDischarge) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.number
            name="quantity_issued"
            label="Quantity Issued"
            value="{{ old('quantity_issued', ($editing ? $stockDischarge->quantity_issued : '')) }}"
            max="255"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="section" label="Section">
            @php $selected = old('section', ($editing ? $stockDischarge->section : 'Service')) @endphp
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="stock_table_id" label="Stock Table" required>
            @php $selected = old('stock_table_id', ($editing ? $stockDischarge->stock_table_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Stock Table</option>
            @foreach($stockTables as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="res_section_id" label="Res Section" required>
            @php $selected = old('res_section_id', ($editing ? $stockDischarge->res_section_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Res Section</option>
            @foreach($resSections as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="description"
            label="Description"
            maxlength="255"
            required
            >{{ old('description', ($editing ? $stockDischarge->description :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="issued_by"
            label="Issued By"
            maxlength="255"
            required
            >{{ old('issued_by', ($editing ? $stockDischarge->issued_by : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
