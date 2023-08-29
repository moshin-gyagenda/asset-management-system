<div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <!-- asset-registration.blade.php -->
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('asset-list') }}" class="btn btn-sm btn-primary float-end"
                            style="margin-top: 20px;">
                            <i class="fa fa-eye"></i> View Assigned Asset
                        </a>
                        <h5 class="card-title">Asset Assignment Form</h5>


                        <form wire:submit.prevent="assignAsset">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="asset">Asset:</label>
                                        <select class="form-select" id="asset" wire:model="selectedAsset" wire:change="populateAssetDetails">
                                            <option value="">Select Asset</option>
                                            @foreach ($assets as $asset)
                                                <option value="{{ $asset->id }}">{{ $asset->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="barcode">Barcode:</label>
                                        <input type="text" class="form-control" id="barcode" wire:model="barcode" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="start_date">Start Date:</label>
                                        <input type="date" class="form-control" id="start_date" wire:model="startDate">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="employee">Employee:</label>
                                        <select class="form-select" id="employee" wire:model="selectedEmployee">
                                            <option value="">Select Employee</option>
                                            @foreach ($employees as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="serial_number">Serial Number:</label>
                                        <input type="text" class="form-control" id="serial_number" wire:model="serialNumber" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">End Date:</label>
                                        <input type="date" class="form-control" id="end_date" wire:model="endDate">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Assign Asset</button>
                        </form>






                    </div>
                </div>


            </div>
        </div>
    </section>

</div>
