<x-dropdown-laracast>
    <x-slot name="trigger">
        <button @click="show = !show" class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
        </button>
    </x-slot>

    <x-dropdown-item-laracast href="/" :active="request()->routeIs('posts')">All</x-dropdown-item-laracast>
    @foreach($categories as $category)
        <x-dropdown-item-laracast
            href="/?category={{$category->slug}}&{{http_build_query(request()->except('category', 'page'))}}"
            {{--                        :active="isset($currentCategory) && $currentCategory->is($category)"--}}
            :active="request()->is('categories/' . $category->slug)"
        >
            {{ ucwords($category->name) }}
        </x-dropdown-item-laracast>
    @endforeach
</x-dropdown-laracast>
