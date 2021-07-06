<a href="{{ $href }}"
    class="items-center block mb-8 text-4xl text-green-800 bg-white border-4 border-green-800 rounded-lg shadow-lg">
    <div class="flex items-center px-8 py-6 -mb-2">
        @if ($icon)
            <div class="pr-6"><i class="material-icons-outlined">{{ $icon }}</i></div>
        @endif
        <div class="w-full text-center">{{ $text }}</div>
    </div>
</a>
