<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as Admin!") }}
                    <br><br>
{{--                    <button class="btn"><a href=" {{ route('notify') }} ">New Registration Notificatin</a></button>--}}

{{--                    @forelse($notifications as $notification)--}}
{{--                        <div class="bg-blue-300 p-3">--}}
{{--                            <b>{{ $notification->name }}</b> is registered !!!--}}
{{--                        </div>--}}
{{--                    @empty--}}
{{--                        <div class="bg-blue-300 p-3">--}}
{{--                            no record found !!!--}}
{{--                        </div>--}}
{{--                    @endforelse--}}


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
