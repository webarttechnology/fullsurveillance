
<div class="col-md-12">
    <div class="form-group mb-4">
        <label>Sub Category</label>
        <select name="subcategory" class="form-control">
            <option value="">Select subcategory</option>
            @foreach ($subcategory as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>
