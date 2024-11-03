@props(['active' => false])

<li>
    <a {{ $attributes }} class="flex items-center p-2 {{ $active ? "bg-gray-100 dark:hover:bg-gray-700 rounded-lg" : "text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700" }} group" aria-current="{{ $active ? "page" : false }}">
        {{ $slot }}
    </a>
</li>
