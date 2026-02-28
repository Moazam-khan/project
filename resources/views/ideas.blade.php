<x-layout>

    <h1>Forms</h1>

    <!-- Idea submission form -->
    <form action="/ideas" method="POST">
        @csrf <!-- CSRF protection -->

        <div class="col-span-full mt-4">
            <label for="idea" class="block text-sm/6 font-medium text-black">Idea</label>
            <div class="mt-2">
                <textarea id="idea" name="idea" rows="3"
                    class="block w-full outline-amber-400 rounded-md bg-white/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                    placeholder="Write your idea here..."></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences describing your idea.</p>
        </div>

        <div class="col-span-full mt-4">
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                Submit
            </button>
        </div>

    </form>

    <!-- Display submitted ideas -->
    @if (count($ideas))
        <div class="mt-6 border-t border-gray-300">
            <h2 class="text-lg font-medium text-gray-900 mt-4">Submitted Ideas</h2>
            <ul role="list" class="divide-y divide-gray-200">
                @foreach ($ideas as $idea)
                    <li class="mt-6">{{ $idea }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Button to clear all ideas -->
    <div class="mt-4">
        <a href="/delete-ideas"
           class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500">
            Clear All Ideas
        </a>
    </div>

</x-layout>