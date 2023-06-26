<x-app-layout>
    <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Upcoming Classes</h2>
    </x-slot>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
          <div class="max-w-2xl divide-y p-6 text-gray-900">
            @forelse ($scheduledClasses as $class)
            <div class="py-6">
              <div class="flex justify-between gap-6">
                <div>
                  <p class="text-2xl font-bold text-purple-700">{{ $class->classType->name }}</p>
                  <span class="text-sm text-slate-600">{{ $class->classType->minutes }} minutes</span>
                </div>
                <div class="flex-shrink-0 text-right">
                  <p class="text-lg font-bold">{{ $class->date_time->format('g:i a') }}</p>
                  <p class="text-sm">{{ $class->date_time->format('jS M') }}</p>
                </div>
              </div>
              <div class="mt-1 text-right">
                <form method="post" action="{{ route('schedule.destroy', $class) }}">
                  @csrf @method('DELETE')
                  <x-danger-button class="px-3 py-1">Cancel</x-danger-button>
                </form>
              </div>
            </div>
            @empty
            <div>
              <p>You don't have any upcoming classes</p>
              <a class="mt-6 inline-block text-sm underline" href="{{ route('schedule.create') }}"> Schedule now </a>
            </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
