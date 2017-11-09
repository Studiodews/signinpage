function getUserDetails(id) {
    // Add User ID to the hidden field for future usage
    $("#hidden_user_id").val(id);
    $("#hidden_user_id_assoc").val(id);
    $.post("../inc/readUserInfo.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Passing existing values to the modal popup fields
            if (user.user_type_id == "2") {
                $(".update_user_type_id").val(user.user_type_id);
                $("#update_assoc_pfa_agent_code").val(user.pfa_agent_code);
                $("#update_assoc_first_name").val(user.firstname);
                $("#update_assoc_last_name").val(user.lastname);
                $("#update_assoc_nick_name").val(user.nickname);
                $("#update_assoc_contact_no").val(user.contact_no);
                $("#update_assoc_email").val(user.email);
                $("#update_assoc_who_upline_qfd").val(user.who_upline_qfd);
                $("#update_assoc_who_direct_upline").val(user.who_direct_upline);
                $("#update_user_associate_modal").modal("show");                
            } else if (user.user_type_id == "1") {
                $(".update_user_type_id").val(user.user_type_id);
                $("#update_first_name").val(user.firstname);
                $("#update_last_name").val(user.lastname);
                $("#update_nick_name").val(user.nickname);
                $("#update_contact_no").val(user.contact_no);
                $("#update_email").val(user.email);           
                $("#update_who_invited").val(user.who_invited);           
                $("#update_user_modal").modal("show");     
            }
        }
    );
}

function updateUserDetails() {
    // get hidden field value
    var id = $("#hidden_user_id").val();
    var id1 = $("#hidden_user_id_assoc").val();

    // get values
    var user_type_id = $(".update_user_type_id").val();
    if (user_type_id == "1") {
        var first_name = $("#update_first_name").val();
        var last_name = $("#update_last_name").val();
        var nick_name = $("#update_nick_name").val();
        var contact_no = $("#update_contact_no").val();
        var email = $("#update_email").val();
        var who_invited = $("#update_who_invited").val();     

        // Update the details by requesting to the server using ajax
        
        $.post("../inc/updateUserInfo.php", {            
                id: id,
                first_name: first_name,
                last_name: last_name,
                nick_name: nick_name,
                contact_no: contact_no,
                email: email,
                who_invited: who_invited
            },
            function (data, status) {
                // hide modal popup
                $("#update_user_modal").modal("hide");
                window.location = window.location;
            }
        );

    } else if (user_type_id == "2") {
        var pfa_agent_code = $("#update_assoc_pfa_agent_code").val();
        var first_name = $("#update_assoc_first_name").val();
        var last_name = $("#update_assoc_last_name").val();
        var nick_name = $("#update_assoc_nick_name").val();
        var contact_no = $("#update_assoc_contact_no").val();
        var email = $("#update_assoc_email").val();
        var who_upline_qfd = $("#update_assoc_who_upline_qfd").val();
        var who_direct_upline = $("#update_assoc_who_direct_upline").val();    

        // Update the details by requesting to the server using ajax
        
        $.post("../inc/updateUserInfoAssociate.php", {            
                id1: id1,
                pfa_agent_code: pfa_agent_code,
                first_name: first_name,
                last_name: last_name,
                nick_name: nick_name,
                contact_no: contact_no,
                email: email,
                who_upline_qfd : who_upline_qfd,
                who_direct_upline : who_direct_upline
            },
            function (data, status) {
                // hide modal popup
                $("#update_user_associate_modal").modal("hide");
                window.location = window.location;
            }
        );            
    }
}

function deleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("../inc/deleteUser.php", {
                id: id
            },
            function (data, status) {
                //readRecords();
                window.location = window.location;
            }
        );
    }
}

function readRecords() {
    $.get("templates/user-info.php", {}, function (data, status) {
        $("#userRecord").html(data);        
    });
}