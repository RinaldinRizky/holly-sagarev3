document.addEventListener('alpine:init', () => {
    Alpine.store('cart', {
        items: [],
        total: 0,
        quantity: 0,
        add(newItem) {
            const existingItem = this.items.find(item => item.id === newItem.id);
            if (existingItem) {
                alert('Produk ini sudah ada di keranjang!');
                return;
            }
            this.items.push(newItem);
            this.quantity++;
            this.total += newItem.price;
            sessionStorage.setItem('cart', JSON.stringify(this));
            console.log(this.total);
        },
        remove(itemToRemove) {
            const itemIndex = this.items.findIndex(item => item.id === itemToRemove.id);
            if (itemIndex > -1) {
                this.total -= this.items[itemIndex].price;
                this.items.splice(itemIndex, 1);
                this.quantity--;
                sessionStorage.setItem('cart', JSON.stringify(this));
                console.log(this.total);
            }
        }
    });
    Alpine.data('products', () => ({
        items: [
            { id: 1, name: 'Summer Adventure Design', img: 'summer.png', price: 400000},
            { id: 2, name: 'Aura Glow Design', img: 'auraglow.png', price: 350000},
            { id: 3, name: 'Women Grunge Design', img: 'womengrunge.png', price: 200000},
            { id: 4, name: 'Wild Bunch Design', img: 'wildbunch.png', price: 600000},
            { id: 5, name: 'Women Can Predict Design', img: 'wcp.png', price: 100000},
            { id: 6, name: 'Watching Design', img: 'watching.png', price: 250000},
            { id: 7, name: 'Hot-Line Vision Design', img: 'vision.png', price: 460000},
            { id: 8, name: 'Up Side Design', img: 'upside.png', price: 270000},
            { id: 9, name: 'Teddy Angel Design', img: 'teddy.png', price: 260000},
            { id: 10, name: 'Sacrifice Design', img: 'sacrifice.png', price: 700000},
            { id: 11, name: 'Retro Child Design', img: 'retro.png', price: 165000},
            { id: 12, name: 'Pride Risk Future Design', img: 'pride.png', price: 110000},
            { id: 13, name: 'Maze Runner Design', img: 'mazerunner.png', price: 320000},
            { id: 14, name: 'Kiss Me Design', img: 'kissme.png', price: 220000},
            { id: 15, name: 'Kinder World Design', img: 'kinder-world.png', price: 280000},
            { id: 16, name: 'Killing Love Design', img: 'killing.png', price: 330000},
            { id: 17, name: 'Killer Design', img: 'killer.png', price: 360000},
            { id: 18, name: 'Keep Smiling Design', img: 'keepsmiling.png', price: 100000},
            { id: 19, name: 'Jump Higher Design', img: 'jumphigher.png', price: 150000},
            { id: 20, name: 'I Love Pizza Design', img: 'ilovepizza.png', price: 230000},
            { id: 21, name: 'Ice World Club Design', img: 'iceworldclub.png', price: 350000},
            { id: 22, name: 'Holly Store Design', img: 'hollystore.png', price: 370000},
            { id: 23, name: 'Holly Menu Design', img: 'hollymenu.png', price: 340000},
            { id: 24, name: 'H-Ice Design', img: 'h-ice.png', price: 300000},
            { id: 25, name: 'Grow With Passion Design', img: 'grow.png', price: 310000},
            { id: 26, name: 'A Flower Secret Design', img: 'flower.png', price: 320000},
            { id: 27, name: 'Forgive Me God Design', img: 'forgive.png', price: 280000},
            { id: 28, name: 'Confused Design', img: 'confused.png', price: 345000},
            { id: 29, name: 'Chaijo Design', img: 'chaijo.png', price: 300000},
            { id: 30, name: 'Her Smile Design', img: 'hersmile.png', price: 100000},
            { id: 31, name: 'Dating Design', img: 'dating.png', price: 360000},
            { id: 32, name: 'Dream Design', img: 'dreamfix.png', price: 370000},
        ],
        selectProduct(id) {
            console.log(`Selected product ID: ${id}`);
            sessionStorage.setItem('selectedProductID',  id.toString());;
            console.log(`SessionStorage setelah penyimpanan:`, sessionStorage.getItem('selectedProductID'));
        },
        checkLoginAndAddToCart(item) {
            // Lakukan pengecekan login
            if (!sessionStorage.getItem('isLoggedIn')) {
                alert('Anda harus login terlebih dahulu.');
                window.location.href = 'login.php';
                return;
            }

            // Jika sudah login, tambahkan item ke keranjang
            this.selectProduct(item.id);
            Alpine.store('cart').add(item);
        },
        goToProductPage(id) {
            const urlMap = {
                1: 'summer-product.html',
                2: 'aura-product.html',
                3: 'womengrunge-product.html',
                4: 'wildbunch-product.html',
                5: 'womenpredict-product.html',
                6: 'watching-product.html',
                7: 'visionhotline-product.html',
                8: 'upside-product.html',
                9: 'teddy-product.html',
                10: 'sacrifice-product.html',
                11: 'retrochild-product.html',
                12: 'pride-product.html',
                13: 'maze-product.html',
                14: 'kissme-product.html',
                15: 'kinder-product.html',
                16: 'killinglove-product.html',
                17: 'killer-product.html',
                18: 'keepsmile-product.html',
                19: 'jumphigher-product.html',
                20: 'ilovepizza-product.html',
                21: 'iceworld-product.html',
                22: 'hollystore-product.html',
                23: 'hollymenu-product.html',
                24: 'h-ice-product.html',
                25: 'growpassion-product.html',
                26: 'secretflower-product.html',
                27: 'forgivegod-product.html',
                28: 'confused-product.html',
                29: 'chaijo.html',
                30: 'hersmile-product.html',
                31: 'dating-product.html',
                32: 'dream-product.html'
            };

            if (urlMap[id]) {
                window.location.href = `${urlMap[id]}?id=${id}`;
            } else {
                console.error('ID produk tidak ditemukan');
            }
        }
    }));
});

// Form Validation
const checkoutButton = document.querySelector('.button-one');
checkoutButton.disabled = true;

const form = document.querySelector('#checkoutForm');

form.addEventListener('input', function() {
    let allFilled = true;

    for (let i = 0; i < form.elements.length; i++) {
        if (form.elements[i].type !== 'button' && form.elements[i].type !== 'submit' && !form.elements[i].readOnly && form.elements[i].type !== 'hidden') {
            if (form.elements[i].value.trim() === '') {
                allFilled = false;
                break;
            }
        }
    }

    if (allFilled) {
        checkoutButton.disabled = false;
        checkoutButton.classList.remove('disabled');
    } else {
        checkoutButton.disabled = true;
        checkoutButton.classList.add('disabled');
    }
});

// Kirim Data ketika tombol checkout di klik
checkoutButton.addEventListener('click', async function(e){
    e.preventDefault();
    const formData = new FormData(form);
    const data = new URLSearchParams(formData);
    const objData = Object.fromEntries(data);
    const message = formatMessage(objData);
    // window.open('http://wa.me/6285161181837?text=' + encodeURIComponent(message));

    const order = {
        id: Date.now(),
        items: Alpine.store('cart').items,
        total: Alpine.store('cart').total,
        date: new Date().toLocaleString()
    };

    // Ambil riwayat pesanan yang ada dari sessionStorage
    const orderHistory = JSON.parse(sessionStorage.getItem('orderHistory')) || [];

    // Tambahkan pesanan baru ke riwayat pesanan
    orderHistory.push(order);

    // Simpan kembali ke sessionStorage
    sessionStorage.setItem('orderHistory', JSON.stringify(orderHistory));

    try {
        const response = await fetch('php/placeOrder.php', {
            method: 'POST',
            body: data,
        });
        const token = await response.text();
        // console.log(token);
        window.snap.pay(token, {
            onSuccess: function(result) {
            let productID = sessionStorage.getItem('selectedProductID');
            if (productID) {
                console.log("ID produk yang dikirim:", productID);
                window.location.href = `redirect.php?product_id=${productID}`;
            } else {
                console.error("ID produk tidak ditemukan dalam sessionStorage");
                // Tampilkan pesan error atau arahkan ke halaman error
                alert("Terjadi kesalahan. Silakan coba lagi.");
            }
            }
        });
    } catch (err) {
        console.log(err.message);
    }


});

// getGoogleDriveLink(productID); {
//     const productDriveLinks = {
//         1: "https://drive.google.com/drive/folders/1zVcnn17eEY3ZRa451L4A0bZJw535ZLb0?usp=drive_link",
//         2: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         3: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         4: "https://drive.google.com/drive/folders/1qmprfU-AmgQzp0aKh0T6JiqWIQHCoKn8?usp=sharing",
//         5: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         6: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         7: "https://drive.google.com/drive/folders/1RQcSOMmdgN6Ne_p8XZ_M1E_7nuyb9B8M?usp=sharing",
//         8: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         9: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         10: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         11: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         12: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         13: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         14: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         15: "https://drive.google.com/drive/folders/1jDfEG1uUcPCdgk9QsVtSQEjYGchowK4p?usp=drive_link",
//         31: "https://drive.google.com/drive/folders/1RXobWMQ3wevcn5BU8XcZyjyEhw4SBd-k?usp=sharing",
//     };

//     return productDriveLinks[productID] || "https://drive.google.com/drive/folders/1jAvBCUlJbO-n3dhyNeRN7syjL9xYXyrR?usp=drive_link";
// };

// contoh pesan whatsapp 
const formatMessage = (obj) => {
    return `Data Costumer 
        Nama: ${obj.name}
        Email: ${obj.email}
        No Hp: ${obj.phone}
Data Pesanan
    ${JSON.parse(obj.items).map((item) => `${item.name} (${item.quantity} x ${rupiah(item.total)}) \n` )}
    TOTAL: ${rupiah(obj.total)}
    TERIMAKASIH`;
}


const rupiah = (number) => {
    return new Intl.NumberFormat('id-ID',{
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
    }).format(number);
};

