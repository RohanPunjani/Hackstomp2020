<div class="container additional-form">
    <h3 class="form-heading">Additional Info
        <span><i class="fas fa-angle-up right arrow" for=".additional_info"></i></span>
    </h3>

    <form action="insert_additional_info.php" method="POST" class="additional_info">
        <div class="row">
            <div class="col l1 s0"></div>
            <div class="col s12 l5">
                <div class="input-field col s12 l12">
                    <input type="text" id="process" name="admission_process"
                        value="<?php echo $row['s_addmission_process']; ?>">
                    <label for="process">Addmission Process</label>
                </div>
                <div class="input-field col s12 l12">
                    <input type="text" id="category" name="category" value="<?php echo $row['s_category']; ?>">
                    <label for="category">Category</label>
                </div>
                <p>Martial Status</p>
                <input id="Married" name="martial_status" type="radio" value="M" checked />
                <label for="Married">Married</label>
                <input id="Unmarried" name="martial_status" value="U" type="radio" />
                <label for="Unmarried">Unmarried</label>
                <div class="input-field col s12">
                    <input type="text" id="blood_group" name="blood_group" value="<?php echo $row['s_blood_group']; ?>">
                    <label for="blood_group">Blood Group</label>
                </div>
                <div class="input-field col s12">
                    <input type="number" name="annual_earning" value="<?php echo $row['s_annual_earning']; ?>"
                        id="phone_number" class="validate">
                    <label for="phone_number">Annual Earning</label>
                </div>
            </div>
            <div class="col s12 l5">
                <div class="input-field col s12">
                    <input type="number" name="aadhar_no" value="<?php echo $row['s_aadhar_no']; ?>" id="aadhar_no"
                        class="validate">
                    <label for="aadhar_no">Aadhar Number</label>
                </div>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Aadhar Card</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="aadhar_card" type="text">
                    </div>
                </div>
            </div>
            <div class="col s12 l5">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Domicile</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="aadhar_card" type="text">
                    </div>
                </div>
            </div>
            <div class="col s12 l5">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Pan Card</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="aadhar_card" type="text">
                    </div>
                </div>
            </div>
            <div class="col s12 l5">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Income Certificate</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="aadhar_card" type="text">
                    </div>
                </div>
            </div>
            <div class="col s12 l5">

                <button class="waves-effect waves-light btn col s12 l4" type="submit">
                    Update
                </button>
            </div>
            <div class="col s0 l1"></div>
        </div>
        <div class="row">
            <div class="col l6 s6 center">
            </div>
        </div>
    </form>
</div>
