
<x-app-layout>
<div class="">
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
<form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
    
    @csrf
    <div class="mb-4">
        <label for="nom_events" class="block text-gray-700 font-bold">Nom de l'événement:</label>
        <input type="text" name="nom_events" id="nom_events" class="form-input mt-1 block w-full" placeholder="Nom de l'événement">
    </div>
    <div class="mb-4">
        <label for="date_events" class="block text-gray-700 font-bold">Date de l'événement:</label>
        <input type="date" name="date_events" id="date_events" class="form-input mt-1 block w-full">
    </div>
    <div class="mb-4">
        <label for="prix_events" class="block text-gray-700 font-bold">Prix de l'événement:</label>
        <input type="text" name="prix_events" id="prix_events" class="form-input mt-1 block w-full" placeholder="Prix de l'événement">
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 font-bold">Image:</label>
        <input type="file" name="image" id="image" class="form-input mt-1 block w-full">
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enregistrer</button>
</form>
</div>
</x-app-layout>