<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Contact') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white p-6">

          <div class="min-w-full align-middle overflow-x-scroll">
            <table class="min-w-full border divide-y divide-gray-200">
              <thead>
                <tr>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Location</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Email</span>
                  </th>
                  <th class="bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Whatsapp</span>
                  </th>
                  <th class="w-56 bg-gray-50 px-6 py-3 text-left">
                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Action</span>
                  </th>
                </tr>
              </thead>

              <tbody class="bg-white divide-y divide-gray-200 divide-solid">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
