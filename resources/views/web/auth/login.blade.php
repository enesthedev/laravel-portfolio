<x-layout :isAdmin="true" :description="__('Sign-in to :applicationName Dash', ['applicationName' => env('APP_NAME')])">
    <hr class="mt-3"/>
    <div class="mt-4">
        <form>
            <div class="w-full grid grid-cols-2 gap-4">
                <div class="mt-4">
                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">E-Posta Adresi</label>
                    <input type="email" name="email" value="" required="required" autocomplete="email" class="text-sm w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-300 dark:focus:border-blue-500 focus:outline-none focus:ring focus:ring-blue-300 dark:placeholder-gray-400 focus:ring-opacity-40">
                </div>
                <div class="mt-4">
                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Şifre</label>
                    <input type="email" name="email" value="" required="required" autocomplete="email" class="text-sm w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-300 dark:focus:border-blue-500 focus:outline-none focus:ring focus:ring-blue-300 dark:placeholder-gray-400 focus:ring-opacity-40">
                </div>
            </div>
        </form>
    </div>
</x-layout>
