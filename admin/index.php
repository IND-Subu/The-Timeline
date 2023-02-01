<?php
require('header.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../js/jquery.min.js"></script>
    <!-- <script src="../components/ajax.jquery.js"></script> -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>Admin Panel</title>
  </head>

  <body>
    <div id="container">
      <div class="tabs">
        <button id="user">
          <img src="../src/add-user.svg" alt="Users" />Users
        </button>
        <button id="catagory">
          <img src="../src/catagory.svg" alt="Users" />Catagory
        </button>
        <button id="post">
          <img src="../src/add-post.svg" alt="Users" />Post
        </button>
      </div>

      <div class="content-box">
        <!-- User Panel -->
        <div id="user_panel">
          <div class="addnew">
            <h3>
              <p>
                <img
                  src="../src/edit_pencil.png"
                  height="20"
                  width="20"
                  alt=""
                />Add User
              </p>
            </h3>
          </div>
          <!-- User Edit Panel -->
          <div id="userEdit-panel"></div>
          <!-- User's Data Table Load Here -->
          <div id="userTable"></div>

          <div class="userAdd-panel">
            <p>&nbsp;New User&nbsp;</p>
            <form class="reset">
              <input
                type="text"
                name="fname"
                placeholder="First Name"
                id="fname"
              />
              <input
                type="text"
                name="lname"
                placeholder="Last Name"
                id="lname"
              />
              <input type="text" name="email" placeholder="Email" id="email" />
              <select name="role" id="role">
                <option value="">Select Role</option>
                <option value="ADMIN">Admin</option>
                <option value="USER">User</option>
              </select>
            </form>
            <div class="axl-btn">
              <div class="delCancel closeX">Close</div>
              <div class="delOk" id="userSubmit">Submit</div>
              <!-- <div class="delOk" id="userSubmit">Submit</div> -->
            </div>
            <!-- <input type="submit" class="delOk" > -->
          </div>
        </div>
        <!-- End of User Panel-->

        <!-- Catagory Panel -->
        <div id="catagories">
          <div class="addnew">
            <h3>
              <p>
                <img
                  src="../src/edit_pencil.png"
                  height="20"
                  width="20"
                  alt=""
                />Add Catagory
              </p>
            </h3>
          </div>

          <div id="catagoryEdit-panel"></div>
          <!-- Catagory Data Table Load Here -->
          <div id="catagoryTable"></div>

          <div class="catagoryAdd-panel">
            <p>&nbsp;New Catagory&nbsp;</p>
            <form class="reset">
              <input
                type="text"
                name="catagory"
                placeholder="Catagory"
                id="catagory_name"
              />
              <input
                type="text"
                name="ctype"
                placeholder="Type"
                id="ctype"
                style="display: none"
              />
            </form>
            <div class="axl-btn">
              <div class="delCancel closeX">Close</div>
              <div class="delOk" id="catagorySubmit">Submit</div>
            </div>
          </div>
        </div>
        <!-- End of Catagory Panel-->

        <!-- Post Panel -->
        <div id="posts">
          <div class="addnew">
            <h3>
              <a href="add_new_post.php"
                ><img
                  src="../src/edit_pencil.png"
                  height="20"
                  width="20"
                  alt=""
                />Add Article</a
              >
            </h3>
          </div>

          <div id="postTable"></div>
        </div>
        <!-- End of Post Panel-->
      </div>
    </div>

    <!-- javascript Code For Driving into Document -->
    <script src="js/main.js"></script>
  </body>
</html>
