<?php
 
namespace App\Http\Controllers;
 
use App\Models\Agendamentos;
use Illuminate\View\View;
use Illuminate\Http\Request;
 
class AgendamentosController extends Controller
{
    /*
    index - Para exibir uma lista de recursos.
    create - Para exibir um formulário para criar um novo recurso.
    store - Para armazenar um novo recurso no banco de dados.
    show - Para exibir um recurso específico.
    edit - Para exibir um formulário para editar um recurso existente.
    update - Para atualizar um recurso existente no banco de dados.
    destroy - Para excluir um recurso existente do banco de dados.
     */
    public function index()
    {
        $agendamentos = Agendamentos::all();
        return view('consulta', compact('agendamentos'));
        // return vie('nome da view', compact('atributos que passarão pro view'))
    }

    public function show(string $id): View
    {
        $agendamentos=Agendamentos::findOrFail($id);
        return view('consulta', compact('agendamentos'));
    }

    public function store(Request $request)
    {
        $agendamentos = new Agendamentos();//instancia o model
        $agendamentos->name =  $request->input('txtNome');//pega o data e transfere pro atributo do model respectivo
        $agendamentos->telefone = $request->input('txtTelefone');
        $agendamentos->observacao = $request->input('txtObservacao');
        $agendamentos->origem = $request->input('txtOrigem');
        $agendamentos->data_contato = $request->input('txtDataContato');

        $agendamentos->save();//salva todos os dados colocado no campo e envia pro banco

        return redirect()->route('consulta.index');//redireciona para o nome do resource
    }
}
