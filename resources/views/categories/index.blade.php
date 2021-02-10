<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categories') }}
            </h2>

            <x-buttons.addNew>
                <x-slot name="displayText">
                    Add New
                </x-slot>
            </x-buttons.addNew>
        </div>
    </x-slot>

    <x-page.wrapper>
        <x-table.wrapper>
            <x-table.table>
                <x-table.thead>
                    <tr>
                        <x-table.table-th>Title</x-table.table-th>
                        <x-table.table-th>Status</x-table.table-th>
                        <x-table.table-th class="text-center">Number of Products</x-table.table-th>
                        <x-table.table-th></x-table.table-th>
                    </tr>
                </x-table.thead>
                <x-table.tbody>

                    <tr>
                        <x-table.table-td>
                            Regional Paradigm Technician
                        </x-table.table-td>
                        <x-table.table-td>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                Active
                            </span>
                        </x-table.table-td>
                        <x-table.table-td class="text-sm text-gray-500 text-center">
                            2
                        </x-table.table-td>
                        <x-table.table-td class="text-right text-sm font-medium flex items-center">
                            <a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white rounded p-1 transition duration-300 ease-in-out mx-1">
                                <x-table.editSvg />
                            </a>

                            <a href="#" class="bg-red-500 hover:bg-red-700 text-white rounded p-1 transition duration-300 ease-in-out mx-1">
                                <x-table.deleteSvg />
                            </a>
                        </x-table.table-td>
                    </tr>

                </x-table.tbody>
            </x-table.table>
        </x-table.wrapper>
    </x-page.wrapper>

</x-app-layout>