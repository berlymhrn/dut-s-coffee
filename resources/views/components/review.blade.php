<div class="text-center p-2 rounded-lg">
    <img src="{{ $image }}" alt="review" class="w-28 h-28 object-cover mx-auto rounded-full" />
    <div class="mt-2 sm:mt-6">
        <p class="text-gray-800 text-lg font-medium">
            {{ $review }}
        </p>
    </div>

    <!-- Star -->
    <div class="flex-shrink-0 flex justify-center space-x-1 mt-3">
        {{ $star }}
    </div>
</div>
