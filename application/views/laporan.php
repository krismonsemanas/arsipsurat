<?php	
	$pdf = new FPDF('l','mm','A4');
	// membuat halaman baru
	$pdf->addPage();
	// setting font
	$pdf->setFont('arial','B',16);
	$pdf->Cell(276,5,'SISTEM PENGARSIPAN SURAT ONLINE',0,0,'C');
	$pdf->Ln();
	$pdf->setFont('arial','B',12);
	$pdf->Cell(276,10,'LAPORAN SURAT',0,0,'C');
	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,10,'No. ',1,0,'L');
	$pdf->Cell(40,10,'No Surat',1,0,'L');
	$pdf->Cell(40,10,'Hal',1,0,'L');
	$pdf->Cell(40,10,'Lampiran',1,0,'L');
	$pdf->Cell(60,10,'Tujuan',1,0,'L');
	$pdf->Cell(36,10,'Jenis Surat',1,0,'L');
	$pdf->Cell(40,10,'Tanggal',1,0,'L');
	$no = 0;
	foreach ($data as $rows) {
		$no++;
		$pdf->Ln();
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(20,10,$no.".",1,0,'L');
		$pdf->Cell(40,10,$rows['no_surat'],1,0,'L');
		$pdf->Cell(40,10,$rows['hal'],1,0,'L');
		$pdf->Cell(40,10,$rows['lampiran'],1,0,'L');
		$pdf->Cell(60,10,$rows['tujuan'],1,0,'L');
		$pdf->Cell(36,10,$rows['jenis_surat'],1,0,'L');
		$pdf->Cell(40,10,ind_for(date($rows['tanggal'])),1,0,'L');
	}
	$pdf->Output();
	function ind_for($tgl){
        $bulan = array(
            1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecah = explode('-', $tgl);
            return $pecah[2].' '.$bulan[(int)$pecah[1]].' '.$pecah[0];
        }
?>