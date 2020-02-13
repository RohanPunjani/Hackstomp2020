<div class="container form-form">
    <h3 class="form-heading" style="color: white">Personal Info :
        <span><i class="fas fa-angle-up right arrow" for=".personal_info"></i></span>
    </h3>

    <form action=" update_personal_info.php" method="POST" class="personal_info">
        <div class="row">
            <div class="col l1 s0"></div>
            <div class="col s12 l5">
                <div class="input-field col s12 l4">
                    <input type="text" id="first_name" name="fname" class="" value="<?php echo $row['s_firstName']; ?>">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s12 l4">
                    <input type="text" id="middle_name" name="mname" class=""
                        value="<?php echo $row['s_middleName']; ?>">
                    <label for="middle_name">Middle Name</label>
                </div>
                <div class="input-field col s12 l4">
                    <input type="text" id="last_name" name="lname" class="" value="<?php echo $row['s_lastName']; ?>">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="input-field col s12">
                    <input type="email" id="email" name="email" class="validate" value="<?php echo $row['s_email']; ?>">
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" id="dob" name="dob" value="<?php echo $row['s_dob']; ?>" class="datepicker"
                        required>
                    <label for="dob">Date of Birth</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" id="doj" name="doj" value="<?php echo $row['s_doj']; ?>" class="datepicker"
                        required>
                    <label for="doj">Date Of Joining</label>
                </div>
            </div>
            <div class="col s12 l5">
                <div class="input-field col s12">
                    <input type="number" name="contact" value="<?php echo $row['s_contact']; ?>" min="999999999"
                        max="10000000000" id="phone_number" class="validate">
                    <label for="phone_number">Contact Number</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="stream" value="<?php echo $row['s_stream']; ?>" id="stream"
                        class="validate">
                    <label for="stream" data-error="wrong" data-success="right">Stream</label>
                </div>
                <p>
                    Gender :
                    <input id="male_gender" value='M' name="gender" type="radio" class="with-gap" checked />
                    <label for="male_gender">Male </label>
                    <input id="female_gender" value='F' name="gender" type="radio" class="with-gap" />
                    <label for="female_gender">Female</label>
                </p>
                <button class="waves-effect waves-light btn col s12 l4 #eceff1 blue-grey lighten-5 black-text"
                    type="submit">
                    <i class="material-icons left">
                        cloud
                    </i>
                    Submit
                </button>
            </div>
            <div class="col s0 l1"></div>
        </div>
    </form>
</div>
