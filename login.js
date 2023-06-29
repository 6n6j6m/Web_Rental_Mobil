function login() {
    // Mendapatkan nilai input username dan password
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Validasi username dan password (contoh sederhana)
    if (username === "admin" && password === "admin123") {
        alert("Login berhasil!");
        // Lakukan tindakan yang diinginkan setelah login berhasil, misalnya arahkan ke halaman lain
    } else {
        alert("Login gagal. Silakan cek username dan password Anda.");
    }
}
