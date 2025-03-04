<x-app-layout>
<div class="max-w-lg mx-auto bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
    <form method="POST" action="{{route('tasks.store')}}">
        @csrf
        @include('components.form-fields')

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300">
            Registrarse
        </button>
    </form>
</div>
</x-app-layout>
