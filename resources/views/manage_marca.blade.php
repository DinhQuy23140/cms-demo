@extends('layouts.cms')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cms/noti/noti.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/cms/cms_v2/style.css') }}"> -->
@endsection

@section('content')
    <div id="modalMarca" class="fixed inset-0 bg-black bg-opacity-50 hidden z-[9999] flex items-center justify-center">

        <form id="marcaFormElem" novalidate
            class="w-[1126px] h-[346px] shadow-xl overflow-hidden flex flex-col gap-[10px] bg-white rounded-b-[16px]">

            <!-- HEADER -->
            <div class="flex items-center justify-between h-[60px] bg-[#FFFF00] px-[20px] py-[16px]">
                <div class="flex items-center gap-[8px]">
                    <img src="{{asset('images/cms/icon_cms_v2/icon_edit.png')}}" alt="">
                    <h1 class="font-inter font-semibold text-[20px] leading-none text-gray-800">
                        Crear marca
                    </h1>
                </div>
                <button id="closeMarcaModal" type="button"
                    class="text-gray-400 hover:text-gray-600 text-2xl transition h-[17.5px] w-[17.5px] flex items-center justify-center">
                    &times;
                </button>
            </div>

            <!-- BODY -->
            <div class="flex flex-col gap-[24px] p-[32px]">

                <!-- FORM SECTION -->

                <div class="flex gap-[20px]">
                    <div class="relative flex flex-col w-[647px]">

                        <label
                            for="marcaNombre"
                            class="absolute -top-[9px] left-[12px] px-1 bg-white
                            font-['Work_Sans'] font-bold text-[14px] leading-[16.8px] text-[#008B8B]"
                        >
                            Nombre del Marca <span class="text-red-500">*</span>
                        </label>

                        <input
                            id="marcaNombre"
                            type="text"
                            placeholder="Ingresar nombre del marca"
                            required
                            class="w-full h-[43px]
                            border !border-[#8EC6C6] rounded-[10px]
                            px-3 py-2
                            font-inter text-[14px]
                            placeholder-[#666666]
                            focus:outline-none focus:ring-2 focus:ring-blue-400"
                        >

                        <span class="field-error hidden text-red-600 text-[12px] mt-1">
                            Vui lòng nhập tên marca.
                        </span>

                    </div>

                </div>


                <!-- TOGGLE -->
                <div class=" flex items-center justify-start gap-[40px]">

                    <span class="font-inter font-semibold text-[16px] leading-none tracking-normal text-[#008B8B]">Estado</span>

                    <!-- From Uiverse.io by namecho --> 
                    <label class="switch-v2 flex items-center cursor-pointer">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>

                </div>

            </div>

            <!-- FOOTER -->
            <div class="flex justify-end gap-[27px] w-[1126px] px-[32px] pb-[40px]">
                <button type="submit" id="saveMarcaBtn"
                    class= "flex items-center justify-center w-[131px] h-[44px] bg-[#5CB85C] border rounded-[4px] text-white px-[38px] py-[9px] gap-[8px] font-bold text-[16px]">
                    <img src="{{asset('images/cms/icon_cms_v2/icon_accept.png')}}" alt="" class="w-[10.5px] h-[10.5px]">
                    Ahorrar
                </button>

                <button type="button" id="cancelMarcaBtn"
                    class="flex items-center justify-center w-[131px] h-[44px] bg-[#707C88] border border-[#03558B] rounded-[4px] px-[38px] py-[9px] gap-[8px] font-bold text-white text-[16px]">
                    <img src="{{asset('images/cms/icon_cms_v2/icon_cancel_form.png')}}" alt="" class="w-[10.5px] h-[10.5px]">
                    Cancelar
                </button>

            </div>

        </form>

    </div>

    <div id="modalMarcaEdit" class="fixed inset-0 bg-black bg-opacity-50 hidden z-[9999] flex items-center justify-center">

        <form id="marcaEditFormElem" novalidate
            class="w-[1126px] h-[346px] shadow-xl overflow-hidden flex flex-col gap-[10px] bg-white rounded-b-[16px]">

            <!-- HEADER -->
            <div class="flex items-center justify-between h-[60px] bg-[#FFFF00] px-[20px] py-[16px]">
                <div class="flex items-center gap-[8px]">
                    <img src="{{asset('images/cms/icon_cms_v2/icon_add_form.png')}}" alt="">
                    <h1 class="font-inter font-semibold text-[20px] leading-none text-gray-800">
                        Editar marca
                    </h1>
                </div>

                <button id="closeMarcaEditModal" type="button"
                    class="text-gray-400 hover:text-gray-600 text-2xl transition h-[17.5px] w-[17.5px] flex items-center justify-center">
                    &times;
                </button>
            </div>

            <!-- BODY -->
            <div class="flex flex-col gap-[24px] p-[32px]">

                <div class="flex gap-[20px]">
                    <div class="relative flex flex-col w-[647px]">

                        <label
                            for="marcaNombreEdit"
                            class="absolute -top-[9px] left-[12px] px-1 bg-white
                            font-['Work_Sans'] font-bold text-[14px] leading-[16.8px] text-[#008B8B]"
                        >
                            Nombre del Marca <span class="text-red-500">*</span>
                        </label>

                        <input
                            id="marcaNombreEdit"
                            type="text"
                            placeholder="Ingresar nombre del marca"
                            required
                            class="w-full h-[43px]
                            border !border-[#8EC6C6] rounded-[10px]
                            px-3 py-2
                            font-inter text-[14px]
                            placeholder-[#666666]
                            focus:outline-none focus:ring-2 focus:ring-blue-400"
                        >

                        <span class="field-error hidden text-red-600 text-xs mt-1">
                            Vui lòng nhập tên marca.
                        </span>

                    </div>
                </div>

                <!-- TOGGLE -->
                <div class="flex items-center justify-start gap-[40px]">

                    <span class="font-inter font-semibold text-[16px] leading-none tracking-normal text-[#008B8B]">
                        Estado
                    </span>

                    <label class="switch-v2 flex items-center cursor-pointer">
                        <input id="marcaEstadoEdit" type="checkbox">
                        <span class="slider"></span>
                    </label>

                </div>

            </div>

            <!-- FOOTER -->
            <div class="flex justify-end gap-[27px] w-[1126px] px-[32px] pb-[40px]">

                <button type="submit" id="updateMarcaBtn"
                    class="flex items-center justify-center w-[131px] h-[44px] bg-[#5CB85C] border rounded-[4px] text-white px-[38px] py-[9px] gap-[8px] font-bold text-[16px]">
                    <img src="{{asset('images/cms/icon_cms_v2/icon_accept.png')}}" alt="" class="w-[10.5px] h-[10.5px]">
                    Actualizar
                </button>

                <button type="button" id="cancelMarcaEditBtn"
                    class="flex items-center justify-center w-[131px] h-[44px] bg-[#707C88] border border-[#03558B] rounded-[4px] px-[38px] py-[9px] gap-[8px] font-bold text-white text-[16px]">
                    <img src="{{asset('images/cms/icon_cms_v2/icon_cancel_form.png')}}" alt="" class="w-[10.5px] h-[10.5px]">
                    Cancelar
                </button>

            </div>

        </form>

    </div>

    <div id="cms-noti-app" class="container-fluid py-3">
        <div class="card shadow-sm border-0">
            <div class="card-header d-flex justify-content-between align-items-center bg-bitel-yellow-color text-bitel-green-color h-[69px] px-[32px] py-[20px] !rounded-t-[16px]">
                <span class="font-inter font-bold text-[20px] leading-[20px] tracking-[-0.35px] align-middle text-[#0091B3]">Marca</span>
                    <button id="toggleFormBtn" class="btn btn-light btn-sm fw-bold">
                    <i class="fa fa-plus"></i> Agregar
                </button>
            </div>

            <div class="card-body p-0">
                <!-- TABLE / MOBILE LIST -->
                <div class="table-responsive">
                    <table v-if="notifications.length"  class="table no-footer dtr-inline" id="noti-table">
                        <tbody id="noti-tbody">
                            @foreach ($brands as $brand)
                                <tr  role="row"class="odd">
                                    <td class="text-center">
                                        <label class="switch-v2">
                                            <input type="checkbox"
                                            {{ $brand->active == 1 ? 'checked' : '' }}>
                                            <span class="slider"></span>
                                        </label>
                                    </td>
                                    <td>{{$brand->brand_name}}</td>
                                    <td class="text-end !p-r-[25px]">
                                        <button 
                                            class="btn btn-sm btn-outline-secondary me-1 btn-edit-marca"
                                            data-id="{{$brand->brand_id}}"
                                            data-name="{{$brand->brand_name}}"
                                            data-active="{{$brand->active}}"
                                        >
                                            <i class="fa fa-pencil"></i>
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
                {{ $brands->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection


@section('js')
<script src="https://cdn.tailwindcss.com"></script>
<script>
    const openModal = document.getElementById('toggleFormBtn')
    const modalMarca = document.getElementById('modalMarca')
    const modalDelete = document.getElementById('modalConfirmDelete')
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn')
    const closeMarcaModal = document.getElementById('closeMarcaModal')
    const cancelMarcaBtn = document.getElementById('cancelMarcaBtn')
    const marcaFormElem = document.getElementById('marcaFormElem')
    const toggleSwitch = document.getElementById('toggleSwitch')
    const marcaTrack = document.getElementById('marcaTrack')
    const marcaDot = document.getElementById('marcaDot')
    const deleteBtns = document.querySelectorAll('.deleteBtn')

    const openMarca = () => modalMarca.classList.remove('hidden')
    const closeMarca = () => modalMarca.classList.add('hidden')

    deleteBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const brandId = btn.getAttribute('data-id')
            console.log('Delete brand with ID:', brandId)
            modalDelete.classList.remove('hidden')
        })
    })

    confirmDeleteBtn && confirmDeleteBtn.addEventListener('click', () => {
        console.log('Confirmed delete')
        modalDelete.classList.add('hidden')
    })


    openModal && openModal.addEventListener('click', openMarca)
    closeMarcaModal && closeMarcaModal.addEventListener('click', closeMarca)
    cancelMarcaBtn && cancelMarcaBtn.addEventListener('click', closeMarca)

    // click outside to close
    modalMarca && modalMarca.addEventListener('click', (e) => {
        if (e.target === modalMarca) closeMarca()
    })

    // toggle appearance
    const updateToggle = () => {
        if (toggleSwitch && toggleSwitch.checked) {
            marcaTrack.classList.remove('bg-gray-200')
            marcaTrack.classList.add('bg-[#87D96F]')
            marcaDot.classList.add('translate-x-5')
        } else {
            marcaTrack.classList.remove('bg-[#87D96F]')
            marcaTrack.classList.add('bg-gray-200')
            marcaDot.classList.remove('translate-x-5')
        }
    }

    if (toggleSwitch) {
        toggleSwitch.addEventListener('change', updateToggle)
        updateToggle()
    }

    // Validation functions
    function showFieldError(field, message) {
        const container = field.parentElement;
        if (!container) return;
        let error = container.querySelector('.field-error');
        if (!error) {
            error = document.createElement('span');
            error.className = 'field-error text-red-600 text-xs mt-1 block';
            container.appendChild(error);
        }
        error.textContent = message;
        error.classList.remove('hidden');
    }

    function clearFieldError(field) {
        const container = field.parentElement;
        if (!container) return;
        const error = container.querySelector('.field-error');
        if (error) {
            error.textContent = '';
            error.classList.add('hidden');
        }
    }

    function validateMarcaForm() {
        if (!marcaFormElem) return true;

        const requiredFields = marcaFormElem.querySelectorAll('[required]');
        const errors = [];

        requiredFields.forEach(field => {
            const value = field.type === 'checkbox' ? field.checked : String(field.value).trim();
            const invalid = value === '';

            if (invalid) {
                field.classList.add('border-red-500');
                field.classList.remove('border-[#DDDDDD]');
                showFieldError(field, 'Vui lòng nhập thông tin này.');
                errors.push(field);
            } else {
                field.classList.remove('border-red-500');
                field.classList.add('border-[#DDDDDD]');
                clearFieldError(field);
            }
        });

        if (errors.length > 0) {
            errors[0].focus();
            return false;
        }

        return true;
    }

    // handle submit (demo: log values and close)
    marcaFormElem && marcaFormElem.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (validateMarcaForm()) {
            const data = {
                marcaNombre: document.getElementById('marcaNombre').value,
                active: toggleSwitch.checked
            };
            console.log('Add Marca:', data);
            marcaFormElem.reset();
            if (typeof updateToggle === 'function') updateToggle();
            closeMarca();
        }
    });

    // Clear validation errors on input
    marcaFormElem && marcaFormElem.querySelectorAll('[required]').forEach(field => {
        field.addEventListener('input', () => clearFieldError(field));
        field.addEventListener('change', () => clearFieldError(field));
    });

    //edit marca

    document.addEventListener("DOMContentLoaded", function () {

        const modal = document.getElementById("modalMarcaEdit");
        const nameInput = document.getElementById("marcaNombreEdit");
        const activeInput = document.getElementById("marcaEstadoEdit");

        document.querySelectorAll(".btn-edit-marca").forEach(btn => {

            btn.addEventListener("click", function () {

                const name = this.dataset.name;
                const active = this.dataset.active;

                // fill data vào form
                nameInput.value = name;
                activeInput.checked = active == 1;

                // show modal
                modal.classList.remove("hidden");

            });

        });

    });

    document.getElementById("closeMarcaEditModal").onclick = () => {
        document.getElementById("modalMarcaEdit").classList.add("hidden");
    };

    document.getElementById("cancelMarcaEditBtn").onclick = () => {
        document.getElementById("modalMarcaEdit").classList.add("hidden");
    };
</script>
@endsection
