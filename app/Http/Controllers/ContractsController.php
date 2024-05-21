<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
class ContractsController extends Controller
{
    public function employment()
    {
        $pdfContent = '<table style="border: 1px solid black; font-size: 11px; width: 100%; border-collapse: collapse;">
            <tr>
                <td style="border: 1px solid black; width: 50%;">
                    <table>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>ЕҢБЕК ШАРТЫНА</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>ҚОСЫМША КЕЛІСІМ № __</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">Алматы қ. _ ____ 20__ ж</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">Осы № __ қосымша келісім (бұдан әрі - № _ Келісім) "Кенжеғали Сағадиев атындағы Халықаралық Бизнес Университеті" ЖШС ("Университет") атынан Жарғы негізінде әрекет ететін Ректор А. М. Махметова тұлғасында бұдан әрі "жұмыс беруші" деп аталатын бір жағынан және азамат</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">________________________</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">(қызметкердің аты-жөні)</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">бұдан әрі "қызметкер" деп аталатын екінші жағынан бұдан әрі бірлесіп аталған Тараптар ал жоғарыда көрсетілгендей жеке немесе Тарап арасында № _ _ _ _ _ _ "_" ___ 20__ г. еңбек шартының ажырамас бөлігі болып табылатын (бұдан әрі-еңбек шарты) осы №___ _ _ _ ____.20___ж. қосымша келісімді төмендегілер туралы жасалды:</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;"><b>1. 5.1-тармақ. Еңбек шартын өзгерту және мынадай редакцияда жазылсын:</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">«5.1. Осы еңбек шарты белгілі бір мерзімге жасалған _____ 20__ ж-дан _____ 20_ ж.-дейін»</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">2. Осы Келісімде әсер етпеген еңбек шартының талаптары өзгеріссіз қалады.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">3. Осы Келісім еңбек шартының ажырамас бөлігі болып табылады.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">4. Осы Келісім Тараптардың әрқайсысы үшін 2 данада жасалды және бірдей заңды күші бар.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">5. Осы Келісім жаңа мазмұндағы Тараптардың жазбаша келісімін жасасу жолымен өзгертілуі тоқтатылуы және толықтырылуы мүмкін.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">6. Тараптардың қолдары</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;"><b>Жұмыс беруші:</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>«Кенжеғали Сағадиев атындағы Халықаралық Бизнес Университеті» ЖШС</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">Ректор</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">_____ Махметова А.М.</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">(қолы)</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>Жұмысшы:____________</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">(қызметкердің А.Т.Ә.)</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">______</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">(қолы)</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">__ жылғы № б/н. _____.20_ ж Қосымша келісімнің екінші данасын алдым ________/қызметкердің қолы/</td>
                        </tr>
                    </table>
                </td>
                <td style="border: 1px solid black; width: 50%;">
                    <table>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>ДОПОЛНИТЕЛЬНОЕ СОГЛАШЕНИЕ</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>к ТРУДОВОМУ ДОГОВОРУ № __</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">от «_» ___ 20___ г.</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">г. Алматы _ ____ 20__ г.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">Настоящее дополнительное соглашение №__ заключено между ТОО «Университет Международного Бизнеса имени Кенжегали Сагадиева» («Университет») в лице Ректора Махметовой А. М. действующего на основании Устава именуемый в дальнейшем «Работодатель» с одной стороны и гражданином</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">___________________________</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">(ф.и.о. работника)</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">именуемым (-ой) в дальнейшем «Работник» с другой стороны далее совместно именуемые Стороны а по отдельности как указано выше или Сторона заключили настоящее дополнительное Соглашение №_ от ___.____.20__г. являющееся неотъемлемой частью трудового договору №_ от «_» ___ 20___ г. (далее – трудовой договор) о нижеследующим:</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;"><b>1. Пункт 5.1. Трудового Договора изменить и изложить в следующей редакции:</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">«5.1. Настоящий трудовой договор заключен на определенный срок с _____ 20__ г. по _____ 20_ г.»</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">2. Условия Трудового Договора не затронутые настоящим Соглашением остаются неизменными.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">3. Настоящее Соглашение являются неотъемлемой частью Трудового Договора.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">4. Настоящее Соглашение составлено в 2-х экземплярах для каждой из сторон и имеет одинаковую юридическую силу.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">5. Настоящее Соглашение может быть изменено прекращено и дополнено путем заключения письменного соглашения сторон нового содержания.</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">6. Подписи сторон</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>Работодатель:</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>ТОО «Университет Международного Бизнеса имени Кенжегали Сагадиева»</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">Ректор</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">______ Махметова А. М.</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">(подпись)</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;"><b>Работник: ____________</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">(ф.и.о. работника)</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">______</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 5px; padding-right: 5px;">(подпись работника)</td>
                        </tr>
                        <tr>
                            <td style="text-align: justify; padding-left: 5px; padding-right: 5px;">Второй экземпляр Доп. Соглашения №_ от __. _____.20__г. получил (-а) ________/подпись работника/</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="page-break-before: always;"></div>s
';

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 20,
            'margin_right' => 15,
            'margin_top' => 5,
            'margin_bottom' => 5,
            'margin_header' => 0,
            'margin_footer' => 0,
            'default_font_size' => 11,
            'default_font' => 'DejaVuSerifCondensed',
            'tempDir' => sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mpdf'
        ]);

        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($pdfContent);

        // Сохранение PDF-файла во временную директорию (для примера)
        $tempFilePath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'example.pdf';
        $mpdf->Output($tempFilePath, 'F');

        return response()->file($tempFilePath);
    }
}
