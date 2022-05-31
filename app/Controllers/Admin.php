<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $this->admin_session_check();
        return view('admin-home');
    }

    public function produk()
    {
        $this->admin_session_check();
        return view('admin-produk');
    }

    public function pdf()
    {
        return view('laporan-pdf');
    }

    public function saveAsPdf()
    {
        $data['data'] = model('Penjualan')->getAll();
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml(view('laporan-pdf', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Laporan Penjualan.pdf');
    }

    private function admin_session_check()
    {
        if (!session()->has('admin_login')) return redirect()->to('/Login');
    }
}
