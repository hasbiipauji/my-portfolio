<!DOCTYPE html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/typewriter-effect@latest/dist/core.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- @vite('resources/css/app.css') --}}
  <title>My Portfolio</title>
</head>
<body class="font-nunito bg-[#DFF2EB]">
<!-- header section start  -->
<header class="left-0 top-0 flex items-center z-10 absolute w-full bg-transparent">
    <div class="container">
        <div class="flex items-center justify-between relative">
           
            <div class="px-4 flex items-center">
                <button id="hamburger" name="hamburger" type="button" class="block absolute left-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out  origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute w-full opacity-85 rounded-b-md shadow-lg bg-[#DFF2EB] left-0 py-4 top-full lg:block lg:max-w-full lg:static lg:rounded-none lg:shadow-none lg:bg-transparent">
                    <ul class="block lg:flex lg:navbar-fixed">
                        <li class="group">
                            <a href="#home" class="text-lg lg:text-base font-semibold text-dark group-hover:text-secondary transition duration-150 ease-in-out py-4 lg:py-2 mx-8 flex justify-center items-center">Home</a>
                        </li>

                        <li class="group">
                            <a href="#about" class="text-lg lg:text-base font-semibold text-dark group-hover:text-secondary transition duration-150 ease-in-out py-4 lg:py-2 mx-8 flex justify-center items-center">About Me</a>
                        </li>

                        <li class="group">
                            <a href="#projects" class="text-lg lg:text-base font-semibold text-dark group-hover:text-secondary transition duration-150 ease-in-out py-4 lg:py-2 mx-8 flex justify-center items-center">Projects</a>
                        </li>

                        <li class="group">
                            <a href="#contact" class="text-lg lg:text-base font-semibold text-dark group-hover:text-secondary transition duration-150 ease-in-out py-4 lg:py-2 mx-8 flex justify-center items-center">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

             <div class="px-4">
                <a href="#home" class="text-primary font-bold text-lg block py-6 lg:text-xl">hasbipauji</a>
            </div>
        </div>
    </div>
</header>
<!-- header section end  -->

 <!-- hero section start  -->
 <section id="home" class="pt-28 lg:pt-32 pb-16 lg:pb-[90px]">
  <div class="container">
      <div class="flex flex-wrap">
          <!-- foto  -->
          <div class="w-full self-end px-4 lg:w-1/2">
              <div class="mt-2 lg:right-0 pb-8 lg:pb-16">
                  <img src="{{ asset('assets/img/hasbi.jpg') }}" alt="" class="w-3/4 md:w-4/6 xl:w-3/5 mx-auto rounded-full">
              </div>
          </div>
          <!-- end foto  -->

          <!-- data diri  -->
          <div class="w-full self-center px-4 sm:px-6 md:px-10 lg:px-20 xl:px-36 lg:w-1/2 lg:items-center">                
            <h1 class="font-semibold text-base text-primary md:text-xl">Hello, I'm <span class="block text-3xl font-bolder text-black font-extrabold md:text-4xl lg:text-5xl lg:mb-3" id="typewriter1">Hasbi Pauji</span></h1>
            <h2 class="text-base text- text-primary font-semibold md:text-xl xl:text-2xl md:font-bold mb-2">Web Developer</h2>
            <p class="text-sm text-secondary mb-6 lg:mt-2 md:text-base lg:mb-10" id="typewriter"> </p>

            <a href="#about" class="py-2 px-3 bg-primary text-white text-sm rounded-lg hover:bg-secondary transition-all duration-200 ease-in-out active:scale-95 md:text-base">About Me</a>
        </div>
        <!-- end data diri  -->
      </div>
  </div>
</section>
<!-- hero section end -->

<!-- about section start  -->
<section id="about" class="pt-16 pb-20 lg:pb-28 bg-primary">
  <div class="container">
      <div class="flex flex-wrap justify-center items-center">
          <!-- card 1 -->
          <div class="w-full px-4 pb-4 lg:pb-10 lg:w-1/2 lg:px-20 xl:px-32 mx-auto ">
              {{-- <h4 class="text-primary font-bold text-lg lg:text-xl">About Me</h4> --}}
              <h2 class="font-extrabold text-2xl md:text-3xl my-3 max-w-lg lg:text-5xl text-white">About Me</h2>
              <p class="max-w-xl text-sm md:text-base tracking-wide text-slate-300 font-semibold">I am a fresh graduate with a Bachelor's degree in Informatics Engineering, and currently interested in the field of web development. At the moment, I am studying HTML, CSS, JavaScript, and PHP, specifically the Laravel framework.</p>
          </div>
          <!-- end card 1 -->

          <!-- card 2 -->
          <div class="w-full px-4 lg:w-1/2 pt-4 lg:pt-10">
              <img src="{{ asset('assets/img/pauji.jpg') }}" alt="" class="w-3/4 sm:w-3/5 md:4/6 xl:w-3/5 rounded-full mx-auto">
          </div>
          <!-- end card 2 -->
      </div>

  </div>
</section>
  <!-- about section end  -->

{{-- projects section start  --}}
<section class="pt-16 pb-20 lg:pb-16" id="projects">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="max-w-xl px-4 mx-auto text-center">
                <h2 class="text-primary font-extrabold text-2xl lg:text-4xl pt-20">Projects</h2>
                <p class="text-slate-500 text-sm lg:text-base pt-7 mb-4 lg:mb-8">Below are some of the projects I have developed, tailored to meet the specific needs of each user. Each project was created with a focus on functionality, performance, and ease of use.</p>
            </div>

            
            <div class="flex flex-wrap justify-center gap-8 px-4 mt-8">
                @foreach ($tampilProject as $item)
                <div class="w-full md:w-5/12 lg:w-[30%] bg-white rounded-lg shadow-xl pb-5">
                    <div class="aspect-[3/2] rounded-t-lg overflow-hidden relative group">
                        <div class="w-full h-full absolute inset-0 transition-transform duration-500 ease-in-out transform group-hover:scale-110">
                            <img src="{{ asset('img/'.$item->image) }}" alt="" class="w-full h-full transition-all duration-500 ease-in-out object-cover object-center">
                        </div>
                    </div>
                    <div class="px-3 py-4">
                        <h2 class="text-base font-medium text-center p-4 lg:text-lg lg:font-semibold">{{ $item->title }}</h2>
                        <p class="text-sm text-slate-400 line-clamp-3">{{ $item->description }}</p>
                        <div class="flex justify-center items-center gap-x-3 mt-4">
                            <a href="{{ $item->link_code }}" class="px-3 py-2 text-white bg-primary rounded-lg shadow-lg text-sm hover:bg-secondary transition duration-300 ease-out active:scale-90 lg:text-base">
                                Code <i class="fa-solid fa-arrow-right pl-2"></i>
                            </a>
                            <a href="{{ $item->link_demo }}" class="px-3 py-2 text-white bg-primary rounded-lg shadow-lg text-sm hover:bg-secondary transition duration-300 ease-out active:scale-90 lg:text-base">
                                Demo<i class="fa-regular fa-eye pl-2 self-center"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{-- projects section end  --}}

@include('portfolio.contact')

<footer class="bg-primary px-4 h-28 flex justify-center items-center">
    <h3 class="text-white text-center text-xs lg:text-sm">Copyright © 2024 Hasbi Pauji. All rights reserved.</h3>
</footer>


<script src="{{ asset('/assets/js/script.js') }}"></script>
<script>
  const typewriter1 = new Typewriter('#typewriter1', {
  loop: false,
  delay: 150,
  cursor: "|",
  autoStart: false
});

typewriter1
  .pauseFor(1000)
  .typeString("Hasbi Pauji")
  .pauseFor(1000)
  .callFunction(() => {
    document.querySelector('.Typewriter__cursor').style.display = 'none';
    const typewriter = new Typewriter('#typewriter', {
    loop: true, // Efek akan terus diulang
    delay: 50,  // Kecepatan mengetik per karakter (dalam ms)
  });

  typewriter
    .typeString('I am a fresh graduate with a Bachelor\'s degree in Computer Science.')
    .pauseFor(1000) // Jeda 2 detik setelah selesai mengetik
    .deleteAll()     // Menghapus semua teks
    .typeString('Currently Interested in the Field of Web Development.')
    .pauseFor(1000)
    .deleteAll()
    .typeString('Let\'s Start Writing Code!')
    .pauseFor(1000)
    .start();
  })
  .start();
</script>

<script>
document.getElementById("close-success-alert").onclick = function() {
    this.parentElement.style.display = "none";
};

</script>



</body>
</html>