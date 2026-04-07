<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<title>Marca</title>
</head>

<body class="bg-gray-100">

    <!-- TOPBAR -->
    <header class="h-[64px] bg-[#03558B99] text-white flex items-center">

        <button id="toggleNav" class="w-[103px] h-[64px] flex items-center justify-center">
            <img src="{{ asset('images/icon_navbar.png') }}" alt="Menu" class="w-[34px] h-[22.5px]">
        </button>

        <img src="{{ asset('images/logo_bitel.png') }}" alt="Bitel Logo" class="w-[97px] h-[40px]">

        <div class="ml-6 text-sm font-semibold">
            Bitel, Tecnología para Todos
        </div>

    </header>


    <div class="flex h-[calc(100vh-56px)]">

        <!-- SIDEBAR -->
        <aside id="sidebar" class="w-[329px]  text-black transition-all duration-300">

            <ul class="relative flex flex-col pt-[30px] pr-[20px] pl-[20px] pb-[30px] space-y-[20px]">

                <li class="flex items-center w-[289px] h-[49px] border border-[#BCBCBC] rounded-[10px] px-[19px] py-[7px] gap-[10px]">
                    <span class="font-inter text-[20px] leading-[100%]">Dashboard</span>
                </li>

                <li class="flex items-center w-[289px] h-[49px] gap-[10px] px-[10px] py-[7px] rounded-tr-[20px] rounded-br-[20px]">
                    <img src="{{ asset('images/icon_notifi.png') }}" class="w-[24px] h-[24px]">
                    <span class="font-inter text-[20px]">Notificaciones</span>
                </li>

                <li class="flex items-center w-[289px] h-[49px] gap-[10px] px-[10px] py-[7px] rounded-tr-[20px] rounded-br-[20px]">
                    <img src="{{ asset('images/icon_marca.png') }}" class="w-[24px] h-[24px]">
                    <span class="font-inter text-[20px]">Marca</span>
                </li>

                <li class="flex items-center w-[289px] h-[49px] gap-[10px] px-[10px] py-[7px] rounded-tr-[20px] rounded-br-[20px]">
                    <img src="{{ asset('images/icon_equipo.png') }}" class="w-[24px] h-[24px]">
                    <span class="font-inter text-[20px]">Equipo</span>
                </li>

            </ul>

        </aside>


        <!-- MAIN -->
        <main class="flex-1 pt-[17px] pr-[50px] pb-[17px] pl-[8px] gap-[20px]">

            <div class="font-inter text-[15px] flex items-center gap-[6px]">
                <a href="#" class="text-[15px] ">
                    Homepage
                </a>

                <img src="{{asset('images/ic_keyboard_arrow_right.png')}}" alt="">

                <span class="text-[15px] ">
                    Marca
                </span>
            </div>

            <div class="flex items-center justify-between mt-2 mb-4 ">

                <h1 class="font-inter text-[20px] font-semibold leading-none">
                    Marca
                </h1>

                <button id="toggleFormBtn"
                    class="flex items-center gap-[10px] bg-[#03558B] text-white px-[17px] py-[9px] rounded-[10px] w-[95px] h-[36px]">

                    <img src="{{ asset('images/icon_add.png') }}" class="w-[10px] h-[10px]" />

                    <span class="font-inter text-[15px]">
                        Add
                    </span>

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

                                    <td class="p-2">
                                        <label for="iconUploadDetail1"
                                            class="w-20 h-20 mx-auto flex flex-col items-center justify-center 
                                            border-2 border-dashed border-gray-200 rounded-xl cursor-pointer
                                            hover:border-blue-400 hover:bg-blue-50 transition relative overflow-hidden">

                                            <!-- Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 text-gray-400 group-hover:text-blue-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 16l4-4a3 3 0 014 0l4 4m0 0l4-4a3 3 0 014 0l4 4M3 16v2a2 2 0 002 2h14a2 2 0 002-2v-2" />
                                            </svg>

                                            <span class="text-[10px] text-gray-400 mt-1">Upload</span>

                                            <!-- Preview -->
                                            <img id="previewDetail1"
                                                class="absolute inset-0 w-full h-full object-cover hidden">

                                            <!-- Input -->
                                            <input 
                                                type="file"
                                                accept="image/*"
                                                id="iconUploadDetail1"
                                                class="hidden"
                                                onchange="previewIcon(event,'previewDetail1')"
                                            >
                                        </label>
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

                                    <td class="p-2">
                                        <label for="iconUploadColor1"
                                            class="w-24 h-24 mx-auto flex flex-col items-center justify-center
                                            border-2 border-dashed border-gray-200 rounded-xl cursor-pointer
                                            hover:border-blue-400 hover:bg-blue-50 transition relative overflow-hidden">

                                            <!-- Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 16l4-4a3 3 0 014 0l4 4m0 0l4-4a3 3 0 014 0l4 4M3 16v2a2 2 0 002 2h14a2 2 0 002-2v-2" />
                                            </svg>

                                            <span class="text-xs text-gray-400 mt-1">Upload</span>

                                            <!-- Preview -->
                                            <img id="previewColor1"
                                                class="absolute inset-0 w-full h-full object-cover hidden">

                                            <!-- Input -->
                                            <input 
                                                type="file"
                                                accept="image/*"
                                                id="iconUploadColor1"
                                                class="hidden"
                                                onchange="previewIcon(event,'previewColor1')"
                                            >
                                        </label>
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

                <table class="w-full table-fixed">

                <tbody>

                    <tr class="border-[#E8E8E8] rounded-[10px] hover:bg-gray-50 transition">

                        <!-- STATUS + VIEW -->
                        <td class="p-4 w-[100px] h-[20px]">
                            <div class="flex items-center gap-5">
                                <label class="switch cursor-pointer flex items-center">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>

                                <img src="{{ asset('images/icon_fullview.png') }}" class="w-5 h-5">
                            </div>
                        </td>

                        <!-- PRODUCT NAME -->
                        <td class="p-4 text-left text-[13px] font-inter h-[20px]">
                            Marca 1
                        </td>

                        <!-- ACTION -->
                        <td class="px-[12px] w-[120px] h-[25px]">
                            <div class="flex gap-4 justify-end items-center">
                                <img src="{{asset('images/icon_edit.png')}}" class="w-[18px] h-[18px]">
                                <img src="{{asset('images/icon_delete.png')}}" class="w-[24px] h-[24px]">
                            </div>
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

    // toggle.onclick = () => {

    // sidebar.classList.toggle("w-56")
    // sidebar.classList.toggle("w-16")

    // texts.forEach(text => {

    // text.classList.toggle("hidden")

    // })

    // }

    </script>

    <!-- Modal for Add (styled like product modal) -->
    <div id="modalMarca" class="fixed inset-0 bg-black/60 hidden z-50 flex items-center justify-center p-4">

        <form id="marcaFormElem"
            class="w-[1128px] h-[382px] bg-white rounded-2xl shadow-xl border overflow-hidden flex flex-col gap-[20px]
            py-[15px] px-[37px]">

            <!-- HEADER -->
            <div class="flex items-center justify-between ">
                <h1 class="font-inter font-semibold text-[20px] leading-none text-gray-800">
                    Agregar nuevo Marca
                </h1>
                <button id="closeMarcaModal" type="button"
                    class="text-gray-400 hover:text-gray-600 text-2xl transition">
                    &times;
                </button>
            </div>

            <!-- BODY -->
            <div class="flex flex-col gap-[20px]">

                <!-- FORM SECTION -->

                <div class="flex gap-[20px]">

                    <div class="flex flex-col gap-[6px]">
                        <label class="font-inter font-normal text-[15px] leading-none tracking-normal">
                            Marca ID
                        </label>
                        <input type="text" placeholder = "Ingresar ID del marca"
                            class="border border-[#DDDDDD] rounded-[10px] text-sm w-[387px] h-[41px] px-3 placeholder-[#666666]
                            placeholder-[#666666] focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="flex flex-col gap-[6px]">
                        <label class="font-inter font-normal text-[15px] leading-none tracking-normal">
                            Nombre del Marca
                        </label>
                        <input type="text" placeholder = "Ingresar nombre del marca"
                            class="border border-[#DDDDDD] rounded-[10px] text-sm w-[647px] h-[41px] px-3
                            placeholder-[#666666] focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                </div>


                <!-- TOGGLE -->
                <div class=" flex items-center justify-start gap-[40px]">

                    <span class="text-[16px] font-inter">
                        Estado
                    </span>

                    <label class="relative inline-flex items-center cursor-pointer">
                        <input id="toggleSwitch" type="checkbox" class="sr-only peer">

                        <!-- Track -->
                        <div id="marcaTrack"
                            class="w-11 h-6 bg-gray-200 rounded-full transition
                            peer-checked:bg-green-600">
                        </div>

                        <!-- Dot -->
                        <div id="marcaDot"
                            class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full shadow
                            transition-transform duration-300
                            peer-checked:translate-x-5">
                        </div>
                    </label>

                </div>

            </div>

            <!-- FOOTER -->
            <div class="flex justify-start gap-[40px]">
                <button type="submit" id="saveMarcaBtn"
                    class="px-[38px] py-[9px] w-[95px] h-[36px] 
                    font-inter font-normal text-[15px] leading-none tracking-normal
                    rounded-[10px] bg-[#03558B] text-white
                    hover:bg-blue-700 active:scale-[0.98] transition
                     flex items-center justify-center">
                    Guardar
                </button>

                <button type="button" id="cancelMarcaBtn"
                    class="px-[38px] py-[9px] w-[95px] h-[36px] 
                    font-inter font-normal text-[15px] leading-none tracking-normal
                    rounded-[10px] border border-blue-800 text-blue-800 
                    hover:bg-gray-100 transition
                    flex items-center justify-center">
                    Cancelar
                </button>

            </div>

        </form>

    </div>

    <script>
    // Modal behavior (marca)
    const openModal = document.getElementById('toggleFormBtn')
    const modalMarca = document.getElementById('modalMarca')
    const closeMarcaModal = document.getElementById('closeMarcaModal')
    const cancelMarcaBtn = document.getElementById('cancelMarcaBtn')
    const marcaFormElem = document.getElementById('marcaFormElem')
    const toggleSwitch = document.getElementById('toggleSwitch')
    const marcaTrack = document.getElementById('marcaTrack')
    const marcaDot = document.getElementById('marcaDot')

    const openMarca = () => modalMarca.classList.remove('hidden')
    const closeMarca = () => modalMarca.classList.add('hidden')

    openModal && openModal.addEventListener('click', openMarca)
    closeMarcaModal && closeMarcaModal.addEventListener('click', closeMarca)
    cancelMarcaBtn && cancelMarcaBtn.addEventListener('click', closeMarca)

    // click outside to close
    modalMarca && modalMarca.addEventListener('click', (e) => {
        if (e.target === modalMarca) closeMarca()
    })

    // toggle appearance
    if (toggleSwitch) {
        const updateToggle = () => {
            if (toggleSwitch.checked) {
                marcaTrack.classList.add('bg-blue-600')
                marcaDot.classList.add('translate-x-5')
            } else {
                marcaTrack.classList.remove('bg-blue-600')
                marcaDot.classList.remove('translate-x-5')
            }
        }
        toggleSwitch.addEventListener('change', updateToggle)
        updateToggle()
    }

    // handle submit (demo: log values and close)
    marcaFormElem && marcaFormElem.addEventListener('submit', (e) => {
        e.preventDefault()
        const data = {
            name: document.getElementById('input1').value,
            code: document.getElementById('input2').value,
            desc: document.getElementById('input3').value,
            active: toggleSwitch.checked
        }
        console.log('Add Marca:', data)
        marcaFormElem.reset()
        if (typeof updateToggle === 'function') updateToggle()
        closeMarca()
    })
    </script>

</body>
</html>