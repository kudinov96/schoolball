<div class="p-6 sm:px-20 bg-white border-b border-gray-200">



    <div class="mt-4 mb-2">
        <ul class="flex border-b border-gray-200">
            <li wire:click="$set('type', null)" class="mr-4 cursor-pointer py-2 px-3 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 {{ empty($type) ? 'border-indigo-500 text-indigo-600 hover:text-indigo-700 hover:border-indigo-500' : '' }} {{ $type === null ? 'border-indigo-500 text-indigo-600 hover:text-indigo-700 hover:border-indigo-500' : '' }}">
                Все
            </li>
            @foreach($types as $typeItem)
            <li wire:click="$set('type', {{ $typeItem->id }})" class="mr-4 cursor-pointer py-2 px-3 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 {{ $typeItem->id == $type ? 'border-indigo-500 text-indigo-600 hover:text-indigo-700 hover:border-indigo-500' : '' }}">
                {{ $typeItem->name }}
            </li>
            @endforeach
        </ul>
    </div>





    <div class="mt-4 mb-2">
        <!-- Updated code with tailwind css styles -->
        <ul class="flex border-b border-gray-200">
            <li wire:click="$set('category', null)" class="mr-4 cursor-pointer py-2 px-3 border-b-2 border-transparent text-sm font-medium text-gray-500 {{ empty($category) ? 'border-indigo-500 text-indigo-600' : 'hover:text-indigo-700 hover:border-indigo-500' }}">
                Все категории
            </li>
            @foreach($categories as $cat)
            <li wire:click="$set('category', {{ $cat->id }})" class="mr-4 cursor-pointer py-2 px-3 border-b-2 border-transparent text-sm font-medium text-gray-500 {{ $category == $cat->id ? 'border-indigo-500 text-indigo-600' : 'hover:text-indigo-700 hover:border-indigo-500' }}">
                {{ $cat->name }}
            </li>
            @endforeach
        </ul>

        @if(!empty($object_category))
        <select multiple wire:model="object_category_id" class="mt-4 mb-2 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($object_category as $id => $name)
                <option value="{{ $id }}" {{ in_array($id, $object_category_id ?? []) ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select>

    @endif

    </div>



    <div class="mt-4 mb-2">
        <label for="region" class="block font-medium text-gray-700">Region:</label>
        <select id="region" name="region" class="form-select" wire:model="region" wire:change="loadCities">
            <option value="">Выберите регион</option>
            @foreach($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4 mb-2">
        <label for="city" class="block font-medium text-gray-700">City:</label>
        <select id="city" name="city" class="form-select" wire:model="city">
            <option value="">Выберите город</option>
            @if ($cities)
            @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
            @endif
        </select>
    </div>

<div class="mt-6">



    <div class="flex justify-between">
        <div>
            <input type="text" class="border rounded-lg px-4 py-2 mr-2" placeholder="Search by name" wire:model.debounce.500ms="searchName" />
            <input type="text" class="border rounded-lg px-4 py-2 mr-2" placeholder="Search by ID" wire:model.debounce.500ms="searchId" />
            <input type="text" class="border rounded-lg px-4 py-2 mr-2" placeholder="Price from" wire:model.debounce.500ms="priceFrom" />
            <input type="text" class="border rounded-lg px-4 py-2 mr-2" placeholder="Price to" wire:model.debounce.500ms="priceTo" />
        </div>
        <div class="mr-2">
            <input type="checkbox" class="mr-2 leading-tight" wire:model="active" /> Active
        </div>
    </div>

    <div class="mt-6">
        <button class="bg-indigo-500 text-white py-2 px-4 rounded-md" wire:click="find">Find</button>
    </div>


<table class="table-auto w-full">
<thead>
    <tr>
        <th class="px-4 py-2">
            <div class="flex items-center">
                <button wire:click="sortBy('id')">ID</button>
                @if ($sortBy === 'id')
                    @if ($sortDirection === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.293 9.707a1 1 0 0 0-1.414 0L10 14.586V3a1 1 0 1 0-2 0v11.586l-4.293-4.293a1 1 0 1 0-1.414 1.414l6 6a1 1 0 0 0 1.414 0l6-6a1 1 0 0 0 0-1.414z" clip-rule="evenodd" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.707 10.293a1 1 0 0 0 0 1.414L9 16.586V5a1 1 0 0 0-2 0v11.586l-4.293-4.293a1 1 0 0 0-1.414 1.414l6 6a1 1 0 0 0 1.414 0l6-6a1 1 0 0 0 0-1.414z" clip-rule="evenodd" />
                        </svg>
                    @endif
                @endif
            </div>
        </th>

        <th class="px-4 py-2">
            <div class="flex items-center">
                <button wire:click="sortBy('name')">Name</button>
                @if ($sortBy === 'name')
                    @if ($sortDirection === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.293 9.707a1 1 0 0 0-1.414 0L10 14.586V3a1 1 0 1 0-2 0v11.586l-4.293-4.293a1 1 0 1 0-1.414 1.414l6 6a1 1 0 0 0 1.414 0l6-6a1 1 0 0 0 0-1.414z" clip-rule="evenodd" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.707 10.293a1 1 0 0 0 0 1.414L9 16.586V5a1 1 0 0 0-2 0v11.586l-4.293-4.293a1 1 0 0 0-1.414 1.414l6 6a1 1 0 0 0 1.414 0l6-6a1 1 0 0 0 0-1.414z" clip-rule="evenodd" />
                        </svg>
                    @endif
                @endif
            </div>
        </th>
        <th class="px-4 py-2">
            <div class="flex items-center">Price</div>
        </th>
        <th class="px-4 py-2">
            <div class="flex items-center">Status</div>
        </th>
        <th class="px-4 py-2">
            <div class="flex items-center">Actions</div>
        </th>
    </tr>
</thead>

<tbody>
    @foreach($items as $item)
    <tr>
        <td class="border px-4 py-2">{{ $item->id }}</td>
        <td class="border px-4 py-2">{{ $item->name }}</td>
        <td class="border px-4 py-2">{{ number_format($item->price, 2) }}</td>
        <td class="border px-4 py-2">{{ $item->status ? 'Active' : 'Not-Active' }}</td>
        <td class="border px-4 py-2">{{ $item->source_url }}</td>

    </tr>
    @endforeach
</tbody>
</table>


</div>


<div class="mt-4">
        {{ $items->links() }}
</div>




<div wire:loading>
    <div class="flex items-center justify-center mt-4">
        <svg class="animate-spin h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 016 12H2c0 3.042 1.135 5.824 3 7.938l-.002-.001zM12 20a8 8 0 008-8h-4a4 4 0 01-8 0H0a12 12 0 0012 12v-4zm5.657-5.657a7.963 7.963 0 01-2.93 2.93l1.414 1.414a9.93 9.93 0 002.516-2.516l-1.414-1.828zM20 12a8 8 0 01-8 8v4a12 12 0 0012-12h-4zm-5.657-5.657l-1.414 1.414a7.963 7.963 0 01-2.93-2.93l1.828-1.414a9.93 9.93 0 002.516 2.516zM12 4a8 8 0 018 8h4a4 4 0 01-8 0H4a12 12 0 0012-12V4z"></path>
        </svg>
        <span class="ml-2">Загрузка данных...</span>
    </div>
</div>

</div>


@push('scripts')
    <script>
        $(document).ready(function () {
            $('#region').select2();
            $('#city').select2();

        });
    </script>
@endpush
