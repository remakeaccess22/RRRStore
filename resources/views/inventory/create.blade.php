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

                            <!-- Product Name -->
                            <div>
                                <label for="product-name" class="block text-sm mb-2 dark:text-white">Product
                                    Name</label>
                                <input type="text" id="product-name" name="product-name"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required>
                            </div>

                            <!-- Product Category -->
                            <div>
                                <label for="product-category" class="block text-sm mb-2 dark:text-white">Product
                                    Category</label>
                                <input type="text" id="product-category" name="product-category"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required>
                            </div>

                            <!-- Product Sub Category -->
                            <div>
                                <label for="product-subcategory" class="block text-sm mb-2 dark:text-white">Product Sub
                                    Category</label>
                                <input type="text" id="product-subcategory" name="product-subcategory"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required>
                            </div>

                            <!-- Product Description -->
                            <div>
                                <label for="product-description" class="block text-sm mb-2 dark:text-white">Product
                                    Description</label>
                                <textarea id="product-description" name="product-description" rows="3"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required></textarea>
                            </div>

                            <!-- Quantity -->
                            <div>
                                <label for="quantity" class="block text-sm mb-2 dark:text-white">Quantity</label>
                                <input type="number" id="quantity" name="quantity"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required>
                            </div>

                            <!-- Supplier -->
                            <div>
                                <label for="supplier" class="block text-sm mb-2 dark:text-white">Supplier</label>
                                <input type="text" id="supplier" name="supplier"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required>
                            </div>

                            <!-- Brand -->
                            <div>
                                <label for="brand" class="block text-sm mb-2 dark:text-white">Brand</label>
                                <input type="text" id="brand" name="brand"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required>
                            </div>

                            <!-- Unit Price -->
                            <div>
                                <label for="unit-price" class="block text-sm mb-2 dark:text-white">Unit Price</label>
                                <input type="number" id="unit-price" name="unit-price"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required>
                            </div>

                            <!-- Based Price -->
                            <div>
                                <label for="based-price" class="block text-sm mb-2 dark:text-white">Based Price</label>
                                <input type="number" id="based-price" name="based-price"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required>
                            </div>


                        </div>
                        <div class="mt-6 flex justify-between items-center space-y-0 sm:space-y-0">
                            <!-- Cancel Button -->
                            <button type="button" onclick="window.location.href='{{ route('inventory') }}';"
                                class="py-2 px-4 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none">
                                Cancel
                            </button>

                            <!-- Submit Button -->
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