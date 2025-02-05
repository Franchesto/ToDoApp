<div>
    <!-- Trigger Button -->
    <button wire:click="toggleForm" class="bg-blue-500 text-white py-2 px-4 rounded">
        Add Todo
    </button>

    <!-- Floating Form (Modal) -->
    @if($showForm)
        <div class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
            <div class="bg-white p-6 rounded shadow-lg w-96">
                <h2 class="text-xl font-semibold mb-4">Add New Todo</h2>
                <form method="post" action={{ route('todos.store') }}>
                    @csrf
                    <!-- Form Fields -->
                    <input type="hidden" name="id" value="$todo->id">
                    <input type="date" placeholder="Due Date" class="border p-2 mb-4 w-full" name="date" />
                    <input type="text" class="border p-2 mb-4 w-full" placeholder="Todo Title" name="title">
                    <textarea class="border p-2 mb-4 w-full" placeholder="Todo Description" name="description"></textarea>
                    <button class="bg-green-500 text-white py-2 px-4 rounded">Save Todo</button>
                </form>

                <!-- Close Button -->
                <button wire:click="toggleForm" class="mt-4 text-red-500">Close</button>
            </div>
        </div>
    @endif
</div>
