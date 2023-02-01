"use strict";
var user = document.getElementById("user");
var user_panel = document.getElementById("user_panel");
var userAddPanel = document.getElementsByClassName("userAdd-panel");
var userEditPanel = document.querySelector(".userEdit-panel");
var userDeleteDialogue = document.getElementsByClassName("userDelete-dialogue");

var catagory = document.getElementById("catagory");
var catagories = document.getElementById("catagories");
var catagoryAddPanel = document.getElementsByClassName("catagoryAdd-panel");
var catagoryEditPanel = document.querySelector(".catagoryEdit-panel");
var catagoryDeleteDialogue = document.getElementsByClassName("catagoryDelete-dialogue");

var post = document.getElementById("post");
var posts = document.getElementById("posts");
var postAddPanel = document.getElementsByClassName("postAdd-panel");
var postEditPanel = document.querySelector(".postEdit-panel");
var postDeleteDialogue = document.getElementsByClassName("postDelete-dialogue");

var addNew = document.getElementsByClassName("addnew");
var editPencil = document.getElementsByClassName("edit-pencil");
var closeX = document.getElementsByClassName("closeX");
var deleteBtn = document.getElementsByClassName("delete-btn");
var delCancel = document.getElementsByClassName("delCancel");
var delOk = document.getElementsByClassName("delOk");


user.onclick = function () {
    user_panel.style.display = "flex";
    catagories.style.display = "none";
    posts.style.display = "none";
    user.style.background = "rgb(216, 213, 213)";
    catagory.style.background = "transparent";
    post.style.background = "transparent";
};
catagory.onclick = function () {
    user_panel.style.display = "none";
    catagories.style.display = "flex";
    posts.style.display = "none";
    user.style.background = "transparent";
    catagory.style.background = "rgb(216, 213, 213)";
    post.style.background = "transparent";
};
post.onclick = function () {
    user_panel.style.display = "none";
    catagories.style.display = "none";
    posts.style.display = "flex";
    user.style.background = "transparent";
    catagory.style.background = "transparent";
    post.style.background = "rgb(216, 213, 213)";
};

// Add Panel Starting...
addNew[0].onclick = function () {
    $('.userAdd-panel').fadeIn();
    userAddPanel[0].style.display = "flex";
};
addNew[1].onclick = function () {
    $('.catagoryAdd-panel').fadeIn();
    catagoryAddPanel[0].style.display = "flex";
};
// addNew[2].onclick = function () {
//     $('.postAdd-panel').fadeIn();
//     postAddPanel[0].style.display = "flex";
// };

// Edit Panel Section...
for (
    let index = 0;
    index < user_panel.getElementsByClassName("edit-pencil").length;
    index++
) {
    user_panel.getElementsByClassName("edit-pencil")[index].onclick =
        function () {
            userEditPanel.style.display = "flex";
        }; // User Edit Panel Display Flex Property
}

for (
    let index = 0;
    index < catagories.getElementsByClassName("edit-pencil").length;
    index++
) {
    catagories.getElementsByClassName("edit-pencil")[index].onclick =
        function () {
            catagoryEditPanel.style.display = "flex";
        }; // Catagory Edit Panel Display Flex Property
}

for (
    let index = 0;
    index < posts.getElementsByClassName("edit-pencil").length;
    index++
) {
    posts.getElementsByClassName("edit-pencil")[index].onclick = function () {
        postEditPanel.style.display = "flex";
    }; // Post Edit Panel Display Flex Property
}

for (
    let index = 0;
    index < user_panel.getElementsByClassName("closeX").length;
    index++
) {
    user_panel.getElementsByClassName("closeX")[index].onclick = function () {
        userEditPanel.style.display = "none";
    }; // User Edit Panel Display none Property..
}

for (
    let index = 0;
    index < catagories.getElementsByClassName("closeX").length;
    index++
) {
    catagories.getElementsByClassName("closeX")[index].onclick = function () {
        catagoryEditPanel.style.display = "none";
    }; // Catagory Edit Panel Display none Property..
}

for (
    let index = 0;
    index < posts.getElementsByClassName("closeX").length;
    index++
) {
    posts.getElementsByClassName("closeX")[index].onclick = function () {
        postEditPanel.style.display = "none";
    }; // Post Edit Panel Display none Property..
} // Edit Panel Closing here..

// Delete Panel Section..
for (
    let index = 0;
    index < user_panel.getElementsByClassName("delete-btn").length;
    index++
) {
    user_panel.getElementsByClassName("delete-btn")[index].onclick = function () {
        userDeleteDialogue[0].style.display = "flex";
    }; // User Delete Dialogue Display "Flex" Property
}
for (
    let index = 0;
    index < user_panel.getElementsByClassName("delCancel").length;
    index++
) {
    user_panel.getElementsByClassName("delCancel")[index].onclick = function () {
        userDeleteDialogue[0].style.display = "none";
    }; // User Delete Dialogue Display "None" Property
}

//Some Extra Content Code..


// Extra Configuration Ends Here

for (
    let index = 0;
    index < catagories.getElementsByClassName("delete-btn").length;
    index++
) {
    catagories.getElementsByClassName("delete-btn")[index].onclick = function () {
        catagoryDeleteDialogue[0].style.display = "flex";
    }; // Catagory Delete Dialogue Display "Flex" Property
}
for (
    let index = 0;
    index < catagories.getElementsByClassName("delCancel").length;
    index++
) {
    catagories.getElementsByClassName("delCancel")[index].onclick = function () {
        catagoryDeleteDialogue[0].style.display = "none";
    }; // Catagory Delete Dialogue Display "None" Property
}
for (
    let index = 0;
    index < posts.getElementsByClassName("delete-btn").length;
    index++
) {
    posts.getElementsByClassName("delete-btn")[index].onclick = function () {
        postDeleteDialogue[0].style.display = "flex";
    }; // Post Delete Dialogue Display "Flex" Property
}
for (
    let index = 0;
    index < posts.getElementsByClassName("delCancel").length;
    index++
) {
    posts.getElementsByClassName("delCancel")[index].onclick = function () {
        postDeleteDialogue[0].style.display = "none";
    }; // Post Delete Dialogue Display "None" Property
} // Delete Panel Closing Here..

for (
    let index = 0;
    index < userAddPanel[0].getElementsByClassName("closeX").length;
    index++
) {
    userAddPanel[0].getElementsByClassName("closeX")[index].onclick =
        function () {
            // userAddPanel[0].style.display = "none";
            $('.userAdd-panel').fadeOut();
        };
}
for (
    let index = 0;
    index < catagoryAddPanel[0].getElementsByClassName("closeX").length;
    index++
) {
    catagoryAddPanel[0].getElementsByClassName("closeX")[index].onclick =
        function () {
            // catagoryAddPanel[0].style.display = "none";
            $('.catagoryAdd-panel').fadeOut();
        };
}
// for (
//     let index = 0;
//     index < postAddPanel[0].getElementsByClassName("closeX").length;
//     index++
// ) {
//     postAddPanel[0].getElementsByClassName("closeX")[index].onclick =
//         function () {
//             // postAddPanel[0].style.display = "none";
//             $('.postAdd-panel').fadeOut();
//         };
// }
// ####################################################################### //
// ****** JavaScript Jquery Enabled Functions Starting From Here.. ******* //
// ####################################################################### //

$(document).ready(function () {
    // User Data Table loads on #userTable Div..
    function userData() {
        $.ajax({
            url: '/admin/_partials/userdata.php',
            type: 'POST',
            success: function (data) {
                $("#userTable").html(data);
            }
        })
    } // Load userData ended.. 
    userData();

    // On click userSubmit Botton data inserting into database..
    $("#userSubmit").on("click", function (e) {
        e.preventDefault();
        if ($('#fname').val() == '') {
            alert('First Name Cannot Be Empty');
        }
        else if ($('#lname').val() == '') {
            alert('Last Name Cannot Be Empty');
        }
        else if ($('#email').val() == '') {
            alert('Email Cannot Be Empty');
        }
        else if ($('#role').val() == '') {
            alert('Please Select a Role.');
        }
        else {
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var email = $('#email').val();
            var role = $('#role').val();
            $.ajax({
                url: "/admin/_partials/userdata-submit.php",
                type: "POST",
                data: { firstname: fname, lastname: lname, email: email, role: role },
                success: function (data) {
                    userData();
                    $('.reset').trigger('reset');
                    // alert("Data Added Successfully.");
                }
            });
        }
    }); // User userSubmit Botton coding Ends Here..

    // User Edit Panel * Update user data *
    // when click on uedit button in userdata.php page update form will appear..
    $(document).on("click", ".uedit", function () {
        $('#userEdit-panel').css("display", "flex");
        $('#userEdit-panel').fadeIn();
        let id = $(this).data("eid");
        $.ajax({
            url: "/admin/_partials/useredit.php",
            type: "POST",
            data: { eid: id },
            success: function (data) {
                $('#userEdit-panel').html(data);
            }
        });
    }); // user form popuped..

    // Edit the user and update when ckick on uedit-submit button
    $(document).on("click", "#uedit-submit", function (e) {
        e.preventDefault();
        let preventHide = null;
        let sl = $('#sl').val();
        let fname = $('#fname').val();
        let lname = $('#lname').val();
        let email = $('#email').val();
        let role = $('#role').val();
        if (role == "") {
            alert("Invalid Job Role");
        }
        else {
            $.ajax({
                url: "/admin/_partials/useredit-form.php",
                type: "POST",
                data: { id: sl, firstname: fname, lastname: lname, e_mail: email, role_id: role },
                success: function (data) {
                    userData();
                    $('#userEdit-panel').hide();
                }
            })
        }
    }); // User Updated..

    // Deleting  User from database..
    $(document).on("click", ".udelete", function () {
        let user = $(this).data("id");
        let element = this;
        if (confirm('Delete This User?')) {
            $.ajax({
                url: "/admin/_partials/deleteuser.php",
                type: "POST",
                data: { uid: user },
                success: function (data) {
                    $(element).closest("tr").fadeOut();
                }
            });
        }
    }); // User Deleted from Database..

    // ################################################################################ //
    // ************************* User Section Completed ******************************* //
    // ################################################################################ //







    // ################################################################################ //
    // ************************* Catagory Section Started ***************************** //
    // ################################################################################ //

    // Catagory Data Table loads on #catagoryTable Div..
    function catagoryData() {
        $.ajax({
            url: '/admin/_partials/catagories.php',
            type: 'POST',
            success: function (data) {
                $("#catagoryTable").html(data);
            }
        })
    }
    catagoryData(); // All catagories loaded to webpage..

    // Insert Catagory Data into Database on click in catagorySubmit Botton..
    $("#catagorySubmit").on("click", function (e) {
        e.preventDefault();
        if ($('#catagory_name').val() == '') {
            alert('Field Cannot Be Empty');
        }
        else {
            var catagory = $('#catagory_name').val();
            $.ajax({
                url: "/admin/_partials/catagories-submit.php",
                type: "POST",
                data: { catagory_id: catagory },
                success: function (data) {
                    catagoryData();
                    $('.reset').trigger('reset');
                    // alert("Data Added Successfully.");
                }
            });
        }
    }); // Catagory inserted the todatabase successfully..


    // Catagory Edit Panel * Update Catagory data *
    // when click on cedit button in catagories.php page update form will appear..
    $(document).on("click", ".cedit", function () {
        $('#catagoryEdit-panel').css("display", "flex");
        let id = $(this).data("c_eid");
        $.ajax({
            url: "/admin/_partials/catagoriesedit.php",
            type: "POST",
            data: { c_eid: id },
            success: function (data) {
                $('#catagoryEdit-panel').html(data);
            }
        });
    }); // Catagory form popuped..

    // Edit the user and update when ckick on uedit-submit button
    $(document).on("click", "#cedit-submit", function (e) {
        e.preventDefault();
        let cid = $('#c_id').val();
        let catagory = $('#c_name').val();
        $.ajax({
            url: "/admin/_partials/catagoryedit-form.php",
            type: "POST",
            data: { c_id: cid, catagory: catagory },
            success: function (data) {
                catagoryData();
                $('#catagoryEdit-panel').hide();
            }
        })
    }); // Catagory Updated..

    // Delete Catagory
    $(document).on("click", ".cdelete", function () {
        let catagory = $(this).data("c_did");
        let element = this;
        if (confirm('Delete This Catagory?')) {
            $.ajax({
                url: "/admin/_partials/deletecatagory.php",
                type: "POST",
                data: { cid: catagory },
                success: function (data) {
                    $(element).closest("tr").fadeOut();
                }
            });
        }
    });

    // ################################################################################ //
    // *********************** Catagory Section Completed ***************************** //
    // ################################################################################ //



    // ################################################################################ //
    // ************************* Post Section Completed ******************************* //
    // ################################################################################ //
    // Post Data Table loads on #catagoryTable Div..
    function postData() {
        $.ajax({
            url: '/admin/_partials/posts.php',
            type: 'POST',
            success: function (data) {
                $("#postTable").html(data);
            }
        })
    }
    postData(); // All Posts loaded to webpage..

});
