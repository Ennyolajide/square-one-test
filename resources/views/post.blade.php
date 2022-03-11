<x-home-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="border-b border-grey-lighter pb-8 sm:pb-12">
                        {{-- <span
                          class="mb-5 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green sm:mb-8">category</span> --}}
                          <div
                          class="ml-4 text-lg leading-9 font-semibold">
                          {{ $post->title }}
                        </div>
                        <br/>
                    </div>
                    <br/>
                    <div class="prose prose max-w-none border-b border-grey-lighter py-8 dark:prose-dark sm:py-12 mb-20">
                        <p>{{ $post->description }}</p>
                    </div>
                    <br/>
                    <div class="flex items-center">
                        <p class="pr-2 font-body font-light text-primary dark:text-white">
                            Publication date : {{ $post->publication_date->format("m/d/Y") }}
                        </p>
            
                    </div>
                </div>
                
                  
            </div>
        </div>
    </div>
    
</x-home-layout>
