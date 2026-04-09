@extends('layouts.cms')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cms/noti/noti.css') }}" />
@endsection

@section('content')
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-[9999] flex items-center justify-center">

                <div id="configForm" class="w-[1126px] h-[841px] px-[37px] py-[15px] flex flex-col gap-[20px] bg-white rounded-[10px] overflow-y-auto">
            <form id="productForm">

            <!-- TITLE -->
            <h1 class="font-inter text-[20px] font-semibold leading-none tracking-normal flex justify-between items-center">
                Agregar nuevo Equipo
                <button id="closeModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
            </h1>

            <!-- PRODUCT INFORMATION -->
            <div class="flex gap-[20px]">
                <!-- Product Name -->
                <div class="flex flex-col space-y-1 w-[647px]">
                    <label class="text-sm font-medium text-gray-700">
                        Nombre del Producto
                    </label>
                    <input
                        id = "productNameInput"
                        type="text"
                        required
                        maxlength="50"
                        placeholder="Ingresar nombre del producto"
                        class="w-full border rounded-[10px] px-3 py-2 font-inter text-sm leading-none placeholder-[#666666] focus:outline-none focus:ring-2 focus:ring-blue-400"
                    >
                </div>

                <!-- Brand -->
                <div class="flex flex-col space-y-1 w-[480px]">
                    <label class="text-sm font-medium text-gray-700">
                        Marca
                    </label>
                    <div class="relative">
                    <select
                        id="brandSelect"
                        required
                        class="w-full appearance-none border rounded-[10px] px-3 py-2 pr-10 bg-white h-[41px]
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
        </div>

            <!-- PRODUCT DETAIL -->
            <div class="rounded-xl flex flex-col gap-[10px]">
                <div class="flex justify-between items-center">
                    <h2 class="font-inter text-[23px] font-normal leading-none tracking-normal">
                        Descripción
                    </h2>

                    <button id="addDetailBtn"
                    class="px-[8px] py-[7px] bg-[#03558B] text-white rounded-[10px] flex gap-[10px] items-center">
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

                        <div class="flex gap-[25px] items-top py-2 detail-row">

                            <!-- No -->
                            <input id="detailNoInput" type="number" required value="1" class="border w-[41px] h-[41px] border border-[#E8E8E8] rounded-[10px]">


                            <!-- Icon -->
                            <label for="iconUploadDetail1"
                                class="w-[147px] min-h-[105px] flex flex-col items-center justify-center
                                border border-[#E8E8E8] rounded-[10px] cursor-pointer
                                transition relative overflow-hidden gap-[20px]">

                                <img src="{{ asset('images/cms/icon_cms_v2/icon_image.png') }}" class="w-[31.96px] h-[45.22px] text-gray-400">

                                <img id="previewDetail1"
                                    class="absolute inset-0 w-full h-full object-cover hidden">

                                <input 
                                    required
                                    type="file"
                                    accept="image/*"
                                    id="iconUploadDetail1"
                                    class="hidden"
                                >
                            </label>


                            <!-- Title -->
                            <input id="detailTitleInput" required type="text" class="border p-1 rounded-[10px] w-[119px] h-[41px] border border-[#E8E8E8] rounded-[10px]">


                            <!-- Title Color -->
                            <div class="flex items-center gap-[10px] w-[129px] h-[44px] border border-[#E8E8E8] rounded-[10px] bg-gray-50 px-[15px] py-[12px]">

                                <input 
                                    id="detailTitleColorInput"
                                    required
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
                            <input id="detailDescriptionInput" required type="text" class="border rounded-[10px] w-[239px] h-[41px] border border-[#E8E8E8] rounded-[10px]">


                            <!-- Description Color -->
                            <div class="flex items-center gap-2 border rounded-[10px] w-[134px] h-[44px] px-[15px] py-[12px]">

                                <input 
                                    id="detailDescriptionColorInput"
                                    required
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
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[105px] text-[15px] shrink-0">Código del producto en BCCS</div>
                        <div class="font-inter font-normal leading-[100%] tracking-normal w-[59px] text-[16px] shrink-0">Borrar</div>
                    </div>

                    <div id="colorTableBody" class="flex flex-col gap-[10px]">

                        <div class="flex gap-[23px] w-[1049px] color-row">

                            <div class="">
                                <input id="productoNo" required type="number" value="1" class="border border-[#E8E8E8] rounded-[10px] w-[36px] h-[35px] box-border">
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
                                        required
                                        type="file"
                                        accept="image/*"
                                        id="iconUploadColor1"
                                        class="hidden box-border">
                                </label>
                            </div>

                            <div class="">
                                <div class="flex items-center gap-2 px-[15px] py-[10px] border rounded-[10px] w-[108px]">
                                    <input 
                                        id="productColorInput"
                                        required
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
                                <input id="productStockInput" required type="number" class="border border-[#E8E8E8] rounded-[10px] w-[71px] h-[39px] box-border">
                            </div>

                            <div class="">
                                <input id="productPrecio" required type="number" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
                            </div>

                            <div class="w-[120px]">
                                <input id="productDescription" required type="number" class="border border-[#E8E8E8] rounded-[10px] w-[120px] h-[39px] box-border">
                            </div>

                            <div class="">
                                <input id="productBCCS" required type="text" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
                            </div>

                            <div class="w-[24px]">
                                <img src="{{asset('images/cms/icon_cms_v2/icon_delete.png')}}" alt="" class="w-[18px] h-[18px] cursor-pointer delete-color-btn">
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

                <button type="submit"
                class= "flex items-center justify-center w-[95px] h-[36px] bg-[#03558B] border rounded-[10px] text-white px-[38px] py-[9px]">
                    Guardar
                </button>

                <button id="cancelBtn"
                class="flex items-center justify-center w-[95px] h-[36px] border border-[#03558B] text-[#03558B] rounded-[10px] px-[38px] py-[9px]">
                    Cancel
                </button>


            </div>

            </form>

        </div>

    </div>

    <div id="modalConfirmDelete" class="fixed inset-0 hidden bg-black bg-opacity-50 z-[9998] flex items-center justify-center">
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

    <!-- Validation Modal -->
    <div id="validationModal" class="fixed inset-0 hidden bg-black bg-opacity-50 z-[10000] flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 w-[360px] text-center shadow-lg">
            <p class="text-lg font-semibold mb-4">Thông tin không hợp lệ</p>
            <button id="validationCloseBtn" class="mt-2 px-4 py-2 bg-[#03558B] text-white rounded">Đóng</button>
        </div>
    </div>

<div id="cms-noti-app" class="container-fluid py-3">
    <div class="card shadow-sm border-0">
        <div class="card-header d-flex justify-content-between align-items-center bg-bitel-yellow-color text-bitel-green-color">
            <span class="fw-bold fs-8">Equipo</span>
                <button id="toggleFormBtn" class="btn btn-light btn-sm fw-bold">
                <i class="fa fa-plus"></i> Agregar
            </button>
        </div>

        <div class="card-body p-0">
            <!-- TABLE / MOBILE LIST -->
            <div class="table-responsive">
                <table v-if="notifications.length"  class="table no-footer dtr-inline" id="noti-table">
                    <tbody id="noti-tbody">
                        @foreach ($products as $product)
                            <tr  role="row"class="odd" v-for="noti in notifications" :key="noti.id" :data-id="noti.id" :data-priority="noti.priority">
                                <td class="text-center cursor-move">
                                    <i class="fa fa-bars text-muted drag-handle"></i>
                                </td>
                                <td class="text-center">
                                    <label class="switch-v2">
                                        <input type="checkbox"
                                        {{ $product->active == 1 ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>
                                </td>
                                <td>{{$product->product_model}}</td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-secondary me-1">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger deleteBtn">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <!-- PAGINATION -->
        <div class="flex gap-2 items-center justify-center py-4">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="https://cdn.tailwindcss.com"></script>
<script>
    const toggle = document.getElementById("toggleNav")
    const toggleBtn = document.getElementById("toggleFormBtn");
    const modal = document.getElementById("modal");
    const closeBtn = document.getElementById("closeModal");
    const cancelBtn = document.getElementById("cancelBtn");
    const modalDeleteBtn = document.getElementById("modalConfirmDelete");
    const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
    const cancelDeleteBtn = document.getElementById("cancelDeleteBtn");
    const deleteBtns = document.querySelectorAll('.deleteBtn');

    function showMainModal() {
        if (!modal) return;
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function hideMainModal() {
        if (!modal) return;
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    toggleBtn.addEventListener("click", () => {
        if (modal.classList.contains('hidden')) showMainModal(); else hideMainModal();
    });

    closeBtn.addEventListener("click", hideMainModal);

    cancelBtn.addEventListener("click", hideMainModal);

    modal.addEventListener("click", (e) => {
        if (e.target === modal) hideMainModal();
    });

    confirmDeleteBtn.addEventListener("click", () => {
        modalDeleteBtn.classList.add("hidden");
        document.body.classList.remove('overflow-hidden');
    });

    cancelDeleteBtn.addEventListener("click", () => {
        modalDeleteBtn.classList.add("hidden");
        document.body.classList.remove('overflow-hidden');
    });

    deleteBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            modalDeleteBtn.classList.remove("hidden");
            document.body.classList.add('overflow-hidden');
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
            const row = deleteButton.closest(".detail-row");
            if (row) {
                row.remove();
                renumberDetailRows();
            }
        }
    });
    
    // Add event listener to initial row
    const initialDetailRow = detailTableBody.querySelector(".detail-row");
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
    // Find the highest No value in existing rows
    const existingRows = detailTableBody.querySelectorAll('.detail-row');
    let maxNo = 0;
    existingRows.forEach(row => {
        const noInput = row.querySelector('input[type="number"]');
        if (noInput && noInput.value) {
            const noValue = parseInt(noInput.value, 10);
            if (!isNaN(noValue) && noValue > maxNo) {
                maxNo = noValue;
            }
        }
    });
    const nextNo = maxNo + 1;

    const uniqueId = Date.now() + Math.random().toString(36).substr(2, 9);
    const iconUploadId = 'iconUploadDetail' + uniqueId;
    const previewId = 'previewDetail' + uniqueId;
    const row = document.createElement("div");

    row.className = "flex gap-[25px] items-start py-2 detail-row";

    row.innerHTML = `
        <!-- No -->
        <input 
            required
            type="number"
            value="${nextNo}"
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
                required
                type="file"
                accept="image/*"
                id="${iconUploadId}"
                class="hidden"
            >
        </label>

        <!-- Title -->
        <input
            required
            type="text"
            class="w-[119px] h-[41px] border border-[#E8E8E8] rounded-[10px] p-1"
        >

        <!-- Title Color -->
        <div class="flex items-center gap-[10px] w-[129px] h-[44px]
            border border-[#E8E8E8] rounded-[10px] bg-gray-50 px-[15px] py-[12px]">

            <input
                required
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
            required
            type="text"
            class="w-[239px] h-[41px] border border-[#E8E8E8] rounded-[10px]"
        >

        <!-- Description Color -->
        <div class="flex items-center gap-2 border border-[#E8E8E8]
            rounded-[10px] w-[134px] h-[44px] px-[15px] py-[12px]">

            <input
                required
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

    // Add event listeners to clear validation errors
    const newInputs = row.querySelectorAll('[required]');
    newInputs.forEach(field => {
        field.addEventListener('input', () => {
            field.classList.remove('border-red-500');
            field.classList.add('border-[#E8E8E8]');
            if (field.type === 'file') {
                const label = field.closest('label');
                if (label) {
                    label.classList.remove('border-red-500');
                    label.classList.add('border-[#E8E8E8]');
                }
            }
        });
        field.addEventListener('change', () => {
            field.classList.remove('border-red-500');
            field.classList.add('border-[#E8E8E8]');
            if (field.type === 'file') {
                const label = field.closest('label');
                if (label) {
                    label.classList.remove('border-red-500');
                    label.classList.add('border-[#E8E8E8]');
                }
            }
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
            const row = deleteButton.closest(".color-row");
            if (row) {
                row.remove();
                renumberColorRows();
            }
        }
    });
    
    // Add event listener to initial row
    const initialColorRow = colorTableBody.querySelector(".color-row");
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
    // Find the highest No value in existing rows
    const existingRows = colorTableBody.querySelectorAll('.color-row');
    let maxNo = 0;
    existingRows.forEach(row => {
        const noInput = row.querySelector('input[type="number"]');
        if (noInput && noInput.value) {
            const noValue = parseInt(noInput.value, 10);
            if (!isNaN(noValue) && noValue > maxNo) {
                maxNo = noValue;
            }
        }
    });
    const nextNo = maxNo + 1;

    const uniqueId = Date.now() + Math.random().toString(36).substr(2, 9);
    const iconUploadId = 'iconUploadColor' + uniqueId;
    const previewId = 'previewColor' + uniqueId;
    const row = document.createElement("div");
    row.className = "flex gap-[23px] w-[1049px] color-row";
    row.innerHTML = `
        <div class="">
            <input required type="number" value="${nextNo}" class="border border-[#E8E8E8] rounded-[10px] w-[36px] h-[35px] box-border">
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
                    required
                    type="file"
                    accept="image/*"
                    id="${iconUploadId}"
                    class="hidden box-border">
            </label>
        </div>

        <div class="">
            <div class="flex items-center gap-2 px-[15px] py-[10px] border rounded-[10px] w-[108px]">
                <input 
                    required
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
            <input required type="number" class="border border-[#E8E8E8] rounded-[10px] w-[71px] h-[39px] box-border">
        </div>

        <div class="w-[125px]">
            <input required type="number" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
        </div>

        <div class="w-[120px]">
            <input required type="number" class="border border-[#E8E8E8] rounded-[10px] w-[120px] h-[39px] box-border">
        </div>

        <div class="w-[125px]">
            <input required type="text" class="border border-[#E8E8E8] rounded-[10px] w-[125px] h-[39px] box-border">
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

    // Add event listeners to clear validation errors
    const newInputs = row.querySelectorAll('[required]');
    newInputs.forEach(field => {
        field.addEventListener('input', () => {
            field.classList.remove('border-red-500');
            field.classList.add('border-[#E8E8E8]');
            if (field.type === 'file') {
                const label = field.closest('label');
                if (label) {
                    label.classList.remove('border-red-500');
                    label.classList.add('border-[#E8E8E8]');
                }
            }
        });
        field.addEventListener('change', () => {
            field.classList.remove('border-red-500');
            field.classList.add('border-[#E8E8E8]');
            if (field.type === 'file') {
                const label = field.closest('label');
                if (label) {
                    label.classList.remove('border-red-500');
                    label.classList.add('border-[#E8E8E8]');
                }
            }
        });
    });
    
}

function renumberDetailRows() {
    const rows = detailTableBody.querySelectorAll('.detail-row');
    rows.forEach((row, index) => {
        const noInput = row.querySelector('input[type="number"]');
        if (noInput) {
            noInput.value = index + 1;
        }
    });
}

function renumberColorRows() {
    const rows = colorTableBody.querySelectorAll('.color-row');
    rows.forEach((row, index) => {
        const noInput = row.querySelector('input[type="number"]');
        if (noInput) {
            noInput.value = index + 1;
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('productForm');
    const validationModal = document.getElementById('validationModal');
    const validationCloseBtn = document.getElementById('validationCloseBtn');

    if (!form) return;

    // 1) Ensure `required` on all inputs, selects, textareas inside the form
    form.querySelectorAll('input, select, textarea').forEach(el => el.setAttribute('required', ''));

    // Helper: check validity for required fields
    function isElementValid(el) {
        if (!el.hasAttribute('required')) return true;
        const type = el.type;
        if (type === 'file') return el.files && el.files.length > 0;
        if (type === 'checkbox' || type === 'radio') return el.checked;
        const v = el.value;
        return v !== null && String(v).trim() !== '';
    }

    // 2) On submit: validate required fields, add red border for invalids, show modal
    form.addEventListener('submit', (e) => {
        let invalidFound = false;
        const requiredFields = form.querySelectorAll('[required]');
        requiredFields.forEach(el => {
            if (!isElementValid(el)) {
                el.classList.add('border-red-500');
                invalidFound = true;
            } else {
                el.classList.remove('border-red-500');
            }
        });

        if (invalidFound) {
            e.preventDefault();
            if (validationModal) {
                validationModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }
        }
    });

    // 5) Remove red border when user corrects the field
    function handleInteractiveValidation(e) {
        const el = e.target;
        if (!el || !el.hasAttribute) return;
        if (!el.hasAttribute('required')) return;
        if (isElementValid(el)) el.classList.remove('border-red-500');
    }
    form.addEventListener('input', handleInteractiveValidation);
    form.addEventListener('change', handleInteractiveValidation);

    // Modal close logic
    if (validationCloseBtn && validationModal) {
        validationCloseBtn.addEventListener('click', () => {
            validationModal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
        validationModal.addEventListener('click', (ev) => { if (ev.target === validationModal) { validationModal.classList.add('hidden'); document.body.classList.remove('overflow-hidden'); } });
    }
});
</script>
@endsection
