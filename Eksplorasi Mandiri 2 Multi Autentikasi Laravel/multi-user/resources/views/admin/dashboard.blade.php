<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <!-- Bagian Pop-up -->
    {{-- @if(session('loginSuccess'))
    <div class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50" id="popup">
        <div class="bg-white p-6 rounded-lg">
            <p class="text-gray-900">You're logged in!</p>
            <button class="mt-4 px-5 py-2 bg-black text-white rounded hover:bg-gray-800 focus:outline-none focus:bg-gray-800 flex items-center justify-center" id="closePopup">Close</button>
        </div>
    </div>
    @endif --}}

   
    
        
</x-app-layout>
