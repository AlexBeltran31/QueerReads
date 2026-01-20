<x-app-layout>
    <section class="relative bg-black min-h-screen pt-1 pb-5">
        <div class="relative mx-w-5xl mx-auto bg-white rounded-3xl shadow-xl px-10 py-10">

            <h1 class="text-2xl font-semibold mb-10">
                Edit Profile
            </h1>

            <div class="space-y-12">

                <div class="max-x-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>

                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>

            </div>

        </div>
    </section>
</x-app-layout>
