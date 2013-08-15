<?php

class HomepagePresenter extends BasePresenter
{
    // absolute path to XLS file
    const FILE_PATH = "http://www.vzp.cz/uploads/document/nad-1000000-1.xls";

    /** @var DebtorRepository */
    private $debtors;

    // dir path for a downloaded file
    private $fileDir = "/download/";

    // name of a downloaded file
    private $fileName = "file.xls";

    public function inject(DebtorRepository $debtors)
    {
        $this->debtors = $debtors;
    }

    protected function startup()
    {
        parent::startup();

        $this->fileDir = $this->context->parameters['wwwDir'] . $this->fileDir;
    }

    public function renderDefault()
    {
        $this->template->debtors = $this->debtors->findAll();
    }

    public function actionParse()
    {
        // download and save XLS file
        $this->saveFile();

        // parse downloaded XLS file
        $parser = new DebtorFileParser();
        $debtors = $parser->setFile($this->fileDir . $this->fileName)
               ->setStartingRow(5)
               ->doMagic();

        //dump($debtors);

        // clear DB table
        $this->debtors->clear();

        // insert new data into the DB
        foreach($debtors as $debtor)
            $this->debtors->insert($debtor);
    }

    private function saveFile()
    {
        // TODO: for best check if file exists
        file_put_contents($this->fileDir . $this->fileName, fopen(static::FILE_PATH, 'r'));
    }

}
