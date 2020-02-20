<div id="modalPage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content extendWidth">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="modalHeader">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" id="modalBody">
                <form id="update_user_form" action="{{ route('update_user') }}" method="POST">
                    @csrf
                    <input class="form-control" type="hidden" value="" name="id">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="" name="email" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">About</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="" name="about">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="date" value="" name="dob">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Is Active</label>
                        <div class="col-sm-9">
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="0">Non Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <select name="gender" id="gender" class="form-control">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <textarea name="address" class="form-control" id="address" cols="10" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Website</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="" name="website">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="" name="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Join Date</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="" name="date_joined" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Ref Code</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="" name="ref_code" readonly>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnSave">Save</button>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
