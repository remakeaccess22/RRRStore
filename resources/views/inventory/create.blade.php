<div id="hs-modal-create-product"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto" role="dialog"
    tabindex="-1" aria-labelledby="hs-modal-create-product-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full sm:h-full m-3 sm:mx-auto">
        <div
            class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-800 sm:h-full">
            <div class="p-4 sm:p-7 h-full">
                <div class="text-center">
                    <h3 id="hs-modal-create-product-label"
                        class="block text-2xl font-bold text-gray-800 dark:text-neutral-200">Add New Product</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                        Fill in the product details below
                    </p>
                </div>

                <div class="mt-5">
                    <form method="POST" action="{{ route('inventory.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 sm:gap-x-6">
                            <div>
                                <label for="product_name" class="block text-sm mb-2 dark:text-white">Product
                                    Name</label>
                                <input type="text" id="product_name" name="product_name"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required>
                            </div>

                            <div>
                                <label for="product_category" class="block text-sm mb-2 dark:text-white">Product
                                    Category</label>
                                <input type="text" id="product_category" name="product_category"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required>
                            </div>

                            <div>
                                <label for="product_subcategory" class="block text-sm mb-2 dark:text-white">Product
                                    Subcategory</label>
                                <input type="text" id="product_subcategory" name="product_subcategory"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required>
                            </div>

                            <div>
                                <label for="product_description" class="block text-sm mb-2 dark:text-white">Product
                                    Description</label>
                                <textarea id="product_description" name="product_description" rows="3"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required></textarea>
                            </div>

                            <div>
                                <label for="quantity" class="block text-sm mb-2 dark:text-white">Quantity</label>
                                <input type="number" id="quantity" name="quantity"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required>
                            </div>

                            <div>
                                <label for="supplier" class="block text-sm mb-2 dark:text-white">Supplier</label>
                                <input type="text" id="supplier" name="supplier"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required>
                            </div>

                            <div>
                                <label for="brand" class="block text-sm mb-2 dark:text-white">Brand</label>
                                <input type="text" id="brand" name="brand"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required>
                            </div>

                            <div>
                                <label for="unit_price" class="block text-sm mb-2 dark:text-white">Unit Price</label>
                                <input type="number" step="0.01" id="unit_price" name="unit_price"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required>
                            </div>

                            <div>
                                <label for="base_price" class="block text-sm mb-2 dark:text-white">Base Price</label>
                                <input type="number" step="0.01" id="base_price" name="base_price"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                    required>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between">
                            <button type="button" onclick="window.location.href='{{ route('inventory') }}';"
                                class="py-2 px-4 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none">
                                Cancel
                            </button>
                            <button type="submit"
                                class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none">
                                Add Product
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>