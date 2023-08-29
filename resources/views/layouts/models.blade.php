@php
    use Spatie\Permission\Models\Role;
@endphp

<!-- Confirmation Modal -->

<div class="modal fade" id="confirmDeleteModal{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="confirmDeleteModal{{ $user->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModal{{ $user->id }}Label">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this user?</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes Delete this User</button>
                </form>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

            </div>
        </div>
    </div>
</div>
<!-- End Confirmation Modal -->

<!-- View User details Modal -->

<div class="modal fade" id="viewUserModal{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="viewUserModal{{ $user->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewUserModal{{ $user->id }}Label">User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>ID: {{ $user->id }}</p>
                <p>Full Name: {{ $user->name }}</p>
                <p>Username: {{ $user->username }}</p>
                <p>Position: {{ $user->position }}</p>
                <p>Department: {{ $user->department->department_name }}</p>
                <!-- Add other user details here -->
                <p>Email: {{ $user->email }}</p>

                @foreach (Role::first()->get() as $role)
                    <p>Role: {{ $role->name }}</p>
                @endforeach
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editUserModal{{ $user->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModal{{ $user->id }}Label">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- User form for editing details -->
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Add input fields for editing user details -->
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $user->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="{{ $user->username }}" required>
                    </div>

                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position"
                            value="{{ $user->position }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $user->email }}" required>
                    </div>

                    <div class="form-group">
                        <label for="department_id">Department</label>
                        <select class="form-control" id="department_id" name="department_id" required>
                            <!-- Add options for department selection -->
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}"
                                    {{ $user->department_id == $department->id ? 'selected' : '' }}>
                                    {{ $department->department_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="roles">Role</label>
                        <select class="form-control" id="roles" name="roles" required>
                            <option value="" disabled selected>Select a role</option>
                            <!-- Add options for role selection -->
                            @foreach (Role::all() as $role)
                                <option value="{{ $role->name }}"
                                    {{ $user->roles->contains($role) ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <!-- Add more input fields for other user details -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Edit User Modal -->
