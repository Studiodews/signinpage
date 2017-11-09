    <!-- Modal - Update User details for Guest -->
    <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="update_first_name">First Name</label>
                        <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                        <input type="hidden" class="update_user_type_id" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_last_name">Last Name</label>
                        <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Nickname</label>
                        <input type="text" id="update_nick_name" placeholder="text" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Contact No</label>
                        <input type="text" id="update_contact_no" placeholder="text" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Email Address</label>
                        <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Who Invited You</label>
                        <input type="text" id="update_who_invited" placeholder="text" class="form-control"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="updateUserDetails()" >Save Changes</button>
                    <input type="hidden" id="hidden_user_id">
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal -->

    <!-- Modal - Update User details for Associate -->
    <div class="modal fade" id="update_user_associate_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="update_first_name">PFA Agent Code</label>
                        <input type="text" id="update_assoc_pfa_agent_code" placeholder="First Name" class="form-control"/>
                        <input type="hidden" class="update_user_type_id" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_first_name">First Name</label>
                        <input type="text" id="update_assoc_first_name" placeholder="First Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_last_name">Last Name</label>
                        <input type="text" id="update_assoc_last_name" placeholder="Last Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_first_name">Nick Name</label>
                        <input type="text" id="update_assoc_nick_name" placeholder="Nick Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_first_name">Contact No</label>
                        <input type="text" id="update_assoc_contact_no" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Email Address</label>
                        <input type="text" id="update_assoc_email" placeholder="Email Address" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Who is your Upline QFD?</label>
                        <input type="text" id="update_assoc_who_upline_qfd" placeholder="Who is your Upline QFD?" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Who is your Direct Upline?</label>
                        <input type="text" id="update_assoc_who_direct_upline" placeholder="Who is your Direct Upline?" class="form-control"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="updateUserDetails()" >Save Changes</button>
                    <input type="hidden" id="hidden_user_id_assoc">
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal -->