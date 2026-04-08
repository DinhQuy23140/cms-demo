<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ asset('css/cms/cms_v2/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Equipo</title>
</head>

<body class="bg-gray-100">

<!-- TOPBAR -->
<header class="h-[64px] bg-[#03558B99] text-white flex items-center">

    <button id="toggleNav" class="w-[103px] h-[64px] flex items-center justify-center">
        <img src="{{ asset('images/cms/icon_cms_v2/icon_navbar.png') }}" alt="Menu" class="w-[34px] h-[22.5px]">
    </button>

    <img src="{{ asset('images/cms/icon_cms_v2/logo_bitel.png') }}" alt="Bitel Logo" class="w-[97px] h-[40px]">

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

    <li class="flex items-center w-[289px] h-[49px] px-[10px] py-[7px] rounded-tr-[20px] rounded-br-[20px]">
        <a href="" class="flex items-center gap-[10px]">
            <img src="{{ asset('images/cms/icon_cms_v2/icon_notifi.png') }}" class="w-[24px] h-[24px]">
            <span class="font-inter text-[20px]">Notificaciones</span>
        </a>
    </li>

    <li class="flex items-center w-[289px] h-[49px] gap-[10px] px-[10px] py-[7px] rounded-tr-[20px] rounded-br-[20px]">
        <a href="{{ route('cms.marca.dashboard') }}" class="flex items-center gap-[10px]">
            <img src="{{ asset('images/cms/icon_cms_v2/icon_marca.png') }}" class="w-[24px] h-[24px]">
            <span class="font-inter text-[20px]">Marca</span>
        </a>
    </li>

    <li class="flex items-center w-[289px] h-[49px] gap-[10px] px-[10px] py-[7px] rounded-tr-[20px] rounded-br-[20px]">
        <a href="{{ route('cms.device.dashboard') }}" class="flex items-center gap-[10px]">
            <img src="{{ asset('images/cms/icon_cms_v2/icon_equipo.png') }}" class="w-[24px] h-[24px]">
            <span class="font-inter text-[20px]">Equipo</span>
        </a>
    </li>

</ul>

</aside>


<!-- MAIN -->
<main class="relative flex-1 pt-[17px] pr-[50px] pb-[100px] pl-[8px] gap-[20px]">

    <div class="font-inter text-[15px] flex items-center gap-[6px]">
        <a href="#" class="text-[15px] ">
            Homepage
        </a>

        <img src="{{asset('images/cms/icon_cms_v2/ic_keyboard_arrow_right.png')}}" alt="">

        <span class="text-[15px] ">
            Equipo
        </span>
    </div>

    <div class="flex items-center justify-between mt-2 mb-4 ">

        <h1 class="font-inter text-[20px] font-semibold leading-none">
            Equipo
        </h1>

        <button id="toggleFormBtn"
            class="flex items-center gap-[10px] bg-[#03558B] text-white px-[17px] py-[9px] rounded-[10px] w-[95px] h-[36px]">

            <img src="{{ asset('images/cms/icon_cms_v2/icon_add.png') }}" class="w-[10px] h-[10px]" />

            <span class="font-inter text-[15px]">
                Add
            </span>

        </button>

    </div>

    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">

        <div id="configForm" class="w-[1126px] h-[841px] px-[37px] py-[15px] flex flex-col gap-[20px] bg-white rounded-[10px] overflow-y-auto">

            <!-- TITLE -->
            <h1 class="font-inter text-[20px] font-semibold leading-none tracking-normal flex justify-between items-center">
                Agregar nuevo Equipo
                <button   button id="closeModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
            </h1>

            <!-- PRODUCT INFORMATION -->
            <div class="flex gap-[20px]">
                <!-- Product ID -->
                <div class="flex flex-col space-y-1 w-[387px]">
                    <label class="text-sm font-medium text-gray-700">
                        Producto ID
                    </label>
                    <input
                        type="text"
                        placeholder="Ingresar ID del Producto"
                        class="w-full border rounded-lg px-3 py-2 font-inter text-sm leading-none placeholder-[#666666] focus:outline-none focus:ring-2 focus:ring-blue-400"
                    />
                </div>
                <!-- Product Name -->
                <div class="flex flex-col space-y-1 w-[647px]">
                    <label class="text-sm font-medium text-gray-700">
                        Nombre del Producto
                    </label>
                    <input
                        type="text"
                        placeholder="Ingresar nombre del producto"
                        class="w-full border rounded-lg px-3 py-2 font-inter text-sm leading-none placeholder-[#666666] focus:outline-none focus:ring-2 focus:ring-blue-400"
                    >
                </div>
            </div>
            <!-- Brand -->
            <div class="flex flex-col space-y-1 w-[382px]">
                <label class="text-sm font-medium text-gray-700">
                    Marca
                </label>
                <div class="relative">
                <select
                    class="w-full appearance-none border rounded-lg px-3 py-2 pr-10 bg-white h-[41px]
                        font-inter text-sm font-normal leading-none tracking-normal text-[#666666]
                        focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
                    <option value="">Seleccione Marca</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                    @endforeach
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

            <!-- PRODUCT DETAIL -->
            <div class="rounded-xl flex flex-col gap-[10px]">
                <div class="flex justify-between items-center">
                    <h2 class="font-inter text-[23px] font-normal leading-none tracking-normal">
                        Descripción
                    </h2>

                    <button id="addDetailBtn"
                    class="px-[8px] py-[7px] bg-[#03558B] text-white rounded-lg flex gap-[10px] items-center">
                        <img src="{{ asset('images/cms/icon_cms_v2/icon_add.png') }}" class="w-[10px] h-[10px]" />
                        <span>Añadir nuevo campo</span>
                    </button>
                </div>

                <div class="w-full ">

                    <div class="flex gap-[40px] text-sm">
                        <div class="w-[25px] text-left">No</div>
                        <div class="w-[129px] text-left font-inter font-normal text-[16px] leading-[100%] tracking-[0]">Icono</div>
                        <div class="w-[102px] text-left font-inter font-normal text-[16px] leading-[100%] tracking-[0]">Título</div>
                        <div class="w-[136px] text-left font-inter font-normal text-[16px] leading-[100%] tracking-[0]">Título Color Texto</div>
                        <div class="w-[209px] text-left font-inter font-normal text-[16px] leading-[100%] tracking-[0]">Descripción</div>
                        <div class="w-[113px] text-left font-inter font-normal text-[16px] leading-[100%] tracking-[0]">Descripción Color Texto</div>
                        <div class="w-[66px] text-left font-inter font-normal text-[16px] leading-[100%] tracking-[0]">Borrar</div>
                    </div>

                    <div id="detailTableBody">

                        <div class="flex gap-[25px] items-top py-2">

                            <!-- No -->
                            <input type="number" class="border rounded w-[41px] h-[41px] border border-[#E8E8E8] rounded-[10px]">


                            <!-- Icon -->
                            <label for="iconUploadDetail1"
                                class="w-[147px] min-h-[105px] flex flex-col items-center justify-center
                                border border-[#E8E8E8] rounded-[10px] cursor-pointer
                                transition relative overflow-hidden gap-[20px]">

                                <img src="{{ asset('images/cms/icon_cms_v2/icon_image.png') }}" class="w-[31.96px] h-[45.22px] text-gray-400">

                                <img id="previewDetail1"
                                    class="absolute inset-0 w-full h-full object-cover hidden">

                                <input 
                                    type="file"
                                    accept="image/*"
                                    id="iconUploadDetail1"
                                    class="hidden"
                                >
                            </label>


                            <!-- Title -->
                            <input type="text" class="border p-1 rounded w-[119px] h-[41px] border border-[#E8E8E8] rounded-[10px]">


                            <!-- Title Color -->
                            <div class="flex items-center gap-[10px] w-[129px] h-[44px] border border-[#E8E8E8] rounded-[10px] bg-gray-50 px-[15px] py-[12px]">

                                <input 
                                    type="color"
                                    value="#000000"
                                    class="w-[22px] h-[22px] rounded-full cursor-pointer color-input"
                                    data-color-span="true"
                                >

                                <span class="text-[13px] font-mono text-gray-600 w-[76px] h-[22px]">
                                    #000000
                                </span>

                            </div>


                            <!-- Description -->
                            <input type="text" class="border rounded w-[239px] h-[41px] border border-[#E8E8E8] rounded-[10px]">


                            <!-- Description Color -->
                            <div class="flex items-center gap-2 border rounded-md w-[134px] h-[44px] px-[15px] py-[12px]">

                                <input 
                                    type="color"
                                    value="#000000"
                                    class="w-[22px] h-[22px] p-0 border-0 rounded-full cursor-pointer color-input"
                                    data-color-span="true"
                                >

                                <span class="text-[13px] font-medium">
                                    #000000
                                </span>

                            </div>


                            <!-- Delete -->
                            <img src="{{asset('images/cms/icon_cms_v2/icon_delete.png')}}" alt="" class="w-[14px] h-[18px] cursor-pointer delete-detail-btn">

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT BASE ON COLOR -->
            <div class="flex flex-col gap-[10px]">

                <div class="flex justify-between items-center">

                    <h2 class="font-inter font-normal text-[23px] leading-[100%] tracking-[0]">
                        Producto por color
                    </h2>

                    <button id="addColorBtn"
                    class="flex gap-[10px] items-center px-[7px] py-[8px] bg-[#03558B] text-white rounded-[10px] hover:bg-blue-600">
                        <img src="{{ asset('images/cms/icon_cms_v2/icon_add.png') }}" class="w-[10px] h-[10px]" />
                        <span>Añadir nuevo campo</span>
                    </button>

                </div>


                <div class="flex flex-col gap-[20px]">

                    <div class="flex gap-[40px] w-[1049px]">
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[25px] text-[16px] shrink-0">No</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[84px] text-[16px] shrink-0">Image</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[88px] text-[16px] shrink-0">Color</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[58px] text-[16px] shrink-0">Stock</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[107px] text-[16px] shrink-0">Precio original</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[106px] text-[16px] shrink-0">Descuento</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[116px] text-[15px] shrink-0">URL</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[105px] text-[15px] shrink-0">Código del producto en BCCS</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[59px] text-[16px] shrink-0">Borrar</div>
                    </div>

                    <div id="colorTableBody" class="flex flex-col gap-[10px]">

                        <div class="flex gap-[23px] w-[1049px]">

                            <div class="">
                                <input type="number" class="border border-[#E8E8E8] rounded-[10px] w-[36px] h-[35px] box-border">
                            </div>

                            <div class="">
                                <label for="iconUploadColor1"
                                    class="w-[106px] h-[94px] flex flex-col items-center justify-center gap-[20px]
                                    border border-[#E8E8E8] rounded-[10px] cursor-pointer
                                    transition relative overflow-hidden">

                                    <img src="{{ asset('images/cms/icon_cms_v2/icon_image.png') }}" class="w-[33.78px] h-[41.43px] text-gray-400">

                                    <img id="previewColor1"
                                        class="absolute inset-0 w-full h-full object-cover hidden">

                                    <input 
                                        type="file"
                                        accept="image/*"
                                        id="iconUploadColor1"
                                        class="hidden box-border">
                                </label>
                            </div>

                            <div class="">
                                <div class="flex items-center gap-2 px-[15px] py-[10px] border rounded-[10px] w-[108px]">
                                    <input 
                                        type="color"
                                        value="#000000"
                                        class="w-[22px] h-[22px] rounded-full cursor-pointer box-border color-input"
                                        data-color-span="true">
                                    <span class="text-xs font-mono text-gray-600">
                                        #000000
                                    </span>
                                </div>
                            </div>

                            <div class="">
                                <input type="number" class="border border-[#E8E8E8] rounded-[10px] w-[71px] h-[39px] box-border">
                            </div>

                            <div class="w-[140px]">
                                <input type="number" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
                            </div>

                            <div class="w-[120px]">
                                <input type="number" class="border border-[#E8E8E8] rounded-[10px] w-[120px] h-[39px] box-border">
                            </div>

                            <div class="w-[200px]">
                                <input type="text" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
                            </div>

                            <div class="w-[200px]">
                                <input type="text" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
                            </div>

                            <div class="w-[24px]">
                                <img src="{{asset('images/cms/icon_cms_v2/icon_delete.png')}}" alt="" class="w-[14px] h-[18px] cursor-pointer delete-color-btn">
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- SHOW HIDE -->
            <div class="flex items-center gap-[32px]">

                <span class="font-medium text-center">Estado</span>

                <!-- From Uiverse.io by namecho --> 
                <label class="switch flex items-center cursor-pointer">
                <input type="checkbox">
                <span class="slider"></span>
                </label>
            </div>


            <!-- SUBMIT -->
            <div class="flex justify-start gap-[40px]">

                <button
                class= "flex items-center justify-center w-[95px] h-[36px] bg-[#03558B] border rounded-[10px] text-white px-[38px] py-[9px]">
                    Guardar
                </button>

                <button id="cancelBtn"
                class="flex items-center justify-center w-[95px] h-[36px] border border-[#03558B] text-[#03558B] rounded-[10px] px-[38px] py-[9px]">
                    Cancel
                </button>


            </div>

        </div>

    </div>

    <div id="modalConfirmDelete" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg px-[21px] py-[19px]">
            <div class="w-[330px] flex flex-col items-center gap-[7px]">
                <img src="{{ asset('images/cms/icon_cms_v2/icon_question.png') }}" class="w-[60px] h-[60px]">
                <h2 class="font-inter font-semibold text-[18px] leading-[28px] tracking-normal text-center align-middle">¿Eliminar este elemento?</h2>
                <p class="font-inter font-normal text-[14px] leading-[20px] tracking-normal text-center">¿Estás seguro de que deseas eliminar este</br> elemento? Una vez eliminado, no se podrá</br> recuperar.</p>
                <div class="flex justify-end gap-4">
                    <button id="confirmDeleteBtn" class="flex items-center w-[128px] h-[36px] px-[24px] py-[17px] bg-[#9F5ED9] text-white rounded-[10px]">CONTINUAR</button>
                    <button id="cancelDeleteBtn" class="flex items-center w-[128px] h-[36px] px-[24px] py-[17px] border border-[#666666] rounded-[10px]">CANCELAR </button>
                </div>
            </div>
        </div>
    </div>

    <div class=" overflow-hidden">
        <div id="productTableBody" class="flex flex-col gap-[20px]">

            @foreach($products as $product)

                <div class="flex items-center justify-between border border-[#E8E8E8] rounded-[10px] px-[12px] py-[16px] hover:bg-gray-50 bg-[#DDDDDD33] transition">

                    <div class="flex items-center gap-5 w-[100px]">
                        <label class="switch cursor-pointer flex items-center">
                            <input type="checkbox" 
                            {{ $product->active == 1 ? 'checked' : '' }}>
                            <span class="slider"></span>
                        </label>

                        <img src="{{ asset('images/cms/icon_cms_v2/icon_fullview.png') }}" class="w-5 h-5">
                    </div>

                    <div class="flex-1 text-left text-[13px] font-inter">
                        {{$product->product_model}}
                    </div>

                    <div class="flex gap-4 justify-end items-center w-[120px]">
                        <img src="{{asset('images/cms/icon_cms_v2/icon_edit.png')}}" class="w-[18px] h-[18px]">
                        <img 
                            src="{{asset('images/cms/icon_cms_v2/icon_delete.png')}}"
                            class="w-[24px] h-[24px] cursor-pointer deleteBtn"
                            data-id="{{$product->id}}"/>
                    </div>

                </div>

            @endforeach

        </div>

    </div>

    <div class="flex gap-2 items-center justify-center py-4">
        {{ $products->links('pagination::bootstrap-4') }}
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

const toggleBtn = document.getElementById("toggleFormBtn");
const modal = document.getElementById("modal");
const closeBtn = document.getElementById("closeModal");
const cancelBtn = document.getElementById("cancelBtn");
const modalDeleteBtn = document.getElementById("modalConfirmDelete");
const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
const cancelDeleteBtn = document.getElementById("cancelDeleteBtn");
const deleteBtns = document.querySelectorAll('.deleteBtn')

toggleBtn.addEventListener("click", () => {
    modal.classList.toggle("hidden");
});

closeBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
});

cancelBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
});

modal.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.classList.add("hidden");
    }
});

confirmDeleteBtn.addEventListener("click", () => {
    modalDeleteBtn.classList.add("hidden");
});

cancelDeleteBtn.addEventListener("click", () => {
    modalDeleteBtn.classList.add("hidden");
});

deleteBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        modalDeleteBtn.classList.remove("hidden");
    }); 
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
        const iconImg = preview.previousElementSibling;
        
        preview.src = URL.createObjectURL(file);
        preview.classList.remove("hidden");
        
        // Hide the default icon when image is selected
        if (iconImg && iconImg.tagName === 'IMG') {
            iconImg.classList.add("hidden");
        }
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
            const row = deleteButton.closest(".flex");
            if (row) {
                row.remove();
            }
        }
    });
    
    // Add event listener to initial row
    const initialDetailRow = detailTableBody.querySelector(".flex");
    if (initialDetailRow) {
        const detailFileInput = initialDetailRow.querySelector('#iconUploadDetail1');
        if (detailFileInput) {
            detailFileInput.addEventListener('change', function(event) {
                previewIcon(event, 'previewDetail1');
            });
        }
        
        const detailColorInputs = initialDetailRow.querySelectorAll('.color-input');
        detailColorInputs.forEach(input => {
            input.addEventListener('input', function() {
                updateColorCode(this);
            });
        });
    }
}

function addDetailRow() {
    const uniqueId = Date.now() + Math.random().toString(36).substr(2, 9);
    const iconUploadId = 'iconUploadDetail' + uniqueId;
    const previewId = 'previewDetail' + uniqueId;
    const row = document.createElement("div");

    row.className = "flex gap-[25px] items-start py-2";

    row.innerHTML = `
        <!-- No -->
        <input 
            type="number"
            class="w-[41px] h-[41px] border border-[#E8E8E8] rounded-[10px]"
        >

        <!-- Icon -->
        <label for="${iconUploadId}"
            class="w-[147px] min-h-[105px] flex flex-col items-center justify-center
            border border-[#E8E8E8] rounded-[10px] cursor-pointer
            transition relative overflow-hidden gap-[20px]">

            <img src="{{ asset('images/cms/icon_cms_v2/icon_image.png') }}"
                 class="w-[31.96px] h-[45.22px]">

            <img id="${previewId}"
                 class="absolute inset-0 w-full h-full object-cover hidden">

            <input 
                type="file"
                accept="image/*"
                id="${iconUploadId}"
                class="hidden"
            >
        </label>

        <!-- Title -->
        <input
            type="text"
            class="w-[119px] h-[41px] border border-[#E8E8E8] rounded-[10px] p-1"
        >

        <!-- Title Color -->
        <div class="flex items-center gap-[10px] w-[129px] h-[44px]
            border border-[#E8E8E8] rounded-[10px] bg-gray-50 px-[15px] py-[12px]">

            <input
                type="color"
                value="#000000"
                class="w-[22px] h-[22px] rounded-full cursor-pointer color-input"
                data-color-span="true"
            >

            <span class="text-[13px] font-mono text-gray-600 w-[76px]">
                #000000
            </span>

        </div>

        <!-- Description -->
        <input
            type="text"
            class="w-[239px] h-[41px] border border-[#E8E8E8] rounded-[10px]"
        >

        <!-- Description Color -->
        <div class="flex items-center gap-2 border border-[#E8E8E8]
            rounded-[10px] w-[134px] h-[44px] px-[15px] py-[12px]">

            <input
                type="color"
                value="#000000"
                class="w-[22px] h-[22px] rounded-full cursor-pointer color-input"
                data-color-span="true"
            >

            <span class="text-[13px] font-medium">
                #000000
            </span>

        </div>

        <!-- Delete -->
        <img
            src="{{asset('images/cms/icon_cms_v2/icon_delete.png')}}"
            class="w-[14px] h-[18px] cursor-pointer delete-detail-btn"
        >
    `;
    
    detailTableBody.appendChild(row);
    
    // Add event listener to file input
    const fileInput = row.querySelector(`#${iconUploadId}`);
    fileInput.addEventListener('change', function(event) {
        previewIcon(event, previewId);
    });
    
    // Add event listeners to color inputs
    const colorInputs = row.querySelectorAll('.color-input');
    colorInputs.forEach(input => {
        input.addEventListener('input', function() {
            updateColorCode(this);
        });
    });
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
            const row = deleteButton.closest(".flex");
            if (row) {
                row.remove();
            }
        }
    });
    
    // Add event listener to initial row
    const initialColorRow = colorTableBody.querySelector(".flex");
    if (initialColorRow) {
        const colorFileInput = initialColorRow.querySelector('#iconUploadColor1');
        if (colorFileInput) {
            colorFileInput.addEventListener('change', function(event) {
                previewIcon(event, 'previewColor1');
            });
        }
        
        const colorColorInput = initialColorRow.querySelector('.color-input');
        if (colorColorInput) {
            colorColorInput.addEventListener('input', function() {
                updateColorCode(this);
            });
        }
    }
}

function addColorRow() {
    const uniqueId = Date.now() + Math.random().toString(36).substr(2, 9);
    const iconUploadId = 'iconUploadColor' + uniqueId;
    const previewId = 'previewColor' + uniqueId;
    const row = document.createElement("div");
    row.className = "flex gap-[23px] w-[1049px]";
    row.innerHTML = `
        <div class="">
            <input type="number" class="border border-[#E8E8E8] rounded-[10px] w-[36px] h-[35px] box-border">
        </div>

        <div class="">
            <label for="${iconUploadId}"
                class="w-[106px] h-[94px] flex flex-col items-center justify-center gap-[20px]
                border border-[#E8E8E8] rounded-[10px] cursor-pointer
                transition relative overflow-hidden">

                <img src="{{ asset('images/cms/icon_cms_v2/icon_image.png') }}" class="w-[33.78px] h-[41.43px] text-gray-400">

                <img id="${previewId}"
                    class="absolute inset-0 w-full h-full object-cover hidden">

                <input 
                    type="file"
                    accept="image/*"
                    id="${iconUploadId}"
                    class="hidden box-border">
            </label>
        </div>

        <div class="">
            <div class="flex items-center gap-2 px-[15px] py-[10px] border rounded-[10px] w-[108px]">
                <input 
                    type="color"
                    value="#000000"
                    class="w-[22px] h-[22px] rounded-full cursor-pointer box-border color-input"
                    data-color-span="true">
                <span class="text-xs font-mono text-gray-600">
                    #000000
                </span>
            </div>
        </div>

        <div class="">
            <input type="number" class="border border-[#E8E8E8] rounded-[10px] w-[71px] h-[39px] box-border">
        </div>

        <div class="w-[140px]">
            <input type="number" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
        </div>

        <div class="w-[120px]">
            <input type="number" class="border border-[#E8E8E8] rounded-[10px] w-[120px] h-[39px] box-border">
        </div>

        <div class="w-[200px]">
            <input type="text" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
        </div>

        <div class="w-[200px]">
            <input type="text" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
        </div>

        <div class="w-[24px]">
            <img src="{{asset('images/cms/icon_cms_v2/icon_delete.png')}}" alt="" class="w-[14px] h-[18px] cursor-pointer delete-color-btn">
        </div>
    `;
    
    colorTableBody.appendChild(row);
    
    // Add event listener to file input
    const fileInput = row.querySelector(`#${iconUploadId}`);
    fileInput.addEventListener('change', function(event) {
        previewIcon(event, previewId);
    });
    
    // Add event listener to color input
    const colorInput = row.querySelector('.color-input');
    colorInput.addEventListener('input', function() {
        updateColorCode(this);
    });
}

</script>

</body>
</html>