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
                        <h5 class="card-title">Asset Assignment List</h5>

                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Employee Name</th>
                                    <th scope="col">Asset Name</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Assignment Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assetAssignments as $assetAssignment)
                                    <tr>
                                        <td>{{ $assetAssignment->id }}</td>
                                        <td>{{ $assetAssignment->user->name }}</td>
                                        <td>{{ $assetAssignment->asset->name }}</td>
                                        <td>{{ $assetAssignment->start_date }}</td>
                                        <td>{{ $assetAssignment->end_date }}</td>
                                        <td>{{ $assetAssignment->assignment_date }}</td>
                                        <td>
                                            <!-- Add your actions buttons here -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
