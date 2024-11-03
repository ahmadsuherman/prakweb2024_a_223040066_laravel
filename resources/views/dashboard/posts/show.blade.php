<x-layout-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="pb-16 lg:pt-12 lg:pb-16 bg-white dark:bg-gray-900 antialiased rounded-lg">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class=" w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/dashboard/posts" class="font-medium text-xs text-blue-600 hover:underline">&laquo; Back to all posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-2">{{ $post->created_at->diffForHumans() }}</p>
                                <a href="#">
                                    <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
                </header>
                {!! $post->body !!}
            </article>
        </div>
    </main>
</x-layout-dashboard>
