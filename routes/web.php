<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/enviar' , function(Illuminate\Http\Request $request){
    
    $qualquercoisa= new App\Models\qualquercoisa();
    $qualquercoisa->Codigo=$request->get('codigo');
    $qualquercoisa->Nome=$request->get('nome') ;
    $qualquercoisa->Categoria=$request->get('categoria') ;
    $qualquercoisa->Preco=$request->get('Preco') ;
    $qualquercoisa->Descricao=$request->get('descricao') ;
    
    $qualquercoisa->save();
    echo 'Eviado com sucesso',$qualquercoisa->id;
});
 route::get('/lista',function(){
    return view('lista',array('qualquercoisa'=>App\Models\qualquercoisa::all()));
 });
