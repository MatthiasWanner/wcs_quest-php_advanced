<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Learn\UploadForm;

$uploadForm = new UploadForm();

$uploadForm->getUploadForm();
