<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js" 
                integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
                crossorigin="anonymous"></script>        
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>

        <form id="myForm" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama"><br>
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email"><br>
            <span id="email-error" style="color: red;"></span><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>
            <span id="password-error" style="color: red;"></span><br>

            <input type="submit" value="Submit">
        </form>

        <div id="result" style="margin-top: 20px; color: green;"></div>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    event.preventDefault(); // Mencegah reload halaman

                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    // Reset pesan error
                    $("#nama-error").text("");
                    $("#email-error").text("");
                    $("#password-error").text("");
                    $("#result").text("");

                    // Validasi nama
                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    }

                    // Validasi email
                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
                        $("#email-error").text("Format email tidak valid.");
                        valid = false;
                    }

                    // Validasi password
                    if (password === "") {
                        $("#password-error").text("Password harus diisi.");
                        valid = false;
                    } else if (password.length < 8) {
                        $("#password-error").text("Password minimal 8 karakter.");
                        valid = false;
                    }

                    if (valid) {
                        // Mengirim data dengan AJAX
                        $.ajax({
                            url: "proses_validasi.php", // Endpoint PHP
                            type: "POST",
                            data: { nama: nama, email: email, password: password },
                            success: function(response) {
                                $("#result").html(response); // Menampilkan hasil dari server
                            },
                            error: function(xhr, status, error) {
                                $("#result").html("Terjadi kesalahan: " + error);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
