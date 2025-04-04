<?php

include_once 'Sample_Header.php';

// Template processor instance creation
echo date('H:i:s') , ' Creating new TemplateProcessor instance...' , EOL;
$templateProcessor = new PhpOffice\PhpWord\TemplateProcessor(__DIR__ . '/resources/Sample_23_TemplateBlock.docx');

// Will clone everything between ${tag} and ${/tag}, the number of times. By default, 1.
$templateProcessor->cloneBlock('CLONEME', 3);

// Everything between ${tag} and ${/tag}, will be deleted/erased.
$templateProcessor->deleteBlock('DELETEME');

echo date('H:i:s'), ' Saving the result document...', EOL;
$templateProcessor->saveAs(__DIR__ . '/results/Sample_23_TemplateBlock.docx');

echo getEndingNotes(['Word2007' => 'docx'], __DIR__ . '/results/Sample_23_TemplateBlock.docx');
if (!CLI) {
    include_once 'Sample_Footer.php';
}
