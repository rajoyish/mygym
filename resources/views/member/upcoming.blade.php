<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Upcoming Classes
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="max-w-2xl divide-y p-6 text-gray-900">
          @forelse ($bookings as $class)
          <div class="py-6">
            <div class="flex justify-between gap-6">
              <div>
                <p class="text-2xl font-bold text-purple-700">{{ $class->classType->name }}</p>
                <p class="text-sm">{{ $class->instructor->name }}</p>
              </div>
              <div class="flex-shrink-0 text-right">
                <p class="text-lg font-bold">{{ $class->date_time->format('g:i a') }}</p>
                <p class="text-sm">{{ $class->date_time->format('jS M') }}</p>
              </div>
            </div>
            <div class="mt-1 text-right">
              <form method="post" action="{{ route('booking.destroy', $class->id ) }}">
                @csrf
                @method('DELETE')
                <x-danger-button class="px-3 py-1" onclick="confirm('Are you sure to cancel this class?')">Cancel</x-danger-button>
              </form>
            </div>
          </div>
          @empty
          <div>
            <p>You have no upcoming bookings.</p>
          </div>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</x-app-layout>