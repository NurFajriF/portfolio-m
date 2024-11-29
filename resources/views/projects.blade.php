<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <title>Home</title>

  <meta name="theme-color" content="#5540af" />
  <meta name="twitter:site" content="@tailwindmade" />
  
  <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="preload"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>

  <link crossorigin="anonymous" href="/css/main.min.css" media="screen" rel="stylesheet"/>
  
  <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>  

</head>

<body :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
class="relative"
x-data="{ mobileMenu: false }"
>

<div id="main" class="relative">
  <div
x-data="{
triggerNavItem(id) {
    $scroll(id)
},
triggerMobileNavItem(id) {
    mobileMenu = false;
    this.triggerNavItem(id)
}
}">
    
<div class="w-full z-50 top-0 py-3 sm:py-5  bg-primary absolute">
  <div class="container flex items-center justify-between">
    <div>
      {{-- logo --}}
    </div>
    <div class="hidden lg:block">
      <ul class="flex items-center">
        <li class="group pl-6">
          
          <span
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            ><a href="/">Home</a></span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#about')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >About</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#services')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Services</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            ><a href="/projects">Projects</a></span
          >
          
          <span
            class="{{ request()->is('projects') ? 'bg-yellow' : 'bg-transparent' }} block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#experience')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Experience</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#education')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Education</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#contact')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Contact</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
      </ul>
    </div>
    <div class="block lg:hidden">
      <button @click="mobileMenu = true">
        <i class="bx bx-menu text-4xl text-white"></i>
      </button>
    </div>
  </div>
</div>

      <div class="container py-16 md:py-20" id="projects">
        <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            Check out my Projects
        </h2>
        <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Here's what I have done with the past
        </h3>
    
        <div class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
            @foreach($projects as $project)
                <div class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                    <!-- Gambar Screenshot -->
                    <img src="{{ $project->screenshot }}" class="w-full shadow" alt="{{ $project->name }}"/>
    
                    <!-- Deskripsi Di Bawah Gambar -->
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-center">{{ $project->name }}</h3>
                        <p class="mt-2 text-sm text-center">{{ $project->description }}</p>
                        <p class="mt-1 text-xs text-center text-gray-500">Tech: {{ $project->tech_stack }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
        
    <footer>
      <div class="bg-primary">
        <div class="container flex flex-col justify-between py-6 sm:flex-row">
        <p class="text-center font-body text-white md:text-left">
          © Copyright 2024. NurFajriF.
        </p>
        <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
          <a href="https://github.com/NurFajriF" target="_blank">
            <i
              class="bx bxl-github text-2xl text-white hover:text-yellow"
            ></i>
          </a>
          <a href="https://www.linkedin.com/in/muhammad-nur-fajri-050b7826b/" target="_blank" class="pl-4">
            <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
          </a>
          <a href="/" class="pl-4">
            <i class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"></i>
          </a>
          <a href="/" class="pl-4">
            <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
          </a>
          <a href="/" class="pl-4">
            <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
          </a>
        </div>
      </div>
      </div>
    
    </footer>
      

    <script src="/js/main.js"></script>
</body>
</html>