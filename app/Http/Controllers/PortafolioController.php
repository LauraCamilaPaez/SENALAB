<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Lo usamos para listar CERTIFICADOS.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portafolio');
    }

    /**
     *Lo usamos para crear un nuevo CERTIFICADO (formulario)
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Lo usamos para Guardar el CERTIFICADO en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostrar un CERTIFICADO encontrado porID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Formulario para editar un CERTIFICADO existente
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Guardar cambios realizados en el CERTIFICADO por el metodo EDIT
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Eliminar un CERTIFICADO por su ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
