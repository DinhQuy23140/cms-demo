<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<title>Admin</title>
</head>

<body class="bg-gray-100">

<!-- TOPBAR -->
<header class="h-14 bg-slate-600 text-white flex items-center px-4">

    <button id="toggleNav" class="text-xl mr-4">
        ☰
    </button>
    
    <image src="https://upload.wikimedia.org/wikipedia/commons/0/07/Bitel_logo_transparente.png" alt="Bitel Logo" class="h-8 mr-4">

    <div class="font-bold">Bitel, Techonogia para Todos</div>

</header>


<div class="flex h-[calc(100vh-56px)]">

<!-- SIDEBAR -->
<aside id="sidebar"
class="w-64  text-black transition-all duration-300">

<ul class="p-2 space-y-2">

<!-- DASHBOARD -->
<li class="flex items-center p-3 rounded hover:bg-slate-700 border border-gray-500 rounded-xl">

<svg class="w-5 h-5 min-w-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/>
</svg>

<span class="ml-3 nav-text">Dashboard</span>

</li>

<li class="flex items-center p-3 rounded hover:bg-slate-700">

<svg class="w-5 h-5 min-w-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M20 13V7a2 2 0 00-2-2h-3V3H9v2H6a2 2 0 00-2 2v6"/>
</svg>

<span class="ml-3 nav-text">Notificaciones</span>

</li>

<li class="flex items-center p-3 rounded hover:bg-slate-700">

<svg class="w-5 h-5 min-w-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M3 3h18l-2 13H5L3 3z"/>
</svg>

<span class="ml-3 nav-text">Marca</span>

</li>


<li class="flex items-center p-3 rounded">

<svg class="w-5 h-5 min-w-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M5.121 17.804A4 4 0 019 16h6a4 4 0 013.879 1.804"/>
</svg>

<span class="ml-3 nav-text">Equipo</span>

</li>

</ul>

</aside>


<!-- MAIN -->
<main class="flex-1 p-6">

<div class="text-gray-500 mb-4">
Home / Products
</div>

<div class="flex justify-between mb-4">

    <h1 class="text-xl font-semibold">
    Product List
    </h1>

    <button id="toggleFormBtn" class="bg-blue-600 text-white px-4 py-2 rounded-lg">
        +  Add
    </button>

</div>

<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">

<div id="configForm" class="max-w-6xl mx-auto p-6 space-y-8 bg-white rounded-xl shadow max-h-[90vh] overflow-y-auto">

    <!-- TITLE -->
    <h1 class="text-2xl font-bold flex justify-between items-center">
    Add Config for Device
    <button id="closeModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
    </h1>


    <!-- PRODUCT INFORMATION -->
<div class="bg-gray-50 p-6 rounded-xl shadow space-y-4">

    <h2 class="text-lg font-semibold">Product Information</h2>

    <div class="grid grid-cols-2 gap-4">

        <!-- Product ID -->
        <div class="flex flex-col space-y-1">
            <label class="text-sm font-medium text-gray-700">
                Producto ID
            </label>
            <input
                type="text"
                placeholder="Enter product ID"
                class="border rounded-lg p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400"
            >
        </div>

        <!-- Product Name -->
        <div class="flex flex-col space-y-1">
            <label class="text-sm font-medium text-gray-700">
                Nombre del Producto
            </label>
            <input
                type="text"
                placeholder="Enter product name"
                class="border rounded-lg p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400"
            >
        </div>

        <!-- Brand -->
        <div class="flex flex-col space-y-1">
            <label class="text-sm font-medium text-gray-700">
                Marca
            </label>

            <div class="relative">
                <select
                    class="appearance-none border rounded-lg px-3 py-2 pr-10 w-full bg-white
                        focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
                    <option value="">Select brand</option>
                    <option value="apple">Apple</option>
                    <option value="samsung">Samsung</option>
                    <option value="xiaomi">Xiaomi</option>
                </select>

                <!-- custom arrow -->
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
        </div>

    </div>

</div>


    <!-- PRODUCT DETAIL -->
    <div class="bg-gray-50 p-6 rounded-xl shadow space-y-4">

        <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold">Descripción</h2>

            <button id="addDetailBtn"
            class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                + Add Detail
            </button>
        </div>

        <table class="w-full border border-gray-200">

            <thead class="bg-gray-100 text-sm">
                <tr>
                    <th class="p-2 w-16">No</th>
                    <th class="p-2">Icon</th>
                    <th class="p-2">Title</th>
                    <th class="p-2">Title Color</th>
                    <th class="p-2">Description</th>
                    <th class="p-2">Description Color text</th>
                    <th class="p-2 w-32">Action</th>
                </tr>
            </thead>

            <tbody id="detailTableBody">

                <tr class="border-t">

                    <td class="p-2 w-16">
                        <input type="number" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2 w-32 h-32 flex items-center justify-center border rounded mx-auto my-2 relative">

                        <!-- hidden file input -->
                        <input 
                            type="file" 
                            accept="image/*" 
                            id="iconUploadDetail1"
                            class="hidden"
                            onchange="previewIcon(event,'previewDetail1')"
                        >

                        <!-- svg button -->
                        <label for="iconUploadDetail1" class="cursor-pointer flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg" 
                                class="w-6 h-6 text-gray-500 hover:text-blue-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 16l4-4a3 3 0 014 0l4 4m0 0l4-4a3 3 0 014 0l4 4M3 16v2a2 2 0 002 2h14a2 2 0 002-2v-2" />

                            </svg>

                        </label>

                        <!-- preview image -->
                        <img id="previewDetail1" class="mt-2 h-8 hidden">

                    </td>

                    <td class="p-2">
                        <input type="text" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2">
                        <div class="flex items-center gap-2 px-2 py-1 border rounded-md bg-gray-50 w-fit">

                            <!-- Color -->
                            <input 
                                type="color"
                                value="#000000"
                                class="w-5 h-5 p-0 border-0 rounded-full cursor-pointer"
                                oninput="updateColorCode(this)"
                            >

                            <!-- Color Code -->
                            <span class="text-xs font-mono text-gray-600">
                                #000000
                            </span>

                        </div>
                    </td>

                    <td class="p-2">
                        <input type="text" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2">
                        <div class="flex items-center gap-2 px-2 py-1 border rounded-md bg-gray-50 w-fit">

                            <!-- Color -->
                            <input 
                                type="color"
                                value="#000000"
                                class="w-5 h-5 p-0 border-0 rounded-full cursor-pointer"
                                oninput="updateColorCode(this)"
                            >

                            <!-- Color Code -->
                            <span class="text-xs font-mono text-gray-600">
                                #000000
                            </span>

                        </div>
                    </td>

                    <td class="p-2 flex gap-2 justify-end w-32">
                        <button class="px-3 py-1 mr-2
                        bg-red-500 text-white
                        rounded-lg
                        hover:bg-red-600
                        transition flex items-center gap-1 delete-detail-btn">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        Delete
                        </button>

                </tr>

            </tbody>

        </table>

    </div>


    <!-- PRODUCT BASE ON COLOR -->
    <div class="bg-gray-50 p-6 rounded-xl shadow space-y-4">

        <div class="flex justify-between items-center">

            <h2 class="text-lg font-semibold">
                Product Base On Color
            </h2>

            <button id="addColorBtn"
            class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                + Add Color
            </button>

        </div>


        <table class="w-full border border-gray-200">

            <thead class="bg-gray-100 text-sm">

                <tr>
                    <th class="p-2">No</th>
                    <th class="p-2">Photo</th>
                    <th class="p-2">Color</th>
                    <th class="p-2">Stock</th>
                    <th class="p-2">Origin Price</th>
                    <th class="p-2">Discount</th>
                    <th class="p-2">URL</th>
                    <th class="p-2">Product Code BCCS</th>
                    <th class="p-2 w-32">Action</th>
                </tr>

            </thead>

            <tbody id="colorTableBody">

                <tr class="border-t">

                    <td class="p-2 w-16">
                        <input type="number" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2 w-32 h-32 flex items-center justify-center border rounded mx-auto my-2 relative">

                        <!-- hidden file input -->
                        <input 
                            type="file" 
                            accept="image/*" 
                            id="iconUploadColor1"
                            class="hidden"
                            onchange="previewIcon(event,'previewColor1')"
                        >

                        <!-- svg button -->
                        <label for="iconUploadColor1" class="cursor-pointer flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg" 
                                class="w-6 h-6 text-gray-500 hover:text-blue-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 16l4-4a3 3 0 014 0l4 4m0 0l4-4a3 3 0 014 0l4 4M3 16v2a2 2 0 002 2h14a2 2 0 002-2v-2" />

                            </svg>

                        </label>

                        <!-- preview image -->
                        <img id="previewColor1" class="mt-2 h-8 hidden">

                    </td>

                    <td class="p-2">
                        <div class="flex items-center gap-2 px-2 py-1 border rounded-md bg-gray-50 w-fit">

                            <!-- Color -->
                            <input 
                                type="color"
                                value="#000000"
                                class="w-5 h-5 p-0 border-0 rounded-full cursor-pointer"
                                oninput="updateColorCode(this)"
                            >

                            <!-- Color Code -->
                            <span class="text-xs font-mono text-gray-600">
                                #000000
                            </span>

                        </div>
                    </td>

                    <td class="p-2">
                        <input type="number" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2">
                        <input type="number" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2">
                        <input type="number" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2">
                        <input type="text" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2">
                        <input type="text" class="border p-1 rounded w-full">
                    </td>

                    <td class="p-2 flex gap-2 justify-end w-32">
                        <button class="px-3 py-1 mr-2
                        bg-red-500 text-white
                        rounded-lg
                        hover:bg-red-600
                        transition flex items-center gap-1 delete-color-btn">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        Delete
                        </button>
                    </td>

                </tr>

            </tbody>

        </table>

    </div>


    <!-- SHOW HIDE -->
    <div class="bg-gray-50 p-6 rounded-xl shadow flex items-center">

        <span class="font-medium text-center">Show Product</span>

        <!-- From Uiverse.io by namecho --> 
        <label class="switch flex items-center cursor-pointer ml-6">
        <input type="checkbox">
        <span class="slider"></span>
        </label>


    </div>


    <!-- SUBMIT -->
    <div class="flex justify-start">

        <button
        class="px-6 py-2 bg-slate-700 text-white rounded-lg
        hover:bg-gray-600 transition">

            Save Config

        </button>

        <button
        class="px-6 py-2 text-gray-700 rounded-lg ml-4 border border-slate-500 rounded-px
        hover:bg-gray-400 transition">

            Cancel

        </button>


    </div>

</div>

</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full text-left">

    <!-- <thead class="bg-gray-100 text-gray-600 text-sm">
    <tr>
    <th class="p-4">Status</th>
    <th class="p-4">Product</th>
    <th class="p-4">View</th>
    <th class="p-4">Action</th>
    </tr>
    </thead> -->

    <tbody>

    <tr class="border-t hover:bg-gray-50 transition">

        <!-- STATUS TOGGLE and VIEW -->
        <td class="p-4 flex items-center gap-4 w-40">

            <label class="relative inline-flex items-center cursor-pointer w-12 justify-center">

            <!-- From Uiverse.io by namecho --> 
            <label class="switch flex items-center cursor-pointer">
            <input type="checkbox">
            <span class="slider"></span>
            </label>

            </label>

            <button class="w-9 h-9 flex items-center justify-center
            bg-blue-500 text-white rounded-lg
            hover:bg-blue-600 hover:scale-110 transition">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 3H3v5M16 3h5v5M21 16v5h-5M3 16v5h5
                        M3 3l6 6M21 3l-6 6M3 21l6-6M21 21l-6-6" />

                </svg>

            </button>

        </td>

        <!-- PRODUCT NAME -->
        <td class="p-4 font-medium text-left w-full">
        Macbook Pro M3
        </td>


        <!-- ACTION -->
        <td class="p-2 flex gap-2 justify-end">

            <button class="px-3 py-1
            bg-yellow-400
            rounded-lg
            hover:bg-yellow-500
            transition flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
            Edit
            </button>

            <button class="px-3 py-1 mr-2
            bg-red-500 text-white
            rounded-lg
            hover:bg-red-600
            transition flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
            Delete
            </button>

        </td>

    </tr>

    </tbody>

    </table>

</div>



</main>

</div>


<script>

const toggle = document.getElementById("toggleNav")
const sidebar = document.getElementById("sidebar")
const texts = document.querySelectorAll(".nav-text")

toggle.onclick = () => {

sidebar.classList.toggle("w-56")
sidebar.classList.toggle("w-16")

texts.forEach(text => {

text.classList.toggle("hidden")

})

}

const toggleBtn = document.getElementById("toggleFormBtn");
const modal = document.getElementById("modal");
const closeBtn = document.getElementById("closeModal");

toggleBtn.addEventListener("click", () => {
    modal.classList.toggle("hidden");
});

closeBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
});

modal.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.classList.add("hidden");
    }
});

function previewIcon(event, previewId){
    const file = event.target.files[0];

    if(file){
        if (!file.type.startsWith('image/')) {
            alert('Please select a valid image file.');
            return;
        }
        if (file.size > 5 * 1024 * 1024) { // 5MB limit
            alert('File size must be less than 5MB.');
            return;
        }
        const preview = document.getElementById(previewId);
        preview.src = URL.createObjectURL(file);
        preview.classList.remove("hidden");
    }
}

function updateColorCode(el){
    const colorCode = el.parentElement.querySelector("span");
    colorCode.textContent = el.value;
}

const addDetailBtn = document.getElementById("addDetailBtn");
const detailTableBody = document.getElementById("detailTableBody");

if (addDetailBtn && detailTableBody) {
    addDetailBtn.addEventListener("click", () => {
        addDetailRow();
    });

    detailTableBody.addEventListener("click", (event) => {
        const deleteButton = event.target.closest(".delete-detail-btn");
        if (deleteButton) {
            const row = deleteButton.closest("tr");
            if (row) {
                row.remove();
            }
        }
    });
}

function addDetailRow() {
    const uniqueId = Date.now() + Math.random().toString(36).substr(2, 9);
    const iconUploadId = 'iconUploadDetail' + uniqueId;
    const previewId = 'previewDetail' + uniqueId;
    const row = document.createElement("tr");
    row.className = "border-t detail-row";
    row.innerHTML = `
        <td class="p-2 w-16 text-center text-sm text-gray-600">
            <span>-</span>
        </td>
        <td class="p-2 w-32 h-32 flex items-center justify-center border rounded mx-auto my-2 relative">
            <input type="file" accept="image/*" id="${iconUploadId}" class="hidden" onchange="previewIcon(event,'${previewId}')">
            <label for="${iconUploadId}" class="cursor-pointer flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 16l4-4a3 3 0 014 0l4 4m0 0l4-4a3 3 0 014 0l4 4M3 16v2a2 2 0 002 2h14a2 2 0 002-2v-2" />
                </svg>
            </label>
            <img id="${previewId}" class="mt-2 h-8 hidden">
        </td>
        <td class="p-2">
            <input type="text" class="border p-1 rounded w-full">
        </td>
        <td class="p-2">
            <div class="flex items-center gap-2 px-2 py-1 border rounded-md bg-gray-50 w-fit">
                <input type="color" value="#000000" class="w-5 h-5 p-0 border-0 rounded-full cursor-pointer" oninput="updateColorCode(this)">
                <span class="text-xs font-mono text-gray-600">#000000</span>
            </div>
        </td>
        <td class="p-2">
            <input type="text" class="border p-1 rounded w-full">
        </td>
        <td class="p-2">
            <div class="flex items-center gap-2 px-2 py-1 border rounded-md bg-gray-50 w-fit">
                <input type="color" value="#000000" class="w-5 h-5 p-0 border-0 rounded-full cursor-pointer" oninput="updateColorCode(this)">
                <span class="text-xs font-mono text-gray-600">#000000</span>
            </div>
        </td>
        <td class="p-2 flex gap-2 justify-end w-32">
            <button type="button" class="px-3 py-1 mr-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition flex items-center gap-1 delete-detail-btn">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
                Delete
            </button>
        </td>
    `;
    detailTableBody.appendChild(row);
}
const addColorBtn = document.getElementById("addColorBtn");
const colorTableBody = document.getElementById("colorTableBody");

if (addColorBtn && colorTableBody) {
    addColorBtn.addEventListener("click", () => {
        addColorRow();
    });

    colorTableBody.addEventListener("click", (event) => {
        const deleteButton = event.target.closest(".delete-color-btn");
        if (deleteButton) {
            const row = deleteButton.closest("tr");
            if (row) {
                row.remove();
            }
        }
    });
}

function addColorRow() {
    const uniqueId = Date.now() + Math.random().toString(36).substr(2, 9);
    const iconUploadId = 'iconUploadColor' + uniqueId;
    const previewId = 'previewColor' + uniqueId;
    const row = document.createElement("tr");
    row.className = "border-t color-row";
    row.innerHTML = `
        <td class="p-2 w-16">
            <input type="number" class="border p-1 rounded w-full">
        </td>
        <td class="p-2 w-32 h-32 flex items-center justify-center border rounded mx-auto my-2 relative">
            <input type="file" accept="image/*" id="${iconUploadId}" class="hidden" onchange="previewIcon(event,'${previewId}')">
            <label for="${iconUploadId}" class="cursor-pointer flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 16l4-4a3 3 0 014 0l4 4m0 0l4-4a3 3 0 014 0l4 4M3 16v2a2 2 0 002 2h14a2 2 0 002-2v-2" />
                </svg>
            </label>
            <img id="${previewId}" class="mt-2 h-8 hidden">
        </td>
        <td class="p-2">
            <div class="flex items-center gap-2 px-2 py-1 border rounded-md bg-gray-50 w-fit">
                <input type="color" value="#000000" class="w-5 h-5 p-0 border-0 rounded-full cursor-pointer" oninput="updateColorCode(this)">
                <span class="text-xs font-mono text-gray-600">#000000</span>
            </div>
        </td>
        <td class="p-2">
            <input type="number" class="border p-1 rounded w-full" placeholder="Stock">
        </td>
        <td class="p-2">
            <input type="number" class="border p-1 rounded w-full" placeholder="Origin Price">
        </td>
        <td class="p-2">
            <input type="number" class="border p-1 rounded w-full" placeholder="Discount">
        </td>
        <td class="p-2">
            <input type="text" class="border p-1 rounded w-full" placeholder="URL">
        </td>
        <td class="p-2">
            <input type="text" class="border p-1 rounded w-full" placeholder="Product Code BCCS">
        </td>
        <td class="p-2 flex gap-2 justify-end w-32">
            <button type="button" class="px-3 py-1 mr-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition flex items-center gap-1 delete-color-btn">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
                Delete
            </button>
        </td>
    `;
    colorTableBody.appendChild(row);
}

</script>

</body>
</html>