<div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Asset Request Form</h5>

                        <!-- Asset Request Form -->
                        <form class="row g-3" wire:submit.prevent="save">
                            <div class="col-md-12">
                                <label for="asset_type" class="form-label">Asset Type<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="asset_type" wire:model="type_id">
                                    <!-- Updated property name -->
                                    <option value="">Select asset type</option>
                                    <!-- Include options for different asset types -->
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>

                                @error('asset_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="asset_name" class="form-label">Asset Name<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="asset_name" required wire:model="asset_id">
                                    <option value="">Select asset name</option>
                                    @foreach ($assets as $asset)
                                        <option value="{{ $asset->id }}">{{ $asset->name }}</option>
                                    @endforeach
                                </select>
                                @error('asset_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="col-md-6">
                                <label for="quantity" class="form-label">Quantity<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="quantity" placeholder="Enter quantity"
                                    required wire:model="quantity">
                                @error('quantity')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="specification" class="form-label">Specification<span
                                        class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control" id="specification" placeholder="Enter specification" required
                                    wire:model="specification"></textarea>
                                @error('specification')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="purpose" class="form-label">Purpose<span
                                        class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control" id="purpose" placeholder="Enter purpose" required wire:model="purpose"></textarea>
                                @error('purpose')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit Request</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>
                        </form>





                        <!-- End Asset Request Form -->




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
