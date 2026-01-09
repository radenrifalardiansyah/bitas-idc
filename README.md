# BITAS - Bintang Talenta Scientific

Proyek website untuk BITAS (Bintang Talenta Scientific), perusahaan industri farmasi dan alat laboratorium di Indonesia.

## Deskripsi

Website ini dibangun menggunakan PHP dengan struktur modular untuk kemudahan maintenance. Fitur utama meliputi:

- Halaman Beranda dengan berbagai section (Cover, About, Product, Services, Testimonials, Contact)
- Halaman terpisah untuk About, Product, Services, dan Contact
- Navigasi dinamis dengan active state
- Responsive design dengan Bootstrap-like grid
- Animasi menggunakan WOW.js
- Slider menggunakan Slick Carousel
- Filter produk menggunakan Isotope

## Struktur Folder

```
src/
├── index.php          # Halaman utama
├── about.php          # Halaman About
├── product.php        # Halaman Product
├── services.php       # Halaman Services
├── contact.php        # Halaman Contact
├── global/
│   └── config.php     # Konfigurasi global (database, API, dll.)
├── services/
│   └── api_service.php # Service untuk API CRUD
├── components/
│   ├── header.php     # Bagian head HTML
│   ├── nav.php        # Navigasi
│   ├── footer.php     # Footer
│   ├── scripts.php    # Scripts JavaScript
│   ├── cover.php      # Section Cover
│   ├── about.php      # Section About
│   ├── product.php    # Section Product
│   ├── services.php   # Section Services
│   ├── testimonials.php # Section Testimonials
│   └── contact.php    # Section Contact
├── css/
│   └── style.css      # Stylesheet utama
├── js/
│   ├── main.js        # Script utama
│   ├── slick/         # Slick Carousel
│   ├── wow.min.js     # WOW.js
│   └── isotope.pkgd.min.js # Isotope
└── images/            # Gambar dan assets
```

## Teknologi yang Digunakan

- **Backend**: PHP
- **Frontend**: HTML5, CSS3, JavaScript
- **Libraries**:
  - jQuery
  - Slick Carousel
  - WOW.js
  - Isotope
- **Fonts**: Inter, Lato (Google Fonts)

## Instalasi

1. Clone repository ini ke folder web server Anda (misalnya Laragon).
2. Pastikan PHP terinstall dan web server berjalan.
3. Akses `index.php` melalui browser.

## Penggunaan

- Jalankan server lokal (misalnya Laragon).
- Buka `http://localhost/bitas-idc/src/index.php` di browser.
- Navigasi antar halaman menggunakan menu.

## Kontribusi

Untuk berkontribusi:
1. Fork repository.
2. Buat branch fitur baru.
3. Commit perubahan.
4. Push ke branch.
5. Buat Pull Request.

## Lisensi

Proyek ini untuk keperluan internal BITAS.

## Integrasi API

Proyek ini dirancang untuk integrasi dengan API eksternal untuk data dinamis:

- **`global/config.php`**: Konfigurasi database dan API (base URL, API key).
- **`services/api_service.php`**: Class untuk operasi CRUD (Create, Read, Update, Delete) dengan API.

### Contoh Penggunaan API:
```php
require_once 'services/api_service.php';
$api = new ApiService();

// Get all products
$products = $api->getProducts();

// Create new product
$newProduct = $api->createProduct([
    'name' => 'Product Name',
    'description' => 'Product Description'
]);
```

Pastikan untuk mengupdate `API_BASE_URL` dan `API_KEY` di `config.php` sesuai dengan API yang digunakan.