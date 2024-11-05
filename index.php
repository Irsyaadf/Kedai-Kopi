<!DOCTYPE html>
<html class="scroll-smooth " lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />
    <title>Kopi Kenangan</title>
    <link rel="stylesheet" href="./assets/css/sty" />
  </head>

  <body class="bg-gray-900 text-white font-poppins">
    <nav
      class="py-4 px-6 top-0 left-0 right-0 bg-gray-800 bg-opacity-80 justify-between items-center border-b border-gray-700 flex fixed z-50"
    >
      <a href="#" class="text-2xl text-white font-bold italic"
        >Kopi <span class="text-yellow-500">Kenangan</span>.</a
      >
      <div class="hidden md:flex space-x-4">
        <a href="#home" class="hover:text-yellow-500">Home</a>
        <a href="#tentang-kami" class="hover:text-yellow-500">Tentang Kami</a>
        <a href="#menu" class="hover:text-yellow-500">Menu</a>
        <a href="#produk" class="hover:text-yellow-500">Produk</a>
        <a href="#kontak" class="hover:text-yellow-500">Kontak</a>
      </div>

      <div class="flex space-x-6">
        <a href="#" class="hover:text-yellow-500" id="search"
          ><i data-feather="search"></i
        ></a>
        <a href="#" class="hover:text-yellow-500"
          ><i data-feather="shopping-cart"></i
        ></a>
        <a href="#" class="md:hidden hover:text-yellow-500" id="menu-button"
          ><i data-feather="menu"></i
        ></a>
        <a href="#" class="hidden hover:text-yellow-500" id="close-menu"
        ><i data-feather="x"></i
        ></a>
      </div>

      <div class="absolute top-full right-7 bg-white p-2 w-96 text-gray-900 flex items-center hidden" id="search-form">
        <input type="text" placeholder="Search here..." class="w-full p-2 focus:outline-none" id="search">
        <label for=""><i data-feather="search" class="cursor-pointer"></i></label>
      </div>
    </nav>

    <aside class="fixed top-0 h-full w-64 bg-white text-black shadow-lg z-50 md:hidden sidebar" id="sidenav">
      <nav class="flex flex-col h-full space-y-4 p-8">
        <a href="#home" class="hover:text-yellow-500">Home</a>
        <a href="#tentang-kami" class="hover:text-yellow-500">Tentang Kami</a>
        <a href="#menu" class="hover:text-yellow-500">Menu</a>
        <a href="#produk" class="hover:text-yellow-500">Produk</a>
        <a href="#kontak" class="hover:text-yellow-500">Kontak</a>
      </nav>
    </aside>

    <section
      id="home"
      class="min-h-screen bg-cover bg-center items-center justify-center flex"
      style="background-image: url('assets/img/menu/header-bg.jpeg')"
    >
      <div class="bg-black bg-opacity-50 p-10 rounded-lg mx-6 text-center">
        <h1 class="font-bold text-4xl mb-4">
          Mari Nikmati Secangkir <span class="text-yellow-500">Kopi</span>
        </h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi,
          iusto.
        </p>
      </div>
    </section>

    <section
    id="tentang-kami"
    class="py-20 px-6 bg-gray-800">
      <div class="text-center mb-10">
        <h2 class="font-bold text-3xl">
          <span class="text-yellow-500">Tentang </span>Kami
        </h2>
      </div>

      <div class="md:flex md:items-center space-y-6 md:space-y-0 md:space-x-6">
        <div class="md:w-1/2">
          <div>
            <img
              src="./assets/img/menu/tentang-kami.jpg"
              class="rounded-lg shadow-lg"
            />
          </div>
        </div>
        <div class="md:w-1/2 space-y-4">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ut
            nemo ipsam vero, cumque voluptates obcaecati delectus veritatis
            cupiditate doloremque.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ut
            nemo ipsam vero, cumque voluptates obcaecati delectus veritatis
            cupiditate doloremque.
          </p>
        </div>
      </div>
    </section>

    <section 
    id="menu"
    class="py-20 px-6 bg-gray-900">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold">
          <span class="text-yellow-500">Menu </span>Kami
        </h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque non
          praesentium aliquid. Itaque, labore. Asperiores.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div
          class="bg-gray-800 p-6 rounded-lg shadow-lg items-center text-center flex flex-col"
        >
          <img src="./assets/img/menu/tentang-kami.jpg" class="rounded-lg mb-4" />
          <h3 class="text-xl font-semibold">- Experesso -</h3>
          <p class="text-yellow-500">IDR 15K</p>
        </div>
        <div
          class="bg-gray-800 p-6 rounded-lg shadow-lg items-center text-center flex flex-col"
        >
          <img src="./assets/img/menu/tentang-kami.jpg" class="rounded-lg mb-4" />
          <h3 class="text-xl font-semibold">- Cappucino -</h3>
          <p class="text-yellow-500">IDR 15K</p>
        </div>
        <div
          class="bg-gray-800 p-6 rounded-lg shadow-lg items-center text-center flex flex-col"
        >
          <img src="./assets/img/menu/tentang-kami.jpg" class="rounded-lg mb-4" />
          <h3 class="text-xl font-semibold">- Latte -</h3>
          <p class="text-yellow-500">IDR 15K</p>
        </div>
      </div>
    </section>

    <section 
    id="produk"
    class="bg-gray-800 py-20 px-6">
      <div class="text-center mb-10">
        <h2 class="font-bold text-3xl">
          <span class="text-yellow-500">Produk </span>Unggulan
        </h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
          consequuntur nisi sequi voluptate doloremque vel.
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div
          class="bg-slate-900 p-6 rounded-lg shadow-lg items-center text-center flex flex-col"
        >
          <div class="flex gap-10 mb-10 mt-5 justify-center">
            <a
              href="#"
              class="text-yellow-500 bg-gray-800 rounded-full p-3 hover:text-yellow-500 hover:bg-yellow-500 transition duration-300 ease-in-out"
            >
              <i data-feather="shopping-cart"></i>
            </a>
            <a
              href="#"
              class="text-yellow-500 bg-gray-800 rounded-full p-3 hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out"
            >
              <i data-feather="eye"></i>
            </a>
          </div>

          <img src="./assets/img/menu/1.jpg" class="rounded-lg mb-4" />
          <h3 class="text-xl font-semibold">- Coffe Beans -</h3>
          <div class="flex justify-center gap-2">
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
          </div>
          <div class="flex gap-2">
            <p class="text-yellow-500">IDR 30K</p>
            <p class="text-gray-300 line-through">IDR 55K</p>
          </div>
        </div>
        <div
          class="bg-slate-900 p-6 rounded-lg shadow-lg items-center text-center flex flex-col"
        >
          <div class="flex gap-10 mb-10 mt-5 justify-center">
            <a
              href="#"
              class="text-yellow-500 bg-gray-800 rounded-full p-3 hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out"
            >
              <i data-feather="shopping-cart"></i>
            </a>
            <a
              href="#"
              class="text-yellow-500 bg-gray-800 rounded-full p-3 hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out"
            >
              <i data-feather="eye"></i>
            </a>
          </div>
          <img src="./assets/img/menu/1.jpg" class="rounded-lg mb-4" />
          <h3 class="text-xl font-semibold">- Coffe Beans -</h3>
          <div class="flex justify-center gap-2">
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
          </div>
          <div class="flex gap-2">
            <p class="text-yellow-500">IDR 30K</p>
            <p class="text-gray-300 line-through">IDR 55K</p>
          </div>
        </div>
        <div
          class="bg-slate-900 p-6 rounded-lg shadow-lg items-center text-center flex flex-col"
        >
          <div class="flex gap-10 mb-10 mt-5 justify-center">
            <a
              href="#"
              class="text-yellow-500 bg-gray-800 rounded-full p-3 hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out"
            >
              <i data-feather="shopping-cart"></i>
            </a>
            <a
              href="#"
              class="text-yellow-500 bg-gray-800 rounded-full p-3 hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out"
            >
              <i data-feather="eye"></i>
            </a>
          </div>
          <img src="./assets/img/menu/1.jpg" class="rounded-lg mb-4" />
          <h3 class="text-xl font-semibold">- Coffe Beans -</h3>
          <div class="flex justify-center gap-2">
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
            <a href="#" class="text-yellow-500">
              <i data-feather="star"></i>
            </a>
          </div>
          <div class="flex gap-2">
            <p class="text-yellow-500">IDR 30K</p>
            <p class="text-gray-300 line-through">IDR 55K</p>
          </div>
        </div>
      </div>
    </section>

    <section
    id="kontak"
    class="py-20 px-6 bg-gray-900">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold">
          <span class="text-yellow-500">Kontak </span>Kami
        </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="md:flex md:space-x-6">
        <iframe
          class="w-full md:w-1/2 h-64 rounded-lg mb-6 md:mb-0"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126899.51606730511!2d107.07186007356046!3d-6.31486889081337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699a97cdfd23f3%3A0xa467efa8d683cc31!2sCikarang%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1729560544821!5m2!1sid!2sid"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <div class="md:w-1/2">
          <form class="bg-gray-800 p-6 rounded-lg shadow-lg" action="">
            <div class="mb-4">
              <label for="name" class="block text-sm font-semibold mb-1"
                >Nama</label
              >
              <input
                type="text"
                id="name"
                placeholder="Nama"
                class="w-full p-2 border border-gray-600 rounded-lg focus: focus:ring-yellow-500"
              />
            </div>
            <div class="mb-4">
              <label for="email" class="block text-sm font-semibold mb-1"
                >Email</label
              >
              <input
                type="text"
                id="email"
                placeholder="Email"
                class="w-full p-2 border border-gray-600 rounded-lg focus: focus:ring-yellow-500"
              />
            </div>
            <!-- <div class="mb-4">
              <label for="name" class="block text-sm font-semibold mb-1"
                >Nama</label
              >
              <input
                type="text"
                id="name"
                placeholder="Nama"
                class="w-full p-2 border border-gray-600 rounded-lg focus: focus:ring-yellow-500"
              />
            </div> -->
            <div class="mb-4">
              <label for="message" class="block text-sm font-semibold mb-1"
                >Pesan</label
              >
              <textarea
                name="message"
                id="message"
                placeholder="Tulis Pesan..."
                class="w-full h-32 p-2 border border-gray-600 rounded-lg focus: focus:ring-yellow-500 resize-none"
              ></textarea>
            </div>
            <div class="mb-4">
              <button class="bg-yellow-500 py-2 text-gray-900 font-semibold w-full rounded-lg hover:bg-yellow-400 transition duration-300">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer class="bg-gray-800 py-6 text-center">
      <p class="text-gray-400">$copy; 2024 Kopi Kenangan Senja. Alrights Reserved.</p>
      <div class="mt-2 text-center">
        <a href="#" class="text-gray-400 hover:text-yellow-500 mx-2">Privacy Policy | Term of Services</a>
      </div>
    </footer>

    <script>
      feather.replace();
    </script>

    <script src="./assets/js/script.js"></script>
  </body>
</html>
