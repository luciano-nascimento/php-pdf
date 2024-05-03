<?php

namespace App;

// reference the Dompdf namespace
use Dompdf\Dompdf;

class Pdf
{

    public function built() : void
    {
        
        // // instantiate and use the dompdf class
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml('hello world');

        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'landscape');

        // // Render the HTML as PDF
        // $dompdf->render();

        // // Output the generated PDF to Browser
        // $dompdf->stream(); 

        $html = <<<HTML
            <head>
            <style>
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                    text-align:center;
                }
            </style>
            </head>

            <div style="width:100%">

                <h1 style="text-align:center;">Molestie nunc non blandit massa</h1>

                <p style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div>
                    <table style="width: 100%; border: 1px solid black;border-collapse: collapse;">
                    <tr>
                        <th>Code</th>
                        <th>Contact</th> 
                        <th>Country</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>fugiat</td> 
                        <td>Germany</td>
                    </tr>
                    </table>
                </div>
                <p style="margin-top: 100px;text-align:right">Date: 01/05/2024</p>
            </div>
            
            

        HTML;

        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents('MyDocument.pdf', $output);
        }
}
