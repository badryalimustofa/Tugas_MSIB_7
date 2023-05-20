<form action="proses_tambah.php" method="post" onsubmit="return validateForm()">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" id="first_name">
                <span id="error_first_name" class="error"></span>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name" id="last_name">
                <span id="error_last_name" class="error"></span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="email">
                <span id="error_email" class="error"></span>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" id="phone">
                <span id="error_phone" class="error"></span>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" id="address">
                <span id="error_address" class="error"></span>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Tambah"></td>
        </tr>
    </table>
</form>

<script>
    function validateForm() {
        var firstName = document.getElementById("first_name").value;
        var lastName = document.getElementById("last_name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var address = document.getElementById("address").value;

        var isValid = true;

        if (firstName === "") {
            isValid = false;
            document.getElementById("first_name").style.border = "1px solid red";
            document.getElementById("error_first_name").textContent = "First name is required.";
        } else {
            document.getElementById("error_first_name").textContent = "";
        }

        if (lastName === "") {
            isValid = false;
            document.getElementById("last_name").style.border = "1px solid red";
            document.getElementById("error_last_name").textContent = "Last name is required.";
        } else {
            document.getElementById("error_last_name").textContent = "";
        }

        if (email === "") {
            isValid = false;
            document.getElementById("email").style.border = "1px solid red";
            document.getElementById("error_email").textContent = "Email is required.";
        } else {
            document.getElementById("error_email").textContent = "";
        }

        if (phone === "") {
            isValid = false;
            document.getElementById("phone").style.border = "1px solid red";
            document.getElementById("error_phone").textContent = "Phone is required.";
        } else {
            document.getElementById("error_phone").textContent = "";
        }

        if (address === "") {
            isValid = false;
            document.getElementById("address").style.border = "1px solid red";
            document.getElementById("error_address").textContent = "Address is required.";
        } else {
            document.getElementById("error_addresst").textContent = "";
        }

        return isValid;
    }
</script>