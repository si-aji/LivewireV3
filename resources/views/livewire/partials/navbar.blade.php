<div>
    {{-- Stop trying to control. --}}
    <div class="">
        <ul class=" flex flex-row gap-4 fixed top-4 w-full justify-center">
            <li>
                <a href="{{ route('index') }}" class="{{ isset($wmenu) && $wmenu === 'home' ? 'text-blue-500' : '' }}" wire:navigate>Home</a>
            </li>
            <li>
                <a href="{{ route('profile.index') }}" class="{{ isset($wmenu) && $wmenu === 'profile' ? 'text-blue-500' : '' }}" wire:navigate>Profile</a>
            </li>
        </ul>
    </div>
</div>
