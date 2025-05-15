<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\UpdateSchemaLocation;

use function Laravel\Prompts\select;

class ToDoList extends Controller
{
    public function index()
    {
        $task = Hari::all();
        return view('templete-home',
['task' => $task],);
    }

    public function welcome(){
        return view('welcome');
    

    }

    public function create(){
        return view('tambah');
    }

    public function store(Request $request){
        $validasi = $request ->validate([
            'task' => 'required|min:5|max:255',
        ]);

        Hari::create([
            'task' => $validasi['task'],
            'tanggal'=>now(),
        ]);


        return redirect()->route('home')->with('success', 'Task berhasil ditambahkan');
    }

    
      public function destroy($id)
{
      $task = Hari::findOrFail($id); // Cari task berdasarkan ID
      $task->delete(); // Hapus task
    return redirect()->route('home')->with('success', 'Task berhasil dihapus');
}

public function edit(Request $request )
{
    $task = Hari::find($request->id);
    return view('edit', ['task' => $task]);
   


}

public function update(Request $request)
{
    $validasi = $request->validate([
        'task' => 'required|min:5|max:255',
    ]);

    $task = Hari::find($request->id);
    $task->update([
        'task' => $validasi['task'],
        'tanggal'=>now(),
    ]);

    return redirect()->route('home')->with('success', 'Task berhasil diupdate');




}
}
