<div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <!-- asset-registration.blade.php -->
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('asset-list') }}" class="btn btn-sm btn-primary float-end"
                            style="margin-top: 20px;">
                            <i class="fa fa-eye"></i> View Asset List
                        </a>
                        <h5 class="card-title">Asset Registration</h5>




                        <form wire:submit.prevent="save">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="category" class="form-label">Category<span
                                            style="color: red">*</span></label>
                                    <select class="form-select" id="category" wire:model="category_id" required>
                                        <option selected value="">Select category...</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="type" class="form-label">Type<span
                                            style="color: red">*</span></label>
                                    <select class="form-select" id="type" wire:model="type_id" required>
                                        <option selected value="">Select type...</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('type_id')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="name" class="form-label">Asset Name<span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="name" wire:model="name"
                                        placeholder="Enter asset name" required>
                                    @error('name')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="manufacturer" class="form-label">Manufacturer<span
                                            style="color: red">*</span></label>
                                    <select class="form-select" id="manufacturer" wire:model="manufacturer_id" required>
                                        <option selected value="">Select manufacturer...</option>
                                        @foreach ($manufacturers as $manufacturer)
                                            <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('manufacturer_id')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="supplier" class="form-label">Supplier<span
                                            style="color: red">*</span></label>
                                    <select class="form-select" id="supplier" wire:model="supplier_id" required>
                                        <option selected value="">Select supplier...</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('supplier_id')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="purchase_price" class="form-label">Purchase Price<span
                                            style="color: red">*</span></label>
                                    <input type="number" class="form-control" id="purchase_price"
                                        wire:model="purchase_price" placeholder="Enter purchase price" required>
                                    @error('purchase_price')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="purchase_date" class="form-label">Purchase Date<span
                                            style="color: red">*</span></label>
                                    <input type="date" class="form-control" id="purchase_date"
                                        wire:model="purchase_date" required>
                                    @error('purchase_date')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="serial_number" class="form-label">Serial Number</label>
                                    <input type="text" class="form-control" id="serial_number"
                                        wire:model="serial_number" placeholder="Enter serial number">
                                    @error('serial_number')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="barcode" class="form-label">Barcode</label>
                                    <input type="text" class="form-control" id="barcode" wire:model="barcode"
                                        placeholder="Enter barcode">
                                    @error('barcode')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" rows="4" id="description" wire:model="description"
                                        placeholder="Enter description"></textarea>
                                    @error('description')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="bi bi-check-circle"></i> Save Asset
                                    </button>
                                    <button class="btn btn-warning" type="reset" style="color: white;">
                                        <i class="bi bi-trash"></i> Clear
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>


            </div>
        </div>
    </section>
    @if (session()->has('success'))
        <div id="success-message" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
