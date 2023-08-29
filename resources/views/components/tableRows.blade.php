<tr>
    <td  class="border border-solid border-slate-300 px-4 py-2">{{ $libro->titulo }}</td>
    <td  class="border border-solid border-slate-300 px-4 py-2">{{ $libro->autor }}</td>
    <td  class="border border-solid border-slate-300 px-4 py-2">{{ $libro->anio_publicacion }}</td>
    <td  class="border border-solid border-slate-300 px-4 py-2">{{ $libro->genero }}</td>
    @if ( $libro->disponible  === 'SI')
    <td  class="border border-solid border-slate-300 px-4 py-2">Si</td>
    @else
    <td  class="border border-solid border-slate-300 px-4 py-2">No</td>
    @endif

    <td  class="border border-solid border-slate-300 px-2 py-4 ">

        <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2 px-2 mb-4 rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/updateBookForm/{{ $libro->id }}" ><button class="bg-transparent border-0 text-white text-md hover:cursor-pointer font-serif" type="button">Modificar</button></a>
        {{-- <a href="http://127.0.0.1:8000/updateBookForm/{{ $libro->id }}" ><button>Modificar</button></a> --}}

        <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2 px-2 rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/deleteBook/{{ $libro->id }}" ><button class="bg-transparent border-0 text-white text-md hover:cursor-pointer font-serif" type="button">Eliminar</button></a>
        {{-- <a href="http://127.0.0.1:8000/deleteBook/{{ $libro->id }}" ><button>Eliminar</button></a> --}}

        <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2 px-2 rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/detailsBook/{{ $libro->id }}" ><button class="bg-transparent border-0 text-white text-md hover:cursor-pointer font-serif" type="button">Detalles</button></a>
        {{-- <a href="http://127.0.0.1:8000/detailsBook/{{ $libro->id }}" ><button>Detalles</button></a> --}}

        <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2 px-2 rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/addPrestamoForm/{{ $libro->id }}" ><button class="bg-transparent border-0 text-white text-md hover:cursor-pointer font-serif" type="button">Préstamo</button></a>
        {{-- <a href="http://127.0.0.1:8000/addPrestamoForm/{{ $libro->id }}" ><button>Préstamo</button></a> --}}
    </td>

</tr>
