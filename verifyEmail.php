<?php
$email = $_GET['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Tandai email sebagai terverifikasi di database atau storage lainnya
    // Implementasikan sesuai kebutuhan

    // Simpan status verifikasi di localStorage (opsional)
    echo "<script>
        localStorage.setItem('emailVerified', 'true');
        alert('Email verified successfully!');
        window.close();
    </script>";
} else {
    echo 'Invalid email verification link.';
}
?>
