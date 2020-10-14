<?php 

require("fpdf/fpdf.php");
require("00-config.php");

class TablePDF extends FPDF
{
	function buildTable($header, $data)
	{
		$this->setFillColor(255, 0, 0);
		$this->setTextColor(255);
		$this->setDrawColor(128,0,0);
		$this->setLineWidth(0.3);
		$this->setFont('','B');

		//Header
		//make an array for the column widths

		$widths = array(85, 40, 15);
		//send the headers to the PDF document

		for($i = 0; $i < count($header); $i++){
			$this->cell($widths[$i], 7, $header[$i], 1, 0, 'C', 1);
		}

		$this->ln();

		//Color and font restoration
		$this->setFillColor(175);
		$this->setTextColor(0);
		$this->setFont('');

		//Now spool out the data from the $data array
		$fill = 0;
		$url = "http://www.oreilly.com";

		foreach($data as $row)
		{
			$this->cell($widths[0], 6, $row[0], 'LR', 0,'L', $fill);

			//set colors to show a URL style link
			$this->setTextColor(0,0,255);
			$this->setFont('', 'U');
			$this->cell($widths[1], 6, $row[1], 'LR', 0, 'L', $fill, $url);

			//restore normal color settings
			$this->setTextColor(0);
			$this->setFont('');
			$this->cell($widths[2], 6, $row[2], 'LR', 0, 'C', $fill);

			$this->ln();

			$fill = ($fill) ? 0 : 1;


		}

		$this->cell(array_sum($widths), 0, '', 'T');

	}
}


//Connect to database
$dbconn = new mysqli('localhost', $username, $password, 'testdb');
$sql = "SELECT * FROM books ORDER BY title";
$result = $dbconn->query($sql);


//build the data array from the database records

while($row = $result->fetch_assoc()){
	$data[] = array($row['title'], $row['ISBN'], $row['pub_year']);

}

//Start and build the PDF document
$pdf = new TablePDF();

//Column title
$header = array("Title", "ISBN", "Year");
$pdf->setFont("Arial", '', 14);

$pdf->addPage();
$pdf->buildTable($header, $data);

$pdf->output();





 ?>