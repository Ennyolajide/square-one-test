<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="border-b border-grey-lighter pb-8 sm:pb-12">
                      <!-- Validation Errors -->
                      <x-auth-validation-errors class="mb-4" :errors="$errors" />
                      @if(session('status'))
                        <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                          {{ __('Post Published successfully.') }}
                        </div>
                      @endif
                      <form class="mt-4" method="POST" action="{{ route('user.post.create') }}"> 
                        @csrf
                        <div>
                            <label for="message" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-400">Title</label>
                            <textarea id="title" name="title" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title..."></textarea>
                        </div>

                        <div class="block mt-4">
                            <label for="message" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-400">Description</label>
                            <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description..."></textarea>
                        </div>
                        <br/>
                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Post') }}
                            </x-button>
                        </div>
                        <br/>
                      </form>
                    </div>
                </div>
                
                  
            </div>
        </div>
    </div>
</x-app-layout>
