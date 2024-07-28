<?php
session_start();
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: login.php");
    die();
}

include 'config.php';

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    $userName = $row['name'];
    $userEmail = $row['email'];
    $_SESSION['SESSION_NAME'] = $userName;
    $_SESSION['SESSION_EMAIL'] = $userEmail;
    echo "<script>sessionStorage.setItem('isLoggedIn', 'true');</script>";
} else {
    $userName = "User not found.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="/css/welcome.css">
</head>
<body>
    <div class="container">
        <div class="welcome-box">
            <img src="/img/logo-h.png" alt="Logo" class="logo">
            <h1>Welcome, <?php echo $userName; ?></h1>
            <h1>Email Kamu : <?php echo $userEmail; ?></h1>
            <div class="order-history">
                <h2>Riwayat Pesanan</h2>
                <div id="orderList"></div>
            </div>
            <a href="logout.php" class="logout-button">Logout</a>
            <a href="index.php" class="back-button">Back to Home</a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const orderList = document.getElementById('orderList');
            const orderHistory = JSON.parse(sessionStorage.getItem('orderHistory')) || [];

            if (orderHistory.length === 0) {
                orderList.innerHTML = '<p>Tidak ada riwayat pesanan.</p>';
                return;
            }

            orderHistory.forEach(order => {
                const orderItem = document.createElement('div');
                orderItem.classList.add('order-item');
                orderItem.innerHTML = `
                    <p><strong>ID Pesanan:</strong> ${order.id}</p>
                    <p><strong>Tanggal:</strong> ${order.date}</p>
                    <p><strong>Total:</strong> ${rupiah(order.total)}</p>
                    <p><strong>Produk:</strong></p>
                    <ul>
                        ${order.items.map(item => `<li>${item.name} - ${rupiah(item.price)}</li>`).join('')}
                    </ul>
                    <p><strong>Link Download:</strong> <a href="https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link" target="_blank">Download</a></p>
                `;
                orderList.appendChild(orderItem);
            });
        });

        const rupiah = (number) => {
            return new Intl.NumberFormat('id-ID',{
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
            }).format(number);
        };
    </script>
</body>
</html>


