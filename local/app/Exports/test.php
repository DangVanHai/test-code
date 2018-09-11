<?php 
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\model\backend\CaloteryModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use \Maatwebsite\Excel\Sheet;
use \Maatwebsite\Excel\Writer;
class test implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
	
    private $data;
 
    public function __construct($data)
    {
        $this->data = $data;
    }
     public function collection()
    {
        return collect($this->data);
    }

	public function headings(): array
	{
		return [
			'#',
			'Name',
			'Email',
			'Created at',
		];
	}

    // ...

    /**
     * @return array
     */
    public function registerEvents(): array
    {
    	Writer::macro('setCreator', function (Writer $writer, string $creator) {
    		$writer->getDelegate()->getProperties()->setCreator($creator);
    	});
    	Sheet::macro('setOrientation', function (Sheet $sheet, $orientation) {
    		$sheet->getDelegate()->getPageSetup()->setOrientation($orientation);
    	});
    	Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
    		$sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
    	});
    	return [
    		
    		BeforeExport::class  => function(BeforeExport $event) {
    			$event->writer->setCreator("Maarten Balliauw")
    			->setLastModifiedBy("Maarten Balliauw")
    			->setTitle("Office 2007 XLSX Test Document")
    			->setSubject("Office 2007 XLSX Test Document")
    			->setDescription(
    				"Test document for Office 2007 XLSX, generated using PHP classes."
    			)
    			->setKeywords("office 2007 openxml php")
    			->setCategory("Test result file");
    		},
    		AfterSheet::class    => function(AfterSheet $event) {
    			 $cellRange = 'A1:W1'; // All headers
    			 $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
    			 $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

    			 $event->sheet->styleCells(
    			 	'A1:F9',
    			 	[
    			 		'borders' => [
    			 			'outline' => [
    			 				'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
    			 				'color' => ['argb' => 'FFFF0000'],
    			 			],
    			 		]
    			 	]
    			 );
    			},
    		];
    	}


    }
    ?>