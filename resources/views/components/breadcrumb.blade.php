@if(isset($items) && count($items) > 0)
<div class="bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <nav class="flex items-center space-x-2 text-sm" aria-label="Breadcrumb">
            @foreach($items as $index => $item)
                @if($item['url'])
                    <a href="{{ $item['url'] }}" class="text-primary hover:text-blue-800 dark:text-secondary dark:hover:text-yellow-400 transition">
                        {{ $item['name'] }}
                    </a>
                @else
                    <span class="text-gray-500 dark:text-gray-400">{{ $item['name'] }}</span>
                @endif

                @if($index < count($items) - 1)
                    <span class="text-gray-400 dark:text-gray-600">/</span>
                @endif
            @endforeach
        </nav>
    </div>
</div>
@endif
