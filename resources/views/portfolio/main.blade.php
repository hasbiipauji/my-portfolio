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
  

    
  @vite('resources/css/app.css')
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

            <div class="w-full flex flex-wrap justify-center lg:mx-auto px-4 mt-4 xl:w-9/12 xl:mx-auto gap-x-4">
                <div class="pb-5 md:w-5/12 bg-white rounded-lg shadow-xl">
                    <div class="aspect-[3/2] rounded-md overflow-hidden relative group">
                        <div class="w-full h-full absolute inset-0 transition-transform duration-500 ease-in-out transform group-hover:scale-110">
                            <img src="{{ asset('assets/img/absensi.jpg') }}" alt="" class="w-full h-full transition-all duration-500 ease-in-out pb-16">
                        </div>
                    </div>
                    <h2 class="text-base font-medium py-2 px-3 text-center p-4 lg:text-lg lg:font-semibold">Aplikasi Absensi Berbasis Web di PT. Uspa Media Nusantara</h2>
                    <p class="text-sm text-slate-400 px-3 py-4 p-4">This application was developed for employees using HTML, bootstrap, JavaScript, Laravel dan Mysql</p>
                    <div class="flex justify-center items-center gap-x-3 mt-4">
                        <a href="" class="px-3 py-2 text-white bg-primary rounded-lg shadow-lg text-sm hover:bg-secondary transition duration-300 ease-out active:scale-90 lg:text-base"> Code <i class="fa-solid fa-arrow-right pl-2"></i></a>
                        <a href="" class="px-3 py-2 text-white bg-primary rounded-lg shadow-lg text-sm hover:bg-secondary transition duration-300 ease-out active:scale-90 lg:text-base">Demo<i class="fa-regular fa-eye pl-2 self-center"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
{{-- projects section end  --}}

{{-- contact section start --}}
<section id="contact" class="pt-16 pb-20 lg:pb-28">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2">
                <form action="" class="font-nunito lg:w-10/12">
                    <div class="w-full md:mx-auto">
                        <h2 class="text-lg font-bold text-center lg:text-2xl pt-10 pb-4 text-primary">Send Me a Message</h2>
                        <div class="w-full px-4 mb-8 flex flex-wrap mx-auto">
                            <label for="name" class="text-primary font-bold text-sm lg:text-base">Name</label>
                        <input type="text" name="name" placeholder="Name" class="w-full bg-slate-200  p-2 rounded-lg text-primary focus:ring-1 focus:ring-blue-500 focus:outline-none focus:border-primary text-sm lg:text-base mt-1">
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="email" class=" font-bold text-primary text-sm lg:text-base">Email</label>
                            <input type="email" name="email" placeholder="Email" class="w-full p-2 rounded-lg focus:outline-none focus:border-primary bg-slate-200 text-sm lg:text-base mt-1">
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="message" class=" font-bold text-primary text-sm lg:text-base">Message</label>
                            <textarea name="message" id="" placeholder="Message" class="w-full p-2 bg-slate-200 rounded-lg focus:outline-none focus:border-primary h-32 text-sm lg:text-base mt-1"></textarea>
                        </div>
    
                        <div class="w-full px-4">
                            <button type="button" class="px-4 py-2 w-full bg-primary border-primary text-white rounded-lg text-sm lg:text-base hover:bg-secondary transition-all duration-200 ease-in-out active:scale-95">Send</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="w-full px-4 lg:w-1/2 pb-16 pt-20">
                <h4 class="text-2xl lg:text-4xl text-primary font-bold lg:font-extrabold mb-2 lg:pt-10">Contact Me</h4>
                <p class="text-slate-500 max-w-xl font-medium mb-6 tracking-wider text-sm md:text-base xl:text-lg">Follow my social media below for collaboration or other inquiries.</p>
                <div class="flex items-center">
                    <!-- instagram  -->
                    <a href="https://www.instagram.com/hasbiipauji/" target="_blank" class=" mr-3 w-12 h-12 rounded-full flex justify-center items-center hover:border-primary hover:bg-primary text-primary hover:text-white transition-all duration-300 ease-in-out">
                        <svg role="img" class="fill-current " width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                    </a>
                    <!-- end ig  -->

                    <!-- github -->
                    <a href="https://github.com/hasbiipauji" target="_blank" class="mr-3 w-12 h-12 flex justify-center items-center rounded-full hover:bg-primary hover:border-primary hover:text-white text-primary transition-all duration-300 ease-in-out">
                        <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    <!-- end github  -->
                    
                    <!-- x  -->
                    <a href="https://x.com/hasbipaujii" target="_blank" class="w-12 h-12 mr-3 flex justify-center items-center rounded-full hover:bg-primary hover:text-white hover:border-primary transition duration-300 ease-in-out text-primary">
                        <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                    </a>
                    <!-- end x  -->

                    <!-- linkedin  -->
                    <a href="https://www.linkedin.com/in/hasbi-pauji-8663471b3/" target="_blank" class="w-12 h-12 mr-3 flex justify-center items-center rounded-full hover:bg-primary hover:text-white hover:border-primary transition duration-300 ease-in-out text-primary">
                        <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <!-- end linkedin  -->

                    <!-- gmail -->
                    <a href="mailto:hasbiipauji@gmail.com" target="_blank" class="w-12 h-12 mr-3 flex justify-center items-center rounded-full hover:bg-primary hover:text-white hover:border-primary transition duration-300 ease-in-out text-primary">
                        <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail</title><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
                    </a>
                    <!-- end gmail  -->
                </div>
            </div>
        </div>
    </div>
</section>
{{-- contact section end --}}

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

</body>
</html>