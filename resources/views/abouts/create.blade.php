<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Create About') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white p-6">
          <form action="{{ route('abouts.store') }}" method="POST">
            @csrf

            <div>
              <x-input-label for="description" value="Description" />
              <x-text-input id="description" name="description" value="{{ old('description') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="title" value="Title" />
              <x-text-input id="title" name="title" value="{{ old('title') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="subTitle" value="Sub Title" />
              <x-text-input id="subTitle" name="subTitle" value="{{ old('subTitle') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('subTitle')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="image" value="Image Profile" />
              <x-text-input id="image" name="image" value="{{ old('image') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="birthday" value="Birthday" />
              <x-text-input id="birthday" name="birthday" value="{{ old('birthday') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="website" value="Website" />
              <x-text-input id="website" name="website" value="{{ old('website') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('website')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="phone" value="Phone Number" />
              <x-text-input id="phone" name="phone" value="{{ old('phone') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="degree" value="Degree" />
              <x-text-input id="degree" name="degree" value="{{ old('degree') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('degree')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="email" value="Email" />
              <x-text-input id="email" name="email" value="{{ old('email') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="city" value="City" />
              <x-text-input id="city" name="city" value="{{ old('city') }}" type="text"
                class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="myPersonalInfo" value="My Personal Info" />
              <x-text-input id="myPersonalInfo" name="myPersonalInfo" value="{{ old('myPersonalInfo') }}"
                type="text" class="block mt-1 w-full" />
              <x-input-error :messages="$errors->get('myPersonalInfo')" class="mt-2" />
            </div>

            <div class="mt-4">
              <x-primary-button>
                Save
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
