<?php
 
namespace App\Http\Controllers;
 
use App\Models\Agendamentos;
use Illuminate\View\View;
 
class AgendamentosController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('consulta.blade.php', [
            'agendamentos' => Agendamentos::findOrFail($id)
        ]);
    }
}
