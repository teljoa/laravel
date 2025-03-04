<!-- Nombre de usuario -->
<div class="mb-4">
    <label for="task" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{ __('Task') }}</label>
    <input type="text" id="task" name="task" placeholder="Tu usuario"
        value="{{ old('task', $task->task) }}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        @if(request()->routeIs('tasks.edit')) readonly @endif>
    @error('task')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>

<!-- Nombre -->
<div class="mb-4">
    <label for="name" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Name')}}</label>
    <input type="text" id="name" name="name" placeholder="Tu tarea" value="{{old('name', $task->name)}}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('name')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>

<!-- description -->
<div class="mb-4">
    <label for="description" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Description')}}</label>
    <input type="text" id="description" name="description" placeholder="Descricion"
        value="{{old('description', $task->description)}}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('description')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>

<!-- Correo Electrónico -->
<div class="mb-4">
    <label for="email" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Email')}}</label>
    <input type="email" id="email" name="email" placeholder="tuemail@example.com"
        value="{{old('email', $task->email)}}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('email')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>

<!-- Contraseña -->
<div class="mb-6">
    <label for="password" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Password')}}</label>
    <input type="password" id="password" name="password" placeholder="••••••••"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('password')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>
