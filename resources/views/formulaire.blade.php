
<x-app-layout>


    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Ajout de membre</h2>
          @if ($errors->any())
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
              <strong class="font-bold"><ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                      </ul></strong>
              <span class="block sm:inline">
                      votre opération montre des erreurs
                  </span>
           
           @endif
           @if (session('success'))
           <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">  {{ session('success') }}</strong>
            <span class="block sm:inline">Votre opération a été effectuée avec succès.</span>
          </div>
           
             
    
           @endif
        </div>
        
              
   
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
           
          <form class="space-y-6" action="/formulaire" method="post">
            @csrf
            <div>
                <label for="nom" class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
                <div class="mt-2">
                  <input id="nom" name="nom" type="text"   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div>
                <label for="prenom" class="block text-sm font-medium leading-6 text-gray-900">Prenom</label>
                <div class="mt-2">
                  <input id="prenom" name="prenom" type="text"   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" name="mail" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              
                <label for="events" class="block text-sm font-medium leading-6 text-gray-900">events</label>
              <div class="">
                <input id="text" name="events" type="text"   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div>
                <label for="group" class="block text-sm font-medium leading-6 text-gray-900">Group</label>
                <div class="mt-2">
                  <input id="group" name="group" type="text"   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
             </div>
             <div class="relative">

    </div>
      
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-white hover:text-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
          </form>
      
         
        </div>
      </div>
    
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