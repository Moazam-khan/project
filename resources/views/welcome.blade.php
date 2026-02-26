
 
<x-layout title="Daily Tasks" class="bg-green-200" id="home-page">
    <!-- <h1>Welcome to My Website without layout</h1>
    <p>This is the home page of my Laravel application.</p> -->

    

    <h1>My Daily Tasks</h1>

    <!-- Step 1: Debug the array -->
    {{-- <pre>{{ dd($task) }}</pre> --}}


    <!-- Step 2: Forelse loop -->
       <h2>Forelse Example (Safe for empty arrays)</h2>
    <ul>
        @forelse ($task as $t)
            <li>{{ $t }}</li>
        @empty
            <li>No tasks found!</li>
        @endforelse
    </ul>

    <!-- Step 3: Foreach loop -->
    <h2>Foreach Example</h2>
    <ul>
        @foreach ($task as $t)
            <li>{{ $t }}</li>
        @endforeach
    </ul>

    <!-- Step 4: For loop with index -->
    <h2>For Loop with Index</h2>
    <ul>
        @for ($i = 0; $i < count($task); $i++)
            <li>{{ $i + 1 }}. {{ $task[$i] }}</li>
        @endfor
    </ul>

    <!-- Step 5: Using Card component (Best Practice) -->
    <h2>Card Component Example</h2>
    <div class="space-y-2">
        @foreach ($task as $t)
            <x-card class="bg-white">
                {{ $t }}
            </x-card>
        @endforeach
    </div>

</x-layout>