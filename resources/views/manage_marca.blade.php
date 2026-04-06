<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://cdn.tailwindcss.com"></script>
<title>Admin</title>
</head>

<body class="bg-gray-100">

<!-- TOPBAR -->
<header class="h-14 bg-slate-900 text-white flex items-center px-4">

    <button id="toggleNav" class="text-xl mr-4">
        ☰
    </button>

    <div class="font-bold">Bitel, Techonogia para Todos</div>

</header>


<div class="flex h-[calc(100vh-56px)]">

<!-- SIDEBAR -->
<aside id="sidebar"
class="w-56 bg-slate-800 text-white transition-all duration-300">

<ul class="p-2 space-y-2">

<!-- DASHBOARD -->
<li class="flex items-center p-3 rounded ">

<svg class="w-5 h-5 min-w-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/>
</svg>

<span class="ml-3 nav-text">Dashboard</span>

</li>

<li class="flex items-center p-3 ">

<svg class="w-5 h-5 min-w-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M20 13V7a2 2 0 00-2-2h-3V3H9v2H6a2 2 0 00-2 2v6"/>
</svg>

<span class="ml-3 nav-text">Notificaciones</span>

</li>

<li class="flex items-center p-3 rounded ">

<svg class="w-5 h-5 min-w-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M3 3h18l-2 13H5L3 3z"/>
</svg>

<span class="ml-3 nav-text">Marca</span>

</li>


<li class="flex items-center p-3 rounded ">

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
Home / Marca
</div>

<div class="flex justify-between mb-4">

<h1 class="text-xl font-semibold">
Marca
</h1>

<button id="openModal" class="bg-blue-600 text-white px-4 py-2 rounded">
+ Add
</button>

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

</script>

<!-- Modal for Add (styled like product modal) -->
<div id="modalMarca" class="fixed inset-0 bg-black/60 hidden z-50 flex items-center justify-center p-4">

    <form id="marcaFormElem"
        class="w-full max-w-lg bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden flex flex-col">

        <!-- HEADER -->
        <div class="flex items-center justify-between px-6 py-4 border-b">
            <h1 class="text-lg font-semibold text-gray-800">
                Add Marca
            </h1>
            <button id="closeMarcaModal" type="button"
                class="text-gray-400 hover:text-gray-600 text-2xl transition">
                &times;
            </button>
        </div>

        <!-- BODY -->
        <div class="p-6 space-y-6">

            <!-- FORM SECTION -->
            <div class="bg-gray-50 p-5 rounded-xl border space-y-4">

                <h2 class="text-sm font-semibold text-gray-700 uppercase tracking-wide">
                    Marca Information
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <!-- Tên -->
                    <input id="input1" type="text" placeholder="Tên"
                        class="border border-gray-200 rounded-xl px-3 py-2 text-sm w-full
                        focus:outline-none focus:ring-2 focus:ring-blue-500 transition">

                    <!-- Mã -->
                    <input id="input2" type="text" placeholder="Mã"
                        class="border border-gray-200 rounded-xl px-3 py-2 text-sm w-full
                        focus:outline-none focus:ring-2 focus:ring-blue-500 transition">

                    <!-- Mô tả -->
                    <input id="input3" type="text" placeholder="Mô tả"
                        class="md:col-span-2 border border-gray-200 rounded-xl px-3 py-2 text-sm w-full
                        focus:outline-none focus:ring-2 focus:ring-blue-500 transition">

                </div>

            </div>

            <!-- TOGGLE -->
            <div class="bg-gray-50 p-5 rounded-xl border flex items-center justify-between">

                <span class="text-sm text-gray-700">
                    Kích hoạt
                </span>

                <label class="relative inline-flex items-center cursor-pointer">
                    <input id="toggleSwitch" type="checkbox" class="sr-only peer">

                    <!-- Track -->
                    <div id="marcaTrack"
                        class="w-11 h-6 bg-gray-200 rounded-full transition
                        peer-checked:bg-blue-600">
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
        <div class="flex justify-end gap-3 px-6 py-4 border-t bg-gray-50">

            <button type="button" id="cancelMarcaBtn"
                class="px-4 py-2 text-sm rounded-xl border border-gray-200
                hover:bg-gray-100 transition">
                Cancel
            </button>

            <button type="submit" id="saveMarcaBtn"
                class="px-4 py-2 text-sm rounded-xl bg-blue-600 text-white
                hover:bg-blue-700 active:scale-[0.98] transition">
                Save
            </button>

        </div>

    </form>

</div>

<script>
// Modal behavior (marca)
const openModal = document.getElementById('openModal')
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