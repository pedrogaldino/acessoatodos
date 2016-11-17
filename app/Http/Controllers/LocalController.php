<?php namespace App\Http\Controllers;

use App\Models\Acessibilidade;
use Illuminate\Http\Request;

class LocalController extends Controller
{

    public function visualizar($localId)
    {
        $acessibilidade = Acessibilidade::findOrFail($localId);

        return response()->json($acessibilidade->toArray());
    }

    public function atualizar($localId, Request $request)
    {
        $acessibilidade = Acessibilidade::findOrFail($localId);

        $acessibilidade->fill($request->only(['acessibilidade']));
        $acessibilidade->save();

        return response()->json([
            'id' => $localId
        ]);
    }

}