<!DOCTYPE html>
<html>
<head>
    <title>Create Data</title>
    <style>
        .required-field {
            background-color: #ffcccc;
        }
        .warning-message {
            color: red;
        }
    </style>
</head>
<body>
    <form id="createForm" action="insert_data.php" method="POST">
        <div>
            <label for="first_name">first_name:</label>
            <input type="text" id="first_name" name="first_name">
            <span class="warning-message" id="first_nameWarning" style="display: none;">First_name harus diisi!</span>
        </div>
        <div>
            <label for="last_name">last_name:</label>
            <input type="text" id="last_name" name="last_name">
            <span class="warning-message" id="last_nameWarning" style="display: none;">last_name harus diisi!</span>
        </div>
        <div>
            <label for="email">email:</label>
            <input type="text" id="email" name="email">
            <span class="warning-message" id="emailWarning" style="display: none;">email harus diisi!</span>
        </div>
        <div>
            <label for="phone">phone:</label>
            <input type="text" id="phone" name="phone">
            <span class="warning-message" id="phoneWarning" style="display: none;">phone harus diisi!</span>
        </div>
        <div>
            <label for="address">address:</label>
            <input type="text" id="address" name="address">
            <span class="warning-message" id="addressWarning" style="display: none;">address harus diisi!</span>
        </div>
        
        
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submitBtn').click(function(event) {
                var valid = true;

                if ($('#first_name').val().trim() === '') {
                    valid = false;
                    $('#first_name').addClass('required-field');
                    $('#first_nameWarning').show();
                } else {
                    $('#first_name').removeClass('required-field');
                    $('#first_nameWarning').hide();
                }

                if ($('#last_name').val().trim() === '') {
                    valid = false;
                    $('#last_name').addClass('required-field');
                    $('#last_nameWarning').show();
                } else {
                    $('#last_name').removeClass('required-field');
                    $('#last_nameWarning').hide();
                }

                if ($('#email').val().trim() === '') {
                    valid = false;
                    $('#email').addClass('required-field');
                    $('#emailWarning').show();
                } else {
                    $('#email').removeClass('required-field');
                    $('#emailWarning').hide();
                }

                if ($('#phone').val().trim() === '') {
                    valid = false;
                    $('#phone').addClass('required-field');
                    $('#phoneWarning').show();
                } else {
                    $('#phone').removeClass('required-field');
                    $('#phoneWarning').hide();
                }

                if ($('#address').val().trim() === '') {
                    valid = false;
                    $('#address').addClass('required-field');
                    $('#addressWarning').show();
                } else {
                    $('#address').removeClass('required-field');
                    $('#addressWarning').hide();
                }

                if (!valid) {
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
