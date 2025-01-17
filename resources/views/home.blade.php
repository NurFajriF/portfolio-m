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

  <body
    :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
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

  <div class="w-full z-50 top-0 py-3 sm:py-5  absolute">
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
            class="{{ request()->is('/') ? 'bg-yellow' : 'bg-transparent' }} block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>

        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#about')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >About</span
          >
          
          <span
            class="{{ request()->is('about') ? 'bg-yellow' : 'bg-transparent' }} block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#services')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Services</span
          >
          
          <span
            class="{{ request()->is('services') ? 'bg-yellow' : 'bg-transparent' }} block h-0.5 w-full bg-transparent group-hover:bg-yellow"
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
            class="{{ request()->is('experiences') ? 'bg-yellow' : 'bg-transparent' }} block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#education')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Education</span
          >
          
          <span
            class="{{ request()->is('education') ? 'bg-yellow' : 'bg-transparent' }} block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#contact')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Contact</span
          >
          
          <span
            class="{{ request()->is('contact') ? 'bg-yellow' : 'bg-transparent' }} block h-0.5 w-full bg-transparent group-hover:bg-yellow"
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

<div
  class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
  :class="{ 'opacity-100 pointer-events-auto': mobileMenu }"
>
  <div
    class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3"
  >
    <button
      class="absolute top-0 right-0 mt-4 mr-4"
      @click="mobileMenu = false"
    >
      <img src="/img/icon-close.svg" class="h-10 w-auto" alt="" />
    </button>

    <ul class="mt-8 flex flex-col">
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#about')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >About</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#services')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Services</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          ><a href="/projects">Projects</a></span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#experience')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Experience</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#blog')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Blog</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#contact')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Contact</span
        >
        
      </li>
      
    </ul>
  </div>
</div>


      <div><div
  class="relative bg-cover bg-center bg-no-repeat py-8"
  style="background-image: url(/img/bg-hero.jpg)"
>
  <div
    class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat"
  ></div>

  <div
    class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48"
  >
    <div class="flex flex-col items-center justify-center lg:flex-row">
      <div class="rounded-full border-8 border-primary shadow-xl">
        <img
          src="/img/ini-author.jpg"
          class="h-48 rounded-full sm:h-56"
          alt="author"
        />
      </div>
      <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
        <h1
          class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl"
        >
          Hello I'm Muhammad Nur Fajri
        </h1>
        <div
          class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start"
        >
          <div
            class="flex items-center justify-center pl-0 sm:justify-start md:pl-1"
          >
            <p class="font-body text-lg uppercase text-white">Let's connect</p>
            <div class="hidden sm:block">
              <i class="bx bx-chevron-right text-3xl text-yellow"></i>
            </div>
          </div>
          <div
            class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
          >
            <a href="https://github.com/NurFajriF" target="_blank">
              <i
                class="bx bxl-github text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="https://www.linkedin.com/in/muhammad-nur-fajri-050b7826b/" target="_blank" class="pl-4">
              <i
                class="bx bxl-linkedin text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="/" class="pl-4">
              <i
                class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="/" class="pl-4">
              <i
                class="bx bxl-twitter text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            
            <a href="/" class="pl-4">
              <i
                class="bx bxl-instagram text-2xl text-white hover:text-yellow"
              ></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-grey-50" id="about">
  <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
    <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
      <h2
        class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
      >
        Who am I?
      </h2>
      <h4
        class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
      >
        I'm Muhammad Nur Fajri,
      </h4>
      <p class="pt-6 font-body leading-relaxed text-grey-20">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
      <div
        class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start"
      >
        <div class="flex items-center justify-center sm:justify-start">
          <p class="font-body text-lg font-semibold uppercase text-grey-20">
            Tech
          </p>
          <div class="hidden sm:block">
            <i class="bx bx-chevron-right text-2xl text-primary"></i>
          </div>
        </div>
        <div
          class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
        >
          <a href="/">
            <i
              class="bx bxl-github text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-html5 text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-css3 text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-javascript text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-python text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-django text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-nodejs text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-google-cloud text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
        </div>
      </div>
    </div>
    <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="services">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Here's what I'm good at
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    These are the services I offer
  </h3>

  <div
    class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3"
  >
    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="/img/icon-development-white.svg"
            alt="development icon"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="/img/icon-development-black.svg"
            alt="development icon"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          WEB DEVELOPMENT
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>
    </div>
    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="/img/icon-content-white.svg"
            alt="content marketing icon"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="/img/icon-content-black.svg"
            alt="content marketing icon"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          Technical Writing
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>
    </div>
    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="/img/icon-mobile-white.svg"
            alt="Mobile Application icon"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="/img/icon-mobile-black.svg"
            alt="Mobile Application icon"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          Mobile Development
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>
    </div>
    
  </div>
</div>

<div class="bg-grey-50">
<div class="container py-16 md:py-20" id="experience">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    My experience
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Here's what I did before
  </h3>

  <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
    <span
      class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"
    ></span>

    @foreach ($experiences as $experience)
    <div class="mt-8 flex flex-col text-center md:flex-row">
      <div class="md:w-2/5">
        <div class="flex justify-center md:justify-start">
          <span class="shrink-0">
            <img
              src="{{ $experience->logo }}"
              class="h-auto w-32"
              alt="company logo"
            />
          </span>
          <div class="relative ml-3 hidden w-full md:block">
            <span
              class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"
            ></span>
          </div>
        </div>
      </div>
      <div class="md:w-3/5">
        <div class="relative flex md:pl-18">
          <span
            class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"
          ></span>

          <div class="mt-1 flex">
            <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
            <div class="md:-mt-1 md:pl-8">
              <span class="block font-body font-bold text-grey-40"
                >{{ $experience->time }}</span
              >
              <span
                class="block pt-2 font-header text-xl font-bold uppercase text-primary"
                >{{ $experience->name }}</span
              >
              <div class="pt-2">
                <span class="block font-body text-black"
                  >{{ $experience->description }}</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
</div>

<div class="container py-16 md:py-20" id="education">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    My education
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Here my education
  </h3>

  <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
    <span
      class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"
    ></span>

    @foreach ($educations as $edu)
    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
      <div class="md:w-2/5">
        <div class="flex justify-center md:justify-start">
          <span class="shrink-0">
            <img
              src="{{ $edu->logo ?? 'default-logo.png' }}"
              class="h-auto w-32"
              alt="company logo"
            />
          </span>
          <div class="relative ml-3 hidden w-full md:block">
            <span
              class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"
            ></span>
          </div>
        </div>
      </div>
      <div class="md:w-3/5">
        <div class="relative flex md:pl-18">
          <span
            class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"
          ></span>

          <div class="mt-1 flex">
            <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
            <div class="md:-mt-1 md:pl-8">
              <span class="block font-body font-bold text-grey-40"
                >{{ $edu->time }}</span
              >
              <span
                class="block pt-2 font-header text-xl font-bold uppercase text-primary"
                >{{ $edu->name }}</span
              >
              <div class="pt-2">
                <span class="block font-body text-black"
                  >{{  $edu->description }}</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="container bg-grey-50 py-16 md:py-20" id="contact">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Here's a contact form
  </h2>
  <h4
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Have Any Questions?
  </h4>
  <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
    <p class="font-body text-grey-10">
      Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit
      condimentum turpis nisl sem, viverra habitasse urna ante lobortis
      fermentum accumsan. Viverra habitasse urna ante lobortis fermentum
      accumsan.
    </p>
  </div>
  <form class="mx-auto w-full pt-10 sm:w-3/4">
    <div class="flex flex-col md:flex-row">
      <input
        class="mr-3 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
        placeholder="Name"
        type="text"
        id="name"
      />
      <input
        class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
        placeholder="Email"
        type="text"
        id="email"
      />
    </div>
    <textarea
      class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8"
      placeholder="Message"
      id="message"
      cols="30"
      rows="10"
    ></textarea>
    <button
      class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20"
    >
      Send
      <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
    </button>
  </form>
  <div class="flex flex-col pt-16 lg:flex-row">
    <div
      class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3"
    >
      <div class="flex items-center">
        <i class="bx bx-phone text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Phone
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        ...
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-envelope text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Email
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        muhammadnurfajri889@gmail.com
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-map text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          My Address
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        ...
      </p>
    </div>
  </div>
</div>

<div
  class="relative bg-primary bg-cover bg-center bg-no-repeat py-16 bg-blend-multiply lg:py-24"
  style="background-image: url(/img/bg-cta.jpg)"
>
  <div class="container relative z-30">
    <h3
      class="text-center font-header text-3xl uppercase leading-tight tracking-wide text-white sm:text-4xl lg:text-5xl"
    >
      Kee <span class="font-bold">up-to-date</span> <br />
      with what I'm up to
    </h3>
    
  </div>
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

    </div>

    <script src="/js/main.js"></script>
  </body>
</html>
