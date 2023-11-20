<x-app-layout>
    <div class="container py-5">
        @include('dashboard.profile.partials.update-profile-information-form')
        @include('dashboard.profile.partials.update-password-form')
        @include('dashboard.profile.partials.delete-user-form')
    </div>
</x-app-layout>