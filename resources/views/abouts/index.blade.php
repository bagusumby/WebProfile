<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Abouts') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white p-6">

          <a href="{{ route('abouts.create') }}"
            class="mb-4 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
            Create
          </a>

          <div class="min-w-full align-middle overflow-x-scroll">
            <table class="min-w-full table overflow-y-scroll border divide-y divide-gray-200">
              <thead>
                <tr>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span
                      class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Description</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Title</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Sub Title</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Image</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Birthday</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Website</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Phone</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Degree</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Email</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">City</span>
                  </th>
                  <th class="w-56 bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Action</span>
                  </th>
                </tr>
              </thead>

              <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                @foreach ($abouts as $about)
                  <tr class="bg-white">
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->description }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->title }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->subTitle }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->image }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->birthday }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->website }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->phone }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->degree }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->email }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{ $about->city }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      <a href="{{ route('abouts.edit', $about) }}"
                        class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                        Edit
                      </a>
                      <form action="{{ route('abouts.destroy', $about) }}" method="POST"
                        onsubmit="return confirm('Are you sure?')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <x-danger-button>
                          Delete
                        </x-danger-button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
