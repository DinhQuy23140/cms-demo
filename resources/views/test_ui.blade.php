<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-[9999] flex items-center justify-center">

        <div id="configForm" class="w-[1126px] h-[841px] flex flex-col gap-[20px] bg-white rounded-[10px] overflow-y-auto">
            <form id="productForm" class="flex flex-col gap-[20px]" action="#" method="POST" enctype="multipart/form-data">

                <!-- TITLE -->
                <h1 class="font-inter text-[20px] font-semibold leading-none tracking-normal flex justify-between items-center bg-[#FFFF00]">
                    <img src="{{ asset('images/cms/icon_cms_v2/icon_add.png') }}" alt="" class="w-[24px] h-[24px] pr-[8px]">
                    Agregar nuevo Equipo
                    <button id="closeModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
                </h1>

                <!-- PRODUCT INFORMATION -->
                <div class="flex gap-[24px]">
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
</body>
</html>