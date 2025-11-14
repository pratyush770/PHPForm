<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
    <script>
        function validateForm(event) {
            event.preventDefault(); // stop normal submit

            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();

            if (name === "") {
                alert("Name is required");
                return false;
            }

            if (email === "") {
                alert("Email is required");
                return false;
            }

            // Simple email check
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Enter a valid email");
                return false;
            }

            // If valid -> show alert
            alert("Submitted!");

            // Clear form fields
            document.getElementById("myForm").reset();
            return false;
        }
    </script>
</head>
<body>

<h2>PHP Form</h2>

<form id="myForm" method="post" action="" onsubmit="validateForm(event)">
    <label>Name:</label><br>
    <input type="text" name="name" id="name" size=40><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" id="email" size=40><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
