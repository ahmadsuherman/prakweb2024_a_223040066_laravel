<x-layout-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our Posts
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum quisquam ex delectus quibusdam beatae rerum fugit voluptas iste nulla adipisci dolor, perspiciatis magnam rem nemo officiis pariatur, eaque commodi nisi?</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
                @forelse($posts as $post)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $post->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->category->name }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/dashboard/posts/{{ $post->slug }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                        <a href="#" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline ms-2 me-2">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center p-4">Posts Not Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout-dashboard>


