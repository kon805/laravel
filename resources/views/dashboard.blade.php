<x-app-layout>
   *<x-slot name="header"  >
    <h2 class="font-semibold text-xl text-red-600 leading-tight ">
        {{ __('Bienvenue sur notre site') }}
    </h2>
</x-slot>
<div class="mx-auto max-w-7xl py-7 sm:px-6 lg:px-8  bg-gradient-to-r from-amber-50 to-red-700 mt-5 animate-pulse">
    <!-- Your content --> 
</div>


    
<div class="bg-red-800">
    <div class="mx-auto max-w-8xl py-20 sm:px-6 sm:py-32 lg:px-8">
      <div class="relative isolate overflow-hidden bg-red-700 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
        <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
          <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
          <defs>
            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
              <stop stop-color="white" />
              <stop offset="1" stop-color="white" />
            </radialGradient>
          </defs>
        </svg>
        <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
          <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Boost your productivity.<br>Start using our app today.</h2>
          <p class="mt-6 text-lg leading-8 text-gray-300">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
            <a href="{{route('form')}}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
            <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
          </div>
        </div>
        <div class="relative mt-16 h-80 lg:mt-8">
          <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="img/toko.jpg" alt="App screenshot" width="1824" height="1080">
        </div>
      </div>
    </div>
</div>
  

<div class="bg-gray-100">


    <div class="mx-auto max-w-7xl  px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
        <h2 class="text-2xl font-bold text-gray-900">Les meilleuers évènnements</h2>
  
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
          <div class="group relative">
            <div class="relative h-150 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="img/lyne1.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Fashion events
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">know how to dress is of the art</p>
          </div>
          <div class="group relative">
            <div class="relative h-150 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="img/FLO.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                photo shooting
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Make of pretty photo </p>
          </div>
          <div class="group relative">
            <div class="relative h-150 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="img/nissie.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Travel
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
     
</div>   

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Trusted by the world’s most innovative teams</h2>
      <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
       <a href=""> <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48"></a>
       <a href=""><img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48"> </a>
        <a href=""><img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48"></a>
        <a href=""><img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48"></a>
       <a href=""> <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48"></a>
      </div>
    </div>
</div>
  

<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8  bg-gradient-to-r from-orange-600 to-amber-50 mt-5 animate-pulse">
    <!-- Your content --> 
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</div> 





<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
      <div class="flex flex-col items-center justify-center">
        <h2 class="text-4xl font-bold mb-4 text-center">
          Get Started with Tailwind CSS
        </h2>
        <p class="text-gray-600 mb-8 text-center">
          Learn how to use Tailwind CSS to quickly and easily style your web
          projects.
        </p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Start Learning Now
        </button>
      </div>
    </div>
</section>

    

<div class=" flex justify-center items-center ">

        <!-- First Layer -->
         <div class="bg-red-800 space-y-6 text-white mx-auto rounded-xl shadow-md w-full max-w-8xl p-5 sm:px-10 [&_*]:transition [&_*]:ease-linear [&_*]:duration-200">
        <!-- Second Layer -->
          <div>
            <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 [&>*>h1]:text-2xl [&>*>h1]:font-semibold [&>*>h1]:my-5 [&>*>h1]:px-4">
        <!-- Navigation -->
              <div>
                   <h1>About the store</h1>
                   <ul class="[&>*]:mb-2  [&>*]:px-4 [&>*]:py-2 [&>*]:rounded-md [&>*]:cursor-pointer [&>*:hover]:bg-blue-400 [&>*]:w-fit">
                      <li><a href="">Home</a></li>
                      <li><a href="">Become a customer</a></li>
                      <li><a href="">About us</a></li>
                      <li><a href="">FAQ</a></li>
                      <li><a href="">Return policy</a></li>
                      <li><a href="">Contact us</a></li>
                   </ul>
              </div>
            <!-- Languages -->
              <div>
                 <h1>Language</h1>
                 <ul class="flex items-center flex-wrap  [&>*]:px-4 [&>*]:py-2 [&>*]:rounded-md [&>*]:cursor-pointer [&>*:hover]:bg-blue-400 [&>*]:font-semibold [&>*:hover]:font-bold [&>*]:w-fit">
                     <li>Deutsch</li>
                     <li>English</li>
                     <li>Espanol</li>
                     <li>Francais</li>
                     <li>Indonesian</li>
                     <li>italian</li>
                     <li>Nederlands</li>
                     <li>Polnisch</li>
                     <li>Portugues</li>
                     <li>pyccknn</li>
                     <li>Tieng viiet</li>
                     <li>Tukkce</li>
                 </ul>
            </div>
            <!-- Social Media -->
            <div>
               <h1>Get in touch</h1>
               <div class="flex items-center gap-8 px-4 sm:px-10 text-2xl mb-4 font-semibold [&>*]:cursor-pointer [&>*:hover]:text-blue-400">
                  <div>
                     <iconify-icon icon="lucide:facebook"></iconify-icon>
                  </div>
        
                  <div>
                     <iconify-icon icon="lucide:twitter"></iconify-icon>
                  </div>
        
                  <div>
                     <iconify-icon icon="lucide:linkedin"></iconify-icon>
                  </div>
                  <div>
                    <iconify-icon icon="ic:baseline-whatsapp"></iconify-icon>
                 </div>
                 <div>
                    <iconify-icon icon="ic:baseline-snapchat"></iconify-icon>
                 </div>
             </div>
          </div>
        </div>
            <!-- Policy and Privacy -->
         <div>
            <ul class="flex items-center justify-center flex-wrap gap-4 [&>*]:cursor-pointer text-slate-500 [&>*:hover]:text-white">
                <li>Terms of purchase</li>
                <li>Security and privacy</li>
                <li>Newsletter</li>
            </ul>
          </div>
        </div>
        </div>
        
            <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</div> 
</x-app-layout>
