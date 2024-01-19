<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body class="bg-gray-800 text-gray-500">
    <!-- HEADER -->
    <header class="sticky top-2 bg-gray-950 py-5 z-10">
      <nav class="w-9/12 flex flex-row mx-auto">
        <div class="uppercase text-lg basis-1/4">
          <!-- Logo-->
          <a href="#hero">
            <span class="font-extrabold text-white">Aldona</span>
            <span class="font-extralight text-blue-400">Septiana</span>
          </a>
        </div>
        <div class="basis-1/2 flex items-center justify-evenly">
          <!-- Link-->
          <a href="#services"><span>services</span></a>
          <a href="#portofolio"><span>portofolio</span></a>
          <a href="#experience"><span>experience</span></a>
          <a href="#contact"><span>contact</span></a>
        </div>
        <div class="basis-1/4">
          <!-- Dark Mode-->
        </div>
      </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main id="hero" class="relative -top-20">
      <div class="bg-gray-950 relative">
        <!--Hero Section-->
        <div class="mx-auto flex h-screen items-center w-9/12">
          <div class="basis-1/2">
            <!--Deskripsi-->
            <div class="flex items-center">
              <svg class="stroke-gray-400 stroke-2 h-5 w-5">
                <!--Membuat Garis-->
                <line x1="0" x2="10px" y1="10px" y2="10px" />
              </svg>
              <h2 class="uppercase text-xs font-extralight tracking-lebar">
                My name is
              </h2>
            </div>
            <h3 class="font-bold text-white text-4xl">
              <span>Aldona</span>
              <span class="text-blue-700">Septiana.</span>
            </h3>
            <p class="font-light">
              Saya adalah mahasiswa prodi Informatika dari Universitas Amikom
              Purwokerto. Memiliki ketertarikan dalam dunia komputer dan
              matematika . Terlatih dalam menggunakan SQL database, Jupyter
              Notebook, dan Microsoft Office
            </p>

            <div class="flex flex-row mt-5 space-x-3">
              <!--FOTO-->
              <a href="https://github.com/aldonat"
                ><img class="w-6 h-6" src="img/Github.svg" alt=""
              /></a>
              <a href="https://twitter.com/ucupucupku"
                ><img class="w-6 h-6" src="img/Twitter.svg" alt=""
              /></a>
              <a href="https://www.linkedin.com/in/aldona-septiana-b424a1258/"
                ><img class="w-6 h-6" src="img/Linkedin.svg" alt=""
              /></a>
              <a href="https://www.instagram.com/_aldonast/?hl=id"
                ><img class="w-6 h-6" src="img/Instagram.svg" alt=""
              /></a>
            </div>
          </div>
          <div class="basis-1/2">
            <img class="mx-auto" src="img/aldona.png" alt="" />
          </div>
        </div>
      </div>
      <div id="services" class="bg-slate-50 pt-20 pb-20">
        <!--Services-->
        <div class="w-9/12 mx-auto">
          <div class="flex flex-col place-items-center">
            <!--Judul-->
            <div>
              <div class="flex items-center">
                <svg class="stroke-gray-400 stroke-2 h-5 w-5">
                  <!--Membuat Garis-->
                  <line x1="0" x2="10px" y1="10px" y2="10px" />
                </svg>
                <h2 class="uppercase text-xs font-extralight tracking-lebar">
                  services
                </h2>
              </div>
              <h3 class="text-3xl">Specialized in</h3>
            </div>
          </div>
          <div class="grid grid-cols-3 gap-10 py-10">
            <!--CARD-->
            <div class="rounded-lg bg-white shadow-lg">
              <!--Card 1-->
              <div class="flex flex-col items-center py-10 px-10">
                <div class="h-10 w-10 p-2 bg-blue-100 rounded-2xl">
                  <img class="w-full" src="img/python.svg" alt="" />
                </div>
                <h4 class="text-black mt-5 text-center">
                  Bahasa Pemograman Python
                </h4>
                <p class="text-center font-extralight text-sm mt-2">
                  Python merupakan bahasa pemrograman komputer yang biasa
                  dipakai untuk membangun situs, software/aplikasi,
                  mengotomatiskan tugas dan melakukan analisis data
                </p>
              </div>
            </div>
            <div class="rounded-lg bg-white shadow-lg">
              <!--Card 2-->
              <div class="flex flex-col items-center py-10 px-10">
                <div class="h-10 w-10 p-2 bg-blue-100 rounded-2xl">
                  <img class="w-full" src="img/java.svg" alt="" />
                </div>
                <h4 class="text-center text-black mt-5">Java</h4>
                <p class="text-center font-extralight text-sm mt-2">
                  Java merupakan bahasa pemrograman yang digunakan secara luas
                  untuk pengodean aplikasi web. Java merupakan bahasa
                  multiplatform yang berorientasi pada objek dan berpusat pada
                  jaringan yang dapat digunakan sebagai platform di dalamnya.
                </p>
              </div>
            </div>
            <div class="rounded-lg bg-white shadow-lg">
              <!--Card 3-->
              <div class="flex flex-col items-center py-10 px-10">
                <div class="h-10 w-10 p-2 bg-blue-100 rounded-2xl">
                  <img class="w-full" src="img/csharp.svg" alt="" />
                </div>
                <h4 class="text-black mt-5">C#</h4>
                <p class="text-center font-extralight text-sm mt-2">
                  C# (dibaca see sharp) adalah bahasa pemrograman yang dibuat
                  oleh Microsoft dan ditargetkan berjalan di atas platform .NET
                  (dotnet).
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="portofolio" class="py-40 bg-gray-950">
        <!--Portofolio-->
        <div class="w-9/12 mx-auto">
          <!--Sub Fortofolio-->
          <div class="flex flex-col">
            <!--Judul-->
            <div class="flex items-center">
              <svg class="stroke-gray-400 stroke-2 h-5 w-5">
                <!--Membuat Garis-->
                <line x1="0" x2="10px" y1="10px" y2="10px" />
              </svg>
              <h2 class="uppercase text-xs font-extralight tracking-lebar">
                my works
              </h2>
            </div>
            <h3 class="text-3xl text-white">Featured Portofolio</h3>
          </div>
          <!--Cards-->
          <div class="grid grid-cols-4 gap-20 mt-20">
            <!--Card 1-->
            <div class="rounded-lg shadow-lg overflow-hidden">
              <img
                class="object-cover h-48 w-full opacity-50"
                src="img/pmo.jpg"
                alt=""
              />
              <div class="bg-white py-2 px-4">
                <h4 class="text-sm font-medium text-gray-800">
                  Aplikasi Pemesanan Tiket Bus
                </h4>
                <h5 class="text-sm font-mono">
                  Aplikasi dibuat menggunakan Bahasa Pemograman Dart
                </h5>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="rounded-lg shadow-lg overflow-hidden">
              <img
                class="object-cover h-48 opacity-50"
                src="img/bpp.jpg"
                alt=""
              />
              <div class="bg-white py-2 px-4">
                <h4 class="text-sm font-medium text-gray-800">
                  Website Pemesanan Tiket Bus
                </h4>
                <h5 class="text-sm font-mono">
                  Website di buat menggunakan Bahasa Pemograman Python
                </h5>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="rounded-lg shadow-lg overflow-hidden">
              <img
                class="object-cover h-48 opacity-50"
                src="img/micro.jpg"
                alt=""
              />
              <div class="bg-white py-2 px-4">
                <h4 class="text-sm font-medium text-gray-800">
                  Penerapan DHT11 Pada Pendingin Ruangan Berbasis Arduino
                </h4>
                <h5 class="text-sm font-mono">Kipas angin otomatis dengan sensor suhu</h5>
              </div>
            </div>
            <!-- Card 4 -->
            <div class="rounded-lg shadow-lg overflow-hidden">
              <img
                class="object-cover h-48 opacity-50"
                src="img/net.jpg"
                alt=""
              />
              <div class="bg-white py-2 px-4">
                <h4 class="text-sm font-medium text-gray-800">
                  Kasir untuk pelayanan dan perawatan hewan
                </h4>
                <h5 class="text-sm font-mono">
                  Aplikasi Dekstop dengan Bahasa Pemograman C#
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="experience" class="py-40 bg-gray-950">
        <!--experience-->
        <div class="mx-auto w-9/12 flex flex-row items-center">
          <div class="basis-1/3">
            <div class="flex flex-col">
              <!-- judul -->
              <div class="flex items-center">
                <svg class="stroke-gray-400 stroke-2 h-5 w-5">
                  <line x1="0" y1="10px" x2="10px" y2="10px" />
                </svg>
                <h2
                  class="uppercase text-xs font-extralight tracking-ngangkang"
                >
                  career path
                </h2>
              </div>
              <h3 class="text-3xl text-white">Experiences</h3>

              <div class="flex flex-col gap-y-5 mt-10 pr-20">
                <a
                  class="hover:bg-blue-200 hover:text-blue-800 flex flex-row justify-between bg-white w-full p-4 rounded-lg"
                  href="#FA"
                  ><span>Forum Asisten</span> >
                </a>
              </div>
            </div>
          </div>
          <div id="FA" class="basis-2/3 pl-20">
            <h4 class="text-2xl font-bold text-gray-200">Forum Asisten</h4>
            <h5 class="text-sm font-light">Universitas Amikom Purwokerto</h5>
            <p class="mt-5 text-light text-gray-200">2023 - Sekarang</p>
            <div class="mt-2">
              <span
                class="border-white border border-solid px-2 py-1 rounded-md text-sm font-mono"
                >Swift</span
              >
              <span
                class="border-white border border-solid px-2 py-1 rounded-md text-sm font-mono"
                >Go</span
              >
            </div>
            <hr class="my-5" />
            <ul class="list-disc list-inside leading-10">
              <li>
                Membantu dosen dalam persiapan laboratorium untuk kegiatan
                kuliah praktikum
              </li>
              <li>
                Membantu mahasiswa dalam melaksanakan proses praktikum di
                laboratorium
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div id="contact" class="bg-white pt-40">
        <!-- contact -->
        <div class="mx-auto w-9/12 flex flex-row items-center">
          <div class="basis-1/2">
            <div class="flex flex-col">
              <!-- judul -->
              <div class="flex items-center">
                <svg class="stroke-gray-400 stroke-2 h-5 w-5">
                  <line x1="0" y1="10px" x2="10px" y2="10px" />
                </svg>
                <h2
                  class="uppercase text-xs font-extralight tracking-ngangkang"
                >
                  Inquiry
                </h2>
              </div>
              <h3 class="text-3xl text-gray-800">Contact Me</h3>
            </div>

            <form action="send.php" method="post" target="_blank">
              <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold">Name</label>
                <input
                  name="name"
                  class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950"
                  type="text" placeholder="Name"/>
              </div>
              <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold"
                  >E-Mail</label
                >
                <input
                  name="email"
                  class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950"
                  type="email" placeholder="name@example.com"
                />
              </div>
              <div class="mb-4">
                <label for="message" class="block text-gray-700 font-semibold"
                  >Message</label
                >
                <textarea
                  name="message"
                  class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950"
                  cols="30"
                  rows="4"
                ></textarea>
              </div>
              <input type="hidden" name="noWa" value="6288215937009">
              <div>
                <button
                  class="hover:bg-blue-600 bg-blue-500 text-white font-semibold py-2 px-4 rounded-md w-full"
                  type="submit" name="submit"
                >
                  Send
                </button>
              </div>
            </form>
          </div>

          <div class="basis-1/2 ml-10">
            <div class="flex flex-row gap-5 p-5">
              <div class="w-10 h-10 p-2 bg-blue-100 rounded-2xl">
                <img class="w-full" src="img/pin.svg" alt="" />
              </div>
              <div>
                <h4 class="text-lg text-gray-800 font-medium">Address</h4>
                <h5 class="font-thin">Purwokerto, Indonesia</h5>
              </div>
            </div>

            <div class="flex flex-row gap-5 p-5">
              <div class="w-10 h-10 p-2 bg-blue-100 rounded-2xl">
                <img class="w-full" src="img/phone call.svg" alt="" />
              </div>
              <div>
                <h4 class="text-lg text-gray-800 font-medium">Phone Call</h4>
                <h5 class="font-thin">( +62 ) 88215937009</h5>
              </div>
            </div>

            <div class="flex flex-row gap-5 p-5">
              <div class="w-10 h-10 p-2 bg-blue-100 rounded-2xl">
                <img class="w-full" src="img/mail.svg" alt="" />
              </div>
              <div>
                <h4 class="text-lg text-gray-800 font-medium">E-Mail</h4>
                <h5 class="font-thin">aldonaseptiana19@gmail.com</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--  -->
    <footer class="bg-white text-center pt-10 pb-10 font-mono -mt-20">
      2024 Aldonaaaaaaaa. All rights reserved
    </footer>
  </body>
</html>
