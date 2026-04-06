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
<li class="flex items-center p-3 rounded hover:bg-slate-700">

<svg class="w-5 h-5 min-w-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/>
</svg>

<span class="ml-3 nav-text">Dashboard</span>

</li>

<li class="flex items-center p-3 rounded bg-slate-700">

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


<li class="flex items-center p-3 rounded hover:bg-slate-700">

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
Home / Notificaciones
</div>

<div class="flex justify-between mb-4">

<h1 class="text-xl font-semibold">
Product List
</h1>

<button class="bg-blue-600 text-white px-4 py-2 rounded">
+ Create Product
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

</body>
</html>