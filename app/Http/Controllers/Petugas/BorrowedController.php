<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Borrowed;

class BorrowedController extends Controller
{
    public function index(Request $request){
        $query = $request->input('query');
        $data = Borrowed::where('borrow_code', 'LIKE', "%$query%")
        ->latest()
        ->paginate(12);
        $count = Borrowed::count();
        return view('petugas.borrowed.borrowed',[
            'datas' => $data,
            'counts' => $count
        ]
    );
    }

    public function edit($id){
    $borrowed = Borrowed::find($id);

    if (!$borrowed) {
        return redirect()->route('staff.borrowed.index')
            ->with('error', 'Data peminjaman tidak ditemukan');
    }

        return view('petugas.borrowed.edit', compact('borrowed'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'status' => 'required|in:Dipinjam,Dikembalikan,Terlambat,Hilang,Rusak',
        ]);

        $borrowed = Borrowed::find($id);

        if (!$borrowed) {
            return redirect()->route('staff.borrowed.index')
                ->with('error', 'Data peminjaman tidak ditemukan');
        }

        $borrowed->status = $request->status;
        $borrowed->save();

        return redirect()->route('staff.borrowed.index')
            ->with('success', 'Status peminjaman berhasil diperbarui');
      }


     public function destroy($id){
        $data = Borrowed::find($id);
        if (!$data) {
            return redirect()->route('staff.borrowed.index')
                ->with('error', 'Data tidak ditemukan');
        }
        $data->delete();
        return redirect()->route('staff.borrowed.index')
            ->with('success', 'Data berhasil dihapus');
}
}
