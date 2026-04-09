<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.tailwindcss.com"></meta>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/cms/cms_v2/style.css') }}">
<title>Marca</title>
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
        <main class="flex-1 pt-[17px] pr-[50px] pb-[17px] pl-[8px] gap-[20px]">

            <div class="font-inter text-[15px] flex items-center gap-[6px]">
                <a href="#" class="text-[15px] ">
                    Homepage
                </a>

                <img src="{{asset('images/cms/icon_cms_v2/ic_keyboard_arrow_right.png')}}" alt="">

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

                    <img src="{{ asset('images/cms/icon_cms_v2/icon_add.png') }}" class="w-[10px] h-[10px]" />

                    <span class="font-inter text-[15px]">
                        Add
                    </span>

                </button>

            </div>

            <div id="modalConfirmDelete" class="fixed inset-0 hidden bg-black bg-opacity-50 z-50 flex items-center justify-center">
                <div class="bg-white rounded-lg px-[21px] py-[19px]">
                    <div class="w-[330px] flex flex-col items-center gap-[7px]">
                        <img src="{{ asset('images/cms/icon_cms_v2/icon_warning.png') }}" class="w-[60px] h-[60px]">
                        <h2 class="font-inter font-semibold text-[18px] leading-[28px] tracking-normal text-center align-middle">No se puede eliminar la marca</h2>
                        <p class="font-inter font-normal text-[14px] leading-[20px] tracking-normal text-center">No se puede eliminar esta marca porque aún</br> tiene dispositivos activos asociados. Por favor,</br> desactiva o reasigna esos dispositivos antes de</br> volver a intentarlo.</p>
                        <div class="flex justify-end gap-4">
                            <button id="confirmDeleteBtn" class="flex items-center justify-center w-[329px] h-[36px] px-[24px] py-[17px] bg-[#9F5ED9] text-white rounded-[10px]">Cambiar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden">

                <div class="w-full flex flex-col gap-[20px]">

                    @foreach($brands as $brand)
                        <div class="flex items-center border border-[#E8E8E8] rounded-[10px] hover:bg-gray-50 transition">

                            <div class="p-4 w-[100px]">
                                <div class="flex items-center gap-5">

                                    <label class="switch cursor-pointer flex items-center mb-0">
                                        <input type="checkbox"
                                        {{ $brand->active == 1 ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>

                                    <img src="{{ asset('images/cms/icon_cms_v2/icon_fullview.png') }}" class="w-5 h-5">

                                </div>
                            </div>

                            <div class="flex-1 p-4 text-left text-[13px] font-inter">
                                {{$brand->brand_name}}
                            </div>

                            <div class="px-[12px] w-[120px]">
                                <div class="flex gap-4 justify-end items-center">

                                    <img src="{{asset('images/cms/icon_cms_v2/icon_edit.png')}}" class="w-[18px] h-[18px]">

                                    <img src="{{asset('images/cms/icon_cms_v2/icon_delete.png')}}" class="w-[24px] h-[24px] deleteBtn" data-id="{{$brand->brand_id}}">

                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>

            <div class="flex gap-2 items-center justify-center py-4">
                {{ $brands->links('pagination::bootstrap-4') }}
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

        <form id="marcaFormElem" novalidate
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
                            Nombre del Marca
                        </label>
                        <input id="marcaNombre" type="text" placeholder="Ingresar nombre del marca" required
                            class="border border-[#DDDDDD] rounded-[10px] text-sm w-[647px] h-[41px] px-3
                            placeholder-[#666666] focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <span class="field-error hidden text-red-600 text-xs mt-1">Vui lòng nhập tên marca.</span>
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
                brand_name: document.getElementById('marcaNombre').value,
                active: toggleSwitch.checked
            };

            try {
                const response = await fetch('/api/brands', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    const result = await response.json();
                    console.log('Brand created:', result);
                    // Optionally reload the page or update the list
                    location.reload();
                } else {
                    console.error('Error creating brand:', response.statusText);
                }
            } catch (error) {
                console.error('Error:', error);
            }

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
    </script>

</body>
</html>