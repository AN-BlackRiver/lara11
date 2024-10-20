<x-layout>
    <x-slot:headding>
        Log In
    </x-slot:headding>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">



                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">

                            <x-form-input value="{{old('email')}}"
                                          type="email"
                                          name="email"
                                          id="email"
                                          autocomplete="email"
                                          required/>

                            <x-form-error name="last_name"/>

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">

                            <x-form-input type="password"
                                          name="password"
                                          id="password"
                                          autocomplete="password"
                                          required/>

                            <x-form-error name="password"/>

                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-from-button>Log in</x-from-button>
        </div>
    </form>

</x-layout>

