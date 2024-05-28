<x-app-layout>
<div class="overflow-x-auto">
    <div class="w-full overflow-y-auto">
        <h1 class="tex-white text-3xl font-bold p-2" >Tous les membres</h1>
      <table class="w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-900 text-white">
          <tr>
            <th class="border border-gray-900 px-4 py-2">ID</th>
            <th class="border border-gray-900 px-4 py-2">Nom</th>
            <th class="border border-gray-900 px-4 py-2">Prénom</th>
            <th class="border border-gray-900 px-4 py-2">Email</th>
            <th class="border border-gray-900 px-4 py-2">events</th>
      
            <th class="border border-gray-900 px-4 py-2">Groupe</th>
            <th class="border border-gray-900 px-4 py-2">Supprimer</th>
            <th class="border border-gray-900 px-4 py-2">Modifier</th>
          </tr>
        </thead>
        <tbody>
         
             @foreach ($mois as $moi)
             <tr>
              <td class="border border-gray-300 px-4 py-2">{{$moi->id}}</td>
              <td class="border border-gray-300 px-4 py-2">{{$moi->nom}}</td>
              <td class="border border-gray-300 px-4 py-2">{{$moi->prenom}}</td>
              <td class="border border-gray-300 px-4 py-2">{{$moi->mail}}</td>
              <td class="border border-gray-300 px-4 py-2">{{$moi->events}}</td>
              <td class="border border-gray-300 px-4 py-2">{{$moi->group}}</td>
              <td class="border border-gray-300 px-4 py-2">
                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Supprimer</button>
              </td>
              <td class="border border-gray-300 px-4 py-2">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Modifier</button>
              </td>
            </tr>
             @endforeach 
          
          
       
          <!-- Ajouter d'autres lignes de données ici -->
        </tbody>
      </table>
    </div>
</div>



<div class="overflow-x-auto">
    <div class="w-full overflow-y-auto">
        <h1 class="tex-white text-3xl font-bold p-2" >Evènnement en cours</h1>
      <table class="w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-900 text-white">
          <tr>
            <th class="border border-gray-900 px-4 py-2">ID</th>
            <th class="border border-gray-900 px-4 py-2">Nom_evènnement</th>
            <th class="border border-gray-900 px-4 py-2">date_evennement</th>
            <th class="border border-gray-900 px-4 py-2">participation</th>
            <th class="border border-gray-900 px-4 py-2">image</th>
      
      
            <th class="border border-gray-900 px-4 py-2">Supprimer</th>
            <th class="border border-gray-900 px-4 py-2">Modifier</th>
          </tr>
        </thead>
        <tbody>
         
            
             <tr>
              <td class="border border-gray-300 px-4 py-2"></td>
              <td class="border border-gray-300 px-4 py-2"></td>
              <td class="border border-gray-300 px-4 py-2"></td>
              <td class="border border-gray-300 px-4 py-2"></td>
              <td class="border border-gray-300 px-4 py-2"></td>
            
              <td class="border border-gray-300 px-4 py-2">
                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Supprimer</button>
              </td>
              <td class="border border-gray-300 px-4 py-2">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Modifier</button>
              </td>
            </tr>
      
          
          
       
          <!-- Ajouter d'autres lignes de données ici -->
        </tbody>
      </table>
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
  