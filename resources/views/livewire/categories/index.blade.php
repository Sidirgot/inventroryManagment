<div>
    <x-table.wrapper>
        <x-table.table>
            <x-table.thead>
                <tr>
                    <x-table.table-th>{{ __('form.title') }}</x-table.table-th>
                    <x-table.table-th>{{ __('form.status') }}</x-table.table-th>
                    <x-table.table-th class="text-center">{{ __('form.numberofproducts') }}</x-table.table-th>
                    <x-table.table-th></x-table.table-th>
                </tr>
            </x-table.thead>
            <x-table.tbody>

                @forelse ($categories as $category)
                    <tr>
                        <x-table.table-td class="w-6/12">
                            {{ $category->title }}
                        </x-table.table-td>
                        <x-table.table-td class="w-10 text-center">
                                @if ($category->status)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                        Active
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                        Inactive
                                    </span>
                                @endif
                        </x-table.table-td>
                        <x-table.table-td class="text-sm text-gray-500 text-center w-40">
                            2
                        </x-table.table-td>
                        <x-table.table-td class="text-right text-sm font-medium flex items-center justify-center">
                            <a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white rounded p-1 transition duration-300 ease-in-out mx-1">
                                <x-table.editSvg />
                            </a>

                            <a href="#" class="bg-red-500 hover:bg-red-700 text-white rounded p-1 transition duration-300 ease-in-out mx-1">
                                <x-table.deleteSvg />
                            </a>
                        </x-table.table-td>
                    </tr>
                @empty
                    <div>{{ __('form.nodata') }}</div>
                @endforelse

            </x-table.tbody>
        </x-table.table>
    </x-table.wrapper>

    <div class="my-4">
        {{ $categories->links() }}
    </div>
</div>
