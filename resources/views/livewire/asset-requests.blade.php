<div>
    @if (session('success'))
    <div id="success-alert" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div id="error-alert" class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Asset Request List</h5>

                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Employee Name</th>
                                <th scope="col">Asset Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Request Date</th>
                                {{-- @if (auth()->user()->hasRole('admin')) <!-- Check if the user has the 'admin' role --> --}}
                                {{-- <th scope="col">Make Decision</th> --}}

                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assetRequests as $assetRequest)
                                <tr>
                                    <td>{{ $assetRequest->id }}</td>
                                    <td>{{ $assetRequest->user->name }}</td>
                                    <td>{{ $assetRequest->asset->name }}</td>
                                    <td>{{ $assetRequest->quantity }}</td>
                                    <td>
                                        <span class="badge {{ $assetRequest->status === 'Pending' ? 'bg-warning' : ($assetRequest->status === 'Approved' ? 'badge-success' : 'badge-danger') }}"
                                              style="color: white; padding: 5px;">
                                            {{ $assetRequest->status }}
                                        </span>
                                    </td>

                                    <td>{{ $assetRequest->request_date }}</td>
                                    <td>
                                        @if (auth()->user()->hasRole('Admin'))
                                            <button type="button" class="btn btn-sm btn-primary"
                                                data-toggle="modal"
                                                data-target="#viewAssetRequestModal{{ $assetRequest->id }}">
                                                <i class="fa fa-eye"></i> View
                                            </button>
                                        @elseif (auth()->user()->hasRole('Employee'))
                                            <button type="button" class="btn btn-sm btn-warning"
                                                data-toggle="modal"
                                                data-target="#editAssetRequestModal{{ $assetRequest->id }}"
                                                style="color: white;">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#cancelAssetRequestModal{{ $assetRequest->id }}">
                                                <i class="fa fa-times"></i> Cancel
                                            </button>
                                        @endif
                                    </td>
                                </tr>

                                <!-- View Asset Request Modal -->
                                <div class="modal fade" id="viewAssetRequestModal{{ $assetRequest->id }}"
                                    tabindex="-1" role="dialog"
                                    aria-labelledby="viewAssetRequestModalLabel{{ $assetRequest->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="viewAssetRequestModalLabel{{ $assetRequest->id }}">Asset
                                                    Request Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="assetRequestId">Asset Request ID</label>
                                                            <input type="text" class="form-control"
                                                                id="assetRequestId" value="{{ $assetRequest->id }}"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="userName">User</label>
                                                            <input type="text" class="form-control"
                                                                id="userName"
                                                                value="{{ $assetRequest->user->name }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="assetName">Asset</label>
                                                            <input type="text" class="form-control"
                                                                id="assetName"
                                                                value="{{ $assetRequest->asset->name }}" readonly>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="quantity">Quantity</label>
                                                            <input type="text" class="form-control"
                                                                id="quantity"
                                                                value="{{ $assetRequest->quantity }}" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <input type="text" class="form-control"
                                                                id="status" value="{{ $assetRequest->status }}"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="requestDate">Request Date</label>
                                                            <input type="text" class="form-control"
                                                                id="requestDate"
                                                                value="{{ $assetRequest->request_date }}" readonly>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="specification">Specification</label>
                                                        <textarea class="form-control" id="specification" rows="3" readonly>{{ $assetRequest->specification }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="purpose">Purpose</label>
                                                        <textarea class="form-control" id="purpose" rows="3" readonly>{{ $assetRequest->purpose }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                @if (auth()->user()->hasRole('Admin'))
                                                    <button type="button" class="btn btn-success" wire:click="updateAssetRequestStatus({{ $assetRequest->id }}, 'Approved')"><i
                                                            class="fas fa-check"></i> Approve</button>
                                                    <button type="button" class="btn btn-danger" wire:click="updateAssetRequestStatus({{ $assetRequest->id }}, 'Rejected')"><i
                                                            class="fas fa-times"></i> Reject</button>
                                                @elseif (auth()->user()->hasRole('Employee'))
                                                    <button type="button" class="btn btn-danger" wire:click="updateAssetRequestStatus({{ $assetRequest->id }}, 'Canceled')"><i
                                                            class="fas fa-times"></i> Cancel</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End View Asset Request Modal -->

                                <!-- Edit Asset Request Modal -->
                                <!-- Edit Asset Request Modal -->
                                <div class="modal fade" id="editAssetRequestModal{{ $assetRequest->id }}"
                                    tabindex="-1" role="dialog"
                                    aria-labelledby="editAssetRequestModalLabel{{ $assetRequest->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="editAssetRequestModalLabel{{ $assetRequest->id }}">Edit
                                                    Asset Request</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label
                                                                    for="editAssetName{{ $assetRequest->id }}">Asset
                                                                    Name:</label>
                                                                <input type="text" class="form-control"
                                                                    id="editAssetName{{ $assetRequest->id }}"
                                                                    value="{{ $assetRequest->asset->name }}"
                                                                    readonly>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    for="editQuantity{{ $assetRequest->id }}">Quantity:</label>
                                                                <input type="text" class="form-control"
                                                                    id="editQuantity{{ $assetRequest->id }}"
                                                                    value="{{ $assetRequest->quantity }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label
                                                            for="editSpecification{{ $assetRequest->id }}">Specification:</label>
                                                        <textarea type="text" rows="3" class="form-control" id="editSpecification{{ $assetRequest->id }}"
                                                            value="{{ $assetRequest->specification }}">{{ $assetRequest->specification }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label
                                                            for="editPurpose{{ $assetRequest->id }}">Purpose:</label>
                                                        <textarea type="text" rows="3" class="form-control" id="editPurpose{{ $assetRequest->id }}"
                                                            value="{{ $assetRequest->purpose }}">{{ $assetRequest->purpose }}</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- End Edit Asset Request Modal -->
                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>

        </div>
    </div>
</section>

</div>
