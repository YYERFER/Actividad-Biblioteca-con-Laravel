<tr>
    <td class="border border-solid border-slate-300 px-4 py-2">{{ $prestamos->libros->titulo }}</td>
    <td class="border border-solid border-slate-300 px-4 py-2">{{ $prestamos->libros->autor }}</td>
    <td class="border border-solid border-slate-300 px-4 py-2">{{ $prestamos->fecha_prestamo }}</td>
    <td class="border border-solid border-slate-300 px-4 py-2">{{ $prestamos->fecha_devolucion }}</td>

    <td class="border border-solid border-slate-300 px-2 py-4">
        <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2 px-2 mb-4 rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/deletePrestamo/{{ $prestamos->id }}" ><button class="bg-transparent border-0 text-white text-md hover:cursor-pointer font-serif" type="button">Eliminar</button></a>
        {{-- <a href="http://127.0.0.1:8000/deletePrestamo/{{ $prestamos->id }}" ><button>Eliminar</button></a> --}}

        <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2 px-2 mb-4 rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/detailsPrestamo/{{ $prestamos->id }}" ><button class="bg-transparent border-0 text-white text-md hover:cursor-pointer font-serif" type="button">Detalles</button></a>
        {{-- <a href="http://127.0.0.1:8000/detailsPrestamo/{{ $prestamos->id }}" ><button>Detalles</button></a> --}}

        <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2 px-2 mb-4 rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/returnPrestamoForm/{{ $prestamos->id }}" ><button class="bg-transparent border-0 text-white text-md hover:cursor-pointer font-serif" type="button">Devolución</button></a>
        {{-- <a href="http://127.0.0.1:8000/returnPrestamoForm/{{ $prestamos->id }}" ><button>Devolución</button></a> --}}
    </td>
</tr>
