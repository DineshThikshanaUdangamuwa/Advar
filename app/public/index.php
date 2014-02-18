<?php
namespace Advar\Test;

define('ROOT', (dirname(__DIR__)));
require ROOT.'/vendor/autoload.php';

$templateDirs = array((dirname(__DIR__)).'/src/Advar/views', (dirname(__DIR__)).'/src/Advar/Test/templates');
$loader = new \Twig_Loader_Filesystem($templateDirs);
$twig = new \Twig_Environment($loader);

//data array for Audit twig template
$dataSet = array(
    'nemo_page'=>'Audit', 
    'audits'=>'',
    'audit_filter'=>array(
        'entity_type'=>'',
        'action_type'=>'',
        'entity_id'=>'',
        'before'=>'',
        'after'=>''
    ),
    'entity_types'=> array("establishment", "assessment"),
    'action_types'=> array("created", "modified"),
    'search_url'=>'http://localhost/nemo/NEMO/Test/AuditTwigTest.php',
    'audit_data_get_url' =>'http://localhost/nemo/NEMO/Test/AuditTwigTest.php'
);
echo $twig->render('Loader.html.twig',$dataSet);