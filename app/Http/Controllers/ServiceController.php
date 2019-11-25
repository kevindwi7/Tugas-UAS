<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function destroy($id)
    {
        $post= shoeru::find($id);
        $post->delete();

        return redirect('/siswas')->with('status','Data telah berhasil di hapus!!');
    }
}
