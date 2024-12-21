<div class="space-x-4 min-h-16 flex items-center">
    <x-layout::navigation.link :href="route('home')" :active="request()->routeIs('home')">
        {{ __('Home') }}
    </x-layout::navigation.link>
    <x-layout::navigation.link :href="route('about')" :active="request()->routeIs('about')">
        {{ __('About Us') }}
    </x-layout::navigation.link>
</div>
