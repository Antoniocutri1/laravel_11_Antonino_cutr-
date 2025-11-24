<x-layout>

    <x-navbar/>


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


</x-layout>