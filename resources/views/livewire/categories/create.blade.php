<div class="flex items-center">
    <div class="w-4/12 self-start">
        <h1>Creating a new product category</h1>
    </div>
    <form wire:submit.prevent="save"  class="bg-white rounded shadow-xl flex-1 border">
        <div class="px-4 py-2">
            <label for="title" class="block my-2">{{ __('form.title') }}</label>
            <input wire:model="title" class="p-2 rounded bg-gray-200 w-6/12" />
        </div>

        <div class="px-4 py-2">
            <label for="title" class="block my-2">{{ __('form.status') }}</label>
            <select wire:model="status" class="p-2 rounded bg-gray-200 w-6/12">
                <option value="1">{{ __('form.active') }}</option>
                <option value="0">{{ __('form.inactive') }}</option>
            </select>
        </div>

        <div class="bg-gray-100 text-right py-3 px-2">
            <button type="submit" class="bg-gray-800 px-4 py-2 rounded hover:bg-gray-900 transition duration-300 ease-in-out text-white">
                {{ __('form.save') }}
            </button>
        </div>
    </form>
</div>
