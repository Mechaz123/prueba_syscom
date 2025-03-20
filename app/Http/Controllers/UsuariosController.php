<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Usuarios;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller {
    public function listarUsuarios() {
        $error = null;
        $todosUsuarios = Usuarios::with('rol')->orderBy('created_at', 'asc')->get();
        $diasFestivos = [];
        $usuariosDiasTrabajados = [];
        $response = Http::get('https://api-colombia.com/api/v1/holiday/year/2025');
        $usuariosActivos = $this->validarUsuariosActivos($todosUsuarios);
        if ($response->successful()) {
            $diasFestivos = array_column($response->json(), 'date');

            foreach($usuariosActivos as $usuario) {
                $dias_trabajados = 0;
                $fecha_ingreso = (Carbon::parse($usuario->fecha_ingreso));
                $fecha_actual = Carbon::now();

                while($fecha_ingreso <= $fecha_actual) {
                    if(!$fecha_ingreso->isWeekend()  && !in_array($fecha_ingreso->format('Y-m-d\T00:00:00'), $diasFestivos)) {
                        $dias_trabajados++;
                    }
                    $fecha_ingreso->addDay();
                }
                $usuario->setAttribute('dias_trabajados', $dias_trabajados);
            }
        } else {
            $error = "Ocurrió un error al intentar consultar los días festivos.";
        }

        return view('listar_usuarios', compact(['usuariosActivos', 'error']));
    }

    private function validarUsuariosActivos($todosUsuarios) {
        $usuariosActivos = [];

        foreach($todosUsuarios as $usuario) {
            if ($usuario->fecha_eliminacion == null) {
                $usuariosActivos[] = $usuario;
            }
        }
        return $usuariosActivos;
    }

    public function ingresarUsuario() {
        $todosRoles = Roles::all();
        $editar = false;
        return view('ingresar_usuario', compact(['todosRoles', 'editar']));
    }

    public function crearUsuario(Request $request) {
        $usuario = new Usuarios();

        $usuario->nombre = $request->nombre;
        $usuario->correo_electronico = $request->correo_electronico;
        $usuario->id_rol = $request->id_rol;
        $usuario->fecha_ingreso = $request->fecha_ingreso;
        $usuario->firma = $request->nombre;
        $usuario->contrato = $this->generarContrato($usuario);

        $usuario->save();
        return redirect('/');
    }

    private function generarContrato($usuario) {
        $rol = Roles::find($usuario->id_rol);
        $pdf = Pdf::loadView('private.plantilla_contrato', compact(['usuario', 'rol']));
        $filename = 'contratos/'.strtolower($usuario->nombre).'.pdf';
        Storage::put('public/'.$filename, $pdf->output());

        return asset('storage/'.$filename);
    }

    public function editarUsuario($id) {
        $todosRoles = Roles::all();
        $usuario = Usuarios::find($id);
        $editar = true;

        return view('ingresar_usuario', compact(['todosRoles', 'editar', 'usuario']));
    }

    public function editar($id, Request $request) {
        $usuario = Usuarios::find($id);
        
        $usuario->nombre = $request->nombre;
        $usuario->correo_electronico = $request->correo_electronico;
        $usuario->id_rol = $request->id_rol;
        $usuario->fecha_ingreso = $request->fecha_ingreso;
        $usuario->contrato = $this->generarContrato($usuario);

        $usuario->save();
        return redirect('/');
    }

    public function eliminarUsuario($id) {
        $usuario = Usuarios::find($id);
        $usuario->fecha_eliminacion = Carbon::now();
        $usuario->save();
        return redirect('/');
    }
}
