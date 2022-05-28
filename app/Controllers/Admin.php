<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        if (isset($_POST['SaveAsPdf'])) return $this->saveAsPdf();
        $this->admin_session_check();
        return view('admin-home');
    }

    public function produk()
    {
        $this->admin_session_check();
        return view('admin-produk');
    }

    private function saveAsPdf()
    {
        $data = [
            'title' => 'Laporan Penjualan',
            'data' => model('Penjualan')->getBetweenDate(),
        ];
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml(view('pdf-view', $data));
        $dompdf->setPaper('A4');
        $dompdf->render();
        $dompdf->stream('Laporan Penjualan.pdf');
    }

    private function admin_session_check()
    {
        if (!session()->has('admin_login')) return redirect()->to('/Login');
    }
}
