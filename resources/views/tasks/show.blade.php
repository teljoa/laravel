<x-app-layout>
    <div class="flex justify-center items-center min-h-screen">
        <div
            class="max-w-2xl mx-auto mt-10 p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg border border-gray-200 dark:border-gray-700">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">{{__('Id')}}: {{ $task->id }}

            </h2>

            <dl class="space-y-4">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">{{__('task')}}: {{ $task->name }}
                    {{$task->desciption}}
                    <div class="grid grid-cols-3 items-center">
                        <dt class="text-gray-500 dark:text-gray-400">{{__('User')}}:</dt>
                        <dd class="col-span-2 text-lg font-semibold text-gray-900 dark:text-white">
                            {{ $task->desciption }}
                        </dd>
                    </div>
                    <div class="grid grid-cols-3 items-center">
                        <dt class="text-gray-500 dark:text-gray-400">{{__('Email')}}:</dt>
                        <dd class="col-span-2 text-lg font-semibold text-gray-900 dark:text-white">{{ $task->email }}
                        </dd>
                    </div>
            </dl>

            <div class="mt-6 flex justify-between space-x-4">
                <a href="{{ route('tasks.index') }}"
                    class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    {{__('Back')}}
                </a>

                <a href="{{ route('tasks.edit', $tasks->id) }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    {{__('Edit')}}
                </a>

                <form action="{{ route('tasks.destroy', $tasks->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        {{__('Delete')}}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
