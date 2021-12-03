<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mx-auto bg-warning py-6" style="width:150px">Login Successful</div><br><br>
    <div class="container">
    <button type="button" class="ml-auto" style="width:900px ">Farming Information</button>
    <button type="button" class="ml-auto" style="width:330px">E-commerce World</button>
</div>
</x-app-layout>

