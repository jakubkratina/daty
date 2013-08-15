<?php

class DebtorFileParser extends \Nette\Object
{
    /** @var PHPExcel excel object */
    private $excel;

    // file path
    private $file;

    // specifies where is first the data row
    private $row;

    /**
     * And that's how magic works
     * @return array parsed data
     */
    public function doMagic()
    {
        $this->excel = PHPExcel_IOFactory::load($this->file);

        $dataArr = array();

        /** @var PHPExcel_Worksheet_RowIterator $row */
        foreach($this->excel->getActiveSheet()->getRowIterator($this->row) as $rowNumber => $row)
        {
            $dataArr[] = array(
                'district_number' => (int)$this->getCell($rowNumber, 'A'),
                'district_name' => $this->getCell($rowNumber, 'B'),
                'pid' => $this->getCell($rowNumber, 'C'),
                'name' => $this->getCell($rowNumber, 'D'),
                'address' => $this->getCell($rowNumber, 'E'),
                'premium' => (float)$this->getCell($rowNumber, 'F'),
                'penalties' => (float)$this->getCell($rowNumber, 'G'),
                'debt' => (float)$this->getCell($rowNumber, 'H'),
                'created' => new \Nette\DateTime()
            );
        }

        return $dataArr;
    }

    /**
     * Return value of specified cell
     * TODO: should be better way
     * @param int $rowNumber
     * @param string $cellLetter
     * @return PHPExcel_Cell
     */
    private function getCell($rowNumber, $cellLetter)
    {
        return trim($this->excel->getActiveSheet()->getCell((string)$cellLetter . (int)$rowNumber)->getValue());
    }

    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    public function setStartingRow($row)
    {
        $this->row = $row;
        return $this;
    }

}