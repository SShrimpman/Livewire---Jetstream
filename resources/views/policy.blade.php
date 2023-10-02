{{-- <x-guest-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div class="flex items-center">
                <a wire:navigate href="{{ route('dashboard') }}">
                    <x-application-mark class="block h-9 w-auto" />
                </a>
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg prose dark:prose-invert">
                Privacy Policy: We care about your data.
            </div>
        </div>
    </div>
</x-guest-layout> --}}

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-policy />
            </div>
        </div>
    </div>
</x-app-layout>
